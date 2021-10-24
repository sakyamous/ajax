<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Wisnugroho [ A12.2019.06262 ]</title>
</head>
<body>
	<div id="printName"></div>
	<div id="printNim"></div>

	<script type="text/javascript">
		
		function load_ajax(url, callback){

			// buat objek xmlhttprequest 
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = cekStatus;

			function cekStatus(){
				if( xhr.readyState === 4 && xhr.status === 200){
					callback( xhr.responseText );
				}
			}

			// melakukan request
			xhr.open('GET', url, true);
			xhr.send();
		}

		// memanggil otomatis
		load_ajax('data.json', function(data){
			console.log(data);

			data = JSON.parse(data);
			document.getElementById('printName').innerHTML = data.nama;
			document.getElementById('printNim').innerHTML = data.nim;
		});

	</script>
</body>
</html>

