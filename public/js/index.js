function loadGraphics()
{
    $.ajax({
        url: "http://127.0.0.1:8000/api/parking",
        type: 'GET'
    }).done(function (resp){
        let data = JSON.parse(resp)
        let freePark = 0;
        let busyPark = 10;
        for(let i = 0; i < data.length; i++)
        {
            if(data[i].status == "liberado")
            {
                freePark++;
            }
        }

        busyPark = busyPark - freePark;

        const ctx = document.getElementById('myChart');
        const myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Espacios Disponible', 'Espacios Vacios'],
                datasets: [{
                    label: '# of Votes',
                    data: [freePark, busyPark],
                    backgroundColor: [
                        'rgba(255, 26, 71, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
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

    })

}

function avadakedavra()
{

    const ctx = document.getElementById('myChartTwo');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo',  
            ],
            datasets: [{
                label: 'Carros ingresados en un dia',
                data: [54, 80, 70, 54, 65, 35, 22],
                backgroundColor: [
                    'rgba(255, 26, 71, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 200, 71, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 200, 71, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 200, 71, 0.7)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'
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

}

function avadakedavra2()
{

    const ctx = document.getElementById('myChartThree');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                'Cajon 1', 'Cajon 2', 'Cajon 3', 'Cajon 4', 'Cajon 5', 'Cajon 6', 'Cajon 7',
                'Cajon 8', 'Cajon 9', 'Cajon 10',
            ],
            datasets: [{
                label: 'Estadisticas de cajones mas usados',
                data: [10, 12, 8, 18, 5, 11, 4, 3, 2, 14],
                backgroundColor: [
                    'rgba(255, 26, 71, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 126, 71, 0.7)',
                    'rgba(154, 162, 235, 0.7)',
                    'rgba(255, 216, 71, 0.7)',
                    'rgba(90, 162, 235, 0.7)',
                    'rgba(215, 126, 71, 0.7)',
                    'rgba(254, 12, 235, 0.7)',
                    'rgba(250, 216, 21, 0.7)',
                    'rgba(211, 112, 215, 0.7)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'
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

}

function avadakedavra3()
{

    const ctx = document.getElementById('myChartFour');
    const myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Cantidad promedio usada', 'Sobrantes de cajones',],
            datasets: [{
                label: 'Cuantos cajones se usan en promedio',
                data: [8, 2],
                backgroundColor: [
                    'rgba(255, 26, 71, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'
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

}


$(document).ready(function()
{

    $("#myModal").modal("show");

    if(document.getElementById('myChart') != null)
    {

        loadGraphics();

    }

    if(document.getElementById('myChartTwo') != null)
    {

        avadakedavra();

    }

    if(document.getElementById('myChartThree') != null)
    {

        avadakedavra2();

    }

    if(document.getElementById('myChartFour') != null)
    {

        avadakedavra3();

    }

});
