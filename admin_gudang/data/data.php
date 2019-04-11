<?php
header('Content-Type: application/json');

$data = array(
    array(
        'id' => '1',
        'tanggal' => '17 April 2019',
        'kode_barang' => '12345',
        'tipe_gudang' => 'Toko',
        'no_seri' => '456789',
        'nama_barang' => 'Barangku',
        'tipe_barang' => 'Tipeku',
        'merek_barang' => 'Merekku',
        'jumlah_barang' => 'Jumlahku',
        'satuan_barang' => 'Satuanku',
        'keterangan_barang' => 'Keterku'
    ),
    array(
        'id' => '2',
        'tanggal' => '18 Feb 2019',
        'kode_barang' => '12345123',
        'tipe_gudang' => 'Toko',
        'no_seri' => '45678923',
        'nama_barang' => 'Barangku213',
        'tipe_barang' => 'Tipeku123',
        'merek_barang' => 'Merekku123',
        'jumlah_barang' => 'Jumlahku123',
        'satuan_barang' => 'Satuanku123',
        'keterangan_barang' => 'Keterku123'
    ),
    array(
        'id' => '3',
        'tanggal' => '19 Mar 2019',
        'kode_barang' => '1234567',
        'tipe_gudang' => 'Kantor',
        'no_seri' => '456789678',
        'nama_barang' => 'Barangku678',
        'tipe_barang' => 'Tipeku678',
        'merek_barang' => 'Merekku678',
        'jumlah_barang' => 'Jumlahku678',
        'satuan_barang' => 'Satuanku678',
        'keterangan_barang' => 'Keterku68'
    )
);
echo json_encode($data);
?>