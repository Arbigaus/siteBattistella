<ul class="collapsible popout" data-collapsible="accordion">
	<?php foreach($catArquivos as $tipo): ?>	
	<li>
		<div class="collapsible-header"><span><b>		
				<?php echo $tipo['nome']; ?>
			</b></span>		
		</div>		
		<div class="collapsible-body">
			<ul class="collection with-header">
				<?php foreach($arquivos as $files): ?>		
					<?php if($catArquivos['0']['id'] == $files['id_tipo_doc']): ?>
						<li class="collection-header"><h5><?php echo $files['nome']; ?></h5></li>
						<li class="collection-item">
						<div class="row">
						<div class="col s2"><?php echo $files['data']; ?></div>
						<div class="col s9"><?php echo $files['assunto']; ?></div>
						<a target="_blank" href="<?php echo BASE_URL."assets/documentos/".$files['url']; ?>" class="secondary-content tooltipped" data-position="top" data-tooltip="Download"><i class="material-icons">description</i></a>
						</div>
						</li>						
					<div>
						
					</div>
					<?php endif; ?>							
				<?php endforeach; ?>
			</ul>
	</li>	
	<?php endforeach; ?>
</ul>