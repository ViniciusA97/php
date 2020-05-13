<!DOCTYPE html>
<html>
	<head>
		<title>Index</title>
		<style type="text/css">
			/*
			Comentario css
			*/
		</style>
	</head>
	<body>
		<!-- comentário html-->
		<?php 
			//comentário php
			#Outro comentario php
			/*
			Outro comentario php
			*/
			echo 'comando de teste echo <br>';
			print ('comando teste 	print <br>');

			$nome = 'vinicius';

			$idade = '22 anos';

			$altura = 1.70;

			$possui_cpf= true; 

			$cpf = '059.198.265-20';
			
			echo '<h1>Teste pelo echo direto por codigo php </h1>';
			
			echo 
				'<h2> teste </h2>
				<p>Nome: '. $nome . '</p>
				<p>Idade: '.  $idade .'</p>
				<p>Altura: '. $altura . '</p>
				<p>Possui cpf:';
		
			if($possui_cpf){ 
				echo ' sim <br><br> cpf: ' . $cpf . '<br><br>' ;
			}else{ 
				echo 'não<br><br>';
			} 

		?>
		<br>
		<br>
		<hr>
		<h1> Teste no HTML usando tags de impressão e php</h1>
		<br>
		<h2> teste </h2>
		<p>Nome: <?= $nome ?></p>
		<p>Idade: <?php echo $idade ?>
		<p>Altura: <?= $altura ?></p>
		<p>Possui cpf: 
			<?php 
				if($possui_cpf){ 
					echo ' sim <br> cpf: ' . $cpf ;
				}else{ 
					echo 'não';
				} 
			?>	
		</p>
	</body>
</html>