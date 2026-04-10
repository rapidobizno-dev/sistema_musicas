@extends('layouts._admin.main')
@section('title', 'Gênero')
@section('content')
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Gênero</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Todos os Gêneros</li>
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
                        <a href="{{ route('admin.gender.create') }}" class="btn btn-dark">
                            <i class="feather-plus me-2"></i>
                            <span>Adicionar Novo</span>
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
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover" id="proposalList">
                                    <thead>
                                        <tr>
                                            <th class="wd-30">
                                                <div class="btn-group mb-1">
                                                    <div class="custom-control custom-checkbox ms-1">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="checkAllProposal">
                                                        <label class="custom-control-label"
                                                            for="checkAllProposal"></label>
                                                    </div>
                                                </div>
                                            </th>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Descrição</th>
                                            <th class="text-end">Ações</th>
                                        </tr>

                                    </thead>

                                    <tbody>
                                        @foreach ($genders as $item)
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox"
                                                                id="checkBox_1">
                                                            <label class="custom-control-label" for="checkBox_1"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $item->id }}</td>
                                                <td>

                                                        <div>
                                                            <span class="text-truncate-1-line">{{ $item->name }}</span>
                                                            {{-- <small
                                                                class="fs-12 fw-normal text-muted">alex.della@outlook.com</small> --}}
                                                        </div>

                                                </td>
                                                <td>{{ Str::limit($item->description, 20, '...') }}</td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a class="avatar-text avatar-md"
                                                            href="{{ route('admin.gender.show', ['category' => $item]) }}">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md"
                                                                data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <a class="dropdown-item"
                                                                    href="{{ route('admin.gender.edit', ['category' => $item]) }}">
                                                                    <i class="feather feather-edit-3 me-3"></i>
                                                                    <span>Edit</span>
                                                                </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('admin.gender.delete', ['category' => $item]) }}">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
@endsection
