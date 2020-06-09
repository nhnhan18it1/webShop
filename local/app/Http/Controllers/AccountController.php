<?php

namespace App\Http\Controllers;

use App\account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// namespace App\Http\Controllers\Auth;

class AccountController extends Controller
{
    public function GetLogin()
    {
        return view('Account.Login');
    }
    public function GetSignup()
    {
        return view('Account.SignUp');
    }
    public function Logout()
    {
        session()->forget('ID');
        return redirect('index');
    }
    public function LoginWithGoogle(Request $request)
    {
        $data= $request->input('data1');

        $google=json_decode($data);
        $add= \App\account::where('Username',$google->ID);

        if ($add->count()==0) {
            $gacc=new \App\account;
            $gacc->Username=$google->ID;
            $gacc->Name=$google->Name;
            $gacc->Email=$google->Email;
            $gacc->Type="ND";
            $gacc->save();
            echo  "Add to system";

            // redirect()->route("index");
        }
        else {
            if ($google->DCL) {
                $tk=\App\account::where('Username',$google->ID)->get();
            foreach ($tk as $value) {
                session(['ID'=>$value->ID]);

            }

            echo  "gotohome";
            }

            // redirect()->route("index");
        }


    }
    public function postSignup(Request $request)
    {
        $kt=account::where('username',$request->username)->get();
        if ($kt->count()==0) {
            $acc=new account;
            $acc->username=$request->username;
            $acc->password=bcrypt($request->password) ;
            $acc->Name=$request->Name;
            $acc->Dob=$request->Dob;
            $acc->Phone=$request->Phone;
            $acc->Addresss=$request->Addresss;
            $acc->Email=$request->Email;
            $acc->Type='ND';
            $acc->save();
            return redirect("/");
        }
        else {
            return redirect()->back()->with('thongbao','Tài khoản đã tồn tại');
        }
    }
    public function postLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['username' => $email, 'password' => $password], true)) {
            $rs = account::where('username', $email)->get();
            foreach ($rs as $value) {
                $type = $value->Type;
                $ID = $value->ID;
            }
            if ($type == 'ND') {
                session('ID', $ID);

                return redirect('');
            } else {
                return redirect()->back()->with('thongbao', 'Loại tài khoản này không thể đăng nhập ở đây');
            }
        } else {
            return redirect()->back()->with('thongbao', 'Tài khoản hoặc mật khảu không chính xác');
        }
    }

}
