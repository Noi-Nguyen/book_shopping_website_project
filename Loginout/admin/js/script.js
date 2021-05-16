


$(document).ready( function () {
    $('#ad__table').DataTable();
} );

var ctx = document.getElementById('ad__chart');
var ad__chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Q1 - 2020', 'Q2 - 2020', 'Q3 - 2020', 'Q4 - 2020', 'Q1 - 2020', 'Q2 -2020'],
        datasets: [{
            label: 'Nghìn VND',
            data: [300, 190, 365, 500, 560, 496.5],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
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
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
