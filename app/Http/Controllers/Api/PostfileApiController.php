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
}
