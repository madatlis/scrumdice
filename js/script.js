function rollDice(){
    var die1 = document.getElementById("die1");
    var die2 = document.getElementById("die2");
    var status = document.getElementById("status");
    var diceforms = ["0", "&#9856;", "&#9857;", "&#9858;", "&#9859;", "&#9860;", "&#9861;"];
    var d1 = Math.floor(Math.random() * 6) + 1;
    var d2 = Math.floor(Math.random() * 6) + 1;
    var diceTotal = d1 + d2;
    die1.innerHTML = diceforms[d1];
    die2.innerHTML = diceforms[d2];
    status.innerHTML = "You rolled "+diceTotal+".";

    $('#highlightCountdown').removeClass('highlight').countdown('option', {until: + 15*diceTotal});

$('.announcement').removeClass('wrap_it_up');

}


$('#highlightCountdown').countdown({until: 0, onTick: highlightLast5});

function highlightLast5(periods) {
    if ($.countdown.periodsToSeconds(periods) === 5) {
        $(this).addClass('highlight');
        if($('#status').hasClass('announcement')){
          $('.announcement').addClass('wrap_it_up');
          $('.announcement').append("<br>Wrap it up...");
        }
        //get status div, replace text with "Wrap it up"
    }
}
