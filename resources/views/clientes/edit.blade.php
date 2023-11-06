@extends('layout')

@section('titulo_header_html')
    Editar - <?= $cliente->nome ?>
@endsection

@section('content')
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Editando: <?= $cliente->nome ?></h2>
                <a href="/clientes" class="btn btn-primary">Lista de clientes</a>
            </div>
            <br>

            <form id="contactForm" method="post" action="/clientes/<?= $cliente->id ?>">
                <input type="hidden" name="_method" value="PUT">
                @include('clientes.form', ['cliente' => $cliente])
            </form>
        </div>
    </section>
@endsection

