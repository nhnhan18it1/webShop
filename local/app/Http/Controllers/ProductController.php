<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\account;
use App\order;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\json_encode;

// use App\Http\Controllers\CartController;

class ProductController extends Controller
{
    public function AddProduct(Request $request)
    { }
    public function GetProduct()

    {
            // product::select("SELECT * FROM product,product_detail WHERE product.ID=product_detail.ID AND product_detail.Size='L' ")
        ;

        $prod['product'] = DB::table('product')->leftJoin('product_detail', 'product_detail.ID', '=', 'product.ID')->where('product_detail.Size', 'S')->paginate(3);
        if (session()->exists('cart')) {
            foreach (session()->get('cart') as $value) {
                $list[] = ProductController::GetIn4InCart($value->IDP, $value->Count);
            }
            $prod['list'] = $list;
        } else {
            $prod['list'] = null;
        }




        return view('winter.category', $prod);
    }
    public function GetProduct1()
    {
        $prod['product'] = DB::table('product')->leftJoin('product_detail', 'product_detail.ID', '=', 'product.ID')->where('Type','special')->where('product_detail.Size', 'S')->paginate(3);
        if (session()->exists('cart')) {
            foreach (session()->get('cart') as $value) {
                $list[] = ProductController::GetIn4InCart($value->IDP, $value->Count);
            }
            $prod['list'] = $list;
        } else {
            $prod['list'] = null;
        }




        return view('winter.category', $prod);
    }
    public function GetProduct2()
    {
        $prod['product'] = DB::table('product')->leftJoin('product_detail', 'product_detail.ID', '=', 'product.ID')->where('Type','normal')->where('product_detail.Size', 'S')->paginate(3);
        if (session()->exists('cart')) {
            foreach (session()->get('cart') as $value) {
                $list[] = ProductController::GetIn4InCart($value->IDP, $value->Count);
            }
            $prod['list'] = $list;
        } else {
            $prod['list'] = null;
        }




        return view('winter.category', $prod);
    }
    public function LoadProduct()
    {
        if (session()->exists('cart')) {
            foreach (session()->get('cart') as $value) {
                $list[] = ProductController::GetIn4InCart($value->IDP, $value->Count);
            }
            echo json_encode($list);
        } else {
            echo "[{}]";
        }
    }
    public function TinhTien()
    {
        if (session()->exists('cart')) {
            if (session()->exists('ID')) {
                foreach (session()->get('cart') as $value) {
                    $list = ProductController::GetIn4InCart($value->IDP, $value->Count);
                    $order = new order;
                    $order->IDSP=$list->ID;
                    $order->IDND=session()->get('ID');
                    $order->Count=$list->count;
                    $order->Price=$list->price;
                    $order->save();


                }
                session()->forget('cart');
                return redirect('/cart/');
            }
            else {
                return redirect('account/login');
            }

        } else {
            return redirect('');
        }
    }

    public function In4KH()
    {
        if (session()->exists('ID')) {
            $prod = account::where('ID', session()->get('ID'))->get();
            echo json_encode($prod);
        } else {
            $arr = array("ID" => 0);
            echo json_encode($arr);
        }
    }
    public function PDetail($id)
    {
        $sp['sps'] = ProductController::GetIn4InCart($id, 1);
        return view('winter.single-product', $sp);
    }
    public function GetIn4InCart($Id, $Count)
    {
        $re = product::Where('ID', $Id)->get();
        foreach ($re as $item) {
            // echo $item->ProductName."<br>";
            foreach ($item->product_detail as $it2) {
                // echo $it2->Size."<br>";
                if ($it2->Size == "S") {
                    $sp = new Cartx(
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
        $this->Size = $size;
    }
}
