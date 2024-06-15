<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;;


class ArtikelController extends Controller
{
    //
    public function index() : View {
        
        //get data
        $artikels = Artikel::latest()->paginate(10);

        //render view
        return view('pages.dashboard.artikels', compact('artikels'));
        
    }

    public function create() : View{
        return view('pages.dashboard.create_artikels');
    }

    public function store(Request $request): RedirectResponse{
        //validasi
        $request->validate([
        'user_id' => 'required',
        'cover_path' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        'judul' => 'required',
        'kategori'  => 'required', 
        'isi' => 'required',

        ]);

        //upload gambar
        $cover_path = $request->file('cover_path');
        $cover_path->storeAs('public/products', $cover_path->hashName());

        //insert video
        Artikel::create([
        'user_id' => $request->user_id,
        'cover_path' =>$cover_path->hashName(),
        'judul' => $request->judul,
        'kategori' => $request->kategori,
        'isi' => $request->isi,
        ]);
    //redirect to index
    return redirect()->route('artikels.index')->with(['success' => 'Data Berhasil Disimpan!']);

    }

    public function show(string $id) : View{
        
        $artikels = Artikel::FindOrFail($id);

        return view('pages.dashboard.view_artikel', compact('artikels'));
    }

    public function artikel() : View{
        $posts = Artikel::orderBy('created_at', 'desc')->take(3)->get();

        return view('welcome', compact('posts'));
    }

    public function deskripsi(string $id) : View{
        $posts = Artikel::FindOrFail($id);

        return view('pages.dashboard.view_artikel', compact('posts'));
    }

    public function show_artikel() : View{

        return view('halaman-artikel');

    }

    // public function recent_artikel(){
    //     $recents = Artikel::orderBy('created_at', 'desc')->take(3)->get();

    //     return view('halaman-artikel', compact('recents'));
        
    // }

    // public function search(Request $request){
    //     $query = $request->input('query');

    //     $newss = Artikel::where('judul', 'like', "%$query%")
    //     ->orWhere('isi', 'like', "%$query%")
    //     ->paginate(3);

    //     return view('halaman-artikel', compact('newss'));

    // }

    
}
