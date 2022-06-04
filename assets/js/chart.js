google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBackgroundColor);

function drawBackgroundColor() {
    var data = new google.visualization.DataTable();
    data.addColumn('date', 'd');
    data.addColumn('number', 'ord');
    for (let pair of arr){
        let sep = pair[0].split('-');
        let dt = new Date(sep[0],sep[1],sep[2]);
        let c = Number(pair[1]);
        data.addRows([[dt,c]]);
    }
    var options = {

        legend: 'none',
        hAxis: {
            format: 'd.MM.yy',
            title: 'Даты'
        },
        vAxis: {
            title: 'Заказы'
        },
    };

    var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}