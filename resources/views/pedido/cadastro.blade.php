<link href="{{ asset('css/pedido/cadastrar.css') }}" rel="stylesheet">
@extends('layouts.app')
@section('content')
<Section class="section-1">
    <header class="header">
            <div class="titulo">
                <h5>Pedidos - Cadastro</h5>
            </div>
            <div class="novo">
                <button class="cadastrar" href="{{route('pedido.cadastro')}}">Cancelar</button>
                <button class="cadastrar" href="{{route('pedido.cadastro')}}">Gravar</button>
            </div>            
    </header>

    <section class="sec-1">
        <div><span>Dados do Pedido</span></div>
        <section class="sec-flex">
            <article class="artic">
                <fieldset class="field cl-5">
                    <legend>Vendedor</legend>
                    <input type="text" name="Vendedor" id="Vendedor" value="{{Auth::user()->name}}">
                </fieldset>
            </article>

            <article class="artic">
                <fieldset class="field cl-4">
                    <legend>Data</legend>
                    <input type="date" name="data" id="data">
                </fieldset>
            </article>

            <article class="artic" >
                <fieldset class="field cl-4">
                    <legend>Status</legend>
                    <Select>
                        <option value="Aberto">Aberto</option>
                        <option value="Finalizado">Finalizado</option>
                    </Select>
                </fieldset>
            </article>
        </section>
    </section>
</section>
@endsection