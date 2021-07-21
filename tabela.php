<?php

include_once("config.php"); //conexão com o banco

//variavel de armazenamento de dados do formulario
$id= filter_input(INPUT_POST, 'id',FILTER_SANITIZE_NUMBER_INT);
$codigo= filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_STRING);
$empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_STRING);
$endereco= filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$cep= filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$bairro=filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$municipio=filter_input(INPUT_POST, 'municipio', FILTER_SANITIZE_STRING);
$uf=filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING);
$telefone=filter_input(INPUT_POST, 'telefone',FILTER_SANITIZE_NUMBER_INT);
$email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$email2=filter_input(INPUT_POST, 'email2', FILTER_SANITIZE_STRING);
$im=filter_input(INPUT_POST, 'im', FILTER_SANITIZE_STRING);
$ie=filter_input(INPUT_POST, 'ie', FILTER_SANITIZE_STRING);
$cnpj=filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_NUMBER_INT);
$nome=filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cargo=filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_STRING);
$telefone=filter_input(INPUT_POST, 'situacao', FILTER_SANITIZE_STRING); 
$situacao=filter_input(INPUT_POST, 'situacao', FILTER_SANITIZE_STRING);






 ///ISOOO AINDA VAI SER EDITADO
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
			/// tudo isso encima vai ser editado
			else{
			//Linha de comando para o banco de dados
			$result_usuario = "INSERT INTO cadastro ( codigo,empresa,endereco,cep,bairro,municipio,uf,telefone,email,email2,im,ie,cnpj,situacao ) VALUES('$codigo','$empresa','$endereco','$cep','$municipio','$bairro','$uf','$telefone','$email','$email2','$im','$ie','$cnpj',$situacao')";
			//processa a informação
			$resultado_usuario = mysqli_query($conn, $result_usuario);

				//redirecionamento para a página de cadastro, atrávez do PHP e JavaScript
				 if ($resultado_usuario) {
				 	echo "<script>window.location.href = 'index.php';
				 	alert('USUÁRIO CADASTRADO COM SUCESSO');</script>";
				 }else{
				 	echo "<script>window.location.href = 'index.php';
					alert('USUÁRIO NÃO FOI CADASTRADO');</script>";
				 }
			}
		}else{
		echo "<script>window.location.href = 'index.php';
			alert('NÃO FOI POSSÍVEL CADASTRAR, CPF INVÁLIDO');</script>";
	}
}

$result_usuario = "INSERT INTO cadastro ( codigo,empresa,endereco,cep,bairro,municipio,uf,telefone,email,email2,im,ie,cnpj ) VALUES ('$codigo','$empresa','$endereco','$cep','$municipio','$bairro','$uf','$telefone','$email','$email2','$im','$ie','$cnpj,'";


?>