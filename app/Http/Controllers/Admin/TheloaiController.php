<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\theloai;



class TheloaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list=theloai::all();
        return view('theloaianh.list',['list'=>$list]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('theloaianh.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $theloai= new theloai();
        $theloai->tentheloai=$request->tentheloai;
        $theloai->tenkhongdau=$request->tenkhongdau;
        
        $theloai->save();
        Session::flash('success','Thêm mới thành công!');
        return redirect('ltvadmin/theloaianh');

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

        $theloai=theloai::findOrFail($id);
        return view('theloaianh.edit',['theloai'=>$theloai]);

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
      $theloai=theloai::findOrFail($id);
      $theloai->tentheloai=$request->tentheloai;
      $theloai->tenkhongdau=$request->tenkhongdau;
      
      $theloai->save();
      Session::flash('Success','Chỉnh sửa thành công!');
      return redirect('ltvadmin/theloaianh');
  }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $theloai=theloai::findOrFail($id);
        $theloai->delete();
        Session::flash('success','Xóa thành công!');
        return redirect('ltvadmin/theloaianh');
    }
}
