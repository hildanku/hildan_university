<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hildan University - Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('front-end/assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('front-end/assets/css/style.css') ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
  </head>
<body>
    <main>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
                <div class="container-fluid">
                  <a class="navbar-brand" href="/"><strong>Hildan University</strong></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <!--- mx auto-->
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/admin/bukutamu"> Kelola Buku Tamu</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/admin/users"> Kelola Pengguna</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/bukutamu">comingsoon</a>
                      </li>
                    </ul>
                    <ul class="d-flex me-5 mb-lg-0">
                        <!-- <button class="btn btn-primary"> -->
                            <a href="/register" class="btn btn-primary">JoinNow!</a>
                        <!-- </button> -->
    
                    </ul>
                  </div>
                </div>
              </nav>
        </header>