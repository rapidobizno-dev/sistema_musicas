@extends('layouts._admin.main');
@section('title', 'Radar Economico - Taxas');
@section('content')

    <!-- [ Craete Form ] -->
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Taxa de Conversão</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Criar</li>
                </ul>
            </div>
            <div class="page-header-right ms-auto">
                <div class="page-header-right-items">
                    <div class="d-flex d-md-none">
                        <a href="javascript:void(0)" class="page-header-right-close-toggle">
                            <i class="feather-arrow-left me-2"></i>
                            <span>Back</span>
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                        {{-- <a href="javascript:void(0);" class="btn btn-light-brand successAlertMessage">
                            <i class="feather-layers me-2"></i>
                            <span>Save as Draft</span>
                        </a> --}}
                        <a href="{{ route('admin.rate.list') }}" class="btn btn-dark">
                            <i class="feather-chevron-left me-2"></i>
                            <span>Visualizar</span>
                        </a>
                    </div>
                </div>
                <div class="d-md-none d-flex align-items-center">
                    <a href="javascript:void(0)" class="page-header-right-open-toggle">
                        <i class="feather-align-right fs-20"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- [ page-header ] end -->
        <!-- [ Main Content ] start -->
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card stretch stretch-full">
                        <div class="card-body lead-status">
                            <div class="mb-5 d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0 me-4">
                                    <span class="d-block mb-2">Nova Taxa :</span>
                                    <span class="fs-12 fw-normal text-muted text-truncate-1-line">Normalmente se refere a
                                        adicionar uma nova taxa para o conversor de moeda</span>
                                </h5>
                                <a href="{{ route('admin.rate.list') }}" class="btn btn-sm btn-light-brand">Listar
                                    taxas</a>
                            </div>
                            <form action="{{ route('admin.rate.store') }}" method="POST">
                                @csrf
                                @method('POST')
                                {{-- form rate --}}
                                @include('forms._formRate.index')
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>

@endsection
