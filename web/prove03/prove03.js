  $(document).ready(function(){
    $("button").click(function(){
      var name = $(this).attr('name');
      name = name.concat("=");
      var value = $(this).attr('value');
      var url = 'session.php';
      data = name.concat(value);
      console.log(name);
      console.log(value);
      console.log(url);
      //$("#session_write").load(url);
      $("#session_write").load(url, data, function(responseTxt){
        
      });
    });//end button.click()
  });//end document.ready()
