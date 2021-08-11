<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./view/css/index.css">
    <script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>
    <title></title>
  </head>
  <body>
    <div class="top">
      <img src="./view/img/logos/logo-itau.webp" alt="">
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
      <h1>Itau Kits</h1>
      <p>Faça seu login e informe seu token para selecionar seu kit!</p>

      <form name="formAutenticacao">
        <p id="erroLogin" style="color: red; font-weight: bolder; display: none; margin-bottom: 10px;"></p>
        <span>Usuário</span>
        <input class="form-control" type="text" name="login" value="" autocomplete="off" required>
        <span>Senha</span>
        <input class="form-control" type="password" name="senha" value="" autocomplete="off" required>
        <button class="btn" onclick="sendRequest()" id="submitBtn" style="font-size: 50px; background-color: #ec7000;" type="button" name="submitBtn">Login</button>
      </form>

    </div>
    <div class="menu" style="display: none;" id="divMenu">
      <nav>
        <ul>
          <li onclick="redirect('./view/funcionario/funcionarioItau.php')">Informar token <img src="./view/img/icones/fi-rr-angle-right.svg" alt=""> </li>
        </ul>
      </nav>
    </div>
    <script src="./view/js/jquery-3.6.0.min.js"></script>
    <script src="./view/js/script-index.js"></script>
  </body>
</html>
