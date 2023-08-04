function displayDateTime() {
    var date = new Date();
    var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    var dateString = date.toLocaleDateString(undefined, options);
    var timeString = date.toLocaleTimeString();

    // Display the date and time
    document.getElementById("datetime").textContent = dateString + " " + timeString;
  }

  // Call the function every second (1000 milliseconds)
  setInterval(displayDateTime, 1000);