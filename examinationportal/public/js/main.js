$('.submit').on("submit", function(){
	return confirm("Do you want to submit details?");
});

var examstarttime = document.getElementById('examstarttime').value;
var examendtime = document.getElementById('examendtime').value;
var examdate = document.getElementById('examdate').value;

// Set the date we're counting down to
//var countDownDate = new Date("08-20-2020 12:50:00").getTime();
var countDownDate = new Date(examdate+' '+examendtime).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  //var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
	
  
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = 'Time :- '+ hours + "h "
  + minutes + "m " + seconds + "s ";
	
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    // document.getElementById("demo").innerHTML = "EXPIRED";
     window.location = "http://localhost:8000/";
  }
}, 1000);



