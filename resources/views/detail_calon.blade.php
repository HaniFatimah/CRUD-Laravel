<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Calon Siswa</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>
    <div class="container bg-white">
        <div class="row">

        <div class="mt-4 card border-secondary" style="width: 100%">
        <div class="card-header bg-transparent border-success">
            <h2>Form Daftar Calon Siswa {{ $calonsiswa->nama }}</h2>           
            <h3>SMK Taruna Bhakti Depok</h3>
        </div>
        <div class="card-body">          
                @csrf
                <div class="form-group">
                    <label for="noppdb">Nomor PPDB   : {{ $calonsiswa->noppdb }} </label>
                   

                <div class="form-group">
                    <label for="nama">Nama Calon Siswa  : {{ $calonsiswa->nama }}</label>
                    

                <div class="form-group">
                    <label for="asal_sekolah">Asal Sekolah : {{ $calonsiswa->asal_sekolah }}</label>
                    

                
                <div class="form-group">
                    <label for="pilihan1">Pilihan Jurusan 1 : {{ $calonsiswa->pilihan1 }}</label>
                    

                <div class="form-group">
                    <label for="pilihan2">Pilihan Jurusan 2  : {{ $calonsiswa->pilihan2 }}</label>
                   


                <div class="form-group">
                    <label for="alamat">Alamat  : {{ $calonsiswa->alamat }} </label>
                    


                <div class="form-group">
                    <label for="nohp">Nomor Handphone  : {{ $calonsiswa->nohp }} </label>      
        </div>
        </div>             
        </div>
    </div>
</body>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>