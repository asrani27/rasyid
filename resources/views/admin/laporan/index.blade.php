@extends('layouts.app')
@push('css')
    
@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header">
            <i class="ion ion-clipboard"></i><h3 class="box-title">Data Laporan</h3>

            <div class="box-tools">
              
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <a href="/superadmin/laporan/penduduk" target="_blank" class="btn btn-sm bg-purple">LAP. DATA PENDUDUK</a>
            <a href="/superadmin/laporan/desa" target="_blank" class="btn btn-sm bg-purple">LAP. DATA DESA</a>
            <a href="/superadmin/laporan/nikah" target="_blank" class="btn btn-sm bg-purple">LAP. DATA NIKAH</a>
            <a href="/superadmin/laporan/usaha" target="_blank" class="btn btn-sm bg-purple">LAP. DATA USAHA</a>
            <a href="/superadmin/laporan/pendidikan" target="_blank" class="btn btn-sm bg-purple">LAP. DATA PENDIDIKAN</a>
            <a href="/superadmin/laporan/lahir" target="_blank" class="btn btn-sm bg-purple">LAP. DATA LAHIR</a>
            <a href="/superadmin/laporan/kematian" target="_blank" class="btn btn-sm bg-purple">LAP. DATA KEMATIAN</a>
          </div>
          <!-- /.box-body -->
        </div>
        
        <!-- /.box -->
      </div>
</div>

@endsection
@push('js')

@endpush
