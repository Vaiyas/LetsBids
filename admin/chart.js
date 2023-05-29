// Set the data for the chart
var data = {
  labels: [
    "Services ",
      "Sanction",
      "Product Quality",
      "Customer Satisfaction",
      "Financial Benefits",
      "Security",
  ],
  datasets: [
    {
      label: "FEEDBACK",
      data: [80, 95, 80, 20, 50, 60],
      backgroundColor: [
        "#FF6384",
        "#36A2EB",
        "#FFCE56",
        "#4BC0C0",
        "#9966FF",
        "#004961",
      ],
      hoverBackgroundColor: [
        "#FF6384",
        "#36A2EB",
        "#FFCE56",
        "#4BC0C0",
        "#9966FF",
        "#004961",
      ],
    },
  ],
};

// Get the canvas element
var ctx = document.getElementById("chart").getContext("2d");

// Create the chart
var myChart = new Chart(ctx, {
  type: "pie",
  data: data,
  options: {
    responsive: true,
    maintainAspectRatio: false,
    legend: {
      position: "center",
      labels: {
        fontColor: "red", // change font color here
        fontSize: 26, // change font size here
        fontStyle: "bold",
        boxWidth: 0,
        usePointStyle: true,
      },
    },
  },
});
