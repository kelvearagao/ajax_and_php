


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
			
			$('#botao_deletar').prop('disabled', true);
			$("#botao_deletar").attr("href", "");
			$("#check_root").prop('checked', false);
			
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
	$("input[name='checkbox[]']").prop('checked', this.checked);

	if (this.checked)
	{
		$("#botao_deletar").attr("href", "#myModal");
		$('#botao_deletar').prop('disabled', false);
	}
	else
	{
		$('#botao_deletar').prop('disabled', true);
		$("#botao_deletar").attr("href", "");
	}
});

//If one item deselect then button CheckAll is UnCheck
$(".chkmark").click(function () {

		var length = $("input[name='checkbox[]']").length;
		var cont = 0;

		$("input[name='checkbox[]']").each(function(){
			if(this.checked)
				cont++;
		});

		if (cont == length)
		{
			$("#check_root").prop('checked', true);
			$("#botao_deletar").attr("href", "#myModal");
			$('#botao_deletar').prop('disabled', false);		
		}
		else
		{
			if (cont > 0)
			{
				$("#check_root").prop('checked', false);
				$("#botao_deletar").attr("href", "#myModal");
				$('#botao_deletar').prop('disabled', false);
			}
			else
			{
				$('#botao_deletar').prop('disabled', true);
				$("#botao_deletar").attr("href", "");			
			}

		}
});