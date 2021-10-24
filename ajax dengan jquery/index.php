<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Wisnugroho [ A12.2019.06262 ]</title>
</head>
<body>

	<div id="box"></div>
	<button id="btn">Ambil Data</button>
	
	<script src="jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			//ajax

			$('#btn').click(function(){
				$.ajax({
					url     : 'file.php',
					method  : 'POST',
					data    : { nama : 'Wisnugroho', nim : 'A12.2019.06262'}
				}).done(function(hasil){
					$('#box').html(hasil);
				});
			});			
		});
	</script>
</body>
</html>
