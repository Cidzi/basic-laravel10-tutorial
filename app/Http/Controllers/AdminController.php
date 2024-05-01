<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Blog;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        //$blogs = DB::table('blogs')->paginate(3); << Query Builder
        $blogs = Blog::paginate(3);
        return view('blog',compact('blogs'));
    }

    function create(){

        return view('form');
    }

    function insert(Request $request){
        $request->validate(
            [
                'title'=>'required|max:50',
                'content'=>'required'
            ],
            [
                'title.required'=>'กรุณาใส่ชื่อบทความ',
                'title.max'=>'ชื่อบทความเกิน 50 ตัวอักษร',
                'content.required'=>'กรุณาใส่เนื้อหาบทความ'
            ]
        );#ส่งค่า validate error ออกไปเป็น $message
        $data=[
            'title'=>$request->title,
            'content'=>$request->content
        ];
        //DB::table('blogs')->insert($data);  << Query Builder
        Blog::insert($data);
        return redirect('/author/blog');
    }

    function delete($id){
        //DB::table('blogs')->where('id',$id)->delete();
        Blog::find($id)->delete();
        return redirect()->back();  #ให้อยู่หน้าเดิม
    }

    function change($id){
        //$blog = DB::table('blogs')->where('id',$id)->first();
        $blog = Blog::find($id);
        $data = [
            'status'=>!$blog->status
        ];  
        //DB::table('blogs')->where('id',$id)->update($data);
        Blog::find($id)->update($data);
        return redirect()->back();
    }

    function edit($id){
        $blog = Blog::find($id);
        //$blog = DB::table('blogs')->where('id',$id)->first();
        return view('edit',compact('blog'));
    }

    function update(Request $request,$id){
        $request->validate(
            [
                'title'=>'required|max:50',
                'content'=>'required'
            ],
            [
                'title.required'=>'กรุณาใส่ชื่อบทความ',
                'title.max'=>'ชื่อบทความเกิน 50 ตัวอักษร',
                'content.required'=>'กรุณาใส่เนื้อหาบทความ'
            ]
        );
        $data=[
            'title'=>$request->title,
            'content'=>$request->content
        ];
        //DB::table('blogs')->where('id',$id)->update($data);
        Blog::find($id)->update($data);
        return redirect('/author/blog');
    }
}
