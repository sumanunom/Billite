(function($) {
  'use strict';
  $(function() {
 
  if ($("#marketingOverview").length) {
      var marketingOverviewChart = document.getElementById("marketingOverview").getContext('2d');
      var marketingOverviewData = {
          labels: ["APR","MAY", "JUN", "JUL", "AUG","SEP", "OCT", "NOV", "DEC", "JAN", "FEB", "MAR"],
          datasets: [{
              label: 'Total Billed',
              data: client_billing,
              backgroundColor: "#52CDFF",
              borderColor: [
                  '#52CDFF',
              ],
             
              borderWidth: 0,
              fill: true, // 3: no fill
              
          },{

            label: 'Total Paid',
            data: client_billing_paid,
            backgroundColor: "#1F3BB3",
            borderColor: [
                '#534fc9',
            ],
            borderWidth: 0,
            fill: true, // 3: no fill
        }]
      };
  
      var marketingOverviewOptions = {
        responsive: true,
        maintainAspectRatio: false,
          scales: {
              yAxes: [{
                  gridLines: {
                      display: true,
                      drawBorder: false,
                      color:"#F0F0F0",
                      zeroLineColor: '#F0F0F0',
                  },
                  ticks: {
                    beginAtZero: true,
                    autoSkip: true,
                    maxTicksLimit: 5,
                    fontSize: 12,
                    // color:"#314fA9",
                    fontColor: mode_color,
                      callback: function(value, index, values) {
                    if(parseInt(value) >= 1000){
                      return '₹' + value.toString().replace(/\B(?=(?:(\d\d)+(\d)(?!\d))+(?!\d))/g, ",");
                    } else {
                      return '₹' + value;
                    }
                  }
                  }
              }],
              xAxes: [{
                stacked: true,
                barPercentage: 0.35,
                gridLines: {
                    display: false,
                    drawBorder: false,
                },
                ticks: {
                  beginAtZero: false,
                  autoSkip: true,
                  maxTicksLimit: 12,
                  fontSize: 12,
                  // color:"#314fA9"
                  fontColor: mode_color
                }
            }],
          },
          legend:false,
          legendCallback: function (chart) {
            var text = [];
            text.push('<div class="chartjs-legend"><ul>');
            for (var i = 0; i < chart.data.datasets.length; i++) {
              text.push('<li class="text-muted text-small">');
              text.push('<span style="background-color:' + chart.data.datasets[i].borderColor + '">' + '</span>');
              text.push(chart.data.datasets[i].label);
              text.push('</li>');
            }
            text.push('</ul></div>');
            return text.join("");
          },
          
          elements: {
              line: {
                  tension: 0.4,
              }
          },
          tooltips: {
              backgroundColor: 'rgba(31, 59, 179, 1)',
              callbacks: {
              label: function (tooltipItem) {
                  return (new Intl.NumberFormat('en-IN', {
                      style: 'currency',
                      currency: 'INR',
                  })).format(tooltipItem.value);
              }
      }

          }
      }
      var marketingOverview = new Chart(marketingOverviewChart, {
          type: 'bar',
          data: marketingOverviewData,
          options: marketingOverviewOptions
      });
      document.getElementById('marketing-overview-legend').innerHTML = marketingOverview.generateLegend();
      console.log(client_billing);
    }
    
  });
})(jQuery);