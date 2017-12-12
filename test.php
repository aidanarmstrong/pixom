<?php 

include 'vidPgTest.php';

$test = new display_show_page();
$test1 = $test->createPage($_REQUEST['movie']);

echo $test1;