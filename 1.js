function validate() {
	var valid = true;
	let Y = document.getElementById("yValue").value;
	let X = document.getElementById("xValue").value;

	if (isNaN(Y)) {
		alert("Введите числовое значение координаты Y в промежутке от -3 до 5.")
		valid = false;
	}
	if (Y >= -3 && Y <= 5 && Y != "" && X !== "LoL") {
		valid = true;
	} else if ((Y < -3 || Y > 5 || Y == "") && X !== "LoL") {
		alert("Введите значение координаты Y в промежутке от -3 до 5.")
		valid = false;
	} else if (Y >= -3 && Y <= 5 && Y != "" && X === "LoL") {
		alert("Выберите координату X")
		valid = false;
	} else if ((Y < -3 || Y > 5 || Y == "") && X === "LoL") {
		alert("Выберите координату X, а затем введите значение координаты Y в промежутке от -3 до 5.")
		valid = false;
	}
	return valid;
}

$(document).ready(function () {
	$('#loginform').submit(function (e) {
		e.preventDefault();
		if( validate()){
			$.ajax({
				method: 'POST',
				url: '../PHP/laba1.php',
				data: $(this).serialize(),
			}).done(function (answer) {
				var res = jQuery.parseJSON (answer);
				$("#result_table").append(
					"<tr> <td>" + res.x + "</td>" +
					"<td class='overwhelmed'>" + res.y + "</td>" +
					"<td class='overwhelmed'>" + res.r + "</td>" +
					"<td>" + res.result + "</td>" +
					"<td>" + res.time + "</td>" +
					"<td class='overwhelmed'>" + res.time_of_work*1000+ " ms </td> </tr>");
			})
	
		}
	});
});
