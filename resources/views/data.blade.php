
<html lang="en"> 

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link rel="stylesheet" type="text/css" href="/css/homemode.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">PT.ETH ||</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active"  href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#table">Table</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome Back, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#"><i class="fa-solid fa-table"></i>Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout
                  </button>
                </form>
              </li>
              <li>
                <input type="checkbox" class="nav-link" onclick="ubahMode()">
              </li>
            </ul>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
  <div class="home" >
    <div class="container mt-5">
      <!-- home -->
      <div class="intro" style="height: 100vh;" >
        <section class="resume-section" id="home">
          <div class="resume-section-content ">
            <span>
              <div class="atas">
                <h1>TESTING</h1>
                <p class="lead mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi quos, repellendus enim aliquam magnam eius ad voluptates reprehenderit qui doloribus reiciendis voluptatum earum ipsam illo delectus praesentium ducimus dolorum officiis.</p>
                <div class="button">
                  <button class="btn btn-warning btn-sm"><a href="#table" style="text-decoration:none;">Learn More</a></button>
                </div>
                
              </div>
              <!-- Content Row -->
            </span>

        </div>
      </section>
    </div>
  </div>
  <div class="pegawai"  style="height: 100vh;" >
    <h1 class="text-center mb-4" id="table">Data Pegawai</h1>
    <div class="container">
      <a href="/tambah"><button type="button" class="btn btn-success btn-sm tambah mb-2">Tambah +</button></a>
      <div class="col-md-3">
        <form action="/pegawai" method="GET">
          <div class="input-group mb-2">
            <input type="text" class="form-control" style="opacity: 0.5; border-color: black;"  name="search" value="{{ request('search') }}">
            <button class="btn btn-dark btn-sm" type="submit">Search...</button>
          </div>
        </form>
      </div>
      <div class="row">

        <div class="col">
          <table class="table table-bordered  table-striped ">
            <thead>
              <tr class="table-dark text-center">
                <th>No</th>
                <th>Name</th>
                <th>Jenis Kelamin</th>
                <th>No Telepon</th>

                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @php
              $no=1;
              @endphp
              @foreach($data as $tes)
              <tr class="table-light text-center">
                <th>{{$no++ }}</th>
                <td>{{ $tes->nama }}</td>
                <td>{{ $tes->jeniskelamin }}</td>
                <td>0{{ $tes->notelpon }}</td>

                <td>
                  <a href="#"><button type="button" title="hapus" class="btn btn-danger btn-sm delete" data-id="{{ $tes->id }}" data-nama="{{$tes->nama}}"><i class="fa-solid fa-trash">hapus</i></button></a>
                  <a href="/tampilkandata/{{ $tes->id }}"><button type="button" title="edit" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button></a>
                  <a href="/detail/{{ $tes->id }}"><button type="button" title="detail" class="btn btn-info btn-sm"><i class="fa-solid fa-calendar-day"></i></button></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $data->links() }}
        </div>
      </div>
    </div>
  </div>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</body>
<script>
  $('.delete').click(function() {
    var deleteid = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    swal({
      title: "Yakin kawan?",
      text: "Kamu akan menghapus data ini dengan nama " + nama + " ",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location = "/deletedata/" + deleteid + " ",
        swal("Selamat datamu udah dihapus", {
          icon: "success",
        });
      } else {
        swal("datamu masi aman gajadi dihapus!");
      }
    });
  })
</script>
@if (Session::has('success'))

<script>
  swal("Good job!", "{{ Session::get('success') }}", "success");
</script>
@endif
<script type="text/javascript">
  function ubahMode(){
    const ubah = document.body;
    ubah.classList.toggle("dark");
  }
</script>
</html>