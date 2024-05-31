@extends("partials.layouts.dashboard")
@section("title", "QASFi")
@section("content")
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Modal Edit -->
                            <div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Edit Data Kata Tanya</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="data">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->        
                            <div class="row" id="data">
                                <div class="col-md-12">
                                    <h2 class="page-title">Data Kategori</h2>
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>ID Kategori</th>
                                                        <th>Kategori</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($kategori as $val)
                                                    <tr>
                                                        <td>{{ $val->id }}</td>
                                                        <td>{{ $val->category }}</td>
                                                        <td><button  class="xs btn btn-primary btn-xs edit" data-id="{{ $val->id }}" ><i class="fa fa-pencil"> Edit</i></button>         
                                                            <button class="btn btn-danger btn-xs delete-btn" data-id="{{ $val->id }}">Hapus</button></td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <button class="btn btn-default btn-xs" type="button" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add</button>
                                            </div>
                                        </div>
                                        <!-- Modal Add -->
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Tambah Kata Tanya</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ url('/category/insert') }}" method="POST">
                                                            @csrf
                                                            <label for="id" class="control-label">Category ID</label>
                                                            <input type="text" placeholder="id" name="id" value="" class="form-control input-sm" readonly>
                                                            <label for="category" class="control-label">Category</label>
                                                            <input type="text" placeholder="Category" name="category" class="form-control input-sm">
                                                            <br>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-default btn-xs"><span class="fa fa-save"></span> Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end -->
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $(function(){
                                        $(document).on('click','.edit',function(e){
                                            e.preventDefault();
                                            $("#myModalEdit").modal('show');
                                            $.post('{{ route("category.edit") }}',
                                               {id: $(this).attr('data-id'), _token: '{{ csrf_token() }}'},
                                               function(html){
                                                $(".data").html(html);
                                            }   
                                            );
                                        });
                                    });
                                </script>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        const deleteButtons = document.querySelectorAll('.delete-btn');

                                        deleteButtons.forEach(button => {
                                            button.addEventListener('click', function (event) {
                                                event.preventDefault();
                                                const id = this.getAttribute('data-id');
                                                if (confirm('Anda Yakin menghapus data ini?')) {
                                                    fetch(`{{ url('/category/delete/') }}/${id}`, {
                                                        method: 'DELETE',
                                                        headers: {
                                                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                                            'Content-Type': 'application/json'
                                                        }
                                                    })
                                                    .then(response => {
                                                        if (response.ok) {
                                                            alert('Data berhasil dihapus');
                                                            location.reload();
                                                        } else {
                                                            throw new Error('Gagal menghapus data');
                                                        }
                                                    })
                                                    .catch(error => {
                                                        console.error(error);
                                                        location.reload();
                                                    });
                                                }
                                            });
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection