<!Doctype html>
	
	
	<html>
		
		<head>
			
			<meta  charset = " utf-8 ">
			
			<title> Page de traitement </title>
			
			<link  rel = " stylesheet "  href = " # ">
		
		</head>
		
		<body>



<?php
$fichier_email = 'C:\Utilisateurs\Utilisateur\Documents\Cours\ B2\Intégration Web\Wireframe\WireFrame\test_file_email.txt';
if(isset($_POST['envoyer'])) {
$new_email_value = $_POST['message'];
$opening = fopen("$fichier_mail" ,"a+");
$write = fwrite($opening, "$new_email_value\r\n");
$closing = fclose ($opening);
} else {
    echo "Vous n'avez pas saisi de mail";
}
?>

</body>
</html>