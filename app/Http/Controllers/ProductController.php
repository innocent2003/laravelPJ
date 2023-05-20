<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\variation;
use App\Models\variation_option;
use App\Models\product_configuration;

use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        
        
        return view('product',compact('products'));
    }
    public function store(Request $request){
        $photo1 = $request->file('image1')->getClientOriginalName();
        $request->file('image1')->storeAs('public/photos',$photo1);

        $photo2 = $request->file('image2')->getClientOriginalName();
        $request->file('image2')->storeAs('public/photos',$photo2);

        $photo3 = $request->file('image3')->getClientOriginalName();
        $request->file('image3')->storeAs('public/photos',$photo3);

        $photo4 = $request->file('image4')->getClientOriginalName();
        $request->file('image4')->storeAs('public/photos',$photo4);

        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->photo1 = $photo1;
        $product->photo2 = $photo2;
        $product->photo3 = $photo3;
        $product->photo4 = $photo4;
        $product->save();
        return redirect("/addProduct");
    }
    function detail($id)
    {
        $data =Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(Request $req)
    {
        $data= Product::
        where('name', 'like', '%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
           $cart= new Cart;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/');

        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
     $userId=Session::get('user')['id'];
     return Cart::where('user_id',$userId)->count();
    }
    function cartList()
    {
        $userId=Session::get('user')['id'];
       $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow()
    {
        $userId=Session::get('user')['id'];
        $total= $products= DB::table('cart')
         ->join('products','cart.product_id','=','products.id')
         ->where('cart.user_id',$userId)
         ->sum('products.price');

         return view('ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
         $allCart= Cart::where('user_id',$userId)->get();
         foreach($allCart as $cart)
         {
             $order= new Order;
             $order->product_id=$cart['product_id'];
             $order->user_id=$cart['user_id'];
             $order->status="pending";
             $order->payment_method=$req->payment;
             $order->payment_status="pending";
             $order->address=$req->address;
             $order->save();
             Cart::where('user_id',$userId)->delete();
         }
         $req->input();
         return redirect('/');
    }
    function myOrders()
    {
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get();

         return view('myorders',['orders'=>$orders]);
    }
    public function filter(Request $request)
    {   
        $name = $request->input('id');
        $products_id = product_configuration::where('variation_option_id', '=',  $name )->get('product_id');
        $products = Product::where('id', '=' , $name )->get();
        $variations = variation::all();
        $variation_options = variation_option::all();
        return view('product', compact('products','variations','variation_options'));
    }
}