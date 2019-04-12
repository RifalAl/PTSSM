<?php
header('Content-Type: application/json');

$data = array(
    array(
        'id' => '1',
        'nama_material' => 'Pipa',
        'jumlah_material' => '2',
        
    ),
    array(
       'id' => '2',
       'nama_material' => 'Bracket',
        'jumlah_material' => '1',
    ),
    array(
        'id' => '3',
       'nama_material' => 'Kabel',
        'jumlah_material' => '1',
    )
);
echo json_encode($data);
?>