function loadGraphics()
{
    $.ajax({
        url: "http://192.168.100.96:8001/api/parking",
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
                labels: ['Espacios Libres', 'Espacios Vacios'],
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

$(document).ready(function()
{

    $("#myModal").modal("show");

    loadGraphics();

});
