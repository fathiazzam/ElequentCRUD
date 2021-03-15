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
                            <h4 class="m-t-0 m-b-0"><strong>{{$apa->nama}}</strong></h4>
                            <p>{{$apa->nik}}</p>
                        </div>
                        
                        <div class="col-lg-1">
                            <div class="vl"></div>
                        </div>
                        <div class="col-lg-4">
                            
                            <h6>Jenis Kelamin <span class="text-muted float-right mr-5">{{$apa->jns_kl}}</span> </h6> 
                            <h6>Tempat Lahir <span class="text-muted float-right mr-5">{{$apa->tmpt_lhr}}</span> </h6> 
                            <h6>Tanggal Lahir<span class="text-muted float-right mr-5">{{$apa->tgl_lhr}}</span> </h6> 
                            <h6>Alamat <span class="text-muted float-right mr-5" >{{$apa->alamat}}</span> </h6> 
                            <h6>No Hanphone <span class="text-muted float-right mr-5">{{$apa->nohp}}</span> </h6>
                            <h6>Pekerjaan <span class="text-muted float-right mr-5">{{$apa->pekerjaan}}</span> </h6>
                            <h6>Anggota Keluarga <span class="text-muted float-right mr-5">{{$apa->angt_klg}}</span> </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

   
@endsection