<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Roles;
use Auth;
class AuthController extends Controller
{
    public function register_auth()
    {
        return view('register');
    }
    public function register(Request $request)
    {
        $this->validation($request);
        $data =$request->all();

        $admin =new Admin();
        $admin->admin_name=$data['admin_name'];
        $admin->admin_email=$data['admin_email'];
        $admin->admin_password=$data['admin_password'];
        $admin->save();
        return redirect('register_auth')->with('message','Đăng kí thành công');
    }
    public function validation($request)
    {
        return $this->validate($request,
        [
            'admin_name'=>'required|max:255',
            'admin_email'=>'required|email|max:255',
            'admin_password'=>'required|max:255',
        ]);
    }
    public function login_auth()
    {
        return view ('login_auth');
    }

    public function auth_login( Request $request)
    {
        $this->validate($request,
        [
            
            'admin_email'=>'required|email|max:255',
            'admin_password'=>'required|max:255',

        ]);
          //$data = $request->all();
          if(Auth::attempt(['admin_email'=>$request->admin_email,'admin_password'=>$request->admin_password]))
            {
                return redirect('dashboard');
            }
          else
            {
                return redirect('login_auth')->with('message','Email hoặc mật khẩu không đúng');
            }         
    }
    public function logout_auth()
    {
        Auth::logout();
        return redirect('admin_login')->with('message','Bạn đã đăng xuất thành công');
    }
}