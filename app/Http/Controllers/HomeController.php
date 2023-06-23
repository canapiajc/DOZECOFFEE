<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\order;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;

use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
      
        return redirect('redirect');   
    }

    public function index()
    { 
        if(Auth::id()){
            
                return redirect ('redirect');   
            
        }
        else{
            $data = product::all();
            return view('user.home',compact('data'));
         //   return view('user.home');   
       }
     
    }
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
    if($usertype=='1')
    {
        
        return view('admin.homeadmin');
    }
    else if ($usertype=='0')
    {

 
        $data = product::all();
        $user=auth()->user();
        $count=cart::where('phone', $user->phone)->count();
        $counts=order::where('phone', $user->phone)->count();
         return view('user.user1',compact('data','count','counts'));
     // return view('user.user1');
    }
    else {
        return view('user.home');
    }
 

    }
    public function addcart(Request $request, $id)
    {
        if(auth::id())
        {
            $user=auth()->user();
            $product=product::find($id);
            $cart= new cart;
            $cart->name=$user->name;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->product_title=$product->title;
            $cart->price=$product->price;
            $cart->image=$product->image;
            $cart->quantity=$request->quantity;
            $cart->save();
            Alert::success('ADD TO CART  Successfuly!!');
            return redirect()->back()->with('message','ADD TO CART  Successfuly!');
        }
        else
        {
            return redirect('login');
        }
    }
  
    public function showcart()
    {
        $user=auth()->user();
        $cart=cart::where('phone',$user->phone)->get();
        
        $count=cart::where('phone', $user->phone)->count();
        $counts=order::where('phone', $user->phone)->count();
        return view('user.showcart', compact('count','cart','counts'));

    } 
    

    public function myorder()
    {
        $user=auth()->user();
        $order=order::where('phone',$user->phone)->get();
        $count=cart::where('phone', $user->phone)->count();
        $counts=order::where('phone', $user->phone)->count();
        
        return view('user.orderuser', compact('count','order','counts'));

        // $user=auth()->user();
        // $order=order::where('phone',$user->phone)->get();
        // $count=order::where('phone', $user->phone)->count();
   
        // return view('user.orderuser', compact('count','order'));
        

    }
    public function deletecart($id)
    {
       $data=cart::find($id);
       $data->delete();
       Alert::success('PRODUCT REMOVED!','This is removed form your Cart');
       return redirect()->back();

    }
    public function deleteall($id)
    {
       $data=cart::destroy($id);

       return redirect()->back();

    }

    public function miyalapa(Request $request)
    {
        // $validated = $request->validate([
        //     'productname' => 'required',
        //     'price' => 'required',
        //     'quantity' => 'required'

        // ]);
        // $input = $request->all();

        $user=auth()->user();
        $name=$user->name;
        $phone=$user->phone;
        $address=$user->address;
       
        foreach($request->productname as $key=>$productname)
        {
          
           
                $order=new order;
                $order->product_name=$request->productname[$key];
                $order->price=$request->price[$key];
                $order->quantity=$request->quantity[$key];
                $order->Total=$request->total[$key]; 
                $order->baranggay=$request->brgy[$key];
                $order->zip=$request->zip[$key];
                $order->name=$name;
                $order->phone=$phone;
                $order->address=$address;
              
                $order->status='Pending...';
                $order->save();
           

        }
        DB::table('carts')->where('phone',$phone)->delete();
        Alert::success('Thankyou for your Order!');

        return redirect()->back()->with('message','Check Out Successfuly!');
         
    }
    public function cancel()
    {
        $user=auth()->user();
        $name=$user->name;
        $phone=$user->phone;
    DB::table('carts')->where('phone',$phone)->delete();
    return redirect()->back()->with('message','Check Out Successfuly!');
    }
   
    public function userito()
    {
        $data = product::all();
        return view('user.user1',compact('data'));
    }
   
 
   
    
    public function poropor()
    {
        return view('admin.404');
    }
    public function buttons()
    {
        return view('admin.buttons');
    }
    public function cards()
    {
        return view('admin.cards');
    }
    public function charts()
    {
        return view('admin.charts');
    }
    public function table()
    {
        return view('admin.table');
    }
    public function utilities_animation()
    {
        return view('admin.utilities-animation');
    }
    public function utilities_border()
    {
        return view('admin.utilities-border');
    }
    public function utilities_color()
    {
        return view('admin.utilities-color');
    }
    public function utilities_other()
    {
        return view('admin.utilities-other');
    }
    public function about()
    {
        return view('user.about');
    }
    public function coffees()
    {
        $data = product::all();
        return view('user.coffees',compact('data'));
       // return view('user.coffees');
    }
    public function blog()
    {
        return view('user.blog');
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function shop()
    {
        $data = product::all();
        $user=auth()->user();
        
        $count=cart::where('phone', $user->phone)->count();
        $counts=order::where('phone', $user->phone)->count();
         return view('user.Shop',compact('data','count','counts'));
        
        // $user=auth()->user();
        // $cart=cart::where('phone',$user->phone)->get();
        // $count=cart::where('phone', $user->phone)->count();
        // return view('user.showcart', compact('count','cart'));

        // $data = product::all();
        // return view('user.Shop',compact('data'));
        // return view('user.Shop');
    }
  
}

