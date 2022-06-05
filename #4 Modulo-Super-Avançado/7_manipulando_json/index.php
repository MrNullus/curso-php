<?php
$opts = [
    'http' => [
            'method' => 'GET',
            'header' => [
                    'User-Agent: PHP'
            ]
    ]
];

$context = stream_context_create($opts);
$json = file_get_contents("https://api.github.com/", false, $context);

echo $json;

?>