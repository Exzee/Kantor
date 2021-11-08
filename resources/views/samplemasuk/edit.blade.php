@extends('layout.main')

@section('title', 'Rubah Data Sample Masuk')
    

@section('breadcrumbs')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Rubah Data</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">                   
                    <li><a href="#">Sample Masuk</a></li>
                    <li class="active">Edit Data</li>
                </ol>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('contents')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="card">
           {{-- Judul Form Tambah --}}
            <div class="card-header">
                <div class="pull-header">
                    <div class="pull-left">
                        <strong>Masukkan Data Perubahan Sample Masuk</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('samplemasuk') }}" class="btn btn-warning btn-sm">
                            <i class="ti ti-back-right"></i> Back
                        </a>
                    </div>                     
                </div>
            </div>
            {{-- Body form    --}}
                <div class="card-body table-responsive">
                <div class="card-body card-block">
                    {{-- Form Start --}}
                      <form action="{{ url('samplemasuk/'.$model->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal needs-validation" >
                        @csrf
                        <input type="hidden" name="_method" value="patch">

                        @include('samplemasuk._FormCreate');
                        
                        {{-- Form End --}}
                      </form>
                    </div>                    
                  </div>
            </div>
        </div>             
    </div>
</div>
    
@endsection