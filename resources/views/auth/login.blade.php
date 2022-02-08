@extends('auth.master')

@section('content')
    <div class="card card-plain mt-8">
        <div class="card-header pb-0 text-left bg-transparent">
            <h3 class="font-weight-bolder text-info text-gradient">API NEWS</h3>
            <p class="mb-0">Informe seus dados para acesso</p>
        </div>
        <div class="card-body">
            <form role="form" action="{{route('login')}}" method="post">
                @csrf
                <label>Email</label>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                           aria-describedby="email-addon" name="email">
                </div>
                <label>Password</label>
                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Password" aria-label="Password"
                           aria-describedby="password-addon" name="password">
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
                <div class="text-center">
                    <button type="submit" id="button-submit" class="btn btn-lg bg-gradient-info w-100 mt-4 mb-0">Login</button>
                </div>
            </form>
        </div>
        <div class="card-footer text-center pt-0 px-lg-2 px-1">
            <p class="mb-4 text-sm mx-auto">
                Esqueceu sua senha?
                <a href="javascript:;" class="text-info text-gradient font-weight-bold">Clique aqui</a>
            </p>
        </div>
    </div>
@endsection
