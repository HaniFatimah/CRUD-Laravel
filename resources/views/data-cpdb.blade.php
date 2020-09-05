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
    <div class="container">
        <div class="row">
            <h2>Tabel Calon Siswa</h2>
            <table>
                <tr>
                    <td>No</td>
                    <td>Nomor PPDB</td>
                    <td>Nama Calon Siswa</td>
                    <td>Asal Sekolah</td>
                    <td>Pilihan 1</td>
                    <td>Pilihan 2</td>
                    <td>Alamat</td>
                    <td>Nomor Hp</td>
                    <td>Aksi</td>
                </tr>
                @forelse ($cpdb as $calonsiswa)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $calonsiswa->noppdb }}</td>
                    <td>{{ $calonsiswa->nama }}</td>
                    <td>{{ $calonsiswa->asal_sekolah }}</td>
                    <td>{{ $calonsiswa->pilihan1 }}</td>
                    <td>{{ $calonsiswa->pilihan2 }}</td>
                    <td>{{ $calonsiswa->alamat }}</td>
                    <td>{{ $calonsiswa->nohp }}</td>
                    <td></td>
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