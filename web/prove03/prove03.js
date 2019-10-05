$(document).ready(function(){
  $(".addItem").click(function(){
    var name = $(this).attr('name');
    name = name.concat("=");
    var value = $(this).attr('value');
    var url = 'session_add.php';
    data = name.concat(value);
    console.log(name);
    console.log(value);
    console.log(url);
    //$("#session_write").load(url);
    $("#session_write").load(url, data, function(responseTxt){
      console.log(responseTxt);
      //$(this).html(responseTxt);
    });
  });//end addItem.click()

  $(".removeItem").click(function(){
    var name = $(this).attr('name');
    name = name.concat("=");
    var value = $(this).attr('value');
    var url = 'session_remove.php';
    data = name.concat(value);
    console.log(name);
    console.log(value);
    console.log(url);
    $("#session_write").load(url, data, function(responseTxt){
      console.log(responseTxt);
      refreshPage();
    });
  });//end addItem.click()
});//end document.ready()

function addItem() {
  //had to get the value outside of the jQuery function
  var value = document.getElementById('addItem').value;
  $(document).ready(function(){
    var name = $("#addItem").attr('name');
    name = name.concat("=");
    var url = 'session_add.php';
    data = name.concat(value);
    console.log(name);
    console.log(value);
    console.log(url);
    $("#session_write").load(url, data, function(responseTxt){
      console.log(responseTxt);
      sendToConfirm();
      //$(this).html(responseTxt);
    });
  });
}

function sendToConfirm(){
  window.location.replace("confirm.php");
}

function refreshPage() {
  location.reload(true);
}

function cleanSession() {
  var url = "clean_session.php";
  $("#session_write").load(url, function(responseTxt){
    console.log(responseTxt);
    refreshPage();
  });
}
