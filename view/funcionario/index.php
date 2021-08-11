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

    </div>
    <div class="top-2">
      <div class="triangulo" id="triangulo">

      </div>
    </div>
    <div class="form-login" id="forLogin">
      <div class="display-kits">
        <div class="kit-item">
          <div class="kit-item-img">

          </div>
          <button type="button" name="button">Selecionar</button>
        </div>
        <div class="kit-item">
          <div class="kit-item-img">

          </div>
          <button type="button" name="button">Selecionar</button>
        </div>
        <div class="kit-item">
          <div class="kit-item-img">

          </div>
          <button type="button" name="button">Selecionar</button>
        </div>
      </div>
    </div>
    <div class="menu" style="display: none;" id="divMenu">
      <nav>
        <ul>
          <li>Informar token <img src="./../img/icones/fi-rr-angle-right.svg" alt=""> </li>
        </ul>
      </nav>
    </div>
    <script src="./../js/jquery-3.6.0.min.js"></script>
    <script src="./../js/script-index.js"></script>
  </body>
</html>
