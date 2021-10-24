<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Wisnugroho [ A12.2019.06262 ]</title>
</head>
<body>

	<div id="box"></div>
	
	<script src="jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			// get dan post
			
			//get
			// $.get('file.php',{'nama' : 'Wisnu' })
			// 	.done(function(data){
			// 		$('#box').html(data);
			// });

			//post
			$.post('file.php',{'nama' : 'Wisnu', 'nim' : 'A12.2019.06262' })
				.done(function(data){
					$('#box').html(data);
			});
		});
	</script>
</body>
</html>
