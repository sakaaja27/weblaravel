@extends('layouts.main')
@section('container')
<div class="row justify-content-center mt-5">
  <div class="col-6">
    <div class="card mt-5">
      <div class="card-header"><h5>Add Data Pegawai</h5></div>
      <div class="card-body">
        <form action="/insertdata" method="POST">
          @csrf
          <div class="row gx-3 mb-3 text">
            <div class="col-md-6">
              <label for="exampleInputEmail1" class="form-label">Nama anda</label>
              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-md-6">
              <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
              <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                <option selected>Pilih :</option>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="exampleInputEmail1" class="form-label">No Telepon</label>
              <input type="number" name="notelpon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-md-6">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-md-6">
              <label for="exampleInputEmail1" class="form-label">Tempat</label>
              <input type="text" name="tempat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-md-6">
              <label for="exampleInputEmail1" class="form-label">Tgl Lahir</label>
              <input type="date" name="tgl_lahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-md-6">
              <label for="exampleInputEmail1" class="form-label">Alamat</label>
              <input type="alamat" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="col-md-6">
              <label for="exampleInputEmail1" class="form-label">Agama</label>
              <input type="agama" name="agama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-md-6">
              <label for="exampleInputEmail1" class="form-label">Status Pernikahan</label>
              <select class="form-select" name="statuspernikahan" aria-label="Default select example">
                <option selected>Pilih :</option>
                <option value="menikah">Menikah</option>
                <option value="lajang">Lajang</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="exampleInputEmail1" class="form-label">Pekerjaan</label>
              <input type="text" name="pekerjaan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-md-6">
              <label for="exampleInputEmail1" class="form-label">Kewarganegaraan</label>
              <input type="text" name="kewarganegaraan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          </div>
          <hr>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Keahlian</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="namakeahlian[]"
              placeholder="Masukan Keahlian kamu" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Detail</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="keterangan[]"
              placeholder="detail keahlianmu bro" required>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <a href="#" class="addcustomer btn btn-primary btn-sm m-2" style="float: right;">Tambah Keahlian</a>
            </div>
          </div>

          <div class="customer"></div>
          <hr>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Riwayat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="namapendidikan[]"
              placeholder="Masukan pendidikan" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tahun </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="tahunajaran[]"
              placeholder="tahun bro" required>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <a href="#" class="addpendidikan btn btn-primary btn-sm m-2" style="float: right;">Tambah Pendidikan</a>
            </div>
          </div>

          <div class="pendidikan"></div>


          <div class="button" style="float:left;">
            <button type="submit" class="btn btn-primary btn-sm mt-3">Submit</button>
            <a href="/pegawai"><button type="button" class="btn btn-primary btn-sm tambah mt-3">Kembali</button></a>
          </div>
        </form>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script type="text/javascript">
      $('.addcustomer').on('click', function() {
        addcustomer();
      });
      function addcustomer() {
        var customer =
        '<div> <div class="form-group row"><label class="col-sm-2 col-form-label">Keahlian</label><div class="col-sm-10"><input type="text" class="form-control" name="namakeahlian[]" placeholder="Masukan Keahlian kamu" required></div></div><div class="form-group row"><label class="col-sm-2 col-form-label">Detail</label><div class="col-sm-10"><input type="text" class="form-control" name="keterangan[]"  placeholder="Detail keahlianmu bro" required></div></div></div><div class="form-group row"><label class="col-sm-2 col-form-label"></label><div class="col-sm-10"><a href="#" class="remove btn btn-danger btn-sm m-2" style="float: right;">Hapus</a></div></div></div>';
        $('.customer').append(customer);
      };
      $('.remove').live('click', function() {
        $(this).parent().parent().parent().remove();
      });
    </script>

    <script type="text/javascript">
      $('.addpendidikan').on('click', function() {
        addpendidikan();
      });
      function addpendidikan() {
        var pendidikan =
        '<div> <div class="form-group row"><label class="col-sm-2 col-form-label">Riwayat</label><div class="col-sm-10"><input type="text" class="form-control" name="namapendidikan[]" placeholder="Masukan Pendidikan kamu" required></div></div><div class="form-group row"><label class="col-sm-2 col-form-label">Tahun</label><div class="col-sm-10"><input type="text" class="form-control" name="tahunajaran[]" placeholder="tahun bro" required></div></div></div><div class="form-group row"><label class="col-sm-2 col-form-label"></label><div class="col-sm-10"><a href="#" class="remove btn btn-danger btn-sm m-2" style="float: right;">Hapus</a></div></div></div>';
        $('.pendidikan').append(pendidikan);
      };
      $('.remove').live('click', function() {
        $(this).parent().parent().parent().remove();
      });
    </script>
  </div>


</div>
@endsection
<!-- <script type="text/javascript">
  function add(pendidikan){ 
    var table = document.getElementById('pendidikan');
    var rowCount = table.rows.length;
    var cellCount = table.rows[0].cells.length; 
    var row = table.insertRow(rowCount);
    for(var i =0; i <= cellCount; i++){
      var cell = 'cell'+i;
      cell = row.insertCell(i);
      var copycel = document.getElementById('pendidikan'+i).innerHTML;
      cell.innerHTML=copycel;

    }
  }
  function del(pendidikan){
    var table = document.getElementById('pendidikan');
    var rowCount = table.rows.length;
    if(rowCount > '2'){
      var row = table.deleteRow(rowCount-1);
      rowCount--;
    }
    else{
      alert('ayo dung sisain');
    }
  }
  function addRows(keahlian){ 
    var table = document.getElementById('keahlian');
    var rowCount = table.rows.length;
    var cellCount = table.rows[0].cells.length; 
    var row = table.insertRow(rowCount);
    for(var i =0; i <= cellCount; i++){
      var cell = 'cell'+i;
      cell = row.insertCell(i);
      var copycel = document.getElementById('keahlian'+i).innerHTML;
      cell.innerHTML=copycel;

    }
  }
  function deleteRows(keahlian){
    var table = document.getElementById('keahlian');
    var rowCount = table.rows.length;
    if(rowCount > '2'){
      var row = table.deleteRow(rowCount-1);
      rowCount--;
    }
    else{
      alert('sisain satu baris mas');
    }
  }
</script>

 -->
