function addCart(id){
  $.ajax({
    url: "./../../controller/cartController.php",
    type: "POST",
    data: {
      "id": id,
  },
    dataType: 'json',
    beforeSend : function(){
    },
    success : function(response){
      console.log(response);
    },
    error : function(a,b,c){
      console.log(b);
      console.log('Erro: ' + a['status'] + ' ' + c);
    }
  });
}
