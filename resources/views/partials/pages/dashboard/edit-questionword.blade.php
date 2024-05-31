@if ($errors->any())
<div>
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<form action="{{ url('questionword/update', $data->id) }}" method="POST">
	@csrf
	<label for="id" class="control-label">ID Kata Tanya</label>
	<input type="text" placeholder="ID" name="id" value="{{ $data->id }}" class="form-control input-sm" readonly>
	<label for="kategori" class="control-label">Kata Tanya</label>
	<input type="text" placeholder=" Kata Kunci" name="questionwordid" class="form-control input-sm" value="{{ $data->questionwordid }}"><br>
	<label for="kategori" class="control-label">Created At</label>
	<input type="text" placeholder=" Kata Kunci" name="created_at" class="form-control input-sm" value="{{ $data->created_at }}"><br>
	<label for="kategori" class="control-label">Updated At</label>
	<input type="text" placeholder=" Kata Kunci" name="updated_at" class="form-control input-sm" value="{{ $data->updated_at }}"><br>
	<button type="submit" class="btn btn-default btn-xs"><span class="fa fa-save"></span> Save</button>
</form>