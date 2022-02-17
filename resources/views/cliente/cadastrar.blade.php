<link rel="stylesheet" href="{{asset('css/cliente/cadastrar.css')}}">
@extends('layouts.app')
@section('content')

    <section class="section-1">
        <header class="header-Cadastro">
            <div class="titulo">
                <h5>Cadastro de cliente</h5>
            </div>
            <div class="gravar">
                <button class="btn" type="button" onclick="document.getElementById('form-clientes').submit()">Gravar</button>
            </div>
        </header>
        
        <div class="cadastro">
            <div class="dados">
                <form class="form" id="form-clientes" action="{{route('clientes.store')}}" method="post">
                    @csrf                  
                    <div class="nome">  
                        <fieldset class="input">
                            <legend><label for="cnpjcpf">CNPJ/CPF</label></legend>  
                            <input type="number" name="cnpjcpf" id="cnpjcpf">
                        </fieldset>

                        <fieldset class="input">
                            <legend><label for="nome">Nome</label></legend>  
                            <input type="text" name="nome" id="nome">
                        </fieldset>                                            
                    </div>
                    <div class="valor-qtde">  
                        <fieldset class="input ">
                            <legend><label for="telefone">Telefone</label></legend>
                            <input type="number" name="telefone" id="telefone">
                        </fieldset>

                        <fieldset class="input">
                            <legend><label for="cep">CEP</label></legend>
                            <input type="number" name="cep" id="cep">
                        </fieldset> 
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection