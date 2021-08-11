function sendRequest(){
  var btn = document.getElementById('submitBtn');
  $.ajax({
    url: "./controller/loginController.php",
    type: "post",
    data: $('form[name="formAutenticacao"]').serialize(),
    dataType: 'json',
    beforeSend : function(){
      btn.innerHTML = "<img src=\"./img/icones/Reload-1s-200px.svg\" style=\"width: 60px; padding: 0px;\">";
    },
    success : function(response){
      console.log(response);
      if(response[0] == "Login ou senha incorretos!" || response[0] == "Usuario ou senha não informado!"){
        let p = document.getElementById('erroLogin');
        p.innerHTML = response[0];
        p.style.display = "block";
      }else{
        window.location.href = response[0];
      }

    },
    error : function(a,b,c){
      console.log(b);
      console.log('Erro: ' + a['status'] + ' ' + c);
    }
  });
}

function displayMenu(){
  var divMenu = document.getElementById('divMenu');
  var triangulo = document.getElementById('triangulo');
  var corpo = document.getElementById('forLogin');
  var img = document.getElementById('imgBtnMenu');

  if(divMenu.style.display == "none"){
    corpo.style.display = "none";
    triangulo.style.display = "block";
    divMenu.style.display = "block";
  }else{
    corpo.style.display = "block";
    triangulo.style.display = "none";
    divMenu.style.display = "none";
  }

}

function redirect(url){
  window.location.href = url;
}

function redirect(url){
  window.location.href = url;
}
