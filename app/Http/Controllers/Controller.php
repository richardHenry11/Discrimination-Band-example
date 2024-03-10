<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\personil;
use App\Models\track;
use App\Models\album;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    public function index() {
        return view('home',[
            "title" => "Home",
            "index" => personil::all()
        ]);
    }

    public function viewUpdate() {
        return view('data',[
            "title" => "Updates",
            "tracks" => track::latest()->filter(request(['keyword']))->paginate(3),
            "albums" => album::all(),
            "events" => event::latest()->paginate(3)
        ]);
    }

    public function about() {
        return view('about',[
            "title" => "About"
        ]);
    }

    public function show(personil $personil)
    {
        return view('detail', [
            "title" => "Personal",
            "content" => $personil 
        ]);
    }

    public function nyoba() {
        return view('nyoba',[
            "title" => "Nyoba"
        ]);
    }

    public function add()
    {
        return view('add',[
            'title' => 'Add'
        ]);
    }

    public function tambahEvent(Request $request)
    {
       $validate = $request->validate([
            'nama' => 'required|min:3',
            'deskripsi' => 'required|min:3',
            'apt' => 'required|min:3',
            'tempt' => 'required',
            'foto' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        //upload file
 
        $img = $request->file('foto');
        $request->foto->move(public_path('assets/img'), $img->getClientOriginalName());
        $validate["foto"] = $img->getClientOriginalName();

        //tambah data

        Event::create($validate);
        echo "
        <script>
            alert('Data Berhasil Ditambah');
            document.location.href = '/update';
        </script>";
    }

    public function delete($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        echo "
        <script>
            alert('Data Berhasil Dihapus');
            document.location.href = '/update';
        </script>";
    }
}