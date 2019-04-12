<?php
header('Content-Type: application/json');

$data = array(
    array(
        'id' => '1',
        'kode_barang' => '12345',
        'nama_barang' => 'Thermistor RKD25GVM',
       
    ),
    array(
        'id' => '2',
        'kode_barang' => '12345',
        'nama_barang' => 'Thermistor RKD25GVM',
    ),
    array(
        'id' => '3',
        'kode_barang' => '12345',
        'nama_barang' => 'Thermistor RKD25GVM',
    )
);
echo json_encode($data);
?>