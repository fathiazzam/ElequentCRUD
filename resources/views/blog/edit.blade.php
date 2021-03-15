    @extends('layouts.master')

    @section('title', 'Fathi Nur Azzam')
        
    @section('content')  

  
     <section class="mt-5">
    
    
    <div class="container">
        <div class="col-lg-12 col-md-12">
            
            <div class="card ">
                <div class="body">
                    <div class="row mt-5 mb-5">
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="float-right">
                                <img class="rounded-circle float-right" style="width:60%"
                                    src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12  ">
                            <h4 class="m-t-0 m-b-0"><strong>{{$itu->nama}}</strong></h4>
                            <p>{{$itu->nik}}</p>
                        </div>
                        
                        <div class="col-lg-1">
                            <div class="vl"></div>
                        </div>
                        <div class="col-lg-4">
                            
                            <h6>Jenis Kelamin <span class="text-muted float-right mr-5">{{$itu->jns_kl}}</span> </h6> 
                            <h6>Tempat Lahir <span class="text-muted float-right mr-5">{{$itu->tmpt_lhr}}</span> </h6> 
                            <h6>Tanggal Lahir<span class="text-muted float-right mr-5">{{$itu->tgl_lhr}}</span> </h6> 
                            <h6>Alamat <span class="text-muted float-right mr-5" >{{$itu->alamat}}</span> </h6> 
                            <h6>No Hanphone <span class="text-muted float-right mr-5">{{$itu->nohp}}</span> </h6>
                            <h6>Pekerjaan <span class="text-muted float-right mr-5">{{$itu->pekerjaan}}</span> </h6>
                            <h6>Anggota Keluarga <span class="text-muted float-right mr-5">{{$itu->angt_klg}}</span> </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="mt-5">
    <div class="container bg-white pt-4 py-3 px-4">
        <form action="/data/{{$itu->id}}" method="POST">
            <div class="form-group">
                <label for="name" class="font-weight-bold">Nama</label>
                <input type="name" class="form-control" name="nama" id="name" aria-describedby="name" placeholder="" value="{{$itu->nama}}">
            </div>

            <div class="form-group">
                <label for="nik" class="font-weight-bold">NIK</label>
                <input type="number" class="form-control" name="nik" id="nik" aria-describedby="nik" placeholder="" value="{{$itu->nik}}">
            </div>

            <div class="form-group">
                <label for="jenis_kelamin" class="font-weight-bold">Jenis Kelamin</label>
                <input type="text" class="form-control" name="jns_kl" id="jenis_kelamin" aria-describedby="jenis_kelamin" placeholder="" value="{{$itu->jns_kl}}">
            </div>

            <div class="form-group">
                <label for="tempat_lahir" class="font-weight-bold">Tempat Lahir</label>
                <input type="text" class="form-control" name="tmpt_lhr" id="tempat_lahir" aria-describedby="tempat_lahir" 
                    placeholder="" value="{{$itu->tmpt_lhr}}">
            </div>

            <div class="form-group">
                <label for="tanggal_lahir" class="font-weight-bold">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lhr" id="tanggal_lahir" aria-describedby="tanggal_lahir"
                    placeholder="" value="{{$itu->tgl_lhr}}">
            </div>

            <div class="form-group">
                <label for="alamat" class="font-weight-bold">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="alamat" placeholder="" value="{{$itu->alamat}}">
            </div>

            <div class="form-group">
                <label for="no_hp" class="font-weight-bold">No Handphone</label>
                <input type="text" class="form-control" name="nohp" id="no_hp" aria-describedby="no_hp" placeholder="" value="{{$itu->nohp}}">
            </div>

            <div class="form-group">
                <label for="pekerjaan" class="font-weight-bold">Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" aria-describedby="pekerjaan"
                    placeholder="" value="{{$itu->pekerjaan}}">
            </div>

            <div class="form-group">
                <label for="anggota_keluarga" class="font-weight-bold">Anggota Keluarga</label>
                <input type="number" class="form-control" name="angt_klg" id="anggota_keluarga"
                    aria-describedby="anggota_keluarga" placeholder="" value="{{$itu->angt_klg}}">
            </div>

            <button type="submit" name="submit" class="btn text-left btn-primary btn-block mt-4" value="edit">Submit</button>
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
        </form>
    </div>
</section>
   
@endsection