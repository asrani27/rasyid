@extends('layouts.app')
@push('css')
    
@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header">
            <i class="ion ion-clipboard"></i><h3 class="box-title">Data Lahir</h3>

            <div class="box-tools">
              <a href="/superadmin/lahir/create" class="btn btn-flat btn-sm btn-default bg-purple"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tbody><tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Bayi</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Nama Ibu</th>
                <th>Nama Ayah</th>
                <th>Aksi</th>
              </tr>
              @foreach ($data as $key => $item)
              <tr>
                <td>{{$data->firstItem() + $key}}</td>
                <td>{{$item->tanggal}}</td>
                <td>{{$item->nama_bayi}}</td>
                <td>{{$item->tanggal_lahir}}</td>
                <td>{{$item->jkel}}</td>
                <td>{{$item->nama_ibu}}</td>
                <td>{{$item->nama_ayah}}</td>
                <td>
                  <a href="/superadmin/lahir/edit/{{$item->id}}" class="btn btn-flat btn-sm btn-default bg-purple"><i class="fa fa-edit"></i> Edit</a>
                  <a href="/superadmin/lahir/delete/{{$item->id}}" class="btn btn-flat btn-sm btn-default bg-purple" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i> Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody></table>
          </div>
          <!-- /.box-body -->
        </div>
        {{$data->links()}}
        <!-- /.box -->
      </div>
</div>

@endsection
@push('js')

@endpush
