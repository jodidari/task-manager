/*global $*/

$(document).ready(function(){

		//iterate through each textboxes and add keyup
		//handler to trigger sum event
		$(".txt").each(function() {

			$(this).keyup(function(){
				calculateSum();
			});
		});
			$(".txt1").each(function() {

			$(this).keyup(function(){
				calculateSum1();
			
			});
		});
			$(".txt2").each(function() {

			$(this).keyup(function(){
				calculateSum2();
		
			});
		});
			$(".txt3").each(function() {

			$(this).keyup(function(){
				calculateSum3();
		
			});
		});
			$(".txt4").each(function() {

			$(this).keyup(function(){
				calculateSum4();
			
			});
		});
	

	});

	function calculateSum() {

		var sum = 0;
		//iterate through each textboxes and add the values
		$(".txt").each(function() {

			//add only if the value is number
			if(!isNaN(this.value) && this.value.length!=0) {
				sum += parseFloat(this.value);
			}

		});
		//.toFixed() method will roundoff the final sum to 2 decimal places
		$("#sum").html(sum.toFixed(0));
	}
		function calculateSum1() {

		var sum = 0;
		//iterate through each textboxes and add the values
		$(".txt1").each(function() {

			//add only if the value is number
			if(!isNaN(this.value) && this.value.length!=0) {
				sum += parseFloat(this.value);
			}

		});
		//.toFixed() method will roundoff the final sum to 2 decimal places
		$("#sum1").html(sum.toFixed(0));
	}
		function calculateSum2() {

		var sum = 0;
		//iterate through each textboxes and add the values
		$(".txt2").each(function() {

			//add only if the value is number
			if(!isNaN(this.value) && this.value.length!=0) {
				sum += parseFloat(this.value);
			}

		});
		//.toFixed() method will roundoff the final sum to 2 decimal places
		$("#sum2").html(sum.toFixed(0));
	}
		function calculateSum3() {

		var sum = 0;
		//iterate through each textboxes and add the values
		$(".txt3").each(function() {

			//add only if the value is number
			if(!isNaN(this.value) && this.value.length!=0) {
				sum += parseFloat(this.value);
			}

		});
		//.toFixed() method will roundoff the final sum to 2 decimal places
		$("#sum3").html(sum.toFixed(0));
	}
		function calculateSum4() {

		var sum = 0;
		//iterate through each textboxes and add the values
		$(".txt4").each(function() {

			//add only if the value is number
			if(!isNaN(this.value) && this.value.length!=0) {
				sum += parseFloat(this.value);
			}

		});
		//.toFixed() method will roundoff the final sum to 2 decimal places
		$("#sum4").html(sum.toFixed(0));
	}
		function calculateSum5() {

		var sum = 0;
		//iterate through each textboxes and add the values
		$("input[class^='txt']").each(function() {

			//add only if the value is number
			if(!isNaN(this.value) && this.value.length!=0) {
				sum += parseFloat(this.value);
			}

		});
		//.toFixed() method will roundoff the final sum to 2 decimal places
		$("#sum5").html(sum.toFixed(0));
	}