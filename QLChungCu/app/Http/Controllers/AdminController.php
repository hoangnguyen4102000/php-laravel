<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use App\Models\Roles;
use Session;
use DB;
use Validator;
use Illuminate\Support\Facades\Redirect;
session_start();


class AdminController extends Controller
{ 
//ham thay doi duong dan
    public function AuthLogin()
    {
        $admin_ID=Auth::id();
       $admin_ID=Session::get('admin_ID');        
        if($admin_ID)
        {
            return Redirect::to('dashboard');
        }
        else
        {
            return Redirect::to('admin_login')->send();
       }
    }
    public function index()
    {
        return view('admin_login');
    }
    
    
    public function show_dashboard()
    {
        $this->AuthLogin();
        return view('admin.dashboard');
    }
    public function dashboard(Request $request)
    {
        $admin_email=$request->admin_email;
        $admin_password=$request->admin_password;
        $result=DB::table('admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
       if($result)
        {
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_ID',$result->admin_ID);
            return  Redirect::to('dashboard');
        }
        else
        {
            Session::put('message','Mật khảu hoặc tài khoản sai!Vui lòng nhập lại');
            return  Redirect::to('admin_login');
        }
        
    }
    public function logout()
    {
        $this->AuthLogin();
       Session::put('admin_name',null);
        Session::put('admin_ID',null);
        return Redirect::to('admin_login');
    }
}
    
