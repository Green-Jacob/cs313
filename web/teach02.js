function clickAlert() {
  window.alert("Clicked!");
}
/*function changeColor() {
  var colorEntered = document.getElementById('color').value;
  document.getElementById('box1').style.color = colorEntered;
}*/
function changeColor() {
  $("#box1").css("color", $("#color").text());
}
