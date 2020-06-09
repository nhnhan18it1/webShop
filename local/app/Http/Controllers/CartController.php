<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\order;
use Illuminate\Database\Eloquent\JsonEncodingException;

class CartController extends Controller
{
    public function index()
    {
        if (session()->exists('ID')) {
            $prod['order']=order::Where('IDND',session()->get('ID'))->get();
            return view('winter.cart',$prod);
        }

        else {
            return view('winter.cart');
        }

    }
    public function Addtocart(Request $request)
    {
        $data = $request->input('product');
        $cart = json_decode($data);

        if (session()->exists('cart')) {

            if (!CartController::CheckCart($cart->IDP,$cart->Count)) {
                session()->push('cart', $cart);
            }


            foreach (session()->get('cart') as $value) {
                $list[]=CartController::GetIn4InCart($value->IDP,$value->Count);
            }
        } else {
            $ps[] = NULL;
            $ps = $cart;
            session()->push('cart', $ps);

            foreach (session()->get('cart') as $value) {
                $list[]=CartController::GetIn4InCart($value->IDP,$value->Count);
            }
        }
        //echo json_encode(session()->get('cart'));
        echo json_encode($list,TRUE);
        //echo json_encode($list);
        //echo json_encode($list);
    }
    public function clearcart()
    {
        session()->forget('cart');
    }
    public function CheckCart($ID,$count)
    {
        foreach (session()->get('cart') as $value) {
            if ($value->IDP==$ID) {
                $value->Count=$value->Count+$count;
                return true;
            }
        }
        return false;
    }
    public function GetIn4InCart($Id,$Count)
     {
        $re=product::Where('ID',$Id)->get();
        foreach ($re as $item) {
            // echo $item->ProductName."<br>";
            foreach ($item->product_detail as $it2) {
                // echo $it2->Size."<br>";
                if ($it2->Size=="L") {
                    $sp= new Cartx(
                        $item->ID,
                        $item->ProductName,
                        $item->Description,
                        $item->Type,
                        $item->Img,
                        $item->IDShop,
                        $item->created_at,
                        $item->updated_at,
                        $Count,
                        $it2->price,
                        $it2->Size
                    );
                    return $sp;
                }



            }
        }

        //$sp = new Cartx();
    }
}
class Cartx
{
    public $ID;
    public $ProductName;
    public $Description;
    public $Type;
    public $Img;
    public $IDShop;
    public $created_at;
    public $updated_at;
    public $count;
    public $price;
    public $Size;
    public function __construct(
        $iD,
        $productName,
        $description,
        $type,
        $img,
        $iDShop,
        $Created_at,
        $Updated_at,
        $Count,
        $Price,
        $size
    ) {
        $this->ID = $iD;
        $this->ProductName = $productName;
        $this->Description = $description;
        $this->Type = $type;
        $this->Img = $img;
        $this->IDShop = $iDShop;
        $this->created_at = $Created_at;
        $this->updated_at = $Updated_at;
        $this->count = $Count;
        $this->price = $Price;
        $this->Size=$size;
    }
}
