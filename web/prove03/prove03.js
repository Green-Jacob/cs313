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
      $.ajax({url: url,data: data, type: 'GET', sucess: function(result){
        console.log(result);
        $("#session_write").html(result);
      }});
    });//end button.click()
  });//end document.ready()
