<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./../css/index.css">
    <script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>
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
      </button>
    </div>
    <div class="top-2">
      <div class="triangulo" id="triangulo">
        
      </div>
    </div>
    <div class="form-login" id="forLogin">
      <h1>Informar Token</h1>
      <p>Informe o token para selecionar o seu kit!</p>

      <form action="selectKit.php" method="post" name="formToken">
        <p id="erroToken" style="color: red; font-weight: bolder; display: none; margin-bottom: 10px;"></p>
        <span>Token</span>
        <input class="form-control" type="text" name="login" value="" autocomplete="off" required>
        <button class="btn" id="submitBtn" style="font-size: 50px; background-color: #ec7000;" type="submit" name="submitBtn">Confirmar</button>
      </form>

    </div>
    <div class="menu" style="display: none;" id="divMenu">
      <nav>
        <ul>
          <li onclick="redirect('./../../index.php')">Inicio <img src="./../img/icones/fi-rr-angle-right.svg" alt=""> </li>
        </ul>
      </nav>
    </div>
    <script src="./../js/jquery-3.6.0.min.js"></script>
    <script src="./../js/script-funcItau.js"></script>
  </body>
</html>
