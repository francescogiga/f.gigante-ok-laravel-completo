<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public  $users = [
        ['name' => 'Mario' , 'surname' =>'Rossi', 'role'=>'Senior Manager'],
        ['name' => 'Serena' , 'surname' =>'Verdi', 'role'=>'HR'],
        ['name' => 'Walter' , 'surname' =>'Bianchi', 'role'=>'Developer'],
    ];
     public function homepage()
     {
        return view('welcome');
     }

public function aboutUs() 
{
   
    return view('about-us',['users' => $this->users]);
}
public function aboutUsDetail($name) 
{
  
    foreach($this->users as $user){
        if($name == $user['name']){
            return view('about-us-detail',['user' => $user]);
        }
    }
}
public function contacts(){
    return view('contacts');   
}

public function contactUs(Request $request)
{
    $user =$request->input('user');
    $email =$request->input('email');
    $message =$request->input('message');
    $userData = compact ('user','email','message');

    Mail::to($email)->send(new ContactMail($userData));
    return redirect(route('homepage'))->with('message','grazie per averci contattato'); 


}



}