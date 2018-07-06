<?php

require_once(dirname(__DIR__) . '/private/classes/cruise.class.php');
require_once(dirname(__DIR__) . '/private/classes/pagination.class.php');

$file = file_get_contents(dirname(__DIR__) . '/private/data/NewCruises.json', true);
$json = json_decode($file, true);

$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$perPage = 9;
$totalCount = count($json);
$pagination = new pagination($currentPage, $perPage, $totalCount);
