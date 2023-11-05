@extends('layout')

@section('titulo_header_html')
    Clientes
@endsection

@section('content')
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Novo cliente</h2>
                <a href="/clientes" class="btn btn-primary">Lista de clientes</a>
            </div>
            <br>

            <form id="contactForm" method="post" action="/clientes">
                @csrf
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="nome" name="nome" type="text" placeholder="Digite o nome *" />
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" name="email" type="email" placeholder="Seu Email *" />
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="telefone" name="telefone" type="tel" placeholder="Seu telefone *" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="endereco" name="endereco" placeholder="Seu endereço *"></textarea>
                        </div>
                    </div>
                </div>
               
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Enviar</button></div>
            </form>
        </div>
    </section>
@endsection

