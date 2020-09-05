<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Calon Siswa</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>
<br>
    <div class="container">
        <div class="row">
        <h1>Tabel Calon Siswa</h1>
        <br><br><br>
            <table class="table">
            
                <tr>
                    <th>No</th>
                    <th>Nomor PPDB</th>
                    <th>Nama Calon Siswa</th>
                    <th>Asal Sekolah</th>
                    <th>Pilihan 1</th>
                    <th>Pilihan 2</th>
                    <th>Alamat</th>
                    <th>Nomor Hp</th>
                    <th>Aksi</th>
                </tr>

                <tr>
                    @forelse ($calonsiswa as $itemSiswa)

                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $itemSiswa->noppdb }}</td>
                    <td>{{ $itemSiswa->nama }}</td>
                    <td>{{ $itemSiswa->asal_sekolah }}</td>
                    <td>{{ $itemSiswa->pilihan1 }}</td>
                    <td>{{ $itemSiswa->pilihan2 }}</td>
                    <td>{{ $itemSiswa->alamat }}</td>
                    <td>{{ $itemSiswa->nohp }}</td>
                    <td><a href="#">Edit</a></td>                   
                </tr>     
                    @empty
                    <td colspan="7">Tidak Ada Data</td>
                    @endforelse         
            </table>
        </div>
    </div>
    
</body>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>