<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>S Cyber Solutions</title>

<!-- Bootstrap 5 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('website/css/style.css') }}">


</head>

<body>

<!-- ================= NAVBAR ================= -->
<nav class="navbar navbar-expand-lg custom-navbar">
  <div class="container">

    <!-- Logo -->
    <a class="navbar-brand" href="{{ Route('website.home')}}">
      <img src="{{ asset('website/images/scslogo.png') }}" alt="Logo" height="60">

    </a>

    <!-- Mobile Toggle -->
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navmenu">
      
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link about-active" href="{{ Route('website.home')}}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Customer</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ Route('services')}}">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ Route('guide')}}">Guide</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Resources</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ Route(name: 'downloads')}}">Downloads</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ Route(name: 'career')}}">Careers</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ Route('contact')}}">Contact</a></li>
      </ul>

      <!-- Buttons -->
      <div class="d-flex gap-2">
        <button class="btn btn-success fw-bold" onclick="progressAlert()">Buy DSC</button>
        <button class="btn btn-warning fw-bold" onclick="progressAlert()">Login</button>
      </div>

    </div>
  </div>
</nav>


