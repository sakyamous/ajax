<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Wisnugroho [ A12.2019.06262 ]</title>
</head>
<body>
	<div id="box"></div>
	<input type="text" name="nama" id="inputText">
	<button id="button">Ambil Data</button>

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

		// memanggil ketika button di klik
		document.getElementById('button').onclick = function(){

			text = document.getElementById('inputText').value;	

			load_ajax('data.php?q=' + text, function(data){
				document.getElementById('box').innerHTML = data;
			});
		};

	</script>
</body>
</html>