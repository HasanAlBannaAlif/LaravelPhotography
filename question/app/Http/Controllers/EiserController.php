<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photographer;
use App\Album;

class EiserController extends Controller
{
    public function index(){
        $photographer = Photographer::orderBy('id','desc')->take(3)->get();
        $albums = Album::orderBy('id','desc')->take(9)->get();
        return view('front-end.home.home',['photographer'=>$photographer,'albums'=>$albums]);
    }
    public function albums(){
        $photographer = Photographer::orderBy('id','desc')->take(3)->get();
        $albums = Album::orderBy('id','desc')->take(9)->get();
        return view('front-end.home.albums',['photographer'=>$photographer,'albums'=>$albums]);
    }
    public function about(){
        $photographer = Photographer::orderBy('id','desc')->take(3)->get();
        return view('front-end.home.about',['photographer'=>$photographer]);
    }
    public function blog(){
        return view('front-end.home.blog');
    }
    public function contact(){
        return view('front-end.home.contact');
    }
    public function album_details($id){
        $album_details = Album::find($id);
        return view('front-end.home.album_details',[
            'album_details'=>$album_details
        ]);
    }
}
