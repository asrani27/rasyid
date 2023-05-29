@extends('layouts.app')
@push('css')
    
@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header">
            <i class="ion ion-clipboard"></i><h3 class="box-title">Data Penduduk</h3>

            <div class="box-tools">
              <a href="/superadmin/penduduk/create" class="btn btn-flat btn-sm btn-default bg-purple"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tbody><tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Jkel</th>
                <th>Desa</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
              @foreach ($data as $key => $item)
              <tr>
                <td>{{$data->firstItem() + $key}}</td>
                <td>{{$item->nik}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->jkel}}</td>
                <td>{{$item->desa->nama}}</td>
                <td>{{$item->alamat}}</td>
                <td>
                  <a href="/superadmin/penduduk/edit/{{$item->id}}" class="btn btn-flat btn-sm btn-default bg-purple"><i class="fa fa-edit"></i> Edit</a>
                  <a href="/superadmin/penduduk/delete/{{$item->id}}" class="btn btn-flat btn-sm btn-default bg-purple" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i> Delete</a>
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
