<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;


class userloginController extends BaseController
{
  use ValidatesRequests;
     public function signup(Request $request)
     {

      $result=DB::insert("insert into users(fullname,username,password, email) values (?,?,?,?)", 
        [$request->input('fullname'),
        $request->input('username'), 
        $request->input('password'), 
        $request->input('email')]);
        echo "<script>alert('Account Sucessfully Created !!!  Use This Account to Login!');</script>";
        return view('index'); 

     }


     public function login(Request $req)
     {
      $this->validate($req, [
            'username'=>'Required',
            'password'=>'Required',
        ]);


      $username = $req->input('username');
      $password = $req->input('password');

      $checkLogin = DB::table('users')->where(['username'=>$username,'password'=>$password])->get();
      if(count($checkLogin)  >0)
      {
        echo "<script>alert('Sucessfully Logged In !');</script>";    
        return view('/index');
      }
      else
      {
        echo "<script>alert('Error Login!! Repeat the Process Again!');</script>";
        return view('index');

      }
     }


     public function getuser(){
      $getdata=DB::table('users')->get();
      return view('admin.userinfo', compact('getdata'));

     }



     public function getadmin(){
      $getadmin=DB::table('admin')->get();
      return view('admin.admininfo', compact('getadmin'));
     }

    public function getproject(){
      $getprojects=DB::table('products')->get();
      return view('projects', compact('getprojects'));
     }

     public function getprojectinfo(){
      $getprojectsinfo=DB::table('products')->get();
      return view('projectinfo', compact('getprojectsinfo'));
     }
   }