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
    var colorEntered = input.val();
    $("#box1").css("background-color", colorEntered);
  });
});
