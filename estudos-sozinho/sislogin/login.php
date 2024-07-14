<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>SisLogin</title>
	<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-9/assets/css/login-9.css">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

		body {
			width: 100vw;
			height: 100vh;
		}

		section {
			width: 100%;
			height: 100%;
			position: relative;
			background-image: linear-gradient(to bottom, rgb(0, 119, 255), rgb(0, 22, 51));
		}

		.container {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}

		#bg-none {
			background: none!important;
		}

		.h1 {
			font-family: 'Poppins';
		}
	</style>
</head>
<body>
	<section class="bg-primary py-3 py-md-5 py-xl-8">
		<div class="container">
			<div class="row gy-4 align-items-center">
				<div class="col-12 col-md-6 col-xl-7">
					<div class="d-flex justify-content-center text-bg-primary" id="bg-none">
						<div class="col-12 col-xl-9">
							<h1 class="h1 mb-4">SisLogin</h1>
							<h2 class="h2 mb-4">Bem-vindo!</h2>
							<p class="lead mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut, suscipit nostrum. Atque ex minima mollitia itaque quas, nisi quis est earum neque adipisci! Quia maxime eos harum vel voluptas expedita.</p>
							<div class="text-endx">
								<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-grip-horizontal" viewBox="0 0 16 16">
									<path d="M2 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
								</svg>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-xl-5">
					<div class="card border-0 rounded-4">
						<div class="card-body p-3 p-md-4 p-xl-5">
							<div class="row">
								<div class="col-12">
									<div class="mb-4">
										<h3>Entre no sistema</h3>
									</div>
								</div>
							</div>
					<form action="validacao.php">
						<div class="row gy-3 overflow-hidden">
							<div class="col-12">
								<div class="form-floating mb-3">
									<input type="text" class="form-control" name="usuario" id="txUsuario" placeholder="admin1, admin2, admin3" required>
									<label for="txUsuario" class="form-label">Nome de Usuário</label>
								</div>
							</div>
							<div class="col-12">
								<div class="form-floating mb-3">
									<input type="password" class="form-control" name="senha" id="txSenha" value="" placeholder="12345678" required>
									<label for="txSenha" class="form-label">Senha</label>
								</div>
							</div>
							<div class="col-12">
								<div class="d-grid">
									<button class="btn btn-primary btn-lg" type="submit">Entrar agora</button>
								</div>
							</div>
						</div>
					</form>
		</section>
</body>
</html>