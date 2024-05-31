@extends("partials.layouts.dashboard")
@section("title", "QASFi")
@section("content")
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
        <h2 class="page-title">Data Kata Tanya</h2>
        <div class="panel panel-default">
            <div class="panel-body">
                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID Kata Tanya</th>
                            <th>Kata Tanya</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($question as $val)
                            <tr>
                                <td>{{ $val->questionwordid }}</td>
                                <td>{{ $val->questionword }}</td>
                                <td><a href=""  class="edit" data-id="" ><i class="fa fa-pencil"> Edit</i></a>                                              
                                    <a title="Hapus" class="a-success" target="_self" onclick="return confirm('Anda Yakin menghapus data ini?')" href=""><i class="fa fa-times"></i> Hapus</a></td>
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
                                <label for="idBuku" class="control-label">ID Buku</label>
                                <input type="text" placeholder="ID Buku" name="idBuku" value="" class="form-control input-sm" readonly>
                                <label for="Kata Tanya" class="control-label">Judul</label>
                                <input type="text" placeholder="Judul Buku" name="judul" class="form-control input-sm">
                                <label for="Kata Tanya" class="control-label">Kelas</label>
                                <input type="text" name="kelas" class="form-control input-sm" placeholder="Kelas">
                                <label for="Kata Tanya" class="control-label">Pilih Buku </label>
                                <input type="file" name="file">
                                <br>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default btn-xs"><span class="fa fa-save"></span> Save</button>
                            </div>
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
                    $.post('ctrKataTanya/editKataTanya',
                        {id:$(this).attr('data-id')},
                        function(html){
                            $(".data").html(html);
                        }   
                        );
                });
            });
        </script>
        
@endsection