<?php

$data = file_get_contents("./barang.json");

$json = json_decode($data, 1);

$resources = $json["data"];

$barang = array();

foreach ($resources as $key => $resource) {
    if (is_array($resource)) {
        if ($resource["total"] > 1000000) {
            $resource["total"] = 0.85 * $resource["total"];
        }
        if (resource["jumlah"] > 2) {
            $resource["jumlah"] = 0.9 * $resource["jumlah"];
        }
        if (strlen(resource["nm_barang"]) < 4) {
            $barang[] = $resource;
        }
    }
}

echo json_encode($barang);