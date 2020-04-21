<?php
//including the database connection file
include("config.php");

$result = mysqli_query($db, "SELECT * FROM timer ORDER BY id DESC");
while($res = mysqli_fetch_array($result)) { 
$date = $res['date'];
$h = $res['h'];
$m = $res['m'];
$s = $res['s'];
}
?>

<script>
var countDownDate = <?php 
echo strtotime("$date $h:$m:$s" ) ?> * 1000;
var now = <?php echo time() ?> * 1000;

// Update the count down every 1 second
var x = setInterval(function() {
now = now + 1000;
// Find the distance between now an the count down date
var distance = countDownDate - now;
// Time calculations for days, hours, minutes and seconds
var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);
// Output the result in an element with id="demo"
//document.getElementById("day").innerHTML = days ;
document.getElementById("hour").innerHTML = hours ;
document.getElementById("minute").innerHTML = minutes ;
document.getElementById("second").innerHTML = seconds ;

// If the count down is over, write some text 
if (distance < 0) {
clearInterval(x);
 document.getElementById("demo").innerHTML = "EXPIRED";
}
    
}, 1000);

    </script>
