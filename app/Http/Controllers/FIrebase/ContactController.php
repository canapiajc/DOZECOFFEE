<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;
use App\Models\Product;
use App\Models\order;
use App\Models\User;


class ContactController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename ='message'; 
    }
    public function insertmessage(Request $request)
    {
        // $order = order::find($id);
        // $order->status='To Ship';
        // $order->save();
        $postData = [
            'name' => $request->Name,
            'phone' => $request->Phone,
            'Email' => $request->Email,
            'Massage' => $request->Massage,
          
            

        ];
        $postRef= $this->database->getReference($this->tablename)->push($postData);
        if($postRef){
            return redirect()->back()->with('message','TANGINAMO!');
        }else{
            return redirect()->back()->with('message','mali gago!!'); 
        }
       // return view('user.contact');
        // $order=order::find($id);
        // $order->delete();
       // return redirect()->back();
    }
}
