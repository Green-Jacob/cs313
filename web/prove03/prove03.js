  $(document).ready(function(){
    $("button").click(function(){
      var name = $(this).attr('name');
      name.concat("=");
      var value = $(this).attr('value');
      var url = "session.php?";
      url.concat(name, value);
      $("#session-write").load(url);
    });//end button.click()
  });//end document.ready()
