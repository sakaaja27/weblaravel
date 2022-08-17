@extends('layouts.main')
@section('container')
<div class="row justify-content-center mt-5">
  <div class="col-5">
    <div class="card mt-5">
      <div class="card-header"><h4>Detail Data Pegawai</h4></div>
      <div class="card-body">
        <form action="/detail/{{ $data->id }}" method="POST">
          @csrf
          <div class="row gx-3 mb-3 ">
            <div class="col-md-6">
              <h6>Nama anda</h6>
              <p>{{ $data->nama }}</p>
            </div>
            <div class="col-md-6">
              <h6>Jenis Kelamin</h6>
              <p>{{ $data->jeniskelamin }}</p>
            </div>
            <div class="col-md-6">
             <h6>No Telepon</h6>
             <p>{{ $data->notelpon }}</p>
           </div>
           <div class="col-md-6">
             <h6>Email</h6>
             <p>{{ $data->email }}</p>
           </div>
           <div class="col-md-6">
             <h6>Tempat</h6>
             <p>{{ $data->tempat }}</p>
           </div>
           <div class="col-md-6">
             <h6>Tgl Lahir</h6>
             <p>{{ $data->tgl_lahir }}</p>
           </div>
           <div class="col-md-6">
            <h6>Alamat</h6>
            <p>{{ $data->alamat }}</p>
          </div>
          <div class="col-md-6">
            <h6>Agama</h6>
            <p>{{ $data->agama }}</p>
          </div>
          <div class="col-md-6">
            <h6>Status Pernikahan</h6>
            <p>{{ $data->statuspernikahan }}</p>
          </div>
          <div class="col-md-6">
            <h6>Pekerjaan</h6>
            <p>{{ $data->pekerjaan }}</p>
          </div>
          <div class="col-md-6">
            <h6>Kewarganegaraan</h6>
            <p>{{ $data->kewarganegaraan }}</p>
          </div>
        </div>
        <hr>
        @foreach($data->Keahlian as $keahlian)
        <div class="form-group row mt-2">
          <h6 class="col-sm-3 form-label">Keahlian :</h6>
          <div class="col-sm-8">
            <p>{{ $keahlian->namakeahlian }}</p>
          </div>
          <div class="form-group row mt-2">
            <h6 class="col-sm-3 form-label">Keterangan :</h6>
            <div class="col-sm-8">
             <p>{{ $keahlian->keterangan }}</p>
           </div>
         </div>
       </div>
       @endforeach
       <hr>
       @foreach($data->Pendidikan as $pendidikan)
       <div class="form-group row mt-2">
          <h6 class="col-sm-3 form-label"> Pendidikan  :</h6>
          <div class="col-sm-8">
            <p>{{ $pendidikan->namapendidikan }}</p>
          </div>
          <div class="form-group row mt-2">
            <h6 class="col-sm-3 form-label">Tahun :</h6>
            <div class="col-sm-8">
             <p>{{ $pendidikan->tahunajaran }}</p>
           </div>
         </div>
       </div>
      @endforeach
    </form>

    <a href="/pegawai"><button type="button" class="btn btn-primary btn-sm tambah mb-2">Kembali</button></a>
  </div>
</div>
</div>
</div>
