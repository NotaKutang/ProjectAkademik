<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Mahasiswa</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <center>
                    <h2>{{ $judul }}</h2>
                </center>
    
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Nomor Hp</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $a)
                            <tr>
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->nim }}</td>
                                <td>{{ $a->nama }}</td>
                                <td>{{ $a->jurusan }}</td>
                                <td>{{ $a->nomor_hp }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    <h5>Mengetahui</h5>
                    <br>
                    <br>
                    <br>
                    <h5>Admin</h5>
                </div>
            </div>
        </div>
    </div>


</body>
</html>