@extends('layouts.main')
@section('title', 'eMaha-Form Student')
@section('content')
    <div class="card mt-4">
        <div class="card-header">  
            <strong>Form Data Student</strong>
        </div>
        <div class="card-body">
            <form action="/student/save" method="POST">
                @csrf

                <div class="form-group">
                    <label>NIM</label>
                    <input type="number" name="nim" class="form-control" placeholder="Input Your NIM">

                    <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Input Your Name">

                    <label>Gender</label>
                    <div class="form-check">
                    <input type="radio" id="pria" name="gender" class="form-check-input" value="Pria">
                    <label for="pria">Pria</label>
                    </div>
                    <div class="form-check">
                    <input type="radio" id="wanita" name="gender" class="form-check-input" value="Wanita">
                    <label for="wanita">Wanita</label>
                    </div>

                    <label>Program Studi</label>
                    <div class="form-group">
                    <select name="prodi" class="form-control">
                    <option value="0">--Choose Prodi--</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Informatika">Informatika</option>
                    <option value="Ilmu Komputer">Ilmu Komputer</option>
                    </select>
                    </div>

                    <label>Minat</label>
                    <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="AI">
                    <label>Artificial Intelligence</label>
                    </div>
                    <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="ProgWeb">
                    <label>Pemrograman Website</label>
                    </div>
                    <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="EtProf">
                    <label>Etika Profesi</label>
                    </div>

                    <div class="form-group mt-4">
                        <button type="submit" role="button" class="btn btn-primary"> Submit </button>
                    </div>

        </div>
        </form>
        </div>
    </div>
@endsection