<?php

$waktu = gmdate("H:i", time() + 7 * 3600);
$time = explode(":", $waktu);
$jam = $time[0];
$menit = $time[1];

?>

<?php

// conditional statement
if ($jam >= 00 and $jam < 10) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "Pagi";
    }
} else if ($jam >= 10 and $jam < 15) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "Siang";
    }
} else if ($jam >= 15 and $jam < 19) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "Sore";
    }
} else if ($jam >= 18 and $jam <= 24) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "Malam";
    }
} else {
    $ucapan = "Error";
}

?>

<h3 class="text-center">Selamat <?= $ucapan ?>, Bapak Primaadi Airlangga M.IT</h3>