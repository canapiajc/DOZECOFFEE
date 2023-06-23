<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\order;
use App\Models\User;
use App\Models\toship;
use Kreait\Firebase\Contract\Database;


class AdminController extends Controller
{ 
     public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename ='toship'; 
    }
    public function product(){
        return view('admin.buttons');
    }

    public function uploadproduct(Request $request)
    {
        $data = new product;
        $image=$request->file;
        $imagename=time().'.'. $image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);
        $data->image=$imagename;



        $data->title=$request->title;
        
        $data->price=$request->price;
        
        $data->description=$request->desc;
        
        $data->quantity=$request->quantity;
        $data->save();
        return redirect()->back()->with('message','Product Submit Successfuly!');

    }
    public function showproduct()
    {
        $data = product::all();
        return view('admin.cards',compact('data'));
    }
    public function deleteproduct($id)
    {
        $data = product::find($id);
        $data->delete();
                return redirect()->back();
    }

    public function updateview($id)
    {
        $data = product::find($id);

        return view('admin.updateview',compact('data'));
         
    }
    public function updateproduct(Request $request ,$id)
    {
        $data = product::find($id);
        $image=$request->file;
        if($image){
        $imagename=time().'.'. $image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);
        $data->image=$imagename;

        }

        $data->title=$request->title;
        
        $data->price=$request->price;
        
        $data->description=$request->desc;
        
        $data->quantity=$request->quantity;
        $data->save();
        return redirect()->back()->with('message','Product updated Successfuly!');
       
     //   return view('admin.updateview',compact('data'));
         
    }
    public function adminshoworder()
    {
        
        $order=order::all();
        return view('admin.showorder',compact('order'));
   
    }
    public function adminshowship()
    {
        
        $order=order::all();
        return view('admin.showship',compact('order'));
   
    }

    public function updatedelivered(Request $request, $id)
    {
        // $validated = $request->validate([
        //     'productname' => 'required',
        //     'price' => 'required',
        //     'quantity' => 'required'

        // ]);
        //$input = $request->all();
        $order = order::find($id);
        $order->status='shipped';
        $order->save();
        // $user=auth()->user();
        // $name=$user->name;
        // $phone=$user->phone;
        // $address=$user->address;
        
        // if ($request->productname == null) { return redirect()->back()->with('message', 'First add something in CART'); }
        // foreach($request->productname as $key=>$productname)
        // {
          
           
        //         $toship=new toship;
        //         $toship->product_name=$request->productname[$key];
        //         $toship->price=$request->price[$key];
        //         $toship->quantity=$request->quantity[$key];
        //         $toship->total=$request->total[$key]; 
        //         $toship->baranggay=$request->baranggay[$key];
        //         $toship->zip=$request->zip[$key];
        //         $toship->name=$request->name[$key];
        //         $toship->phone=$request->phone[$key];
        //         $toship->address=$request->address[$key];
              
        //         $toship->status='Pendinsddsg...';
        //         $toship->save();
           

     //   }
        // $toship=new toship;
        // $toship->product_name=$request->productname;
        // $toship->price=$request->price;
        // $toship->quantity=$request->quantity;
        // $toship->total=$request->total; 
        // $toship->baranggay=$request->baranggay;
        // $toship->zip=$request->zip;
        // $toship->name=$request->name;
        // $toship->phone=$request->phone;
        // $toship->address=$request->address;
      
        // $toship->status='Pendinsddsg...';
        // $toship->save();
        
        // $order=order::find($id);
        // $order->delete();
       return redirect()->back()->with('message', 'shipped'); 
    }

    public function updatereceived($id)
    {
        $order = order::find($id);
        $order->status='Delivered';
        $order->save();
        return redirect()->back();
    }
    public function adminaccount()
    {
        // $user = User::where('usertype','1');
        $user = user::all();
        return view('admin.adminaccount',compact('user'));
    }
    public function useraccount()
    {
        $user = user::all();
        return view('admin.useraccount',compact('user'));
    }
    public function deleteorder($id)
    {
       $order=order::find($id);
       $order->delete();
      
       return redirect()->back();
    }
   
}
