@extends('painel.master.index')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between">
                        <h6>Últimos posts</h6>
                        <button type="button" class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            NOVA CATEGORIA
                        </button>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Nome
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Total Postagens
                                    </th>

                                    <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ações</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($categories as $category)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../../assets/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                         alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{$category->name}}</h6>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Online</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="mb-0 text-sm">300</span>
                                        </td>

                                        <td class="align-middle">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                               data-toggle="tooltip" data-original-title="Edit user">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a type="button" class="btn btn-primary rounded-start" href="#">Posts</a>
                                                    <button type="button" class="btn btn-danger">Desativar</button>

                                                </div>
                                            </a>
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
    @include('painel.categories._partials.modalCategory')
@endsection
