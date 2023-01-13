<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahasa Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php
    // contoh array numerik 1 dimensi
    $dosen = ["Bapak Primaadi Airlangga M.IT",];

    // contoh array numerik multidimensi
    $materi = [
        ["SATU", "Penjelasan kontrak kuliah dan pengenalan web"],
        ["DUA", "Pengenalan Data,Server,Hosting,Jaringan dan Pengenalan kode HTML"],
        ["TIGA", "Mengenal seluk beluk halaman web"],
        ["EMPAT", "Mengenal struktur halaman web Bag.2"],
        ["LIMA", "Pengenalan CSS dan CSS's selector"],
        ["ENAM", "Pengenalan PHP lewat zoom"],
        ["TUJUH", "Pengenalan PHP Bag.2"]
    ];



    ?>


    <header class="sticky-top">
        <!-- include navbar -->
        <?php include "./assets/template/navbar.php"; ?>
    </header>
    <main>
        <div class="container">
            <h3 class="text-center">Bahasa Pemrogramman Web</h3>
            <br>

            <!-- penggunaan layout grid -->
            <div class="row text-center align-item-center">
                <div class="col12">
                    <img src="assets/image/Web programming.jpg" class="rounded rounded-4 p-2" alt="" width="200px" height="200px">
                    <br>

                    <!-- menampilkan array 1 dimensi menggunakan foreach -->
                    <?php foreach ($dosen as $dos) : ?>
                        <h4 class="text-center">DOSEN PENGAMPU : <?= $dos ?></h4>
                        <h4 class="text-center">NIDN : <i>0718108602</i></h4>
                    <?php endforeach; ?>

                    <blockquote class="blockquote text-center">"Mempelajari Bahasa Pemrogramman untuk pembuatan Web"</blockquote>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- include table -->
            <?php include "./assets/template/table.php"; ?>
        </div>
    </main>
    <footer>
        <!-- include footer -->
        <?php include "./assets/template/footer.php"; ?>
    </footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>