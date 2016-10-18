/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var users;
var month_sets = [];
$(document).ready(function () {



    $('#user').select2({
        placeholder: "Select a user",
        ajax: {
            dataType: "json",
            url: "api/get_users",
            processResults: function (data) {
                return {
                    results: $.map(data, function (obj) {
                        return {id: obj.username, text: obj.name};
                    })
                };
            }
        }
    });


    $("select[id*='user']").bind("change", function () {
        document.getElementById('selected_user').innerText = $('#user').val() + "'s Activity";
        //initChart();
        computeChartData();
    });




});

function computeChartData() {

    month_sets = [];
    for (var i = 1; i <= 7; i++) {
        var today = moment();
        var month_i = today.subtract(i, 'months').calendar();

        $.ajax({
            "dataType": 'json',
            "contentType": "application/json; charset=utf-8",
            "type": "GET",
            async: false,
            "url": "api/Stockcard/user_activity",
            "data": {"username": $('#user').val(), "date": month_i},
            "success": function (msg) {
                var month = {
                    date: msg.date,
                    created: msg.created,
                    approved: msg.approved,
                    month: msg.month,
                    year: msg.year,
                    date_label : msg.date_label
                };

                month_sets.unshift(month);
                // console.log(month_sets);
            },
            "error": function (msg) {
                console.log(msg);
            }});
    }
    // console.log(month_sets);
    initChart(month_sets);


}


function initChart(month_sets) {

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var areaChart = new Chart(areaChartCanvas);
    var areaChartData = {
        // labels: ["January", "February", "March", "April", "May", "June", "July"],
        labels: [month_sets[0].date_label, month_sets[1].date_label, month_sets[2].date_label, month_sets[3].date_label, month_sets[4].date_label, month_sets[5].date_label, month_sets[6].date_label],
        datasets: [
            {
                label: "Created",
                fillColor: "rgba(210, 214, 222, 1)",
                strokeColor: "rgba(210, 214, 222, 1)",
                pointColor: "rgba(210, 214, 222, 1)",
                pointStrokeColor: "#c1c7d1",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [month_sets[0].created, month_sets[1].created, month_sets[2].created, month_sets[3].created, month_sets[4].created, month_sets[5].created, month_sets[6].created]
            },
            {
                label: "Approved",
                fillColor: "rgba(60,141,188,0.9)",
                strokeColor: "rgba(60,141,188,0.8)",
                pointColor: "#3b8bba",
                pointStrokeColor: "rgba(60,141,188,1)",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(60,141,188,1)",
                data: [month_sets[0].approved, month_sets[1].approved, month_sets[2].approved, month_sets[3].approved, month_sets[4].approved, month_sets[5].approved, month_sets[6].approved]
            }
        ]
    };
    var areaChartOptions = {
        //Boolean - If we should show the scale at all
        showScale: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: false,
        //String - Colour of the grid lines
        scaleGridLineColor: "rgba(0,0,0,.05)",
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - Whether the line is curved between points
        bezierCurve: true,
        //Number - Tension of the bezier curve between points
        bezierCurveTension: 0.3,
        //Boolean - Whether to show a dot for each point
        pointDot: false,
        //Number - Radius of each point dot in pixels
        pointDotRadius: 4,
        //Number - Pixel width of point dot stroke
        pointDotStrokeWidth: 1,
        //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
        pointHitDetectionRadius: 20,
        //Boolean - Whether to show a stroke for datasets
        datasetStroke: true,
        //Number - Pixel width of dataset stroke
        datasetStrokeWidth: 2,
        //Boolean - Whether to fill the dataset with a color
        datasetFill: true,
        //String - A legend template
        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
        //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio: true,
        //Boolean - whether to make the chart responsive to window resizing
        responsive: true
    };
    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions);

}