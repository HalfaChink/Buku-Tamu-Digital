// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
    number = (number + '').replace(',', '').replace(' ', '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function(n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}

// Fetch data and initialize the chart
document.addEventListener("DOMContentLoaded", function() {
  fetch("/chart-data")
  .then(response => {
    if (!response.ok) {
        throw new Error("Network response was not ok");
    }
    return response.json();
})
      .then(data => {
          const ctx = document.getElementById("myBarChart").getContext("2d");
          new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                  datasets: [{
                      label: "Pengunjung",
                      backgroundColor: "#ff5a5a",
                      hoverBackgroundColor: "white",
                      borderColor: "#ff5a5a",
                      data: data,
                  }],
              },
              options: {
                  maintainAspectRatio: false,
                  layout: {
                      padding: {
                          left: 10,
                          right: 100,
                          top: 25,
                          bottom: 0
                      }
                  },
                  scales: {
                      xAxes: [{
                          time: {
                              unit: 'month'
                          },
                          gridLines: {
                              display: false,
                              drawBorder: false
                          },
                          ticks: {
                              maxTicksLimit: 12
                          },
                          maxBarThickness: 30,
                      }],
                      yAxes: [{
                          ticks: {
                              min: 0,
                              maxTicksLimit: 5,
                              padding: 10,
                              callback: function(value) {
                                  return value.toLocaleString();
                              }
                          },
                          gridLines: {
                              color: "white",
                              zeroLineColor: "white",
                              drawBorder: false,
                              borderDash: [2],
                              zeroLineBorderDash: [2]
                          }
                      }],
                  },
                  legend: {
                      display: false
                  },
                  tooltips: {
                      titleMarginBottom: 10,
                      titleFontColor: '#6e707e',
                      titleFontSize: 14,
                      backgroundColor: "rgb(255,255,255)",
                      bodyFontColor: "#858796",
                      borderColor: '#dddfeb',
                      borderWidth: 1,
                      xPadding: 15,
                      yPadding: 15,
                      displayColors: false,
                      caretPadding: 10,
                      callbacks: {
                          label: function(tooltipItem, chart) {
                              const datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                              return datasetLabel + ': ' + tooltipItem.yLabel.toLocaleString();
                          }
                      }
                  },
              }
          });
      })
      .catch(error => console.error("Error fetching chart data:", error));
});
