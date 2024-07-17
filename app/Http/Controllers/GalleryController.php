<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\HomeController;

class GalleryController extends Controller
{

    protected $HomeController;

    public function __construct(HomeController $HomeController)
    {
        $this->HomeController = $HomeController;
    }

    public function index()
    {

        $galleries = $this->HomeController->getGallery();
        return view('backend.gallery', compact('galleries'));
    }

    public function addImage($imageName)
    {
        // $request->file('image')->move(public_path('images'), $imageName);
        return redirect()->route('gallery')->with('success', 'Gambar berhasil ditambahkan.');
    }

    public function deleteImage($gambar)
    {
        if ($gambar) {
            // Proses penghapusan gambar dengan menggunakan $imageName
            File::delete(public_path('gallery/' . $gambar));

            // Setelah berhasil menghapus gambar, kembalikan pengguna ke halaman galeri
            return redirect()->route('galleries')->with('success', 'Gambar berhasil dihapus.');
        } else {
            return redirect()->route('galleries')->with('error', 'Gambar tidak ditemukan.');
        }

    }

    public function proses_upload(Request $request){
		$request->validate([
			'file' => 'required'
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
		$tujuan_upload = public_path('gallery');
 
                // upload file
		$file->move($tujuan_upload,$file->getClientOriginalName());
        return redirect()->route('galleries');
	}

}
