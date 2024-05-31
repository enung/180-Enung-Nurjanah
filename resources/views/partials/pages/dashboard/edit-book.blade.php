@if ($errors->any())
<div>
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<form action="{{ url('book/update', $data->id) }}" method="POST" enctype="multipart/form-data">
	@csrf
	<label for="id" class="control-label">ID</label>
	<input type="text" placeholder="ID" name="id" value="{{ $data->id }}" class="form-control input-sm" readonly>
	<label for="tittle" class="control-label">Judul Buku</label>
	<input type="text" placeholder="Judul Buku" name="tittle" class="form-control input-sm" value="{{ $data->tittle }}">
	<label for="author" class="control-label">Penulis</label>
	<input type="text" placeholder="Penulis" name="author" class="form-control input-sm" value="{{ $data->author }}">
	<label for="publisher" class="control-label">Penerbit</label>
	<input type="text" placeholder="Penerbit" name="publisher" class="form-control input-sm" value="{{ $data->publisher }}">
	<label for="publisher" class="control-label">Lokasi PDF</label>
	<input type="file" name="pdf_path" value="{{ $data->pdf_path }}" ><br>
	<button type="submit" class="btn btn-default btn-xs"><span class="fa fa-save"></span> Save</button>
</form>