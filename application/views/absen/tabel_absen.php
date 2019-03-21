<?php

$jam_masuk = end(explode(" ", $list[0]['jam_masuk']));
$jam_keluar = end(explode(" ", $list[0]['jam_keluar']));
$selisih = $list[0]['selisih'];
$status  = (substr($selisih,0,1) === '-') ? "Datang Terlambat " : "Datang Lebih Awal";
?>

<script>
    setTimeout(function() {
        window.location.reload(1);
    }, 3000);
</script>
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Data Absensi </h4>
            <p class="card-category">Tanggal <?= date("d F Y") ?> Lokasi : <?= $lokasi ?></p>
        </div>
        <div class="card-body">
            <div class="row">
            <div class="col-md-2">
<?php
   
         echo '<img src="data:image/jpeg;base64,'.base64_encode($foto[0]['foto']).'" width="100%" height="300" />';
     
?>
</div>
                <div class="col-md-10">
                    <table id="w0" class="table table-striped table-bordered detail-view">
                        <tbody>
                            <tr>
                                <th style="font-size:30px">Nip</th>
                                <td style="font-size:30px">  <?= $list[0]["nip"] ?></td>
                            </tr>
                            <tr>
                                <th style="font-size:30px">Nama Pegawai</th>
                                <td style="font-size:30px"> <?= $list[0]["nama"] ?></td>
                            </tr>
                            <tr>
                                <th style="font-size:30px">Nama Unit Kerja</th>
                                <td style="font-size:30px"> <?= $list[0]["nama_unit"] ?></td>

                            </tr>
                            <tr>
                                <th style="font-size:30px">Masuk</th>
                                <td style="font-size:30px"><?= $jam_masuk ?></td>
                            </tr>
                            <tr>
                                <th style="font-size:30px">Pulang</th>
                                <td style="font-size:30px"><?= $jam_keluar ?></td>
                            </tr>
                            <tr>
                                <th style="font-size:30px"> Keterangan</th>
                                <td style="font-size:30px"><?= $status ?></td>
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
</di v>