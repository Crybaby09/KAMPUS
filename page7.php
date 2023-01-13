<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            display: block;
            background-color: lime;
            text-align: center;
            margin: 5px;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <!-- contoh looping menggunakan for -->
    <?php for ($i = 0; $i < 7; $i++) : ?>
        <div class="kotak">
            <?php for ($j = 1; $j <= 5; $j++) : ?>
                <li><?= $j; ?></li>
            <?php endfor; ?>
        </div>
        <div class="clear"></div>
    <?php endfor; ?>
</body>

</html>