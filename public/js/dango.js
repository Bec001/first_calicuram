function diceFunc1() {
    var dice = Math.floor(Math.random() * 6) + 1;

    document.getElementById("diceOutput1").innerHTML = dice;
}