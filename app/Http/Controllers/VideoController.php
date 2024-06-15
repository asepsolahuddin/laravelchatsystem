<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;


class VideoController extends Controller
{
    //
    public function index() : View {
        
        //get data
        $videos = Videos::latest()->paginate(10);

        //render view
        return view('pages.dashboard.videos', compact('videos'));
        
    }

    public function create() : View{
        return view('pages.dashboard.create');
    }

    public function store(Request $request): RedirectResponse{
            //validasi
            $request->validate([
            'user_id' => 'required',
            'judul' => 'required',
            'cover_path' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'deskripsi' => 'required',
            'video_url' => 'required',
            'kategori'  => 'required', 
    
            ]);

            //upload gambar
            $cover_path = $request->file('cover_path');
            $cover_path->storeAs('public/products', $cover_path->hashName());

            //insert video
            Videos::create([
            'user_id' => $request->user_id,
            'judul' => $request->judul,
            'cover_path' =>$cover_path->hashName(),
            'deskripsi' => $request->deskripsi,
            'video_url' => $request->video_url,
            'kategori' => $request->kategori
            ]);
        //redirect to index
        return redirect()->route('videos.index')->with(['success' => 'Data Berhasil Disimpan!']);

    }

    public function show(string $id): View{

        //get video dari id
        $videos = Videos::FindOrFail($id);

        //view data video
        return view('pages.dashboard.detailvid', compact('videos'));

    }

    public function edit(string $id): View{
        $videos = Videos::FindOrFail($id);

        //view data video
        return view('pages.dashboard.edit', compact('videos'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        // Validasi request
        $request->validate([
            'user_id' => 'required',
            'judul' => 'required',
            'cover_path' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'deskripsi' => 'required',
            'video_url' => 'required',
            'kategori' => 'required',
        ]);
    
        // Cari video
        $video = Videos::findOrFail($id);
    
        // Mengecek apakah ada file image
        if ($request->hasFile('cover_path')) {
            // Upload gambar baru
            $cover_path = $request->file('cover_path');
            $cover_path->storeAs('public/products', $cover_path->hashName());
    
            // Menghapus gambar lama jika ada
            if ($video->cover_path) {
                Storage::delete('public/products/' . $video->cover_path);
            }
    
            // Update video dengan gambar baru
            $video->update([
                'user_id' => $request->user_id,
                'judul' => $request->judul,
                'cover_path' => $cover_path->hashName(),
                'deskripsi' => $request->deskripsi,
                'video_url' => $request->video_url,
                'kategori' => $request->kategori,
            ]);
        } else {
            // Update video tanpa mengubah gambar
            $video->update([
                'user_id' => $request->user_id,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'video_url' => $request->video_url,
                'kategori' => $request->kategori,
            ]);
        }
    
        return redirect()->route('videos.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse {

        $video = Videos::FindOrFail($id);

        Storage::delete('public/products'. $video->custom_path);

        $video->delete();

        return redirect()->route('videos.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
