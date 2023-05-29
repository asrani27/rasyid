@extends('layouts.app')
@push('css')

@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <a href="/superadmin/mati" class="btn btn-flat btn-default bg-purple"><i class="fa fa-backward"></i> Kembali</a> <br />
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
            <form class="form-horizontal" method="post" action="/superadmin/mati/edit/{{$data->id}}">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tanggal Meninggal</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tanggal_meninggal"  value="{{$data->tanggal_meninggal}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">NIK Meninggal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nik_meninggal"  value="{{$data->nik_meninggal}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Yang Meninggal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_meninggal"  value="{{$data->nama_meninggal}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jkel"  value="{{$data->jkel}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Penyebab Meninggal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="penyebab"  value="{{$data->penyebab}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Hubungan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="hubungan"  value="{{$data->hubungan}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Pelapor</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="pelapor"  value="{{$data->pelapor}}" required>
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