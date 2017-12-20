$(function(){

    //get the pie chart canvas
    var ctx1 = $("#pie-chartcanvas-1");
    var ctx2 = $("#pie-chartcanvas-2");

    //pie chart data
    var data1 = {
        labels: ["activity1", "activity2", "activity3", "activity4", "activity5"],
        datasets: [
            {
                label: "TeamA Score",
                data: [10, 50, 25, 70, 40],
                backgroundColor: [
                    "#ff5e7a",
                    "#9999ff",
					"#90bcff",
                    "#00bdce",
					"#ffc862"
                ],
                borderColor: [
                    "#ff5e7a",
                    "#7f7fff",
                    "#90b3ff",
                    "#00bdce",
					"#ffc862" 
                ],
                borderWidth: [1, 1, 1, 1, 1]
            }
        ]
    };

   
    //options
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Time allocation",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };

    //create Chart class object
    var chart1 = new Chart(ctx1, {
        type: "pie",
        data: data1,
        options: options
    });

});