@extends('layouts._admin.main')
@section('title', 'Radar Econômico - Visualizar Comentário')
@section('content')

    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Comentários</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.comments.index') }}">Comentários</a></li>
                    <li class="breadcrumb-item">Detalhes</li>
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
                        {{--  <a href="javascript:void(0);" class="btn btn-light-brand" data-bs-toggle="offcanvas" data-bs-target="#proposalSent">
                        <i class="feather-layers me-2"></i>
                        <span>Save & Send</span>
                    </a> --}}
                        <a href="{{ route('admin.comments.index') }}" class="btn btn-dark">
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
                                <span class="fs-12 fw-normal text-muted d-block">Informações gerais sobre o seu
                                    Comentário</span>
                            </h5>
                            <a href="{{ route('admin.comments.index') }}" class="btn btn-sm btn-light-brand">Listar
                                Comentários</a>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">ID</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $comment->id }}</span>
                                </a>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Texto do Comentário</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $comment->comment }}</span>
                                </a>
                            </div>
                        </div>
                        {{-- <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Slug</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $category->slug }}</span>
                                </a>
                            </div>
                        </div> --}}
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Autor do Comentário</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $comment->first_name }} {{ $comment->last_name }}</span>
                                </a>
                            </div>
                        </div>
                        {{-- <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Status</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $category->status }}</span>
                                </a>
                            </div>
                        </div> --}}
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Data do Comentário</div>
                            <div class="col-lg-10 hstack gap-1">{{ date('d/m/Y H:i', strtotime($comment->updated_at)) }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                    <div class="card card-body general-info">
                        <div class="mb-4 d-flex align-items-center justify-content-between">
                            <h5 class="fw-bold mb-0">
                                <span class="d-block mb-2">Informação Sobre a notícia :</span>
                                <span class="fs-12 fw-normal text-muted d-block">Informações gerais sobre a notícia
                                    comentada</span>
                            </h5>
                            <a href="{{ route('admin.news.view', $news->id) }}" class="btn btn-sm btn-light-brand">Visualizar
                                Notícia</a>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">ID</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $news->id }}</span>
                                </a>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Título</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $news->title }}</span>
                                </a>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Subtítulo</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $news->subtitle }}</span>
                                </a>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Data de Publicação</div>
                            <div class="col-lg-10 hstack gap-1">{{ date('d/m/Y H:i', strtotime($news->updated_at)) }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
