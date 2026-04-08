@extends('layouts._admin.main')
@section('title', 'Radar Econômico - Visualizar Categoria')
@section('content')

    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Categoria</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Vizualização</li>
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
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-dark">
                            <i class="feather-chevron-left me-2"></i>
                            Voltar</a>
                    </div>
                </div>
                <div class="d-md-none d-flex align-items-center">
                    <a href="javascript:void(0)" class="page-header-right-open-toggle">
                        <i class="feather-align-right fs-20"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                    <div class="card card-body general-info">
                        <div class="mb-4 d-flex align-items-center justify-content-between">
                            <h5 class="fw-bold mb-0">
                                <span class="d-block mb-2">Informação Geral :</span>
                                <span class="fs-12 fw-normal text-muted d-block">Informação geral da Categoria</span>
                            </h5>
                            <a href="{{ route('admin.categories.index') }}" class="btn btn-sm btn-light-brand">Listar
                                Categoria</a>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">ID</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $category->id }}</span>
                                </a>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Nome da Categoria</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $category->name }}</span>
                                </a>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Tipo de Categoria</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $category->type }}</span>
                                </a>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Descrição</div>
                            <div class="col-lg-10 hstack gap-1">{{ $category->description }}</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @endsection
