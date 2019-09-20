<?php

namespace App\Http\Controllers;
use App\Http\Requests\AddUserRequest;
use Illuminate\Http\Request;

class userController extends Controller
{
    function getList(){
        //render view trong laravel
        //đứng từ file views
        return view('user');
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

    }

    function getEdit(){

        return view('edit_user');
    }
}
