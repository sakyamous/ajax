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
			// load
			$('#box').load('file.php', function(response, status, xhr){
				if( status === 'success'){
					console.log('Berhasil!');
				}else{
					console.log('Gagal!');
				}
			});
		});
	</script>
</body>
</html>
