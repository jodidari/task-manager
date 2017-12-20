    google.charts.load('current', {'packages':['timeline']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Activity');
      data.addColumn('date', 'Start Date');
      data.addColumn('date', 'End Date');

      data.addRows([
        ['Focus Group Sessions',     new Date(2017, 9, 5), new Date(2017, 9, 10)],
        ['Conduct further researchs', new Date(2017, 9, 11), new Date(2017, 9, 13)],
        ['Collect technology ideas from Research', new Date(2017, 9, 11), new Date(2017, 9, 14)],
        ['Review technology idea', new Date(2017, 9, 15), new Date(2017, 9, 20)],
        ['Prioritise technology ideas', new Date(2017, 9, 17), new Date(2017, 9, 20)],
        ['Prospect/customer & product requirements',  new Date(2017, 9, 21), new Date(2017, 9, 25)],
        ['Prepare Log Frame',   new Date(2017, 9, 26), new Date(2017, 10, 5)],
        ['Prepare Proposal/Business Case', new Date(2017, 10, 6), new Date(2017, 10, 10)],
        ['Pitch',  new Date(2017, 10, 11), new Date(2017, 10, 12)],
      ]);

      var options = {
        height: 450,
        width:800,
        timeline: {
          groupByRowLabel: true
        }
      };

      var chart = new google.visualization.Timeline(document.getElementById('chart_div'));

      chart.draw(data, options);
    }