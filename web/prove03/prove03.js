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
        $(this).html(responseTxt);
      });
    });//end button.click()
  });//end document.ready()
