function displayMenu(){
  var divMenu = document.getElementById('divMenu');
  var triangulo = document.getElementById('triangulo');
  var corpo = document.getElementById('forLogin');
  var img = document.getElementById('imgBtnMenu');

  if(divMenu.style.display == "none"){
    corpo.style.display = "none";
    triangulo.style.display = "block";
    divMenu.style.display = "block";
    img.setAttribute('src', './../img/logos/fi-rr-cross.svg');
  }else{
    corpo.style.display = "block";
    triangulo.style.display = "none";
    divMenu.style.display = "none";
    img.setAttribute('src', './../img/logos/fi-rr-cross.svg');
  }

}

function redirect(url){
  window.location.href = url;
}
