@extends('layout.main')

@section('title', 'Tambah Data Sample Keluar')
    

@section('breadcrumbs')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tambah Data</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">                   
                    <li><a href="#">Sample Keluar</a></li>
                    <li class="active">Tambah Data</li>
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
                        <strong>Masukkan Sample Keluar Baru</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('samplekeluar') }}" class="btn btn-warning btn-sm">
                            <i class="ti ti-back-right"></i> Back
                        </a>
                    </div>                    
                </div>
            </div>
            {{-- Body form    --}}
                <div class="card-body table-responsive">
                <div class="card-body card-block">
                    {{-- Form Start --}}
                      <form action="{{ url('samplekeluar') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf

                        @include('samplekeluar._FormCreate');
                        
                        {{-- Form End --}}
                      </form>
                    </div>                    
                  </div>
            </div>
        </div>             
    </div>
</div>
    
@endsection