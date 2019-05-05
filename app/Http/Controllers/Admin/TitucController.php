<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\tintuc;
use App\loaitin;
use Session;

class TitucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tintuc=tintuc::all();
        return view('tintuc.list',['list'=>$tintuc]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $theloai=loaitin::pluck('name','id');
        return view('tintuc.create',['theloai'=>$theloai]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tintuc= new tintuc();
        $tintuc->tieude=$request->tieude;
        $tintuc->tomtat=$request->tomtat;
        $fileName1='';
        if ($request->hasFile('hinhanh1')) {
            $file=$request->file('hinhanh1');
            $fileName1=$file->getClientOriginalName();
            $dir=public_path('uploads/tintuc/'.$request->tieude);
            $file->move($dir,$fileName1);
        }
        $tintuc->hinhanh1=$fileName1;
        $tintuc->motahinhanh1=$request->motahinhanh1;

        $fileName2='';
        if ($request->hasFile('hinhanh2')) {
            $file=$request->file('hinhanh2');
            $fileName2=$file->getClientOriginalName();
            $dir=public_path('uploads/tintuc/'.$request->tieude);
            $file->move($dir,$fileName2);
        }
        $tintuc->hinhanh2=$fileName2;
        $tintuc->motahinhanh2=$request->motahinhanh2;
        
        $fileName3='';
        if ($request->hasFile('hinhanh3')) {
            $file=$request->file('hinhanh3');
            $fileName3=$file->getClientOriginalName();
            $dir=public_path('uploads/tintuc/'.$request->tieude);
            $file->move($dir,$fileName3);
        }
        $tintuc->hinhanh3=$fileName3;
        $tintuc->motahinhanh3=$request->motahinhanh3;
        
        $fileName4='';
        if ($request->hasFile('hinhanh4')) {
            $file=$request->file('hinhanh4');
            $fileName4=$file->getClientOriginalName();
            $dir=public_path('uploads/tintuc/'.$request->tieude);
            $file->move($dir,$fileName4);
        }
        $tintuc->hinhanh4=$fileName4;
        $tintuc->motahinhanh4=$request->motahinhanh4;
        
        $fileName5='';
        if ($request->hasFile('hinhanh5')) {
            $file=$request->file('hinhanh5');
            $fileName5=$file->getClientOriginalName();
            $dir=public_path('uploads/tintuc/'.$request->tieude);
            $file->move($dir,$fileName5);
        }
        $tintuc->hinhanh5=$fileName5;
        $tintuc->motahinhanh5=$request->motahinhanh5;
        
        $fileName6='';
        if ($request->hasFile('hinhanh6')) {
            $file=$request->file('hinhanh6');
            $fileName6=$file->getClientOriginalName();
            $dir=public_path('uploads/tintuc/'.$request->tieude);
            $file->move($dir,$fileName6);
        }
        $tintuc->hinhanh6=$fileName6;
        $tintuc->motahinhanh6=$request->motahinhanh6;
        
        $fileName7='';
        if ($request->hasFile('hinhanh7')) {
            $file=$request->file('hinhanh7');
            $fileName7=$file->getClientOriginalName();
            $dir=public_path('uploads/tintuc/'.$request->tieude);
            $file->move($dir,$fileName7);
        }
        $tintuc->hinhanh7=$fileName7;
        $tintuc->motahinhanh7=$request->motahinhanh7;
        $tintuc->id_theloai=$request->id_theloai;
        
        
        
        $tintuc->save();
        Session::flash('success','Thêm mới thành công!');
        return redirect('ltvadmin/tintuc');
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
        $loaitin=loaitin::pluck('name','id');
        $tintuc=tintuc::findOrFail($id);
        return view('tintuc.edit',[
            'tintuc'=>$tintuc,
            'theloai'=>$loaitin
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
        $tintuc=tintuc::findOrFail($id);
        $tintuc->tieude=$request->tieude;
        $tintuc->tomtat=$request->tomtat;
        
        if ($request->hasFile('hinhanh1')) {
            $file=$request->file('hinhanh1');
            $hinhanh1=$file->getClientOriginalName();
            $dir=public_path('uploads/tintuc/'.$request->tieude);
            $file->move($dir,$hinhanh1);
            $tintuc->hinhanh1=$hinhanh1;
        }
        $tintuc->motahinhanh1=$request->motahinhanh1;

        
        if ($request->hasFile('hinhanh2')) {
            $file=$request->file('hinhanh2');
            $hinhanh2=$file->getClientOriginalName();
            $dir=public_path('uploads/tintuc/'.$request->tieude);
            $file->move($dir,$hinhanh2);
            $tintuc->hinhanh2=$hinhanh2;
        }
        $tintuc->motahinhanh2=$request->motahinhanh2;

        if ($request->hasFile('hinhanh3')) {
            $file=$request->file('hinhanh3');
            $hinhanh3=$file->getClientOriginalName();
            $dir=public_path('uploads/tintuc/'.$request->tieude);
            $file->move($dir,$hinhanh3);
            $tintuc->hinhanh3=$hinhanh3;
        }
        $tintuc->motahinhanh3=$request->motahinhanh3;

        if ($request->hasFile('hinhanh4')) {
            $file=$request->file('hinhanh4');
            $hinhanh4=$file->getClientOriginalName();
            $dir=public_path('uploads/tintuc/'.$request->tieude);
            $file->move($dir,$hinhanh4);
            $tintuc->hinhanh4=$hinhanh4;
        }
        $tintuc->motahinhanh4=$request->motahinhanh4;

        if ($request->hasFile('hinhanh5')) {
            $file=$request->file('hinhanh5');
            $hinhanh5=$file->getClientOriginalName();
            $dir=public_path('uploads/tintuc/'.$request->tieude);
            $file->move($dir,$hinhanh5);
            $tintuc->hinhanh5=$hinhanh5;
        }
        $tintuc->motahinhanh5=$request->motahinhanh5;

        if ($request->hasFile('hinhanh6')) {
            $file=$request->file('hinhanh6');
            $hinhanh6=$file->getClientOriginalName();
            $dir=public_path('uploads/tintuc/'.$request->tieude);
            $file->move($dir,$hinhanh6);
            $tintuc->hinhanh6=$hinhanh6;
        }
        $tintuc->motahinhanh6=$request->motahinhanh6;

        if ($request->hasFile('hinhanh7')) {
            $file=$request->file('hinhanh7');
            $hinhanh7=$file->getClientOriginalName();
            $dir=public_path('uploads/tintuc/'.$request->tieude);
            $file->move($dir,$hinhanh7);
            $tintuc->hinhanh7=$hinhanh7;
        }
        $tintuc->motahinhanh7=$request->motahinhanh7;

        
        
        $tintuc->id_theloai=$request->id_theloai;
        
        
        
        $tintuc->save();
        Session::flash('success','Thêm mới thành công!');
        return redirect('ltvadmin/tintuc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function showPost(){
        $tintuc=tintuc::all();
        return view('tintuc.list',['list'=>$tintuc]);
    }
}
