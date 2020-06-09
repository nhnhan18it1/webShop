<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;
use App\product;
use App\product_detail;
use App\account;

Route::get('', function () {
    return view('winter.index');
});

Route::get('index', function () {
    return view('winter.index');
});

Route::group(['prefix' => 'cart'], function() {
    Route::get('', 'CartController@index');
    Route::get('addcart', 'CartController@Addtocart');
    Route::get('clearcart', 'CartController@clearcart');
    Route::get('tinhtien', 'ProductController@TinhTien');
});

Route::get('LoadProduct', 'ProductController@LoadProduct');
Route::get('about', function () {
    return view('winter.about');
});
Route::get('blog', function () {
    return view('winter.blog');
});
Route::get('category', "ProductController@GetProduct");
Route::get('category1', "ProductController@GetProduct1");
Route::get('category2', "ProductController@GetProduct2");
Route::get('In4KH', "ProductController@In4KH");
Route::group(['prefix' => 'addDB'], function () {
    Route::get('AddTT', function () {
        for ($i = 1; $i <= 10; $i++) {
            $prd = new product;
            $prd->ProductName = 'test1' . $i;
            $prd->Description = "asasd";
            $prd->Img = "/Wshop/local/public/ProductImg/category_" . $i . ".png";
            $prd->Type = "normal";
            $prd->IDShop = 2;
            $prd->save();
        }
    });
    Route::get('SPDT', function () {
        $prod = product::all();
        foreach ($prod as $value) {
            for ($i = 1; $i <= 4; $i++) {
                switch ($i) {
                    case 1:
                        $size = "S";
                        break;
                    case 2:
                        $size = "M";
                        break;
                    case 3:
                        $size = "L";
                        break;
                    default:
                    $size = "XL";
                        break;
                }
                $pt = new product_detail;
                $pt->ID = $value->ID;
                $pt->color="red";
                $pt->Count=15;
                $pt->Size=$size;
                $pt->save();
            }
        }
        dd($prod);
    });
});

Route::get('checkout', function () {
    return view('winter.checkout');
});
Route::get('confirmation', function () {
    return view('winter.confirmation');
});
Route::get('contact', function () {
    return view('winter.contact');
});
Route::get('elements', function () {
    return view('winter.elements');
});
Route::get('login', function () {
    return view('winter.login');
});
Route::get('single-blog', function () {
    return view('winter.single-blog');
});
Route::get('single-product/{id}', "ProductController@PDetail");
Route::get('tracking', function () {
    return view('winter.tracking');
});
Route::get('master', function () {
    return view('winter.master');
});

Route::group(['prefix' => 'account'], function () {
    Route::get('', "AccountController@GetLogin");

    Route::group(['prefix' => 'login'], function () {
        Route::get('', 'AccountController@GetLogin');
        Route::get('google', 'AccountController@LoginWithGoogle');
    });


    Route::get('xx', function () {
        dd("xx");
    });
    Route::get('signup', 'AccountController@GetSignup');
    Route::get('logout', 'AccountController@Logout');

    Route::post('postSignup','AccountController@postSignup' );

    Route::post('postLogin', 'AccountController@postLogin');


    // Route::group(['prefix' => 'google'], function() {
    //     Route::get('redirect', 'Auth\SocialController@redirectToProvider');
    //     Route::get('callback', 'Auth\SocialController@handleProviderCallback');
    // });


});
Route::get('tc','CartController@GetIn4InCart' );
Route::group(['prefix' => 'admin'], function () {
    Route::get('', 'adminController@index');
    Route::get('index', 'adminController@index');
    Route::get('login', 'adminController@Getlogin');
    Route::post('postlogin', 'adminController@Postlogin');
    Route::get('forms', 'adminController@Getform');
    Route::post('postproduct', 'adminController@postproduct');
    Route::get('tables', 'adminController@Gettables');
    Route::get('tables2', 'adminController@Gettables2');
    Route::get('blank', 'adminController@blank');
    Route::get('buttons', 'adminController@buttons');
    Route::get('flot', 'adminController@flot');
    Route::get('grid', 'adminController@grid');
    Route::get('icons', 'adminController@icons');
    Route::get('morris', 'adminController@morris');
    Route::get('notifications', 'adminController@notifications');
    Route::get('panels-wells', 'adminController@panelwells');
    Route::get('typography', 'adminController@typography');
});
Route::get('convert', function () {
    account::where('ID',2)->update(['Password' => bcrypt('123456')]);
});
Route::get('addtk', function () {
    $acc = new account;
    $acc->Username='nhavbnm1';
    $acc->Password=bcrypt('123456');
    $acc->Name="nhaas";
    $acc->Type='SHOP';
    $acc->save();
});
// Route::get('login/google', 'Auth\LoginController@redirectToProvider');
// Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
