<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\loginrequest;
use Illuminate\Support\Facades\DB;
use App\account;
use App\product;
use App\product_detail;
use App\order;

class adminController extends Controller
{
    public function index()
    {
        if (!session()->exists('Type')) {
            return redirect('admin/login');
        }
        $prod['count'] = order::count();

        return view('startmin-master.index',$prod);
    }
    public function Getlogin()
    {
        return view('startmin-master.login');
    }
    public function Postlogin(loginrequest $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['username' => $email, 'password' => $password], true)) {
            $rs = account::where('username', $email)->get();
            foreach ($rs as $value) {
                $type = $value->Type;
                $ID = $value->ID;
                $Name = $value->Name;
            }
            if ($type == 'SHOP') {
                session([
                    'ID' => $ID,
                    'Type'=> $type,
                    'Name'=> $Name,
                ]);

                return redirect('admin/');
                // echo  session()->get('ID') . "-" . $type;
            } else {
                return redirect()->back()->with('thongbao', 'Chỉ có chủ shop có quyền đăng nhập');
            }
        } else {
            return redirect()->back()->with('thongbao', 'Tài khoản hoặc mật khảu không chính xác');
        }
    }
    public function Getform()
    {
        if (!session()->exists('Type')) {
            return redirect('admin/login');
        }
        return view('startmin-master.forms');
    }
    public function postproduct(Request $request)
    {

        $t = product::where('ProductName', $request->ProductName)->get();
        if ($t->count() == 0) {
            $co = product::count();
            $prod = new product;
            $prod->ProductName = $request->ProductName;
            $prod->Description = $request->Description;
            $prod->Type = 'normal';
            $prod->IDShop = 2;
            $prod->Img = '/Wshop2/local/public/ProductImg/category_' . ($co + 1) . '.png';
            $prod->save();
            adminController::addPDT($request);

            if ($request->hasFile('Img')) {

                adminController::addFile($request->file('Img'));
            } else {
                return redirect()->back()->with('thongbao', 'không tìm thấy file ảnh');
            }
        }
        return redirect()->back()->with('thongbao', 'Thêm mới thành công');
    }
    public function addFile($file)
    {
        $co = product::count();
        $file->move(
            'local/public/ProductImg', //nơi cần lưu
            'category_' . ($co + 1) . '.png' //tên file
        );
    }
    public function addPDT($request)
    {
        $t2 = product::where('ProductName', $request->ProductName)->get();
        foreach ($t2 as $key) {
            $ID = $key->ID;
        }
        echo $ID;
        $proddt = new product_detail;
        $proddt->ID = $ID;
        $proddt->Size = $request->Size;
        $proddt->Color = "red";
        $proddt->price = $request->price;
        $proddt->Count = $request->Count;
        $proddt->save();
    }
    public function Gettables()
    {
        if (!session()->exists('Type')) {
            return redirect('admin/login');
        }
        $prod['product'] = DB::table('product')->leftJoin('product_detail', 'product_detail.ID', '=', 'product.ID')->paginate(12);
        return view('startmin-master.tables', $prod);
    }
    public function Gettables2()
    {
        if (!session()->exists('Type')) {
            return redirect('admin/login');
        }
        $prod['order'] = order::paginate(12);
        //$prod['product'] = DB::table('product')->leftJoin('product_detail', 'product_detail.ID', '=', 'product.ID')->paginate(12);
        return view('startmin-master.tables2', $prod);
    }
    public function blank()
    {
        if (!session()->exists('Type')) {
            return redirect('admin/login');
        }
        return view('startmin-master.blank');
    }
    public function buttons()
    {
        if (!session()->exists('Type')) {
            return redirect('admin/login');
        }
        return view('startmin-master.buttons');
    }
    public function flot()
    {
        if (!session()->exists('Type')) {
            return redirect('admin/login');
        }
        return view('startmin-master.flot');
    }
    public function grid()
    {
        if (!session()->exists('Type')) {
            return redirect('admin/login');
        }
        return view('startmin-master.grid');
    }
    public function icons()
    {
        if (!session()->exists('Type')) {
            return redirect('admin/login');
        }
        return view('startmin-master.icons');
    }
    public function morris()
    {
        if (!session()->exists('Type')) {
            return redirect('admin/login');
        }
        return view('startmin-master.morris');
    }
    public function notifications()
    {
        if (!session()->exists('Type')) {
            return redirect('admin/login');
        }
        return view('startmin-master.notifications');
    }
    public function panelwells()
    {
        if (!session()->exists('Type')) {
            return redirect('admin/login');
        }
        return view('startmin-master.panels-wells');
    }
    public function typography()
    {
        if (!session()->exists('Type')) {
            return redirect('admin/login');
        }
        return view('startmin-master.typography');
    }
}
