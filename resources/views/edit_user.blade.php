@extends('layouts.app')

@section('content')
<div>
    <div class="mb-3 mt-2 m-3">
        <a href="{{ route('user.list') }}" class="btn btn-success">List User</a>
    </div>
    <!-- Isi Section -->
    <form action="{{ route('user.update', $user['id']) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container mt-5">
            <h1 class="text-center">Input Data</h1>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama', $user->nama) }}"
                    placeholder="Nama anda">
            </div>

            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" class="form-control" name="npm" id="npm" value="{{ old('npm', $user->npm) }}"
                    placeholder="NPM anda">
            </div>

            <label for="kelas">Kelas</label>
            <select class="form-select" name="kelas_id" id="kelas_id">
                @foreach ($nama_kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                    {{ $kelasItem->nama_kelas }}
                </option>
                @endforeach
            </select>

            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" id="jurusan" value="{{ old('jurusan', $user->jurusan) }}"
                    placeholder="Jurusan anda">
            </div>

            <div class="mb-3">
                <label for="semester" class="form-label">Jurusan</label>
                <input type="text" class="form-control" name="semester" id="semester" value="{{ old('npm', $user->npm) }}"
                    placeholder="Jurusan anda">
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input class="form-control" type="file" id="foto" name="foto">
                @if ($user->foto)
                <img src="{{ asset('storage/uploads/' . $user->foto) }}" alt="Foto User" width="100">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('user.list') }}" class="btn btn-danger">Kembali</a>
        </div>
    </form>

</div>


@endsection