$(function () {
    $('#winpercent').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Race Wins (26%)'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: [
                ['Race Wins',   26],
                ['Non-win Races',       100-26],
            ]
        }]
    });//end chart
    $('#podiumpercent').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Podiums / Top 3 (60%)'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: [
                ['Podiums',   60],
                ['Non-podium Races',       40],
            ]
        }]
    });//end chart
    $('#polepercent').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Poles / 1st in Qualifying (8%)'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: [
                ['Poles',   8],
                ['Non-pole Qualifyings',       92],
            ]
        }]
    });//end chart
    $('#fastlappercent').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Fastest Lap in Race (13%)'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: [
                ['Fast Laps',   13],
                ['Non-FL Races',       100-13],
            ]
        }]
    });//end chart
    $('#seasonline').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'Wins, Podiums, Total Races'
        },
        xAxis: {
            categories: ['2011/2012 A', '2012 B', '2013 A', '2013 B', '2014 A', '2014 B']
        },
        yAxis: {
            title: {
                text: 'Amount'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [
        {
            name: 'Wins',
            data: [23,77,88,97,101,103]
        },
        {
            name: 'Podiums',
            data: [58,155,188,214,224,238]
        },
        {
            name: 'Races',
            data: [108,237,305,353,367,396]
        }]
    });//end season line
    $('#champline').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'Drivers and Team Championships'
        },
        xAxis: {
            categories: ['2011/2012 A', '2012 B', '2013 A', '2013 B', '2014 A', '2014 B']
        },
        yAxis: {
            title: {
                text: 'Championships'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [
        {
            name: 'Drivers Titles',
            data: [6,12,14,16,18,19]
        },
        {
            name: 'Team Titles',
            data: [8,17,22,26,29,32]
        }
        ]
    });//end champ line
});//end ready