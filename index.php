<?php








?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAIA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mata Kuliah
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="page1.php">Pengantar Manajemen</a></li>
                                <li><a class="dropdown-item" href="page2.php">Algoritma</a></li>
                                <li><a class="dropdown-item" href="page3.php">Operating System</a></li>
                                <li><a class="dropdown-item" href="page4.php">Bahasa Web</a></li>
                                <li><a class="dropdown-item" href="page5.php">Pengantar TI</a></li>
                                <li><a class="dropdown-item" href="page6.php">Basis Data</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <h3 class="text-center">ASSALAMUALAIKUM</h3>
            <br>

            <!-- penggunaan layout grid -->
            <div class="row text-center align-item-center">
                <div class="col12">
                    <img src="assets/image/1.jpg" class="rounded rounded-4 p-2" alt="" width="200px" height="200px">
                    <br>
                    <blockquote class="blockquote text-center">"Mahasiswa prodi INFORMATIKA KELAS A SEMESTER SATU"</blockquote>
                </div>
            </div>
        </div>
    </main>


    <footer>
        <div class="col-md-12 text-center container sticky-bottom p-3 bg-secondary position-absolute bottom-0 start-50 translate-middle-x ">
            <span class="text-white">&copy; RIZQI WILDAN HARIRI - INFORMATIKA KELAS A - TUGAS UAS</span>
        </div>
    </footer>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>