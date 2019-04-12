<?php
header('Content-Type: application/json');

$data = array(
    array(
        'id' => '1',
        'tanggal' => '20 november 2019',
        'no_surat_jalan' => '#12312321',
        'nama_pelanggan' => 'Pak hendy',
        'alamat_pelanggan' => 'Jl. Poros Malino Komplek Griya Riski Abadi C6',
        
    ),
    array(
       'id' => '2',
        'tanggal' => '25 november 2019',
        'no_surat_jalan' => '#12312321',
        'nama_pelanggan' => 'Ibu Ani',
        'alamat_pelanggan' => 'Jl. Aroepala no. 29, Hertasning baru, Makassar',
    ),
    array(
        'id' => '3',
        'tanggal' => '10 Februari 2020',
        'no_surat_jalan' => '#12312321',
        'nama_pelanggan' => 'Ibu Tuti',
        'alamat_pelanggan' => 'Jl. Durina No. 92 STTP Gowa',
    )
);
echo json_encode($data);
?>