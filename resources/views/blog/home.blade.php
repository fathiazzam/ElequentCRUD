  @extends('layouts.master')

  @section('title', 'Fathi Nur Azzam')
      
  @section('content')
  
      
  @foreach ($datas as $item)   
  <section class="mt-5">   
  
    <div class="container">
        <div class="col-lg-12 col-md-12">
            <form action="/data/{{$item->id}}" method="POST">
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
                            <h4 class="m-t-0 m-b-0"><strong>{{$item->nama}}</strong></h4>
                            <p>{{$item->nik}}</p>
                            <div>
                                <a class="btn btn-success btn-round" href="/data/{{$item->id}}/edit">Edit</a>
                                <a class="btn btn-primary" href="/data/{{$item->id}}">Resume</a>
                                
                                <button type="submit" action="{{$item->id}}" method="POST" name="submit" class="btn btn-danger" value="delete">Delete</button>
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                </form>
                            </div>
                        </div>
                        
                        <div class="col-lg-1">
                            <div class="vl"></div>
                        </div>
                        <div class="col-lg-4">
                            
                            <h6>Jenis Kelamin <span class="text-muted float-right mr-5">{{$item->jns_kl}}</span> </h6> 
                            <h6>Tempat Lahir <span class="text-muted float-right mr-5">{{$item->tmpt_lhr}}</span> </h6> 
                            <h6>Tanggal Lahir<span class="text-muted float-right mr-5">{{$item->tgl_lhr}}</span> </h6> 
                            <h6>Alamat <span class="text-muted float-right mr-5" >{{$item->alamat}}</span> </h6> 
                            <h6>No Hanphone <span class="text-muted float-right mr-5">{{$item->nohp}}</span> </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endforeach 
   
@endsection
  