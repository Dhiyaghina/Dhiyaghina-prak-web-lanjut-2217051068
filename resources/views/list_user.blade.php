@extends('layouts.app')

@section('content')
    <a href ="{{ route('users.create')}}" class="btn-btn-primary mb-3">Tambah Pengguna Baru</a>
    
    <table style="width: 100%; border-collapse: collapse; margin: 20px 0;">
        <thead>
            <tr style="background-color: grey;">
                <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">ID</th>
                <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Nama</th>
                <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">NPM</th>
                <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Kelas</th>
                <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Foto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">{{ $user['id'] }}</td>
                <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">{{ $user['nama'] }}</td>
                <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">{{ $user['npm'] }}</td>
                <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">{{ $user['nama_kelas'] }}</td>
                <td><a href="{{route('users.show',$user['id'])}}" class="btn btn-warning mb-3">View</a></td>
                    <!-- Tambahkan aksi seperti edit atau delete -->
                    <a href="{{route('user.edit',$user['id'])}}"class="btn btn-warning mb-3">Edit</a> 
                    <form action="{{route('user.destroy',$user['id'])}}"method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type ="submit" class="btn btn-danger btn-sm" 
                        onclick="return confirm ('Apakah anda yakin ingin menghapus user ini?')">Delete</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
@endsection
