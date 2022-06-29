<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Hospital</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

<title>@yield ('title')</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container-fluid">
      <a href="{{url('/')}}">
        <img src="{{asset('img/logo_nav.jpg')}}" class="img-thumbnail" alt="...">
    </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active nav-menu" aria-current="page" href="{{url('/')}}">Main</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-menu" href="{{url('/doctors')}}">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-menu " href="{{url('/patients')}}">Patients</a>
            </li>
            <li class="nav-item">
              <a href="{{url('/info')}}">
              <button type="button" class="btn btn-outline-primary">Записатись</button>
</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>

@yield ('content')

</body>
</html>
