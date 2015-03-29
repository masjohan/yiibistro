<?php

/* @var $this yii\web\View */
$this->title = 'Welcome to Yii Bistro';
?>

<script>

// Set a timer until the opening day
function countdownTimer() {

var end = new Date('04/05/2015 8:00 AM');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = "We're open!";

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('countdown').innerHTML = days + ' Days, ';
        document.getElementById('countdown').innerHTML += hours + ':';
        document.getElementById('countdown').innerHTML += minutes + ':';
        document.getElementById('countdown').innerHTML += seconds + ' remaining';
    }

    timer = setInterval(showRemaining, 1000);
}

function giveReward() {
	var randomCoupon = Math.floor((Math.random() * 10) + 1);
       document.getElementById('gift').innerHTML = "You've received a coupon for $" + randomCoupon + " off your first purchase!";

	// disable every button
	document.getElementById('gift1button').style.visibility = "hidden";
	document.getElementById('gift2button').style.visibility = "hidden";
	document.getElementById('gift3button').style.visibility = "hidden";

	

}

countdownTimer()

</script>

<div class="site-newuser">

    <div class="jumbotron">
        <h1>Welcome! Yii Bistro is opening soon!</h1>

        <h2 id="countdown">&nbsp;</h1>
        <p class="lead">You are customer <?php echo Yii::$app->user->getId(); ?>.</p>
    </div>

    <div class="body-content">

		<h2 align='center' id="gift">You have a reward waiting! Choose from one of the mystery gifts below:</h2>
        <div class="row">
            <div class="col-lg-4">
                <p align='center'><a class="btn btn-lg btn-success" id="gift1button" onclick="getElementById(this).innerHTML=giveReward()">Gift 1</a></p>
            </div>
            <div class="col-lg-4">
                <p align='center'><a class="btn btn-lg btn-success" id="gift2button" onclick="getElementById(this).innerHTML=giveReward()">Gift 2</a></p>
            </div>
            <div class="col-lg-4">
                <p align='center'><a class="btn btn-lg btn-success" id="gift3button" onclick="getElementById(this).innerHTML=giveReward()">Gift 3</a></p>
            </div>
        </div>
        				
        <h2 id="gift" align='center'></h2>


    </div>
</div>
</html>
