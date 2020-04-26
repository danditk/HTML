
		function count()
		{
			var todate = new Date();
			// var day = todate.getDate();
			// if(day < 10) day = "0" + day;
			// var month = todate.getMonth() +1;
			// if(month < 10) month = "0" + month;
			// var year = todate.getFullYear();

			var hours = todate.getHours();
			if(hours < 10) hours = "0" + hours;
			var minutes = todate.getMinutes();
			if(minutes < 10) minutes = "0" + minutes;
			var seconds = todate.getSeconds();
			if(seconds < 10) seconds = "0" + seconds;

			document.getElementById("clock").innerHTML =
			// day + "." + month + "." + year + "  " +
			hours + ":" + minutes + ":" + seconds;

			setTimeout("count()", 1000);
		}
