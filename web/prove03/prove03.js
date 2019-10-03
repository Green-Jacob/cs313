  $(document).ready(function(){
    $("button").click(function(){
      var name = $(this).attr('name');
      name = name.concat("=");
      var value = $(this).attr('value');
      var url = 'session.php?';
      url = url.concat(String(name), String(value));
      console.log(name);
      console.log(value);
      console.log(url);
      //$("#session_write").load(url);
      $.ajax({url: url, type: GET, sucess: function(result){
        $("#session_write").html(result);
      }});
    });//end button.click()
  });//end document.ready()
