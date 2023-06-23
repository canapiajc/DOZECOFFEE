<?php

namespace App\Http\Controllers;
use App\Models\order;

use Illuminate\Http\Request;
use PDF;
class PdfgenerateController extends Controller
{
    //
    public function invoice($id){
        if(order::where('id',$id)->exists()){
            $orders = order::find($id);
           // return view('admin.invoice', compact('orders'));
            $data = [
                'orders' =>   $orders ,
            
            ];
            $pdf = PDF::loadView('admin.invoice', $data);
    
            return $pdf->download('DozeCAFE.pdf');
        }
      
      
    }
}
