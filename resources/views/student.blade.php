
@extends('layouts.main')
@section('title', 'eMaha-Student')
@section('content')


    <div class="card mt-4">
        <div class="card-header">
        <a href="/student/formadd" class="btn btn-primary" role="button"><i class="bi bi-person-plus-fill"></i> Student</a>

        <form action="/student/search" method="GET" class="form-inline my-2 my-lg-0 float-right">
            <input name="q" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
        </div>
        <div class="card-body">
          
        @if (session('flash'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{session('flash')}}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        @if (session('flush'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          <strong>{{session('flush')}}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        @if (session('flish'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>{{session('flish')}}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">NIM</th>
              <th scope="col">Nama</th>
              <th scope="col">Gender</th>
              <th scope="col">Prodi</th>
              <th scope="col">Minat</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($mhs as $idx => $m)
                <tr>
                <th scope="row">{{ $mhs->firstItem() + $idx }}</th>
                <td>{{$m ->nim}}</td>
                <td>{{$m ->nama}}</td>
                <td>{{$m ->gender}}</td>
                <td>{{$m ->prodi}}</td>
                <td>{{$m ->minat}}</td>
                <td>
                  <a href="/student/formedit/{{ $m->id }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>

                  <a onclick="delConf({{ $m->id }})" id="delete" class="btn btn-danger"><i class="bi bi-x-square-fill"></i></a>
                  
                </td>
                </tr>
            @endforeach

          </tbody>
        </table>    
            <span class="float-right">  
                {{$mhs->links()}}
            </span>
                
            </div>
            </div>

        
          <div id="konfirmasi" style="
            display:none;
            color: black;
            z-index: 20;
            position: absolute; 
            height:20%;
            width: 40%; 
            top:20%;
            left:20%;
            padding: 30px;
            background-color: #FEA1A1;
            text-align: center;
            ">
            <h5>Apakah anda yakin ingin menghapus data?</h5> <br>
            <a href="/student/delete/{{$m->id}}" id="delete" class="btn btn-danger">Confrim Delete</i></a>

        </div>

        <div id="container" style="
            display: none;
            z-index:10;
            position: absolute;
            width: 100vw;
            height: 100vh;
            top:0;
            left: 0;
            background-color: rgba(0,0,0,0.2);
          "></div>
        
@endsection
<script>

function delConf(){
  let konfirmasi = document.getElementById("konfirmasi");
  let background = document.getElementById("container");
  konfirmasi.style.display = "block";
  background.style.display = "block";
}
</script>
