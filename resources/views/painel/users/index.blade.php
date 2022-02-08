@extends('painel.master.index')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between">
                        <h6>Últimos posts</h6>
                        <button type="button" class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">

                        NOVO USUÁRIO
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
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Categorias
                                    </th>

                                    <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ações</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($users as $user)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../../assets/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                         alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{$user->name}}</h6>
                                                    <p class="text-xs text-secondary mb-0">Total de posts 40</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Todas</p>

                                        </td>
                                        <td class="align-middle">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                               data-toggle="tooltip" data-original-title="Edit user">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a type="button" class="btn btn-primary rounded-start" href="{{route('post.edit')}}">Editar</a>
                                                    <button type="button" class="btn btn-danger">Excuir</button>

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
    @include('painel.users._partials.modalUser')
@endsection
