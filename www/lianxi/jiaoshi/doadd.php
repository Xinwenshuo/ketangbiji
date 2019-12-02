<?php
// include './add.php';
include './Model/config.php';
include './Model/Model.class.php';
$jiaoshi = new Model('jiao');
$jiaoshi->add($_POST);
?>