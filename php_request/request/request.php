<?php

$data=[];

if(isset($_GET['action'])) {
    $action=$_GET['action'];

    if($action=='Daftar')
    {
        $data[]=$_GET;
    }
}

header("content-Type:application/json");
header("Access-Control-Allow-Origin:*");

echo json_encode($data);

?>