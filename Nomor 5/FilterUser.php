<?php
$data = file_get_contents('./user.json');

$json = json_decode($data, 1);

$resources = $json['data'];

$userWithProgammingSkills = array();

foreach ($resources as $key => $resource) {
    if ($resource['skill'] == 'programming') {
        $userWithProgammingSkills[] = $resource;
    }
}

echo json_encode($userWithProgammingSkills);