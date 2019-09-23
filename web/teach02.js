function clickAlert() {
  window.alert("Clicked!");
}
/*function changeColor() {
  var colorEntered = document.getElementById('color').value;
  document.getElementById('box1').style.color = colorEntered;
}*/
$(document).ready(function(){
  $("#change").click(function() {
    var element = $("#box1");
    var input = $("#color");
    var colorEntered = input.text();
    element.css("color", colorEntered);
  });
});
