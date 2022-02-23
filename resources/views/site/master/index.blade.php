<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
@yield('metas-og')

<!-- CSS here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


    <link rel="stylesheet" href="{{asset('assets/css/site/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/site/ticker-style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/site/flaticon.css')}}">
{{--    <link rel="stylesheet" href="{{asset('assets/css/site/slicknav.css')}}">--}}
    <link rel="stylesheet" href="{{asset('assets/css/site/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/site/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/site/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/site/themify-icons.css')}}">
{{--    <link rel="stylesheet" href="{{asset('assets/css/site/slick.css')}}">--}}
    <link rel="stylesheet" href="{{asset('assets/css/site/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/site/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>

<body>

<!-- Preloader Start -->
<!-- <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/logo.png" alt="">
            </div>
        </div>
    </div>
</div> -->
<!-- Preloader Start -->

<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top black-bg d-none d-md-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li>
                                        {{Carbon\Carbon::parse(now())
                                                ->locale('pt-BR')
                                                ->isoFormat('dddd, D MMMM Y')}}
                                    </li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('site.master._partials.advertsTop')
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <a href="{{route('site')}}"><img width="50%" src="{{asset('assets/images/site/logo/sl.png')}}"
                                                          alt=""></a>
                            </div>
                            @include('site.master._partials.menu')
                        </div>

                    @include('site.master._partials.search')
                    <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>

<main>
    @yield('content')
</main>

<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding fix">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                    <div class="single-footer-caption">
                        <div class="single-footer-caption">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="{{route('site')}}"><img width="60%"
                                                                 src="{{asset('assets/images/site/logo/sl.png')}}"
                                                                 alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>O semcensura.tv.br surge na Bahia como bandeira da democracia, com o
                                        compromisso de informar com imparcialidade tudo o que ocorre nos bastidores da
                                        política baiana e que, de forma direta ou indireta, interfere no desenvolvimento
                                        de nossa sociedade. Aguerrido nesta trincheira, encara o desafio de combater
                                        qualquer tipo de censura, num momento difícil de excessos em nossa democracia,
                                        emanados dos mais diversos Poderes, onde o “novo normal” na era pós pandemia
                                        traz desafios ainda maiores de bem informar e esclarecer nossos leitores sobre
                                        as movimentações no tabuleiro da política baiana que inevitavelmente impacta na
                                        vida de todos nós. A todos, uma boa leitura e curtam também os nossos vídeos.
                                    </p>
                                </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                    <div class="single-footer-caption mt-60">
                        <div class="footer-tittle">
                            <h4>Newsletter</h4>
                            <p>Heaven fruitful doesn't over les idays appear creeping</p>
                            <!-- Form -->
                            <div class="footer-form">
                                <div id="mc_embed_signup">
                                    <form target="_blank"
                                          action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                          method="get" class="subscribe_form relative mail_part">
                                        <input type="email" name="email" id="newsletter-form-email"
                                               placeholder="Email Address"
                                               class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                               onblur="this.placeholder = ' Email Address '">
                                        <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm"><img
                                                    src="{{asset('assets/images/site/logo/form-iocn.png')}}" alt="">
                                            </button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- footer-bottom aera -->
                <div class="footer-bottom-area">
                    <div class="container">
                        <div class="footer-border">
                            <div class="row d-flex align-items-center justify-content-between">
                                <div class="col-lg-6">
                                    <div class="footer-copy-right">
                                        <p>
                                            Todos os direitos reservados ao SensuraLive
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="footer-menu f-right">
                                        <ul>
                                            <li><a href="#">Termos de uso</a></li>
                                            <li><a href="#">Política de privacidade</a></li>
                                            <li><a href="#">Contato</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End-->
            </div>
        </div>
    </div>
</footer>


<script src="{{asset('assets/js/site/modernizr-3.5.0.min.js')}}"></script>
<script src="{{asset('assets/js/site/modernizr-3.5.0.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="{{asset('assets/js/site/bootstrap.bundle.js')}}"></script>
{{--<script src="{{asset('assets/js/site/jquery.slicknav.min.js')}}"></script>--}}
<script src="{{asset('assets/js/site/owl.carousel.min.js')}}"></script>
{{--<script src="{{asset('assets/js/site/slick.min.js')}}"></script>--}}
<script src="{{asset('assets/js/site/gijgo.min.js')}}"></script>
<script src="{{asset('assets/js/site/wow.min.js')}}"></script>
<script src="{{asset('assets/js/site/animated.headline.js')}}"></script>
<script src="{{asset('assets/js/site/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('assets/js/site/jquery.ticker.js')}}"></script>
<script src="{{asset('assets/js/site/site.js')}}"></script>
<script src="{{asset('assets/js/site/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('assets/js/site/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/js/site/jquery.sticky.js')}}"></script>
<script src="{{asset('assets/js/site/contact.js')}}"></script>
<script src="{{asset('assets/js/site/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/site/mail-script.js')}}"></script>
<script src="{{asset('assets/js/site/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets/js/site/plugins.js')}}"></script>
{{--<script src="{{asset('assets/js/site/main.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/site/main.js')}}"></script>--}}
@yield('js')

</body>
</html>
