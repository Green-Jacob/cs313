function addToSession(name, value) {
  //get names and values from input elements.
  //need to add the session.php that will handle adding the information
  var str = "session.php?";
  name.concat("=");
  var v = String(value);
  var url = str.concat(name, v);
  //jQuery makes it easy to send to session.php
  $(document).ready(function(){
    ('#session_write').load(url);
  });
}
