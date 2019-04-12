<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\anhsx;
use App\theloai;

class AnhsxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list=anhsx::all();
        return view('anhsx.list',['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loaianh=theloai::pluck('tentheloai','id');
        return view('anhsx.create',['loaianh'=>$loaianh]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $anhsx= new anhsx();
        $anhsx->tenanh=$request->tenanh;
        $anhsx->tieudephu=$request->tieudephu;
        $fileName1='';
        if ($request->hasFile('fileanh')) {
            $file=$request->file('fileanh');
            $fileName1=$file->getClientOriginalName();
            $dir=public_path('uploads/anhsx');
            $file->move($dir,$fileName1);
        }
        $anhsx->id_loaianh=$request->id_loaianh;
        $anhsx->fileanh=$fileName1;
        $anhsx->save();
        Session::flash('success','Thêm mới thành công!');
        return redirect('ltvadmin/anhsx');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loaianh=theloai::pluck('tentheloai','id');
        $anhsx=anhsx::findOrFail($id);
        return view('anhsx.edit',[
            'anhsx'=>$anhsx,
            'loaianh'=>$loaianh,
    ]);
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
        $anhsx=anhsx::findOrFail($id);
        $anhsx->tenanh=$request->tenanh;
        $anhsx->tieudephu=$request->tieudephu;
        if ($request->hasFile('fileanh')) {
            $file=$request->file('fileanh');
            $fileName1=$file->getClientOriginalName();
            $dir=public_path('uploads/anhsx');
            $file->move($dir,$fileName1);
            $anhsx->fileanh=$fileName1;
        }
        $anhsx->save();
        Session::flash('Success','Chỉnh sửa thành công!');
        return redirect('ltvadmin/anhsx');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $anhsx=anhsx::findOrFail($id);
     $anhsx->delete();
     Session::flash('success','Xóa thành công!');
     return redirect('ltvadmin/anhsx');
 }
}
