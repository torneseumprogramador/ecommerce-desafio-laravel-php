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
                @include('clientes.form')
            </form>
        </div>
    </section>
@endsection

