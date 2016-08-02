$(document).ready(function(){ 
	var flag = false;

	$('#pre').click(function(){ 
		if (flag) {
			if (confirm("Выйти из preview?")) {
				flag = false;
			} else {
				 return false;
			}
		} else {
			var data = $('#form').serialize();
			$.ajax({
				url: '/preview',
				type: 'POST',
				data: data,
				success: function(data){
					$('#form').before(data);
					flag = true;
				}
			});
		return false;
		}
	});

});