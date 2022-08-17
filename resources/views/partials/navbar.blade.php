<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <script type="text/javascript">
    function ubahMode(){
      const ubah = document.body;
      ubah.classList.toggle("dark");
    }
  </script>
  <div class="container">
    <a class="navbar-brand" href="#">PT.ETH ||</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active"  href="/pegawai">Home</a>
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
          <ul class="dropdown-menu mt-2" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/pegawai"><i class="fa-solid fa-table"></i>Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout
                </button>
              </form>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <input type="checkbox" class="dropdown-item"  onclick="ubahMode()">
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="/login"><i class="fa-thin fa-arrow-left"></i>Login</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>