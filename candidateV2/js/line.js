$(function () {

  //get the line chart canvas
  var ctx = $("#line-chartcanvas");

  //line chart data
  var data = {
    labels: ["10/5/1019", "15/5/2019", "20/5/2019", "25/5/2019", "30/5/2019	"],
    datasets: [
      {
        label: "Markah",
        data: [30, 70, 60, 75, 65],
        backgroundColor: "red",
        borderColor: "red",
        fill: false,
        lineTension: 0,
        radius: 5
      }

    ]
  };

  //options
  var options = {
    responsive: true,
    title: {
      display: true,
      position: "top",
      text: "Line Graph",
      fontSize: 18,
      fontColor: "#111"
    },
    legend: {
      display: true,
      position: "bottom",
      labels: {
        fontColor: "#333",
        fontSize: 16
      }
    }
  };

  //create Chart class object
  var chart = new Chart(ctx, {
    type: "line",
    data: data,
    options: options
  });
});