@extends('layout')

@section('titulo_header_html')
    Página principal
@endsection

@section('content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Desafio de PHP</div>
            <div class="masthead-heading text-uppercase">Laravel</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="/clientes">Cadastro de clientes</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <div class="text-center">
                    <h1>Bem-vindo ao Torne-se um Programador</h1>
                    <p class="lead">Com Danilo, sua jornada de aprendizado começa ao nascer do sol.</p>
                </div>
                
                <div class="my-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="text-justify">
                                Aqui no <strong>Torne-se um Programador</strong>, acreditamos que a oportunidade de aprender 
                                deve ser acessível a todos. É por isso que nosso fundador, Danilo, oferece aulas que começam às 
                                5h da manhã - para que você possa aproveitar o dia ao máximo e transformar suas aspirações em realidade.
                            </p>
                            <p class="text-justify">
                                Sabemos que o esforço e a dedicação são essenciais no caminho para se tornar um grande programador. 
                                Para aqueles que estão dispostos a se esforçar e acordar com o primeiro raio de sol, oferecemos aulas 
                                <strong>totalmente gratuitas</strong>. Esta é a nossa contribuição para uma comunidade mais forte e 
                                mais capacitada tecnicamente.
                            </p>
                            <p class="text-justify">
                                Se você tem o desejo ardente de aprender e crescer na área de tecnologia, mas as circunstâncias 
                                financeiras são um obstáculo, não se preocupe. Estamos aqui para apoiá-lo. Tudo o que pedimos é 
                                sua paixão e compromisso. Então, ajuste o despertador, e vamos codificar juntos ao amanhecer.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

