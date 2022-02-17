<link href="{{ asset('css/pedido/pedido.css') }}" rel="stylesheet">
@extends('layouts.app')
@section('content')
<Section class="section-1">
    <header class="header">
            <div class="titulo">
                <h5>Produto</h5>
            </div>
            <div class="novo">
                <a class="cadastrar" href="{{route('pedido.cadastro')}}">Novo Pedido</a>
            </div>            
    </header>
</section>
@endsection