<?php
include '../connect.php';

if (isset($_POST)) {
    $sql = "UPDATE tabel_biodata SET nama = '$_POST[nama]',
                                     jenis_kelamin = '$_POST[jenis_kelamin]',
                                     alamat = '$_POST[alamat]',
                                    jenis_kendaraan = '$_POST[jenis_kendaraan]',
                                     no_hp  = '$_POST[no_hp]',
                                     tanggal_sewa = '$_POST[tanggal]',
                                     jaminan  = '$_POST[jaminan]',
                                     harga  = '$_POST[totalharga]',
                                     durasi  = '$_POST[durasi]'
                                 WHERE id = '$_POST[id]' ";
    $koneksidb->query($sql);
}

header("location:../index.php");
