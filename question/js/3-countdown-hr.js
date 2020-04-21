var counter = {};
window.addEventListener("load", function () {
  // COUNTDOWN IN SECONDS
  // EXAMPLE - 75 MINS = 75 X 60 = 4500 SECS
  counter.end = 9100;

  // Get the containers
  counter.hr = document.getElementById("cd-hr");
  counter.min = document.getElementById("cd-min");
  counter.sec = document.getElementById("cd-sec");

  // Start if not past end date 
  if (counter.end > 0) {
    counter.ticker = setInterval(function(){
      // Stop if passed end time
      counter.end--;
      if (counter.end <= 0) { 
        clearInterval(counter.ticker); 
        counter.end = 0;
      }

      // Calculate remaining time
      var secs = counter.end;
      var hrs  = Math.floor(secs / 3600); // 1 hr = 60 secs X 60 mins
      secs -= hrs * 3600;
      var mins  = Math.floor(secs / 60); // 1 min = 60 secs
      secs -= mins * 60;

      // Update HTML
      counter.hr.innerHTML = hrs;
      counter.min.innerHTML = mins;
      counter.sec.innerHTML = secs;
    }, 1000);
  }
});