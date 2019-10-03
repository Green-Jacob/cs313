  $(document).ready(function(){
    $("button").click(function(){
      var name = $(this).attr('name');
      name.concat("=");
      var value = $(this).attr('value');
      var url = 'session.php?';
      url.concat(String(name), String(value));
      console.log(name);
      console.log(value);
      console.log(url);
      $("#session-write").load(url);
    });//end button.click()
  });//end document.ready()
