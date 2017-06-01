<?php
	if(empty($_SESSION)){
		header("Location: /login");
	}
?>
<div>
	<h4>Enviar documento</h4>
	<div class="row">
		<form method="POST" class="col s12" enctype="multipart/form-data">
			<div class="row">
				<div class="input-field col s6">
					<input type="text" id="doc_nome" name="doc_nome" class="validate" required>
					<label for="doc_nome">Nome do Documento</label>
				</div>
				<div class="input-field col s6">
					<select id="tipo_doc" name="tipo_doc" required>
						<option value="" disabled selected>Selecione</option>
						<?php foreach($tipoDoc as $tipo): ?>
							<option value=<?php echo '"'.$tipo['id'].'">'.$tipo['nome']; ?></option>
						<?php endforeach ?>
					</select>
					<label>Selecione a Categoria</label>
				</div>
			</div>
			<div class="row">
				<div class="file-field input-field col s6">
					<div class="btn">
						<span>Arquivo</span>
						<input type="file" name="arquivo" required>
					</div>
					<div class="file-path-wrapper">
						<input type="text" class="file-path validate">
					</div>
				</div>
				<div class="input-field col s6 ">
					<input type="text" class="data" name="data" id="data" required>
					<label for="data">Data</label>
				</div>				
			</div>
			<div class="row">
				<div class="input-field col s12">
					<textarea name="assunto" id="assunto" class="materialize-textarea" required></textarea>
					<label for="assunto">Assunto</label>
				</div>
			</div>
			<button class="btn waves-effect waves-light right" type="submit" name="action">Enviar<i class="material-icons right">send</i>
  			</button>
			
		</form>
	</div>
</div>
<div>
	<table>
		<thead>
			<tr>
				<th>Documento</th>
				<th>Data</th>
				<th>Deletar</th>
			</tr>
		</thead>
		<tbody>		
				<?php foreach($arquivos as $files): ?>
			<tr>				
				<th><?php echo $files['nome']; ?></th>
				<th><?php echo $files['data']; ?></th>
				<th><a href="<?php echo BASE_URL."admin/remove/".$files['id']; ?>" class="btn waves-effect waves-light red"><i class="material-icons">remove</i></a></th>				
			</tr>
			
				<?php endforeach; ?>
		</tbody>
	</table>
	<li class="divider"></li>
	<li class="divider"></li>
	<li class="divider"></li>
	<h4>Editar Categorias</h4>
	<div>
		<table>
			<thead>
				<tr>
					<th>Categoria</th>
					<th class="right">Ação</th>
				</tr>
			</thead>
			<tbody>		
				<?php foreach($tipoDoc as $tipo): ?>
				<tr>				
					<th><?php echo $tipo['nome']; ?></th>
					<th class="right"><a href="<?php echo BASE_URL."admin/removeCat/".$tipo['id']; ?>" class="btn waves-effect waves-light red"><i class="material-icons">remove</i></a></th>				
				</tr>			
				<?php endforeach; ?>
				<tr>
					<form method="POST" accept-charset="utf-8">
						<th>
							<div class="row">
							<div class="input-field col s12">
								<input type="text" id="doc_cat" name="doc_cat" class="validate">
								<label for="doc_cat">Categoria</label>
							</div>
						</div>
						</th>
						<th class="right"><button class="btn waves-effect waves-light green" type="submit"><i class="material-icons">add</i></button></th>
					</form>
				</tr>
		</tbody>
		</table>
		
	</div>

		<h4>Editar Usuários</h4>
	<div>
		<table>
			<thead>
				<tr>
					<th>Nome</th>
					<th>Email</th>
					<th>Senha</th>
					<th class="right">Ação</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($users as $user): ?>			
				<tr>
					<form method="POST">
						<th>
						<div class="row">
							<div class="input-field col s12">
								<input type="hidden" id="id" name="id" value="<?php echo $user['id']; ?>"></input>
								<input type="text" id="edit_nome_user" name="edit_nome_user" class="validate" value="<?php echo $user['nome']; ?>">
							</div>
						</div>
						</th>
						<th>
							<div class="row">
							<div class="input-field col s12">
								<input type="email" id="edit_email_user" name="edit_email_user" class="validate" value="<?php echo $user['email']; ?>">
							</div>
						</div>
						</th>
						<th>
							<div class="row">
							<div class="input-field col s12">
								<input type="password" id="edit_pass_user" name="edit_pass_user" class="validate">
								<label for="edit_pass_user">Senha</label>
							</div>
						</div>
						</th>
						<th class="right">
						<button class="btn waves-effect waves-light blue" type="submit"><i class="material-icons">edit</i></button>
						<a href="<?php echo BASE_URL."admin/removeUser/".$user['id']; ?>" class="btn waves-effect waves-light red"><i class="material-icons">remove</i></a>
						</th>					
					</form>				
				</tr>
				<?php endforeach; ?>
				<tr>
					<form method="POST" accept-charset="utf-8">
						<th>
						<div class="row">
							<div class="input-field col s12">
								<input type="text" id="nome_user" name="nome_user" class="validate" />
								<label for="nome_user">Nome</label>
							</div>
						</div>
						</th>
						<th>
							<div class="row">
							<div class="input-field col s12">
								<input type="email" id="email_user" name="email_user" class="validate">
								<label for="email_user">Email</label>
							</div>
						</div>
						</th>
						<th>
							<div class="row">
							<div class="input-field col s12">
								<input type="password" id="pass_user" name="pass_user" class="validate">
								<label for="pass_user">Senha</label>
							</div>
						</div>
						</th>
						<th class="right"><button class="btn waves-effect waves-light green" type="submit"><i class="material-icons">add</i></button></th>
					</form>
				</tr>
		</tbody>
		</table>
		
	</div>
</div>