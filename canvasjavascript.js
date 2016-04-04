function dofirst()
{
var canvas = document.getElementById("mycanvas");
  var context = canvas.getContext("2d");
  context.fillStyle = "blue";
  context.font = "bold 16px Arial";
  context.fillText("Zibri", 100, 100);
  }
  window.addEventListener("load",dofirst,false);
  