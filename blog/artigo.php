<?php include 'header.php'; ?>

<head>
	<!-- *********************************** -->
	<!-- ********* APAGAR COMENTS ********** -->
	<script type="text/javascript">
		function apagarAviso() {
			document.getElementById('comentario-sucesso').style.display = "none";
		}
	</script>
</head>

<section id="artigo" style="background: white; margin-top: 72px;">
	<div class="container">
		<div class="row">

			<div class="col-12 mt-3">


				<!-- *********************************** -->
				<!-- ******** AVISOS DE COMENTS ******** -->
				<?php if(isset($_GET['comentario']) && $_GET['comentario'] == 'sucesso') { ?>

					<div id="comentario-sucesso">
						<button onclick="apagarAviso()" style="background: #ccc; width: 30px; height: 30px; margin: 0;">
							<i class="fas fa-times"></i>
						</button>

						<div style="font-size: 0.9em; padding: 8px;" class="text-center text-white bg-success">
							Comentário adicionado com sucesso!
						</div>
					</div>
				<?php } ?>

				<?php if(isset($_GET['comentario']) && $_GET['comentario'] == 'erro') { ?>
					<div id="comentario-erro">
						<button onclick="apagarAviso()" style="background: #ccc; padding: 3px;">
							<i class="fas fa-times"></i>
						</button>

						<div id="comentario-erro" style="font-size: 0.9em; padding: 8px;" class="text-center text-white bg-danger">
							<i class="fas fa-times"></i>
							O comentário não foi adicionado. Por favor, tente mais tarde!
						</div>
					</div>
				<?php } ?>

			</div>

			<?php
			include 'processa/consulta_artigo.php';

			foreach($artigos as $artigo) {
				$id = $artigo['id_artigo'];
				$titulo = $artigo['titulo'];
				$data = $artigo['data'];
				$autor = $artigo['autor'];
				$referencia = $artigo['referencia'];
				$par1 = $artigo['par_1'];
				$par2 = $artigo['par_2'];
				$par3 = $artigo['par_3'];
				$par4 = $artigo['par_4'];
				$par5 = $artigo['par_5'];
				$par6 = $artigo['par_6'];
				$par7 = $artigo['par_7'];
				$par8 = $artigo['par_8'];
				$par9 = $artigo['par_9'];
				$par10 = $artigo['par_10'];
				$titulo_link1 = $artigo['titulo_link_01'];
				$link1 = $artigo['link_01'];
				$titulo_link2 = $artigo['titulo_link_02'];
				$link2 = $artigo['link_02'];
				$titulo_link3 = $artigo['titulo_link_03'];
				$link3 = $artigo['link_03'];
				$status = $artigo['status'];


				if($id == $_GET['id']){ ?>

					
					<!-- *********************************** -->
					<!-- ******* CONTEUDO DO ARTIGO ******** -->
					<div class="col-md-8 artigo text-justify">
						<h3> <?= $titulo ?> </h3>

						<div>
							<hr>
						</div>

						<span><b>Autor : </b></span><span> <?= $autor ?> </span>
						<span> | </span>
						<span><b>Data : </b></span><span> <?= $data ?> </span>

						<div>
							<hr>
						</div>

						<p> <?= $par1 ?> </p>
						<p> <?= $par2 ?> </p>
						<p> <?= $par3 ?> </p>
						<p> <?= $par4 ?> </p>
						<p> <?= $par5 ?> </p>
						<p> <?= $par6 ?> </p>
						<p> <?= $par7 ?> </p>
						<p> <?= $par8 ?> </p>
						<p> <?= $par9 ?> </p>
						<p> <?= $par10 ?> </p>

						<div>
							<hr>
						</div>


						<span><b>Links Adicionais</b></span><br>

						<?php if(!$link1 == '') { ?>
							<a href="<?= $link1 ?>" target="_blank"> <?= $titulo_link1 ?> </a>
							<br>
						<?php } ?>

						<?php if(!$link2 == '') { ?>
							<a href="<?= $link2 ?>" target="_blank"> <?= $titulo_link2 ?> </a>
							<br>
						<?php } ?>

						<?php if(!$link3 == '') { ?>
							<a href="<?= $link3 ?>" target="_blank"> <?= $titulo_link3 ?> </a>
							<br>
						<?php } ?>

						<div>
							<hr>
						</div>


						<?php if(!$referencia == '') { ?>
							<div class="mb-4">
								<span><b>Referência:</b></span><br>
								<a href="<?= $referencia ?>" target="_blank">Referência do artigo</a>
							</div>
						<?php } ?>

						<div>
							<hr>
						</div>


						<!-- *********************************** -->
						<!-- ****** COMENTARIOS DE USERS ******* -->
						<h5>Faça um comentário:</h5>
						<form method="post" action="processa/processa_comentario.php" class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label>Nome:</label>
									<input type="text" name="nome" class="form-control">
								</div>

								<div class="col-md-6">
									<label>E-mail:</label>
									<input type="text" name="email" class="form-control">
								</div>

								<div class="col-12">
									<label>Comentário:</label>
									<textarea type="text" name="comentario" class="form-control" rows="4" cols="50"></textarea>
								</div>

								<input type="hidden" name="id_artigo" value="<?= $id ?>">
								<input type="hidden" name="status" value="1">

								<div class="col-12 mt-3">
									<button type="submit" class="btn btn-outline-success btn-block">Enviar Comentário</button>
								</div>
							</div>
						</form>

						<div>
							<hr>
						</div>

						<h5>Comentários:</h5>
						

						<?php
						include 'processa/consulta_comentario.php';
						foreach($comentarios as $comentario) {
							if ($comentario['id_artigo'] == $_GET['id']) { ?>
								
								<div style="background: #F4F5F9;">
									<div style="padding: 15px;">
										<span><b>Nome : </b></span><span> <?= $comentario['nome'] ?> </span>
										<span> | </span>
										<span><b>Email : </b></span><span> <?= $comentario['email'] ?> </span>
										<br>

										<p> <?= $comentario['comentario'] ?> </p>
									</div>
								</div>

								<div>
									<hr>
								</div>

								<?php
							}
						}
						?>

					</div>

					<!-- *********************************** -->
					<!-- ******** LINKS DOS ARTIGOS ******** -->
					<div id="links-pages" class="col-md-4 mt-5 mb-5">

						<?php 
						include 'processa/links_artigos.php';
						?>

					</div>
					

					<?php
				}
			}

			?>

		</div>
	</div>
</section>

<?php include 'footer.php'; ?>