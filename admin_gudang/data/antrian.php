<?php
header('Content-Type: application/json');

$data = array(
    array(
        'id' => '1',
        'tanggal' => '20/11/19',
        'no_spk' => '005/SSM/SPK-PSG/MKS/III/2019',
        'nama_pelanggan' => 'Pak Bedu',
        'tipe_spk' => 'Pemasangan',
        
    ),
    array(
     'id' => '2',
     'tanggal' => '20/11/19',
     'no_spk' => '006/SSM/SPK-PSG/MKS/III/2019',
     'nama_pelanggan' => 'Pak Syarif',
     'tipe_spk' => 'Pemasangan',
 ),
    array(
        'id' => '3',
        'tanggal' => '20/11/19',
        'no_spk' => '007/SSM/SPK-PSG/MKS/III/2019',
        'nama_pelanggan' => 'Ibu Hilda',
        'tipe_spk' => 'Pemasangan',
    )
);
echo json_encode($data);
?>