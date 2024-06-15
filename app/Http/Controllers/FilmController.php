<?php

namespace App\Http\Controllers;
use App\Models\Videos;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index(Request $request){
        $query = $request->input('query');
    
        $recents = $this->recent_artikel();
        $films = $this->search($query);
    
        return view('halaman-video', compact('recents', 'films', 'query'));
    
        }
    
        public function recent_artikel(){
            return Videos::orderBy('created_at', 'desc')->take(5)->get();
        }
    
        public function search($query){
    
            $posts = Videos::query();
    
            if (!empty($query)) {
                $posts->where('judul', 'like', "%$query%")
                      ->orWhere('deskripsi', 'like', "%$query%");
            }
    
            return $posts->paginate(6);
    
        }
}
