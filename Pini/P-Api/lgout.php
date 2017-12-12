<?php
Session_start();
Session_unset();
Session_destroy();

header("Location: ../main.php");
?>