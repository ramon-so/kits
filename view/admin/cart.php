<?php
session_start();
include_once('./../../model/conexao.php');
$carrinho = $_SESSION['cart'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./../css/index.css">
    <script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <div class="top">
      <img src="./../img/logos/logo-itau.webp" alt="">
      <button type="button" onclick="displayMenu()" id="dispMenu" name="button">
        <lord-icon
          src="https://cdn.lordicon.com/wgwcqouc.json"
          trigger="click"
          colors="primary:#ffffff,secondary:#ffffff"
          style="width:150px;height:150px">
        </lord-icon>
      </button>
    </div>
    <div class="top-2">
      <div class="triangulo" id="triangulo">

      </div>
    </div>
    <div class="form-login" id="forLogin">
      <?php
        for($i = 0; $i < count($carrinho); $i++){
          echo $carrinho[$i]['item'];
        }

      ?>
      <button type="button"
      style="
      border-radius:
      50%; width: 150px;
      height: 150px;
      border: 2px solid black;
      background-color: #20E680;
      position: absolute;
      bottom: 50px;
      left: 50px;
      "
      onclick="redirect('./cart.php')"
      name="button">
        <lord-icon
           src="https://cdn.lordicon.com/slkvcfos.json"
           trigger="click"
           colors="primary:#ffffff,secondary:#ec7000"
           stroke="100"
           style="width:100px;height:100px">
         </lord-icon>
      </button>
    </div>
    <div class="menu" style="display: none;" id="divMenu">
      <nav>
        <ul>
          <li onclick="redirect('./../../index.php')">Inicio <img src="./../img/icones/fi-rr-angle-right.svg" alt=""> </li>
        </ul>
      </nav>
    </div>
    <script src="./../js/jquery-3.6.0.min.js"></script>
    <script src="./../js/script-index.js"></script>
    <script src="./../js/script-cart.js"></script>
  </body>
</html>
