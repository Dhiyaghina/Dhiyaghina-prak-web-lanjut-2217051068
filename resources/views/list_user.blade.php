@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1> <!-- Tambahkan judul jika perlu -->
    
    <table style="width: 100%; border-collapse: collapse; margin: 20px 0;">
        <thead>
            <tr style="background-color: grey;">
                <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">ID</th>
                <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Nama</th>
                <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">NPM</th>
                <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Kelas</th>
                <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">{{ $user['id'] }}</td>
                <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">{{ $user['nama'] }}</td>
                <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">{{ $user['npm'] }}</td>
                <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">{{ $user['nama_kelas'] }}</td>
                <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">
                    <!-- Tambahkan aksi seperti edit atau delete -->
                    <a href="#">Edit</a> | <a href="#">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
