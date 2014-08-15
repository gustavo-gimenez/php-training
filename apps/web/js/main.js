$(function () { 
    $('#stat1').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Frutas mas consumidas'
        },
        xAxis: {
            categories: data.bar.categories
        },
        yAxis: {
            title: {
                text: 'Frutas Comidas'
            }
        },
        series: [{
            name: data.bar.series[0].name,
            data: data.bar.series[0].data
        }, {
            name: data.bar.series[1].name,
            data: data.bar.series[1].data
        }]
    });
    
    $('#stat2').highcharts({
        title: {
            text: 'Promedio de Temperatura Mensual',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: WorldClimate.com',
            x: -20
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Temperature (°C)'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Tokyo',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }]
    });
});