<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
            font-family: "Raleway", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            background : pink;
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
/* 
.profile-picture img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 20px;
}

.profile-info {
    display: flex;
    flex-direction: column;
    width: 200px;
}

.info-box {
    background-color: #e0e0e0;
    color: #000;
    padding: 10px;
    margin-bottom: 10px;
    text-align: center;
    border-radius: 5px;
    font-size: 16px;
}  */
    </style>
</head>
<body>
<div class="card">
<div class="container">
    <h1>Profile User</h1> <br>
    <p>Nama : {{ $nama }}</p> <br>
    <p>NPM : {{$npm}}</p> <br>
    <p>Kelas : {{ $kelas_id ?? 'Kelas tidak ditemukan' }}</p>
</div>
</div>
</body>

</html>
