@extends('layouts.app')
@push('css')

@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <a href="/superadmin/usaha" class="btn btn-flat btn-default bg-purple"><i class="fa fa-backward"></i> Kembali</a> <br />
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header">
                <i class="ion ion-clipboard"></i>
                <h3 class="box-title">Edit Data</h3>
            </div>
            <!-- /.box-header -->
            <form class="form-horizontal" method="post" action="/superadmin/usaha/edit/{{$data->id}}">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nik" value="{{$data->nik}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Pemilik</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="pemilik" value="{{$data->pemilik}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Usaha</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_usaha" value="{{$data->nama_usaha}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Jenis Usaha</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jenis_usaha" value="{{$data->jenis_usaha}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tujuan Usaha</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tujuan_usaha" value="{{$data->tujuan_usaha}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Alamat Usaha</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat_usaha" value="{{$data->alamat_usaha}}" required>
                        </div>
                    </div>

                    
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn bg-purple pull-right" onclick="return confirm('Yakin sudah sesuai?');"><i class="fa fa-save"></i> Update Data</button>
                </div>
                <!-- /.box-footer -->
            </form>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection
@push('js')

@endpush