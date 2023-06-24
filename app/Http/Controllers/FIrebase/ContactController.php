<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;
use App\Models\Product;
use App\Models\order;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;


class ContactController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename ='message'; 
    }
    public function adminshowcontact()
    {
       $contacts = $this->database->getReference($this->tablename)->getValue();
      
       return view('admin.contact', compact('contacts'));
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
            Alert::success('Message Sent Successfuly!!');
            return redirect()->back()->with('message','Message Sent Successfuly!!');
        }else{
            return redirect()->back()->with('message','Something Wrong'); 
        }
       // return view('user.contact');
        // $order=order::find($id);
        // $order->delete();
       // return redirect()->back();
    }
}
