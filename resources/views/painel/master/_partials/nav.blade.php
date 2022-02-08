<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
     navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">

                @foreach(request()->segments() as $segment)
                    @if(!$loop->last)
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                                               href="javascript:;">{{ucfirst($segment)}}</a></li>
                    @else
                        <li class="breadcrumb-item text-sm text-dark active"
                            aria-current="page">{{ucfirst($segment)}}</li>
                    @endif
                @endforeach
            </ol>
            <h6 class="font-weight-bolder mb-0">{{ucfirst($segment)}}</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Type here...">
                </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">

                        <form method="post" action="{{route('logout')}}">
                            @csrf
                        <button type="submit"  class="btn btn-link">
                            <i class="fa fa-user me-sm-1"></i>Sair</button>
                        </form>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
