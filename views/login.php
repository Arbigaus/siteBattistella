<?php 
	if(!empty($_SESSION['id']) && isset($_SESSION['id'])){
		header("Location: /admin");
	}
 ?>
		<div class="row">
			<form method="POST" class="col s12" action="login">
				<div class="row">
					<div class="input-field col m4 offset-m4 s6 offset-s2">
						<i class="material-icons prefix">email</i>
						<input type="email" id="email" name="email">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 offset-m4 s6 offset-s2">
						<i class="material-icons prefix">lock</i>
						<input type="password" id="senha" name="senha">
						<label for="senha">Senha</label>
					</div>
				</div>
				<div class="row">
					<div class="input field col s3 offset-s5">
						<button class="btn waves-effect waves-light" type="submit" name="entrar">Entrar <i class="material-icons right">send</i></button>
					</div>
				</div>		
			</form>
			<?php if(!empty($mensagem)): ?>
				<div class="row">
					<div class="col s12 center card-panel red white-text">
						<h4><?php echo $mensagem; ?></h4>
					</div>
				</div>
			<?php endif; ?>
		</div>