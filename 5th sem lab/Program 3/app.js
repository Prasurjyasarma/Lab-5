function moveImage() {
  const ufoElement = document.getElementById("ufo");
  let position = 0;

  const moveInterval = setInterval(function () {
    position += 1;
    ufoElement.style.top = position + "px";
    if (position >= window.innerHeight) {
      clearInterval(moveInterval);
    }
  }, 10);
}
