<?php
// contoh array numerik 1 dimensi
$dosen = ["Ibu Siti Sufaidah, S.Kom, M.Si.",];

// contoh array numerik multidimensi
$materi = [
    ["SATU", "Dosen tidak masuk karena ada rapat"],
    ["DUA", "Perkenalan dan penjelasan kontrak kuliah"],
    ["TIGA", "Pembagian materi tugas membuat makalah tiap kelompok"],
    ["EMPAT", "Presentasi kelompok satu"],
    ["LIMA", "Presentasi kelompok tiga"],
    ["ENAM", "Presentasi kelompok dua, empat dan lima"],
    ["TUJUH", "Presentasi kelompok enam dan tujuh"]
];



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengantar Manajemen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header class="sticky-top">
        <!-- include navbar -->
        <?php include "./assets/template/navbar.php"; ?>
    </header>
    <main>
        <div class="container">
            <h3 class="text-center">PENGANTAR MANAJEMEN</h3>
            <br>

            <!-- penggunaan layout grid -->
            <div class="row text-center align-item-center">
                <div class="col12">
                    <img src="assets/image/Pengantar Manajemen.jpg" class="rounded rounded-4 p-2" alt="" width="200px" height="200px">
                    <br>

                    <!-- menampilkan array 1 dimensi menggunakan foreach -->
                    <?php foreach ($dosen as $dos) : ?>
                        <h4 class="text-center">DOSEN PENGAMPU : <?= $dos ?></h4>
                        <h4 class="text-center">NIDN : <i>0714128301</i></h4>
                    <?php endforeach; ?>

                    <blockquote class="blockquote text-center">"Mempelajari teori Manajemen yang dapat membatu kita menjadi seorang Manajer yang efektif dalam mengelola organisasi yang semakin kompleks"</blockquote>
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
        <!-- include footer -->
        <?php include "./assets/template/footer.php"; ?>
    </footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>