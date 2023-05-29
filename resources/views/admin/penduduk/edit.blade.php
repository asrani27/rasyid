@extends('layouts.app')
@push('css')

@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <a href="/superadmin/penduduk" class="btn btn-flat btn-default bg-purple"><i class="fa fa-backward"></i> Kembali</a> <br />
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
            <form class="form-horizontal" method="post" action="/superadmin/penduduk/edit/{{$data->id}}">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">No KK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kk" value="{{$data->kk}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nik" value="{{$data->nik}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="{{$data->nama}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select name="jkel" class="form-control">
                                <option value="L" {{$data->jkel == 'L' ? 'selected':''}}>Laki-Laki</option>
                                <option value="P" {{$data->jkel == 'P' ? 'selected':''}}>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tempat_lahir" value="{{$data->tempat_lahir}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tanggal_lahir" value="{{$data->tanggal_lahir}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Agama</label>
                        <div class="col-sm-10">
                            <select name="agama_id" class="form-control">
                                @foreach ($agama as $item)
                                    <option value="{{$item->id}}" {{$data->agama_id == $item->id ? 'selected':''}}>{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Pekerjaan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="pekerjaan" value="{{$data->pekerjaan}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Status Kawin</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kawin" value="{{$data->kawin}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Status Keluarga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="status_keluarga" value="{{$data->status_keluarga}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Warga Negara</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="warga_negara" value="{{$data->warga_negara}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Ayah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_ayah" value="{{$data->nama_ayah}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Ibu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_ibu" value="{{$data->nama_ibu}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Status Penduduk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="status_penduduk" value="{{$data->status_penduduk}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Desa</label>
                        <div class="col-sm-10">
                            <select name="desa_id" class="form-control">
                                @foreach ($desa as $item)
                                    <option value="{{$item->id}}" {{$data->desa_id == $item->id ? 'selected':''}}>{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat" value="{{$data->alamat}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">RT</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="rt" value="{{$data->rt}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">RW</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="rw" value="{{$data->rw}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">No</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no" value="{{$data->no}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Kecamatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kecamatan" value="{{$data->kecamatan}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Pendidikan Terakhir</label>
                        <div class="col-sm-10">
                            <select name="pendidikan_id" class="form-control">
                                @foreach ($pendidikan as $item)
                                    <option value="{{$item->id}}" {{$data->pendidikan_id == $item->id ? 'selected':''}}>{{$item->nama}}</option>
                                @endforeach
                            </select>
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