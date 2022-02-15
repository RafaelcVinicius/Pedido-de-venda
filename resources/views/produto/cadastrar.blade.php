<link rel="stylesheet" href="{{asset('css/produto/cadastrar.css')}}">
@extends('layouts.app')
@section('content')

    <section class="section-1">
        <header class="header-Cadastro">
            <div class="titulo">
                <h5>Cadastro de Produto</h5>
            </div>
            <div class="gravar">
                <button class="btn" type="button" onclick="document.getElementById('form-produto').submit()">Gravar</button>
            </div>
        </header>
        
        <div class="cadastro">
            <div class="dados">
                <form class="form" id="form-produto" action="{{route('produtos.store')}}" method="post">
                    @csrf                  
                    <div class="nome">  
                        <fieldset class="input">
                            <legend><label for="nome">Nome</label></legend>  
                            <input type="text" name="nome" id="nome">
                        </fieldset>
                        
                        <fieldset class="input">
                            <legend><label for="codbarras">Código de baras</label></legend>  
                            <input type="number" name="codbarras" id="codbarras">
                        </fieldset>
                    </div>
                    <div class="valor-qtde">  
                        <fieldset class="input ">
                            <legend><label for="qtde">Quantidade</label></legend>
                            <input type="number" name="qtde" id="Quantidade">
                        </fieldset>

                        <fieldset class="input">
                            <legend><label for="valor">Valor</label></legend>
                            <input type="number" name="valor" id="valor">
                        </fieldset> 
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection