<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


session_start();

class CategoryController extends Controller
{
    public function index(){
        return view('admin.add_category');
    }

    public function all_category(){
        return view('admin.all_category');

    }

    public function save_category(Request $request){
        $data=array();
        $data['category_id']=$request->category_id;
        $data['category_name']=$request->category_name;
        $data['category_description']=$request->category_description;
        $data['publication_status']=$request->publication_status;
        echo "<pre>";
         print_r($data);
        echo "<pre>";
//        DB::table('tbl_category')->insert($data);
//
//        session::put('message','category add successfully');
//        return redirect::to('/add-category');
    }
}
