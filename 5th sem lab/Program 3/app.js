var x = 5;
var y = 5;
var dest_x = 30;
var dest_y = 300;
var interval = 10;

function moveImage() {
  if (x < dest_x) x = x + interval;
  if (y < dest_y) y = y + interval;
  document.getElementById("ufo").style.top = y + "px";
  document.getElementById("ufo").style.left = x + "px";
  if (x + interval < dest_x || y + interval < dest_y) {
    window.setTimeout(moveImage, 10);
  }
}
