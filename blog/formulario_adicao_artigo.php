<?php include 'header.php'; ?>

<form method="post" action="processa/processa_artigo.php" class="form-group">
	<div class="container">
		<div class="row">
			
			
			<div class="col-12">
					<label>Tipo</label>
					<select name="tipo" class="form-control">
						<option value="categoria1">Categoria 1</option>
						<option value="categoria2">Categoria 2</option>
						<option value="categoria3">Categoria 3</option>
						<option value="categoria4">Categoria 4</option>
					</select>
				</div>

				<div class="col-12">
					<label>Título</label>
					<input type="text" name="titulo" class="form-control">
				</div>

				<div class="col-md-4">
					<label>Data</label>
					<input type="text" name="data" class="form-control">
				</div>

				<div class="col-md-4">
					<label>Autor</label>
					<input type="text" name="autor" class="form-control">
				</div>

				<div class="col-md-4">
					<label>Referência</label>
					<input type="text" name="referencia" class="form-control">
				</div>

				<div class="col-12">
					<label>Paragrafo 1</label>
					<textarea type="text" name="par_1" class="form-control" rows="4" cols="50"></textarea>
				</div>

				<div class="col-12">
					<label>Paragrafo 2</label>
					<textarea type="text" name="par_2" class="form-control" rows="4" cols="50"></textarea>
				</div>

				<div class="col-12">
					<label>Paragrafo 3</label>
					<textarea type="text" name="par_3" class="form-control" rows="4" cols="50"></textarea>
				</div>

				<div class="col-12">
					<label>Paragrafo 4</label>
					<textarea type="text" name="par_4" class="form-control" rows="4" cols="50"></textarea>
				</div>

				<div class="col-12">
					<label>Paragrafo 5</label>
					<textarea type="text" name="par_5" class="form-control" rows="4" cols="50"></textarea>
				</div>

				<div class="col-12">
					<label>Paragrafo 6</label>
					<textarea type="text" name="par_6" class="form-control" rows="4" cols="50"></textarea>
				</div>

				<div class="col-12">
					<label>Paragrafo 7</label>
					<textarea type="text" name="par_7" class="form-control" rows="4" cols="50"></textarea>
				</div>

				<div class="col-12">
					<label>Paragrafo 8</label>
					<textarea type="text" name="par_8" class="form-control" rows="4" cols="50"></textarea>
				</div>

				<div class="col-12">
					<label>Paragrafo 9</label>
					<textarea type="text" name="par_9" class="form-control" rows="4" cols="50"></textarea>
				</div>

				<div class="col-12">
					<label>Paragrafo 10</label>
					<textarea type="text" name="par_10" class="form-control" rows="4" cols="50"></textarea>
				</div>

				<div class="col-md-6">
					<label>Título link 1</label>
					<input type="text" name="titulo_link_01" class="form-control">
				</div>

				<div class="col-md-6">
					<label>Link 1</label>
					<input type="text" name="link_01" class="form-control">
				</div>

				<div class="col-md-6">
					<label>Título link 2</label>
					<input type="text" name="titulo_link_02" class="form-control">
				</div>

				<div class="col-md-6">
					<label>Link 2</label>
					<input type="text" name="link_02" class="form-control">
				</div>

				<div class="col-md-6">
					<label>Título link 3</label>
					<input type="text" name="titulo_link_03" class="form-control">
				</div>

				<div class="col-md-6">
					<label>Link 3</label>
					<input type="text" name="link_03" class="form-control">
				</div>

				<div class="col-12">
					<label>Chave</label>
					<input type="text" name="chave" class="form-control">
				</div>

				<input type="hidden" name="status" value="1">

				<div class="col-12 mt-4">
					<button type="submit" class="btn btn-success btn-block">Enviar</button>
				</div>

		</div>
	</div>
</form>

<?php include 'footer.php'; ?>