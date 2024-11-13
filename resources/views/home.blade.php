@extends('layouts.main-layout')

@section('content')
    {{-- <h3>Testando Configuração Inicial</h3> --}}

    <div class="jumbotron">
        <h2 class="display-6">Bem vindo(a), a SmartTech Enterprise</h2>
        <p class="lead">Com os nossos serviços sua empresa pode ir mais longe, imagine economizar tempo e ganhar mais
            produtividade,
            é disso que estamos falando, verifique nossos serviços e faça a melhor escolha para seu negócio</p>
        <hr class="my-2">
        <a class="btn btn-primary btn-sm" href="#" role="button">Contato</a>
    </div>

    {{--  --}}
    <hr class="my-3">

    <div class="card-group gap-3">
        <div class="card">
            <a href="{{ route('dev') }}">
                <img class="card-img-top" src="{{ asset('images/programar2.jpg') }}" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Desenvolvimento Sites & Apps</h5>
                    <p class="card-text">
                        Soluções de desenvolvimento web para sua empresa usamos as linguagens de alto nível do mercado como o PHP e JavaScript
                    </p>
                    {{-- <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p> --}}
                </div>
            </a>
        </div>
        <div class="card">
            <a href="{{ route('automacao') }}">
                <img class="card-img-top" src="{{ asset('images/macros.jpg') }}" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Automação de processos</h5>
                    <p class="card-text">
                        Usamos Python, Php e VBA para automatizar qualquer processo moroso!
                    </p>
                </div>

            </a>
        </div>
        <div class="card">
            <a href="{{ route('homeAutomate') }}">
                <img class="card-img-top" src="{{ asset('images/homeAutomate.jpg') }}" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Serviços Residências</h5>
                    <p class="card-text">
                        Instalação de CFTV, Porteiro Eletrônico, Automação Residêncial entre outros, uma consultoria a parte
                        em parceira com a SmartTechEnterprise!
                    </p>
                </div>
            </a>
        </div>
    </div>

    {{--  --}}
@endsection
