@extends('layouts.backend')

@section('title', 'Gallery')

<style>
    /* * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    } */

    /* body {
        font-family: Arial, sans-serif;
        background-color: #f3f3f3;
    } */

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 10px;
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
    }

    .gallery-item img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.1);
    }

    .gallery-actions button {
        padding: 10px 20px;
        margin: 0 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        background-color: #007bff;
        color: #fff;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .gallery-actions button:hover {
        background-color: #0056b3;
    }

    .delete-button {
        display: none;
        text-decoration: none;
    }

    .gallery-item:hover .delete-button {
        display: block;
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: red;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 5px 10px;
        cursor: pointer;
    }
</style>

@section('content')

    <div class="container">
        <h1>Photo Gallery</h1>
        <div class="gallery-actions">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br />
                    @endforeach
                </div>
            @endif

            <form action="/upload/proses" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <b>Upload Gambar</b><br />
                    <input type="file" name="file">
                </div>

                <input type="submit" value="Upload" class="btn btn-primary">
            </form>
            {{-- <button onclick="#">Tambah Foto</button> --}}
        </div>
    </div>

    <div class="container">
        <div class="gallery">
            @foreach ($galleries as $image)
                <div class="gallery-item">
                    <img src="{{ asset('gallery/' . $image) }}" alt="Image">
                    <a class="delete-button" href="/galleries/hapus/{{ $image }}">Hapus</a>
                    {{-- <button class="delete-button" onclick="deleteImage('{{ $image }}')">Hapus</button> --}}
                </div>
            @endforeach
        </div>
    </div>

    <script>
        // function deleteImage(imageUrl) {
        //     // Kirim permintaan penghapusan gambar dengan AJAX
        //     // Contoh menggunakan jQuery
        //     $.ajax({
        //         url: '',
        //         method: 'POST',
        //         data: { 
        //             imageUrl: imageUrl,
        //             _token: '{{ csrf_token() }}'
        //         },
        //         success: function(response) {
        //             // Jika penghapusan berhasil, perbarui tampilan galeri
        //             window.location.reload();
        //         },
        //         error: function(xhr, status, error) {
        //             // console.error(error);
        //             alert('Terjadi kesalahan saat menghapus gambar.');
        //         }
        //     });
        // }
    </script>

    <script src="js/jquery-3.7.1.min.js"></script>

@endsection
