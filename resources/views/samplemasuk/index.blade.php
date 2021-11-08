@extends('layout.main')

@section('title', 'Data Sample Masuk')
    

@section('breadcrumbs')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>MyOffice</h1>
            </div>
        </div>
        </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
    
@endsection




@section('contents')

<div class="content mt-3">
    {{-- Alert --}}
    @if(Session::has('sukses'))
    <p class="alert alert-success">{{ Session::get('sukses') }}</p>
    @endif
    @if(Session::has('hapus'))
    <p class="alert alert-danger">{{ Session::get('hapus') }}</p>
    @endif

    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <div class="pull-header">
                    <div class="pull-left">
                        <strong>Data Sample Masuk</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('samplemasuk/create') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-plus"></i> Add
                        </a>
                    </div>
                    <div class="pull-right">
                        {{-- Tombol Search Start--}}
                        <div class="form-inline">
                            <form class="search-form" action="{{ url('samplemasuk') }}" method="GET">
                                <input class="form-control mr-sm-2" type="text" placeholder="{{ $keyword }}" name="keyword">
                            </form>
                        </div>
                        {{-- Search End --}}
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Segment</th>
                            <th>Kode Sample</th>
                            <th>Tanggal Terima Sample</th>
                            <th>Pengirim Sample</th>
                            <th>Jenis Sample</th>
                            <th>Lot Number</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->segment }}</td>
                                <td>{{ $item->id_sample }}</td>
                                <td>{{ $item->tanggal_terima_sample }}</td>
                                <td>{{ $item->pengirim_sample }}</td>
                                <td>{{ $item->jenis_sample }}</td>
                                <td>{{ $item->lot_number }}</td>
                                <td class="text-center">
                                    {{-- Tombol Lihat --}}
                                    <a href="{{ url('samplemasuk/'.$item->id) }}" class="btn btn-warning btn-sm">
                                        <i class="ti ti-new-window"></i>
                                    </a>
                                    {{-- Tombol Edit --}}
                                    <a href="{{ url('samplemasuk/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    {{-- Tombol Delete --}}
                                    
                                    <form action="{{ url('samplemasuk/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                        @method('delete')
                                        @csrf
                                        
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash-o"></i>                                        
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>      
                </table>
                <!--Pagination-->    
                {{ $datas->links('pagination::bootstrap-4') }}
            </div>
        </div>             
    </div>
</div>
    
@endsection