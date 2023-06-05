<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PostFile;
use Illuminate\Http\Request;

class PostfileApiController extends Controller
{
    public function index(){
        return response()->json(PostFile::all());
    }

    public function pemiluUndangUndang(){
        return response()->json(PostFile::where([
            ['kategori_luar', '=', '1'],
            ['kategori_dalam', '=', '1']
        ])->get());
    }

    public function pemiluPerbawaslu(){
        return response()->json(PostFile::where([
            ['kategori_luar', '=', '1'],
            ['kategori_dalam', '=', '2']
        ])->get());
    }

    public function pemilihanUndangUndang(){
        return response()->json(PostFile::where([
            ['kategori_luar', '=', '2'],
            ['kategori_dalam', '=', '1']
        ])->get());
    }

    public function pemilihanPerbawaslu(){
        return response()->json(PostFile::where([
            ['kategori_luar', '=', '2'],
            ['kategori_dalam', '=', '2']
        ])->get());
    }
}
