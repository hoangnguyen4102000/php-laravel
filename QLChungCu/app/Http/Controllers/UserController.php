<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Models\Roles;
use App\Models\Admin;
use Session;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        
        $admin=Admin::with('Roles')->orderBy('admin_ID','DESC')->paginate(5);
        return view ('user.all_user')->with(compact('admin'));
    }
    public function add_user()
    {
        return view('user.add_users');
    }
    public function assign_roles(Request $request)
    {
        if(Auth::id()==$request->admin_ID)
        {
            return redirect()->back()->with('message','Bạn không được phân quyền cho chính mình');
        }
        $data=$request ->all();
        $user =Admin::where('admin_email',$data['admin_email'])->first();
        $user ->Roles()->detach();
        if($request['author_role'])
        {
            $user ->Roles()->attach(Roles::where('Name','author')->first());
        }
        if($request['user_role'])
        {
            $user ->Roles()->attach(Roles::where('Name','user')->first());
        }
        if($request['admin_role'])
        {
            $user ->Roles()->attach(Roles::where('Name','admin')->first());
        }
        return redirect()->back()->with('message','Cấp quyền thành công');
    }
    public function store_user(Request $request)
    {
        $data = $request->all();
        $admin =new Admin();
        $admin->admin_name =$data['admin_name'];
        $admin->admin_email =$data['admin_email'];
        $admin->admin_password =$data['admin_password'];  
        
        $admin->Roles()->attach(Roles::where('Name','user')->first());
        $admin->save();
        Session::put('message','Thêm User thành công');
        return redirect::to('users');
    }
    public function delete_user_roles($admin_ID)
    {
        if(Auth::id()==$admin_ID)
        {
            return redirect()->back()->with('message','Không được xóa bản thâm');
        }
        else
        {
            $admin=Admin::find($admin_ID);

            if($admin)
            {
                $admin->Roles()->detach();
                $admin->delete();
            }          
            return redirect()->back()->with('message','Xóa User thành công'); 
        }

    }    
}
