<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use App\Blog;

class HomeController extends Controller
{
    public function index() {
        $data = Blog::limit(3)->orderBy('id','desc')->get();
        return view('home',compact('data'));
    }

    public function peta() {
        return view('peta');
    }

    public function perda() {
        return view('perda');
    }

    public function zonasi() {
        return view('zonasi');
    }

    public function PolaRuang() {
        return view('rdtr');
    }

    public function JaringanPrasarana() {
        return view('rdtr2');
    }

    public function prioritas() {
        return view('rdtr3');
    }

    public function login() {
        return view('login');
    }

    public function logout() {
        session()->flush();
        return redirect('/login');
    }

    public function berita() {
        $data = Blog::orderBy('id','desc')->paginate(5);
        return view('berita',compact('data'));
    }

    public function DetailBerita($id) {
        $data = Blog::where('id',$id)->first();
        return view('blog-details',compact('data'));
    }

    public function check(Request $r) {
        $data = Login::where('username',$r->username)->where('password', $r->password)->count();
        if($data > 0) {
            $data = Login::where('username',$r->username)->where('password', $r->password)->first();
            $r->session()->put('activeUser', $data);
            return redirect('/admin');
        } else {
            echo "username / password salah";
        }
    }

    public function search(Request $r) {
        $data = Blog::orWhere('judul','like','%' . $r->search . "%")->orderBy('id','desc')->limit(5)->get();
        return view('berita-search',compact('data'));
    }

    public function bwp1() {
        return view('bwp1');
    }

    public function bwp2() {
        return view('bwp2');
    }

    public function bwp3() {
        return view('bwp3');
    }

    public function bwp4() {
        return view('bwp4');
    }

    public function itbx1() {
        return view('itbx1');
    }

    public function itbx2() {
        return view('itbx2');
    }

    public function itbx3() {
        return view('itbx3');
    }

    public function itbx4() {
        return view('itbx4');
    }

}
