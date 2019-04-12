<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\slide;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list=slide::all();
        return view('slide.list',['list'=>$list]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slide= new slide();
        $slide->tieudechinh=$request->tieudechinh;
        $slide->tieudephu=$request->tieudephu;
        $fileName1='';
        if ($request->hasFile('hinhanh')) {
            $file=$request->file('hinhanh');
            $fileName1=$file->getClientOriginalName();
            $dir=public_path('uploads/slide');
            $file->move($dir,$fileName1);
        }
        $slide->hinhanh=$fileName1;
        $slide->save();
        Session::flash('success','Thêm mới thành công!');
        return redirect('ltvadmin/slide');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slide=slide::findOrFail($id);
        return view('slide.edit',['slide'=>$slide]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slide=slide::findOrFail($id);
        $slide->tieudechinh=$request->tieudechinh;
        $slide->tieudephu=$request->tieudephu;
         if ($request->hasFile('hinhanh')) {
            $file=$request->file('hinhanh');
            $fileName1=$file->getClientOriginalName();
            $dir=public_path('uploads/slide');
            $file->move($dir,$fileName1);
            $slide->hinhanh=$fileName1;
        }
        $slide->save();
        Session::flash('Success','Chỉnh sửa thành công!');
        return redirect('ltvadmin/slide');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide=slide::findOrFail($id);
        $slide->delete();
        Session::flash('success','Xóa thành công!');
        return redirect('ltvadmin/slide');
    }
}
