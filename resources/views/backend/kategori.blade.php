@extends('layouts.backend')

@section('title', 'Kategori')

@section('content')
<h1>Kategori Produk</h1>
    <a href="{{ route('categories.create') }}">Create Category</a>
    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->nama }}</td>
                    <td>
                        <a href="{{ route('categories.show', $category->id) }}">View</a>
                        <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection