<link rel="stylesheet" href="{{asset('css/cliente/clientes.css')}}">
@extends('layouts.app')
@section('content')
    <Section class="section-1">
        <header class="header">
                <div class="titulo">
                    <h5>Cliente</h5>
                </div>
                <div class="novo">
                    <a class="cadastrar" href="{{route('produtos.create')}}">Cadastrar</a>
                </div>            
        </header>
        
        <div class="cadastro">
            <table id="table-clientes">
                <thead>

                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </section>
@endsection

<script></script>