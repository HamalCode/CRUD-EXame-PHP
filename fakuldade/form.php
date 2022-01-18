<input type="text" name="sobre">

<div class="row">
	<div class="col-sm-8">

<div class="form-group row">
	<label class="col-form-lable col-sm-3">Id Fakuldade</label>
	<div class="col-sm-9">
		<input type="type" name="txtId" id="txtId" class="form-control">
	</div>
</div>
<div class="form-group row">
	<label class="col-form-lable col-sm-3">Naran Fakuldade</label>
	<div class="col-sm-9">
		<input type="type" name="txtNrn" id="txtNrn" class="form-control">
	</div>
</div>
<div class="form-group row">
	<label class="col-form-lable col-sm-3">Observasaun</label>
	<div class="col-sm-9">
		<textarea name="txtObs" id="txtObs" class="form-control"></textarea>
	</div>
</div>
</div>
<div class="col-sm-4">
	<div class="form-group">
		<input type="file" name="txtFoto" onchange="$('#vfoto').attr
		('src',window.URL.createObjectURL(this.files[0]))">
	</div>
	<div class="form-group">
		<img id="vfoto" class="img-fluid img-thumbnail shadow">
	</div>
</div>
</div>