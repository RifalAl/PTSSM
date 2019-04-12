<?php
header('Content-Type: application/json');

$data = array(
    array(
        'id' => '1',
        'nama_item' => 'AC Split 1/2 PK daikin R32 Non Inverter Thailand',
        'jumlah_item' => '2',
        
    ),
    array(
       'id' => '2',
       'nama_item' => 'AC Split 1 PK daikin R32 Non Inverter Thailand',
        'jumlah_item' => '1',
    ),
    array(
        'id' => '3',
       'nama_item' => 'AC Split 1 PK daikin R32 Non Inverter Malaysia',
        'jumlah_item' => '1',
    )
);
echo json_encode($data);
?>