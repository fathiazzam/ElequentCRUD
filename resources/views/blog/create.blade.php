    @extends('layouts.master')

    @section('title', 'Fathi Nur Azzam')
        
    @section('content')  

<section class="mt-5">
    <div class="container bg-white pt-4 py-3 px-4">
        <form action="/data" method="POST">
            <div class="form-group">
                <label for="name" class="font-weight-bold">Nama</label>
                <input type="name" class="form-control" name="nama" id="name" aria-describedby="name" placeholder="">
            </div>

            <div class="form-group">
                <label for="nik" class="font-weight-bold">NIK</label>
                <input type="number" class="form-control" name="nik" id="nik" aria-describedby="nik" placeholder="">
            </div>

            <div class="form-group">
                <label for="jenis_kelamin" class="font-weight-bold">Jenis Kelamin</label>
                <input type="text" class="form-control" name="jns_kl" id="jenis_kelamin" aria-describedby="jenis_kelamin" placeholder="">
            </div>

            <div class="form-group">
                <label for="tempat_lahir" class="font-weight-bold">Tempat Lahir</label>
                <input type="text" class="form-control" name="tmpt_lhr" id="tempat_lahir" aria-describedby="tempat_lahir" 
                    placeholder="">
            </div>

            <div class="form-group">
                <label for="tanggal_lahir" class="font-weight-bold">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lhr" id="tanggal_lahir" aria-describedby="tanggal_lahir"
                    placeholder="">
            </div>

            <div class="form-group">
                <label for="alamat" class="font-weight-bold">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="alamat" placeholder="">
            </div>

            <div class="form-group">
                <label for="no_hp" class="font-weight-bold">No Handphone</label>
                <input type="text" class="form-control" name="nohp" id="no_hp" aria-describedby="no_hp" placeholder="">
            </div>

            <div class="form-group">
                <label for="pekerjaan" class="font-weight-bold">Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" aria-describedby="pekerjaan"
                    placeholder="">
            </div>

            <div class="form-group">
                <label for="anggota_keluarga" class="font-weight-bold">Anggota Keluarga</label>
                <input type="number" class="form-control" name="angt_klg" id="anggota_keluarga"
                    aria-describedby="anggota_keluarga" placeholder="">
            </div>

            <button type="submit" name="submit" class="btn text-left btn-primary btn-block mt-4" value="create">Submit</button>
            {{ csrf_field() }}
        </form>
    </div>
</section>
   
@endsection