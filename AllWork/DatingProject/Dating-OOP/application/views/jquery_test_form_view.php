
<html>
<head>
<title>jQuery: Check if Textarea is empty</title>
<script type="text/javascript" src="js/jquery_1.7.1_min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
 
<body>
 
<form name="form1" method="post" action="">
<label for="comments">Comments:</label>
<textarea name="comments" id="comments"></textarea>
</form>
<button id="check">Check</button>
 
<script type="text/javascript">
 
$('#check').click(function() {
 
if ( $('#comments').val() == '' )
{
alert('Empty!!!');
}
else
{
alert('Contains: ' + $('#comments').val() );
}
 
});
 


</script>

</body>
</html>




