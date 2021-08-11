<?php
session_start();

if(isset($_POST['id'])){
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
        array_push($_SESSION['cart'], array('item' => $_POST['id']));
        $response = array('0' => true);
    }else{
        array_push($_SESSION['cart'], array('item' => $_POST['id']));
        $response = array('0' => true);
    }
    
}else{
    $response = array('0' => false);
}

echo json_encode($response);

?>