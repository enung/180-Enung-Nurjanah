@if ($errors->any())
<div>
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<form action="{{ url('answerkey/update', $data->id) }}" method="POST">
	@csrf
	<label for="id" class="control-label">ID Kata Tanya</label>
	<input type="text" placeholder="ID" name="id" value="{{ $data->id }}" class="form-control input-sm" readonly>
	<label for="questionwordid" class="control-label">Kata Tanya</label>
	<input type="text" placeholder="Kata Tanya" name="questionwordid" class="form-control input-sm" value="{{ $data->questionwordid }}">
	<label for="category" class="control-label">Kategori</label>
	<input type="text" placeholder="Kategori" name="categoryid" class="form-control input-sm" value="{{ $data->categoryid }}">
	<label for="keyword" class="control-label">Kata Kunci</label>
	<input type="text" placeholder="Kata Kunci" name="keyword" class="form-control input-sm" value="{{ $data->keyword }}">
	<label for="keyword" class="control-label">Kunci Jawaban</label>
	<input type="text" placeholder="Kunci Jawaban" name="answerkey" class="form-control input-sm" value="{{ $data->answerkey }}"><br>
	<button type="submit" class="btn btn-default btn-xs"><span class="fa fa-save"></span> Save</button>
</form>