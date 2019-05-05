<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slide;
use App\anhsx;
use App\theloai;
use App\tintuc;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slide=slide::all();
        $anhsx=anhsx::orderBy('id','DESC')->limit(16)->get();
        $theloai=theloai::all();
        $tintuc=tintuc::orderBy('id','DESC')->limit(3)->get();
        

        return view('welcome',[
            'slide'=>$slide,
            'anhsx'=>$anhsx,
            'theloai'=>$theloai,
            'tintuc'=>$tintuc,

    ]);
    }
    public function hoatdong(){
        $anhsx=anhsx::all();
        $theloai=theloai::all();
        return view('trangchu.hoatdong',[
            'anhsx'=>$anhsx,
            'theloai'=>$theloai,

    ]);
    }
    public function lienhe(){
        return view('trangchu.lienhe');
    }
}
