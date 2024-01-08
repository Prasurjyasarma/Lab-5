var resultOut = document.getElementById("resultOut");

var num = prompt("Enter your number :");
var n = parseInt(num);

function sumNatural(n) {
  var sum = 0;
  for (var i = 1; i <= n; i++) {
    sum = sum + i;
  }
  return sum;
}

res = sumNatural(n);
resultOut.innerHTML = `The sum of your natural numbers is : ${res}`;
