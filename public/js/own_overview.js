var ctx = document.getElementById('ownOverviewChartAvailableEmployees').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Service Providers", "Receptionists", "Managers"],
        datasets: [{
            data: [70, 10, 6],
            // borderColor: [
            //     "#3cba9f",
            //     "#ffa500",
            //     "#c45850",
            // ],
            backgroundColor: [
                "#1BC657",
                "#ffa500",
                "#DA2346",
                // "rgb(60,186,159,0.1)",
                // "rgb(255,165,0,0.1)",
                // "rgb(196,88,80,0.1)",
            ],
            borderWidth: 5,
        }]
    },
    options: {
        scales: {
            xAxes: [{
                display: false,
            }],
            yAxes: [{
                display: false,
            }],
        }
    },

});







var ctx = document.getElementById('ownOverviewChartIncome').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        datasets: [{
            data: [86, 114, 106, 106, 107, 111, 133],
            label: "Income",
            borderColor: "rgb(3, 122, 255)",
            // backgroundColor: "rgb(62,149,205,0.1)",
        }, {
            data: [70, 90, 44, 60, 83, 90, 100],
            label: "Expences",
            borderColor: "rgb(218, 35, 70)",
            // backgroundColor: "rgb(60,186,159,0.1)",
        }, {
            data: [10, 21, 60, 44, 17, 21, 17],
            label: "Profit",
            borderColor: "rgb(27, 198, 87)",
            // backgroundColor: "rgb(255,165,0,0.1)",
        }]
    },
});





var ctx = document.getElementById('ownOverviewChartSalaryStatus').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ["Paid", "Unpaid"],
        datasets: [{
            data: [70, 10],
            // borderColor: [
            //     "#3cba9f",
            //     "#ffa500",
            //     "#c45850",
            // ],
            backgroundColor: [
                "#1BC657",
                "#DA2346",
                // "#c45850",
                // "rgb(60,186,159,0.1)",
                // "rgb(255,165,0,0.1)",
                // "rgb(196,88,80,0.1)",
            ],
            borderWidth: 5,
        }]
    },
    options: {
        scales: {
            xAxes: [{
                display: false,
            }],
            yAxes: [{
                display: false,
            }],
        }
    },
});