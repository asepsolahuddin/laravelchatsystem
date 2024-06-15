<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class NewsController extends Controller
{
    public function index(Request $request){
    $query = $request->input('query');

    $recents = $this->recent_artikel();
    $newss = $this->search($query);

    return view('halaman-artikel', compact('recents', 'newss', 'query'));

    }

    public function recent_artikel(){
        return Artikel::orderBy('created_at', 'desc')->take(3)->get();
    }

    public function search($query){

        $posts = Artikel::query();

        if (!empty($query)) {
            $posts->where('judul', 'like', "%$query%")
                  ->orWhere('isi', 'like', "%$query%");
        }

        return $posts->paginate(3);

    }
}
