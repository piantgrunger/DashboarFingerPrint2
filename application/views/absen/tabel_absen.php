<?php

$jam_masuk = end(explode(" ", $list[0]['jam_masuk']));
$jam_keluar = end(explode(" ", $list[0]['jam_keluar']));
$status =($jam_masuk<"07:30:00")?"Datang Terlambat":"Datang Lebih Awal";
?>

<script>
    setTimeout(function() {
        window.location.reload(1);
    }, 5000);
</script>
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Data Absensi </h4>
            <p class="card-category">Tanggal <?= date("d F Y") ?> Lokasi : <?= $lokasi ?></p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <img src="data:image/jpeg;base64,<?= base64_encode($list[0]['foto']) ?>" width="200" height="250" />'
                </div>
                <div class="col-md-9">
                    <table id="w0" class="table table-striped table-bordered detail-view">
                        <tbody>
                            <tr>
                                <th>Nip</th>
                                <td> <?= $list[0]["nip"] ?></td>
                            </tr>
                            <tr>
                                <th>Nama Pegawai</th>
                                <td> <?= $list[0]["nama"] ?></td>
                            </tr>
                            <tr>
                                <th>Nama Unit Kerja</th>
                                <td> <?= $list[0]["nama_unit"] ?></td>

                            </tr>
                            <tr>
                                <th>Masuk</th>
                                <td><?= $jam_masuk ?></td>
                            </tr>
                            <tr>
                                <th>Pulang</th>
                                <td><?= $jam_keluar ?></td>
                            </tr>
                            <tr>
                                <th>Keterangan</th>
                                <td><?=$status ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">


                <div class="table-responsive">
                    <table class="table" style="text-align: center;">
                        <thead class=" text-primary">
                            <tr>
                                <th width="10%">No</th>
                                <th>NIP </th>
                                <th width="35%">Nama</th>
                                <th width="15%">Unit Kerja</th>
                                <th width="15%">Masuk</th>
                                <th width="15%">Pulang</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="4">
                                    <?php
                                    if (count($list) <= 0) {
                                        echo " Belum  Ada Absen ";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <?php
                            for ($i = 0; $i < count($list); $i++) {
                                $jam_masuk = end(explode(" ", $list[$i]['jam_masuk']));
                                $jam_keluar = end(explode(" ", $list[$i]['jam_keluar'])); ?>

                            <tr>
                                <td><?php echo $i + 1 ?></td>
                                <td><?php echo   $list[$i]['nip'] ?></td>
                                <td><?php echo   $list[$i]['nama'] ?></td>
                                <td><?php echo   $list[$i]['nama_unit'] ?></td>
                                <td><?php echo   $jam_masuk ?></td>
                                <td><?php echo   $jam_keluar ?></td>

                            </tr>
                            <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>