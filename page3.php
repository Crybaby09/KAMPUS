<?php
// contoh array numerik 1 dimensi
$dosen = ["Bapak Sujono, S.Kom., M.Kom.",];

// contoh array numerik multidimensi
$materi = [
    ["SATU", "Perkenalan dan penjelasan Kontrak kuliah"],
    ["DUA", "Cara mengetahui spesifikasi pada komputer atau laptop"],
    ["TIGA", "Pengertian, Tujuan, dan Macam-macam Sistem Operasi"],
    ["EMPAT", "Tipe Sistem Operasi dan Mengetahui cara setting booting laptop atau PC"],
    ["LIMA", "Mengetahui Struktur yang terdapat dalam PC"],
    ["ENAM", "Mengetahui Struktur yang terdapat dalam PC Bag.2"],
    ["TUJUH", "Konsep Proses dan Praktek Install ulang PC"]
];



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operating System</title>
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
            <h3 class="text-center">Operating System</h3>
            <br>

            <!-- penggunaan layout grid -->
            <div class="row text-center align-item-center">
                <div class="col12">
                    <img src="assets/image/OS.jpg" class="rounded rounded-4 p-2" alt="" width="200px" height="200px">
                    <br>

                    <!-- menampilkan array 1 dimensi menggunakan foreach -->
                    <?php foreach ($dosen as $dos) : ?>
                        <h4 class="text-center">DOSEN PENGAMPU : <?= $dos ?></h4>
                        <h4 class="text-center">NIDN : <i>0725068804</i></h4>
                    <?php endforeach; ?>

                    <blockquote class="blockquote text-center">"Mempelajari beberapa Sistem Operasi dan cara pengoperasiannya"</blockquote>
                </div>
            </div>
        </div>

        <div class="container">

            <table class="able table-striped table-hover table table-bordered border border-dark table caption-top">
                <caption class="text-center fs-2 text-dark">PEMBELAJARAN</caption>
                <thead class="table-dark">
                    <th class="text-center">PERTEMUAN KE</th>
                    <th class="text-center">MATERI</th>
                </thead>
                <tbody>
                    <!-- menampilkan array multidimensi menggunakan foreach -->
                    <?php foreach ($materi as $mat) : ?>
                        <tr class="text-center">
                            <td class="text-center"><?= $mat[0] ?></td>
                            <td class="text-center"><?= $mat[1] ?></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
                <tfoot>
                    <tr class="text-center">
                        <td colspan="2" class="text-center">UJIAN TENGAH SEMESTER</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </main>
    <footer>
        <div class="col-md-12 text-center container sticky-bottom p-3 bg-secondary ">
            <span class="text-white">&copy; RIZQI WILDAN HARIRI - INFORMATIKA KELAS A - TUGAS UAS</span>
        </div>
    </footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>