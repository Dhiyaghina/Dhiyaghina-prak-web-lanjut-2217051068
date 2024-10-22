@extends('layouts.app')

@section('content')
<div class="mb-3 mt-2 m-3">
    <a href="{{ route('users.create') }}" class="btn btn-success">Tambah User</a>
</div>

<div class="container mt-5">
    <h1 class="text-center">List Data</h1><br>
    
    <div class="row">
        @foreach ($users as $user) 
        <div class="col-md-4">
            <div class="card mb-4" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('/upload/img/' . $user->foto) }}" alt="Foto User" width="100">
                <div class="card-body">
                    <h5 class="card-title">{{ $user['nama'] }}</h5>
                    <p class="card-text">
                        <strong>ID:</strong> {{ $user['id'] }}<br>
                        <strong>NPM:</strong> {{ $user['npm'] }}<br>
                        <strong>Kelas:</strong> {{ $user['nama_kelas'] }}<br>
                        <strong>Jurusan:</strong> {{ $user['jurusan'] }}<br>
                        <strong>Semester:</strong> {{ $user['semester'] }}
                    </p>
                    <a href="{{ route('user.show', $user['id']) }}" class="btn btn-primary btn-sm">View</a>
                    <a href="{{ route('user.edit', $user['id']) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('user.destroy', $user['id']) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" 
                            onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
