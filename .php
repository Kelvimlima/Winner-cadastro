<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>cadastrar</title>
	<link rel="stylesheet" href="stilo.php">
  </head>
  <body>
  	<!-- menu de navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div>
            <ul class="nav nav-pills nav-fill">
              <li class="nav-item">
                <a class="nav-link active" href="PAGINA DE INICIO">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="COLOCAR PAGINA DE LOGIN">Login</a>
              </li>
            </ul>
          </div>
    </nav>
    <div class="container">

		<div class="row justify-content-center">
			
			<div class="col-xl-6 col-lg-6 col-md-9">
			
				<div class="card o-hidden border-0 shadow-lg my-5">
				  <div class="card-body p-0">
					<!-- Linha do corpo do cartão -->
					<div class="row">
					  <!-- 1 parte -->
					  <div class="col-lg-12">
						<div class="p-5">
						  <div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">Cadastro e cliente</h1>
						  </div>
						  <!-- Formulário de Registro (PHP: processa.php) -->
						  <form name="form" class="text-center user needs-validation" method="POST" action="processa.php">
							<div class="form-group">
							  <input type="text" name="nome" maxlength="100" class="form-control" placeholder="email" required>
							</div>
							<br>
							<div class="form-group row">
							  <div class="col-sm-6 mb-3 mb-sm-0">
								  <label> data de contratação</label>
								<input type="date" name="nascimento" class="form-control" required>
							  </div>
							  <div class="col-sm-6">
								  <label>Rg</label>
								<input type="tel" name="rg" maxlength="10" pattern="[0-9]{8}-[0-9]{1}" class="form-control" placeholder="RG EXEMPLO: 00000000-0" required>
							  </div>
							  
							</div>
							<br>
							<div class="form-group">
								<label>Cpf</label>
							  <input type="tel" name="cpf" maxlength="14" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" class="form-control" placeholder="Cpf Exemplo: 000.000.000-00" autocomplete="off" required>
							</div>
							


							<br>
							<input class="btn btn-success btn-user btn-block" type="submit" name="registraform">
						  </form>
			
						</div>
						</div>
						
						
					</div>
					</div>
				</div>
			
			</div>
		</div>
			
	</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>