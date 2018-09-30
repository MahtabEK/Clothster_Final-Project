<?php

namespace App\Http\Controllers;

use App\User;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class home extends Controller
{
    public function homepage(){
        $categoryName1 = 'مردانه';
        $categoryName1Subname1 = 'مردانه1';
        $categoryName1Subname2 = 'مردانه2';
        $categoryName1Subname3 = 'مردانه3';
        $categoryName1Subname4 = 'مردانه4';
        $categoryName2 = 'زنانه';
        $categoryName2Subname1 = 'زنانه 1';
        $categoryName2Subname2 = 'زنانه 2';
        $categoryName2Subname3 = 'زنانه 3';
        $categoryName2Subname4 = 'زنانه 4';
        $categoryName3 = 'بچه گانه';
        $categoryName3Subname1 = 'بچه گانه1';
        $categoryName3Subname2 = 'بچه گانه 2';
        $categoryName3Subname3 = 'بچه گانه 3';
        $categoryName3Subname4 = 'بچه گانه 4';
        DB::table('fcategories')->insert(['name' => $categoryName1, 'subname1' => $categoryName1Subname1, 'subname2' => $categoryName1Subname2, 'subname3' => $categoryName1Subname3, 'subname4' => $categoryName1Subname4]);
        DB::table('fcategories')->insert(['name' => $categoryName2, 'subname1' => $categoryName2Subname1, 'subname2' => $categoryName2Subname2, 'subname3' => $categoryName2Subname3, 'subname4' => $categoryName2Subname4]);
        DB::table('fcategories')->insert(['name' => $categoryName3, 'subname1' => $categoryName3Subname1, 'subname2' => $categoryName3Subname2, 'subname3' => $categoryName3Subname3, 'subname4' => $categoryName3Subname4]);

        $category_available1 = DB::table('fcategories')->where('id', '=', 33)->value('name');
        $category_available2 = DB::table('fcategories')->where('id', '=', 34)->value('name');
        $category_available3 = DB::table('fcategories')->where('id', '=', 35)->value('name');
        $banner1 = 'pictures/image1.jpg';
        $banner2 = 'pictures/image2.jpg';
        $banner3 = 'pictures/image3.jpg';
        $banner4 = 'pictures/image4.jpg';
        $aboutUSText = 'بهترین ها را از ما خرید کنید';
        $promotion1 = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVvPzjIA2Eck31LO1v1D5vz-NPs7hGmpl3HTl4c6Oy8yzD5E9H';
        $promotion2 = 'https://40plusstyle.com/wp-content/uploads/2016/11/best-shops-for-women-over-40.jpg';
        $promotion3 = 'https://previews.123rf.com/images/sdenness/sdenness1209/sdenness120900016/15155179-group-of-six-happy-children-standing-and-holding-other-kids-hands-isolated-on-white.jpg';
        return view('homeUnregistered',compact('banner1', 'banner2', 'banner3', 'banner4', 'aboutUSText', 'promotion1', 'category_available1' ,'promotion2','category_available2', 'promotion3', 'category_available3'));
    }

    public function homeIN(){
        $promotion1 = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVvPzjIA2Eck31LO1v1D5vz-NPs7hGmpl3HTl4c6Oy8yzD5E9H';
        $promotion2 = 'https://40plusstyle.com/wp-content/uploads/2016/11/best-shops-for-women-over-40.jpg';
        $promotion3 = 'https://previews.123rf.com/images/sdenness/sdenness1209/sdenness120900016/15155179-group-of-six-happy-children-standing-and-holding-other-kids-hands-isolated-on-white.jpg';
        $phone_email1 = 'mahtab';
        return view('homeRegistered', compact('promotion1','promotion2', 'promotion3','phone_email1'));
    }

    public function profile(User $email = null){
        if ($email == null)
            $email = Auth::user();
        return view('profile', ['khiyar' => $email]);
    }

    public function cartItem(){
        return view('cart item');
    }

    public function category(){
        return view('category');
    }

    public function categoryMan(){
        return view('categoryMan');
    }

    public function categoryWomen(){
        return view('categoryWomen');
    }

    public function categoryChildren(){
        return view('categoryChildren');
    }

    public function productDetails(){
        return view('product details');
    }


    public function productDetailsID(product $id){
        return view('product details', ['rangesh' => $id]);
    }


    public function ProductList(){
        $rowNumber = 4;
        DB::table('filter')->insert(['color' => "red", 'brand' => "ARMANI", 'cost' => "200"]);
        DB::table('filter')->insert(['color' => "green", 'brand' => "GUCCI", 'cost' => "400"]);
        DB::table('filter')->insert(['color' => "pink", 'brand' => "STEFAN", 'cost' => "800"]);

        $brand = DB::table('filter')->where('id', '=', 1)->value('brand');
        $cost = DB::table('filter')->where('id', '=', 1)->value('cost');
        return view('productList', compact('rowNumber', 'brand', 'cost'));
    }

    public function ProductLists(){
        $rowNumber = 4;
        return view('productLists');
    }

    public function sendDetails(){
        return view('send details');
    }

    public function profileUpdate(Request $req, User $email){
        $FLname = $req->FLname;
        print $FLname;
       // $email->fill($req);
        return view('profile', ['khiyar' => $email]);
    }

    public function order(Request $req){
        $totalPrice = $req->totalPrice;
        $address = $req->address;
        $paymentType = $req->paymentType;
        $product1 = $req->product1;
        $product2 = $req->product2;
        $product3 = $req->product3;
        $number1 = $req->number1;
        $number2 = $req->number2;
        $number3 = $req->number3;


        DB::table('order')->insert(['totalPrice' => $totalPrice,
            'address' => $address,
            'paymentType' => $paymentType,
            'product1' => $product1,
            'product2' => $product2,
            'product3' => $product3,
            'number1' => $number1,
            'number2' => $number2,
            'number3' => $number3]);
        $status = DB::table('order')->where('id', '=', 1)->value('status');
        $delivery = DB::table('order')->where('id', '=', 1)->value('deliveryTime');
        return view('status', compact('status','delivery'));
    }
}
