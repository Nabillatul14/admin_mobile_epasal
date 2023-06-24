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
            'postfile' => PostFile::all()
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
            'data_file' => 'required|mimes:pdf,doc,docx|max:20000',
            'kategori_luar' => 'required',
            'kategori_dalam' => 'required'
        ]);

        // $path = $request->file('file')->store('public');

        // // Ambil URL file yang disimpan
        // $url = Storage::url($path);

        if ($request->file('data_file')) {
            $validatedData['data_file'] = $request->file('data_file')->store('public/data-file');
            // dd($validatedData);
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

        // $postfile = Postfile::find($id);
        // // dd($postfile);
        // return view('dashboard.postfile.show', [
        //     'postfile' => $postfile
        // ]);


        // return $postfile;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $postfile = PostFile::find($id);
        // return view('dashboard.postfile.edit', [
        //     // 'postfile' => PostFile::all(),

        // ]);

        $postfile = PostFile::find($id);
        // $postfile PostFile::findOrFail($id)->first()->fill($request->all())->save();

        return view('dashboard.postfile.edit', compact(['postfile']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostFile $postfile, $id)
    {
        // $rules = [
        //     'title' => 'required',
        //     'data_file' => 'nullable|mimes:pdf,doc,docx|max:2048',
        // ];

        // $validatedData = $request->validate($rules);

        // // Cek apakah terdapat file yang diupload
        // if ($request->file('data_file')) {
        //     if ($postfile->data_file) {
        //         Storage::delete($postfile->data_file);
        //     }
        //     $validatedData['data_file'] = $request->file('data_file')->store('public/data-file');

        //     if ($request->file('data_file')->getClientOriginalName() !== $postfile->data_file) {
        //         $validatedData['data_file'] = $request->file('data_file')->storeAs('public/data-file', $request->file('data_file')->getClientOriginalName());
        //     }
        // } else {
        //     // Jika tidak ada file yang diupload, hapus key 'data_file' dari array $validatedData
        //     unset($validatedData['data_file']);
        // }

        // $postfile = PostFile::findOrFail($id);
        // $postfile->fill($request->all());
        // $postfile->kategori_luar = $request->kategori_luar; // Tambahkan baris ini
        // $postfile->kategori_dalam = $request->kategori_dalam; // Tambahkan baris ini
        // $postfile->save();

        // PostFile::where('postfile', '=', 5)->update($validatedData);

        // return redirect('/dashboard/posts')->with('success', 'Postingan Berhasil Di Update!');
        $rules = [
            'title' => 'required',
            'data_file' => 'nullable|mimes:pdf,doc,docx|max:2048',
        ];
    
        $validatedData = $request->validate($rules);
    
        $postfile = PostFile::findOrFail($id);
        $postfile->fill($request->all());
        $postfile->kategori_luar = $request->kategori_luar;
        $postfile->kategori_dalam = $request->kategori_dalam;
    
        // Mengubah link file menjadi format yang diinginkan
        if ($request->file('data_file')) {
            if ($postfile->data_file) {
                Storage::delete($postfile->data_file);
            }
            $file = $request->file('data_file');
            $fileName = $file->getClientOriginalName();
            $path = $file->storeAs('public/data-file', $fileName);
            $postfile->data_file = str_replace('storage/', 'public/', $path);
        }
    
        $postfile->save();
        return redirect('/dashboard/posts')->with('success', 'Postingan Berhasil Di Update!');
    
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostFile $postfile)
    {
        // PostFile::destroy($postfile->id);

        // // dd($id);

        // return redirect('/dashboard/posts')->with('success', 'post telah dihapus!');

        // PostFile::destroy($postfile->id);
        // return redirect('/dashboard/posts')->with('success', 'Data Berhasil di Hapus !');

        // PostFile::destroy($postfile->id);

        // return redirect('/dashboard/posts')->with('success', 'post telah dihapus!');
        PostFile::destroy($postfile->id);
        return redirect('/dashboard/posts')->with('success', 'Data Berhasil di Hapus !');
    }
    // public function tampilData($id){
    //     $post = Postfile::find($id);
    //     return view('dashboard.postfile.show',[
    //         'postfile' => $post
    //     ]);
    // }
}
