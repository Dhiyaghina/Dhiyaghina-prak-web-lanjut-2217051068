@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style>
        body {
            font-family: "Raleway", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            background: pink;
            background-size: cover;
            background-position: center -20px;
        }

        .card {
            position: absolute;
            top: 100px;
            left: 590px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
            max-width: 260px;
            width: 100%;
            align-self: center;
        }

        .btn {
            padding-top: 5px;
            font-size: 15px;
            display: flex;
            margin-bottom: 20px;
            width: 70px;
            height: 35px;
            color: white;
            padding-left: 7px;
            background-color: #6482AD;
        }

        .text-danger {
            color: red;
            font-size: 12px;
            margin-top: -10px;
        }
    </style>
</head>
<body>
    <div class="card">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama"><br>
            @error('nama')
                <span class="text-danger">{{ $message }}</span>
            @enderror

            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm"><br>
            @error('npm')
                <span class="text-danger">{{ $message }}</span>
            @enderror

            <label for="kelas">Kelas:</label>
            <select name="kelas_id" id="kelas">
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</body>
@endsection
