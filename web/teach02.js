function clickAlert() {
  window.alert("Clicked!");
}
function changeColor() {
  var colorEntered = document.getElementById('color').value;
  document.getElementsByClassName('box1').style.color = colorEntered;
}
