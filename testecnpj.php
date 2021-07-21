<?php

//verificar se o cpf já foi cadastrado no banco
$verificar = mysqli_query($conn,"SELECT * FROM pessoas WHERE cpf = '$cpf'");
//conexão com a class Validar (cpfok.php)
if (isset($_POST['registraform']) && !empty($_POST['cpf'])) {
	require "cpfok.php";
	$V = new Validar();

	$cpf = $_POST['cpf'];
	//verificar CPF invalido
	if ($V->ValidarCpf($cpf) == true) {
		//consultar no banco se o CPF já foi cadastrado
			if(mysqli_num_rows($verificar) > 0){

				echo "<script>window.location.href = 'index.php';
				alert('NÃO FOI POSSÍVEL CADASTRAR, CPF JÁ EXISTE NO BANCO DE DADOS');</script>";
			}
        }else{
            echo "<script>window.location.href = 'index.php';
                alert('NÃO FOI POSSÍVEL CADASTRAR, CPF INVÁLIDO');</script>";
        }




?>
