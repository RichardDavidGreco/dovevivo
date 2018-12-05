<?php
	
	$code = $_POST['code'];
	
?>

<!DOCTYPE html>
<html>
	<head>
		<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	</head>
	<body>
		<script>
			var code = <?php echo $code ?>;
			var client_id = "649d6d07-2142-4db9-9024-4a3a53219615";
			var scope = "user.read mail.read";
			var redirect_uri = "https://collaudoevolutivadovevivo.crm4.dynamics.com//WebResources/clu_pdf2.html?preview=1";
			var grant_type = "authorization_code";
			var client_secret = "3AOc82oDS6lXI9ACHyCbLDWuSm/99iIcivGMM5EwrwY=";
		
			$.ajax({
				method: "post",
				url: "https://login.microsoftonline.com/f75c0b4e-9a62-4fa4-bd8e-42702c1229b0/oauth2/v2.0/token",
				data: {
					"client_id": client_id,
					"client_secret": client_secret,
					"code": code,
					"scope": scope,
					"redirect_uri": redirect_uri,
					"grant_type": grant_type
				},
				success: function(data){
					console.log(data);
				}
			});
		</script>
	</body>
</html>