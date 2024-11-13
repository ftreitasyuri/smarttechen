@extends('layouts.main-layout')

@section('content')
    <section class="container">
        <hr>
        <main>

            <div class="jumbotron">
                <h1 class="display-4">Desenvolvimento Web e Mobile</h1>
                <p class="lead">A união dos dois tipos de desenvolvimento é chamada de siteApp, ou seja, um site que pode
                    ser um aplicativo de celular</p>
                <hr class="my-4">
                <p>Clique no botão abaixo para ver um exemplo de
                    site/App que foi desenvolvimento para testes e trás um layout 100% responsivo
                </p>
                <a class="btn btn-primary btn-lg" href="https://ftreitasyuri.github.io/finansprojeto/" role="button"
                    target="_blank">Site Finans</a>
            </div>

        </main>
        <hr>
        <div>
            <h3>As principais tecnologias usadas no desenvolvimento de aplicações web e mobile</h3>
            <hr>
            <div class="card-deck">

                <div class="card">
                    <img class="card-img-top" src="img/html.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">HTML5</h5>
                        <p class="card-text">
                            HTML é uma linguagem de marcação utilizada na construção de páginas na Web. Documentos HTML
                            podem ser interpretados por navegadores. A tecnologia é fruto da junção entre os padrões HyTime
                            e SGML.
                            HyTime é um padrão para a representação estruturada de hipermídia e conteúdo baseado em tempo
                        </p>
                    </div>
                    <div class="card-footer">
                        <!-- <small class="text-muted">Atualizados 3 minutos atrás</small> -->
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="img/css.jpg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">CSS4</h5>
                        <p class="card-text">
                            Cascading Style Sheets é um mecanismo para adicionar estilos a uma página web, aplicado
                            diretamente nas tags HTML ou ficar contido dentro das tags "style".
                            Também é possível, adicionar estilos adicionando um link para um arquivo CSS que contém os
                            estilos.
                        </p>
                    </div>
                    <div class="card-footer">
                        <!-- <small class="text-muted">Atualizados 3 minutos atrás</small> -->
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="img/javaScript.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">JavaScript</h5>
                        <p class="card-text">
                            JavaScript é uma linguagem de programação interpretada estruturada, de script em alto nível com
                            tipagem dinâmica fraca e multiparadigma.
                            Juntamente com HTML e CSS, o JavaScript é uma das três principais tecnologias da World Wide Web
                        </p>
                    </div>
                    <div class="card-footer">
                        <!-- <small class="text-muted">Atualizados 3 minutos atrás</small> -->
                    </div>
                </div>
            </div>
            <hr>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="img/node.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Node</h5>
                        <p class="card-text">
                            Node.js é um software de código aberto, multiplataforma, baseado no interpretador V8 do Google e
                            que permite a execução de códigos JavaScript fora de um navegador web.
                            A principal característica do Node.js é sua arquitetura assíncrona e orientada por eventos
                        </p>
                    </div>
                    <div class="card-footer">
                        <!-- <small class="text-muted">Atualizados 3 minutos atrás</small> -->
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="img/react.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">React JS</h5>
                        <p class="card-text">
                            O React é uma biblioteca front-end JavaScript de código aberto com foco em criar interfaces de
                            usuário em páginas web
                        </p>
                    </div>
                    <div class="card-footer">
                        <!-- <small class="text-muted">Atualizados 3 minutos atrás</small> -->
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="img/vue.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Vue Js</h5>
                        <p class="card-text">
                            Vue.js é um framework JavaScript de código-aberto, focado no desenvolvimento de interfaces de
                            usuário e aplicativos de página única.
                        </p>
                    </div>
                    <div class="card-footer">
                        <!-- <small class="text-muted"></small> -->
                    </div>
                </div>
            </div>
        </div>

    </section>

    {{--  --}}
@endsection
