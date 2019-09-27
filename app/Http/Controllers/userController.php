<?php

namespace App\Http\Controllers;
use App\Http\Requests\{AddUserRequest, EditUserRequest};
use Illuminate\Http\Request;
// Khai báo model Users
use App\Users;

class userController extends Controller
{
    function getList(){
        //render view trong laravel
        //đứng từ file views

        // Lấy toàn bộ dữ liệu trong model
        // Tên_model::all()
        // obj>toArray() chuyển dữ liệu từ object sang array
        // dd( Users::all()->toArray() );

        // $users = Users::all();
        // return view('user')->with('users', $users);

        // Phân trang model::paginate(số bản ghi trong 1 trang)
        $data['users'] = Users::paginate(10);
        // $data['users'] = Users::all();
        return view('user', $data);
    }


    function getAdd(){
        
        return view('add_user');
    }

    function postAdd(AddUserRequest $r){
        //dd giúp hiển thị tất cả dữ liệu trong php
        //khi gặp hàm dd thì toàn bộ chương trình dừng
        
        //$rules(là mảng) : chứa các quy tắc mà ô input phải tuân thủ
        //key: name của ô input cần check lỗi
        //value:các quy tắc dành cho ô input 
        // $rules=[
        //     'full'=>'required|min:3|max:20',
        //     'phone'=>'required',
        //     'address'=>'required',
        //     'id_number'=>'required',
        // ];

        // $messages=[
        //     'full.required'=>'Không được để trống họ và tên',
        //     'full.min'=>'họ và tên không được < 3 ký tự',
        //     'full.max'=>'họ và tên không vượt quá 20 ký tự',
        //     'phone.required'=>'Không được để trống số điện thoại',
        //     'address.required'=>'Không được để trống địa chỉ',
        //     'id_number.required'=>'Không được để trống số CMT',
        // ];
        // $r->validate($rules,$messages);
            // dd($r->all());
        $user = new Users;
        // $user->full = $r->input('full');
        // $user->phone = $r->input('phone');
        // $user->address = $r->input('address');
        // $user->id_number = $r->input('id_number');
        $user->full = $r->full;
        $user->phone = $r->phone;
        $user->address = $r->address;
        $user->id_number = $r->id_number;
        $user->save();
        // dd($user);
        // Chuyển hướng trang
        // wwith: tạo session dạng flash (tồn tại 1 lần duy nhất sau khi được tạo)
        return redirect('/')->with('thongbao', 'Đã thêm thành công!');
    }

    function getEdit($idUser)
    {
        // dd(Users::find($idUser)->toArray());
        $data['user'] = Users::find($idUser);
        return view('edit_user', $data);
        // return view('edit_user');
    }

    function postEdit(EditUserRequest $r, $idUser)
    {
        // dd()
        $user = Users::find($idUser)->first();
        $user->full = $r->full;
        $user->phone = $r->phone;
        $user->address = $r->address;
        $user->id_number = $r->id_number;
        $user->update();
        // return redirect('')->with('thongbao', 'Đã sửa thành công');
        return redirect()->back()->with('thongbao', 'Đã sửa thành công');
    }

    function delUser($idUser)
    {
        Users::destroy($idUser);
        return redirect()->back()->with('thongbao', 'Đã xóa thành công');
    }
}
