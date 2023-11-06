@extends('layout')

@section('titulo_header_html')
    Mostrando cliente: <?= $cliente->nome ?>
@endsection

@section('content')
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Dados do <?= $cliente->nome ?></h2>
                <a href="/clientes" class="btn btn-primary">Lista de clientes</a>
            </div>
            <br>

            <form id="contactForm">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control disabled" id="nome" value="<?= $cliente->nome ?>" disabled="disabled" type="text" placeholder="Digite o nome *" />
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control disabled" id="email" value="<?= $cliente->email ?>" disabled="disabled" type="email" placeholder="Seu Email *" />
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control disabled" id="telefone" value="<?= $cliente->telefone ?>" disabled="disabled" type="tel" placeholder="Seu telefone *" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control disabled" id="endereco" name="endereco" placeholder="Seu endereço *" disabled="disabled"><?= $cliente->endereco ?></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

