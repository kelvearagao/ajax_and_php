
$("#deletar").click(function(){
	//var dataString = $("#myForm").serialize();

	/*
	var dataString = $("input[name='checkbox[]']:checked").map(function(){
		return this.value;
	}).get();
*/
	
	var dataString = new Array();

	$("input[name='checkbox[]']:checked").each(function() {

		dataString.push($(this).val());

	});

	$.ajax({
		type : 'POST',
		url : 'controle.php',
		data : {dataArray: dataString},
		success: function(response) {
			
			$("input[name='checkbox[]']:checked").parents("tr").remove();
			
			$('#myResponse').html(response);
		}
	});

	/*
	alert('deletar');

	var select = new Array();
	
	$("input[name='checkbox[]']:checked").each(function() {

		select.push($(this).val());

	});

	
	alert(select.toString());
	*/


});


//select and deselect
$("#check_root").click(function () {
	$('input:checkbox').prop('checked', this.checked);
});

//If one item deselect then button CheckAll is UnCheck
$(".chkmark").click(function () {
if (!$(this).is(':checked'))
	$("#check_root").prop('checked', false);
});