export const RenderNumberFormatCurrency =  {
    formatNumberCurrency : (number, decimals, dec_point, thousands_sep) => {
        // *     example: number_format(1234.56, 2, ',', ' ');
        // *     return: '1 234,56'
        number = (number + "").replace(",", "").replace(" ", "");
        var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = typeof thousands_sep === "undefined" ? "," : thousands_sep,
            dec = typeof dec_point === "undefined" ? "." : dec_point,
            s = "",
            toFixedFix = function(n, prec) {
                var k = Math.pow(10, prec);
                return "" + Math.round(n * k) / k;
            };
        // Fix for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : "" + Math.round(n)).split(".");
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || "").length < prec) {
            s[1] = s[1] || "";
            s[1] += new Array(prec - s[1].length + 1).join("0");
        }

        return s.join(dec);
    }
}

export const RenderComponentChart = {
    renderComponentChartBarOportunities : (selector, labels, values) => {
        var min = Math.min(...values) || 0;
        var max = Math.max(...values) || 0;
        var baseMin = 0;
        var baseMax = Math.ceil( max / 50000) * 50000;
        return  new Chart( document.querySelector( selector), {
            type: "bar",
            data: {
                labels: labels,
                datasets: [{
                    label: "Ventas",
                    backgroundColor: "#2e4999",
                    hoverBackgroundColor: "#243c7d",
                    borderColor: "#bb7d0d",
                    data: values,
                    maxBarThickness: 25
                }]
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: "month"
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 6
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            min: baseMin,
                            max: baseMax,
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a dollar sign in the ticks
                            callback: function(value, index, values) {
                                let numberFormat = new Intl.NumberFormat('es-MX',{ style: 'currency', currency: 'MXN' });
                                return ''+numberFormat.format(value)+' MXN';//number_format(value);
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }]
                },
                legend: {
                    display: false
                },
                tooltips: {
                    titleMarginBottom: 10,
                    titleFontColor: "#6e707e",
                    titleFontSize: 14,
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: "#dddfeb",
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel =
                                chart.datasets[tooltipItem.datasetIndex].label || "";
                            let numberFormat = new Intl.NumberFormat('es-MX',{ style: 'currency', currency: 'MXN' });
                            return datasetLabel + ": " + numberFormat.format(tooltipItem.yLabel)+' MXN'; //number_format(tooltipItem.yLabel);
                        }
                    }
                }
            }
        });
    },
};
