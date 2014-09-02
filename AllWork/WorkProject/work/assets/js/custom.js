/* assets/js/custom.js*/
$(document).ready(function() {
$('#frm').submit(function(){
	
	$.post($('#frm').attr('action'), $('#frm').serialize(), function( data ) {
	if(data.st == 0)
		{
		 $('#validation-error').html(data.msg);
		}
				
		if(data.st == 1)
		{
		  $('#validation-error').html(data.msg);
		}
				
	}, 'json');
	return false;			
   });

	
});