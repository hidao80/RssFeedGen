<?php
$json = file_get_contents("php://input");
$contents = json_decode($json, true);

require_once('OpenGraph.php');  

$graph = OpenGraph::fetch($contents['url']);  

echo json_encode(['title' => $graph->title, 'description' => $graph->description]);
