<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class AdminController extends Controller
{
    public function index() {
        $data = Blog::orderBy('id','desc')->get();
        return view('backend.berita',compact('data'));
    }

    public function create() {
        return view('backend.beritacreate');
    }

    public function store(Request $r) {
        $data = new Blog();
        $max = Blog::max('id');

        $data->judul = $r->judul;
        $data->isi = $r->isi;
        $data->id = $max + 1;

        $this->validate($r, [
             'file' => 'required|file|max:2000|mimes:jpeg,png,jpg'
        ]);

        $file = $r->file('file');
        $path = base_path() . '/public/upload/berita/';
        $fileName = date('Ymdhis') . "." . $file->getClientOriginalExtension();
        $up = $r->file('file')->move($path,$fileName);
        $data->gambar = $fileName;
        $data->save();
        return redirect('admin');
    }

    public function delete($id) {
        $data = Blog::where('id',$id)->first();
        $check = base_path() . '/public/upload/berita/' . $data->gambar;

        if(file_exists($check)) {
            //echo "file ada";
            unlink($check);
        } else {
            //echo "file tidak ada";
        }

        $data->delete();
        return redirect()->back();
    }

    public function edit($id) {
        $data = Blog::where('id',$id)->first();
        return view('backend.beritaedit',compact('data'));
    }

    public function update(Request $r, $id) {
        $data = Blog::where('id',$id)->first();
        $check = base_path() . '/public/upload/berita/' . $data->gambar;

        $data->judul = $r->judul;
        $data->isi = $r->isi;

        $file = $r->file('file');
        if($file == null) {
            //echo "file not found";
        } else {
            if(file_exists($check)) {
                //echo "file ada";
                unlink($check);
            }
            
            $path = base_path() . '/public/upload/berita/';
            $fileName = date('Ymdhis') . "." . $file->getClientOriginalExtension();
            $up = $r->file('file')->move($path,$fileName);
            $data->gambar = $fileName;       
        }
        $data->save();
        return redirect('/admin');
    }
}
