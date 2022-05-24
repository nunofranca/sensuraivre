@extends('painel.master.index')


@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between">
                        <h6>Últimos posts</h6>
                        <a type="button" class="btn btn-primary btn-lg" href="{{route('post.create')}}">NOVO POST</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Título
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Categoria
                                    </th>
{{--                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">--}}
{{--                                        Total Comentários--}}
{{--                                    </th>--}}
{{--                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">--}}
{{--                                        Status--}}
{{--                                    </th>--}}
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Atualizado
                                    </th>
                                    <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ações</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($posts as $post)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
{{--                                                    <img src="../../assets/img/team-2.jpg" class="avatar avatar-sm me-3"--}}
{{--                                                         alt="user1">--}}
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{$post->title}}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{$post->user->name}}</p>
{{--                                                    <p class="text-xs text-secondary mb-0">--}}
{{--                                                        <a>--}}
{{--                                                            {{env('APP_URL')}}/post/{{$post->slug}}--}}
{{--                                                        </a>--}}

{{--                                                    </p>--}}
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$post->category->name}}</p>

                                        </td>
{{--                                        <td>--}}
{{--                                            <p class="text-xs font-weight-bold mb-0">Em Breve</p>--}}

{{--                                        </td>--}}
{{--                                        <td class="align-middle text-center text-sm">--}}
{{--                                            <span class="badge badge-sm bg-gradient-success">Online</span>--}}
{{--                                        </td>--}}
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{\Carbon\Carbon::parse($post->created_at)->isoFormat('LLLL')}}</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                               data-toggle="tooltip" data-original-title="Edit user">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a type="button" class="btn btn-primary rounded-start" href="{{route('post.edit', $post->id)}}">Editar</a>

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
@endsection

