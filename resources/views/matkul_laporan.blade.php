<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Matkul</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <center>
                    <h2>{{ $judul }}</h2>
                </center>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Kode Matkul</th>
                            <th>Nama Matkul</th>
                            <th>Kode Dosen</th>
                            <th>Nama Dosen</th>
                            <th>Hari</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($matkul as $a)
                            <tr>
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->kode_matkul }}</td>
                                <td>{{ $a->nama_matkul }}</td>
                                <td>{{ $a->dosen->kode_dosen }}</td>
                                <td>{{ $a->dosen->nama_dosen }}</td>
                                <td>{{ $a->hari }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <h5>Mengetahui</h5>
                <br>
                <br>
                <br>
                <h5>Admin</h5>
            </div>
        </div>
    </div>
</body>
</html>