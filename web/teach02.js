function clickAlert() {
  window.alert("Clicked!");
}
/*function changeColor() {
  var colorEntered = document.getElementById('color').value;
  document.getElementById('box1').style.color = colorEntered;
}*/
$(document).ready(function(){
  $("#change").click(function() {
    var input = $("#color");
    var colorEntered = input.text();
    $("#box1").css("color", colorEntered);
  });
});
