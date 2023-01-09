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