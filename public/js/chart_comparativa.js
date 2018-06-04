var ctx = document.getElementById("chart_comparativa").getContext('2d');
var chart_comparativa = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Lunes 1", "Martes 2", "Miercoles 3", "Jueves 4", "Viernes 5", "Sabado 6", "Lunes 8", "Martes 9", "Miercoles 10", "Jueves 11", "Viernes 12", "Sabado 13"],
        datasets: [{
            label: 'Nuevos clientes',
            data: [85, 200, 100, 50, 25, 70, 10, 80, 15, 290, 150, 134, 56],
            backgroundColor: [
                //'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                //'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
      responsive:true,
      maintainAspectRatio: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
