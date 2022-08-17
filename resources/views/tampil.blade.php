@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
  <div class="col-8 mt-5">
    <div class="card mt-5">
      <div class="card-header"><h4>Edit Data Pegawai</h4></div>
      <div class="card-body">
        <form action="/updatedata/{{ $data->id }}" method="POST">
          @csrf
          <div class="row gx-3 mb-3 text">
            <div class="col-md-6">
              <label class="form-label">Nama :</label>
              
              <input type="text" name="nama" value="{{ $data->nama }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="col-md-6">
              <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
              <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                <option selected>{{ $data->jeniskelamin }}</option>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="exampleInputEmail1" class="form-label">No Telepon</label>
              <input type="number" value="{{ $data->notelpon }}" name="notelpon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-md-6">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="text" name="email" value="{{ $data->email }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-md-6">
              <label for="exampleInputEmail1" class="form-label">Tempat</label>
              <input type="text" name="tempat" value="{{ $data->tempat }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-md-6">
              <label for="exampleInputEmail1" class="form-label">Tgl Lahir</label>
              <input type="date" name="tgl_lahir" value="{{ $data->tgl_lahir }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-md-6">
              <label for="exampleInputEmail1" class="form-label">Alamat</label>
              <input type="alamat" value="{{ $data->alamat }}" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="col-md-6">
              <label for="exampleInputEmail1" class="form-label">Agama</label>
              <input type="agama" value="{{ $data->agama }}" name="agama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-md-6">
              <label for="exampleInputEmail1" class="form-label">Status Pernikahan</label>
              <select class="form-select" name="statuspernikahan" aria-label="Default select example">
                <option selected>{{ $data->statuspernikahan }}   </option>
                <option value="menikah">Menikah</option>
                <option value="lajang">Lajang</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="exampleInputEmail1" class="form-label">Pekerjaan</label>
              <input type="text" value="{{ $data->pekerjaan }}" name="pekerjaan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          </div>
          <div class="col-md-6">
            <label for="exampleInputEmail1" class="form-label">Kewarganegaraan</label>
            <input type="text" value="{{ $data->kewarganegaraan }}" name="kewarganegaraan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <hr>
          @foreach($data->Keahlian as $keahlian)
          <div class="form-group row mt-4">
            <label class="col-sm-2 col-form-label">Keahlian</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="namakeahlian[]" value="{{ $keahlian->namakeahlian }}"
               required>
            </div>
          </div>
          <div class="form-group row mt-4">
            <label class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="keterangan[]" value="{{ $keahlian->keterangan }}"
               required>
            </div>
          </div>
          @endforeach
          <hr class="mt-5">
          @foreach($data->Pendidikan as $pendidikan)
          <div class="form-group row mt-4">
            <label class="col-sm-2 col-form-label">Pendidikan</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="namapendidikan[]" value="{{ $pendidikan->namapendidikan }}"
              placeholder="Your school" required>
            </div>
          </div>
          <div class="form-group row mt-4">
            <label class="col-sm-2 col-form-label">Tahun</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="tahunajaran[]" value="{{ $pendidikan->tahunajaran }}"
              placeholder="Masukan HP/Telp kamu" required>
            </div>
          </div>
          @endforeach
        </div>
        <div class="button mt-5">
          <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
          <a href="/pegawai"><button type="button" class="btn btn-primary btn-sm tambah mt-2">Kembali
          </button></a>
        </div>
      </form>

    </div>
  </div>
</div>
</div>
@endsection

