<!doctype html>
  <html lang="en"> 

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title>PT.ETH</title>
    <style type="text/css">
      input[type="checkbox"]{
        position: relative;
        width: 40px;
        height: 20px;
        appearance: none;
        background-color:tomato;
        outline: none;
        border-radius: 10px;
        transition: .5s ease;
        cursor: pointer;
      }
      input[type="checkbox"]:checked{
       background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
     }
     input[type="checkbox"]:before{
      content: '';
      position: absolute;
      width: 16px;
      height: 16px;
      background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);
      border-radius: 50%;
      top: 2px;
      left: 2px;
      transition: .5s ease;
    }
    input[type="checkbox"]:checked:before{
      transform: translateX(20px);
    }
    .dark{
      background:#062552;
    }
    .dark .card-header{
      background-color:#5146AA;
      color: #1C2653;
    }
    .dark .card-header h4{

      color:#FFA9A5;
    }
    .dark .card-body {
      background:#669BC3;
    }
    .dark h6{
      color:#D7D7D7;
    }
    .dark p{
      color:#2d3436;
    }
  </style>
</head>

<body >
  @include('partials.navbar')
  <div class="container">
    @yield('container')
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  -->
</body>

</html>