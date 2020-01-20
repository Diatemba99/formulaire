<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="affiche.php" method="post">
		<table align="center" width="80%" border="1" >
			
			<tr>
				     <td colspan="2"><img src="t1.png" align="center" ></td>
				
			</tr>


			<tr>
				
				<td></td>
				<td> 
					<img src=" <?php echo $_POST["photo"]; ?>   ">
				</td>
				<td></td>
				
			</tr>


			<tr>
				<td>
					   <h1>NOM: <?php echo $_POST["nom"]; ?></h1>  
				</td>
				<td>
					   <h1>PRENOM: <?php echo $_POST["prenom"]; ?></h1>
				</td>
			</tr>



			<tr>
				<td>
					  <h1>MESSAGE: <?php echo $_POST["message"]; ?></h1>
				</td>
				<td>
					  <h1>MAIL: <?php echo $_POST["mail"]; ?></h1>
				</td>
			</tr>



			<tr>
				<td> <img src="s.png"></td>
				<td> <img src="t3.png"></td>
			</tr>
		</table>
	
</form>
</body>
</html>

