<?php
require('../private/varsconnectie.php');
include('head.php');
$dbc = mysqli_connect(HOST, USER, PASSWORD, DB) or die ('Error connecting');
echo 'succes met het verbinden met de database';
