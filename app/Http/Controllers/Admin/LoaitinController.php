<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\loaitin;

class LoaitinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loaitin=loaitin::all();
        return view('loaitin.list',['list'=>$loaitin]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loaitin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loaitin= new loaitin();
        $loaitin->name=$request->name;
        
        $loaitin->save();
        Session::flash('success','Thêm mới thành công!');
        return redirect('ltvadmin/loaitin');
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
        $loaitin=loaitin::findOrFail($id);
        return view('loaitin.edit',['loaitin'=>$loaitin]);
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
        $loaitin=loaitin::findOrFail($id);
        $loaitin->name=$request->name;
        $loaitin->save();
        Session::flash('Success','Chỉnh sửa thành công!');
        return redirect('ltvadmin/loaitin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loaitin=loaitin::findOrFail($id);
        $loaitin->delete();
        Session::flash('Success','Chỉnh sửa thành công!');
        return redirect('ltvadmin/loaitin');
    }
}

