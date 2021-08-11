<?php
session_start();
include_once('./../model/conexao.php');

if (isset($_POST['login'])) {
  $login = $_POST['login'];
  $senha = md5($_POST['senha']);
  $sql = "SELECT * FROM tbdusuarios WHERE loginUsuario = '$login' AND senhaUsuario = '$senha'";
  $sql = $mysqli -> query($sql) or die($mysqli->error);
  $usuario = $sql->fetch_array();

  if(is_array($usuario)){
        $_SESSION['usuario'] = $usuario;
        switch ($usuario['tipoUsuario']) {
            case '0':
                $response = array('0' => './view/funcionario');
                break;
            case '1':
                $response = array('0' => './view/admin');
                break;
            case '2':
                $response = array('0' => './view/admin/adminItau.php');
                break;

            default:
                $response = array('0' => './view/error/notDefinedType.php');
                break;
        }
        echo json_encode($response);
    }else{
        $response = array('0' => 'Login ou senha incorretos!');
        echo json_encode($response);
    }

}else{
  $response = array('0' => 'Usuario ou senha não informado!');
  echo json_encode($response);
}

 ?>
