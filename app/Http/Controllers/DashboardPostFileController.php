<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostFile;
use Illuminate\Support\Facades\Storage;


class DashboardPostFileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.postfile.index', [
            'post_file' => PostFile::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.postfile.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // 'user_id' => 'required',
            'title' => 'required|max:255',
            'data_file' => 'required|mimes:pdf,doc,docx|max:20000'
        ]);

        // $path = $request->file('file')->store('public');

        // // Ambil URL file yang disimpan
        // $url = Storage::url($path);

        if ($request->file('data_file')) {
            $validatedData['data_file'] = $request->file('data_file')->store('public/data-file');
        }

        PostFile::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'post baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //     if($postfile->author->id !== auth()->user()->id) {
        //         abort(403);
        //    }

        // $data_file = PostFile::where('id', '1');

        // return view('dashboard.postfile.show',[
        //     'postfile' => $postfile
        // ]);
        $postfile = Postfile::find($id);
        // dd($postfile);
        return view('dashboard.postfile.show', [
            'postfile' => $postfile
        ]);


        // return $postfile;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $postfile = PostFile::find($id);
        return view('dashboard.postfile.edit', [
            // 'postfile' => PostFile::all(),
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostFile $postfile)
    {
        $rules = [
            'title' => 'required|max:255',
            'data_file' => 'required|mimes:pdf,doc,docx|max:20000'
        ];
        
        // if($request->slug != $post->slug){
        //     $rules['slug'] = 'required|unique:posts';
        // }

        $validatedData = $request->validate($rules);

        
        // $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        PostFile::where('id', $postfile->id)
            ->update($validatedData);

        // $postfile = PostFile::find($id);
        // $postfile->update($request->all());
       


        return redirect('/dashboard/posts')->with('success', 'post telah diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        PostFile::destroy($id);

        // dd($id);

        return redirect('/dashboard/posts')->with('success', 'post telah dihapus!');
    }
    // public function tampilData($id){
    //     $post = Postfile::find($id);
    //     return view('dashboard.postfile.show',[
    //         'postfile' => $post
    //     ]);
    // }
}
