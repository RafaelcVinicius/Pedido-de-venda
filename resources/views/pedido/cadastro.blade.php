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
            <article class="artic off  cl-5">
                <fieldset class="field ">
                    <legend>Vendedor</legend>
                    <input class="input-form" autocomplete="off" readonly="readonly" type="text" name="Vendedor" id="Vendedor" value="{{Auth::user()->name}}">
                </fieldset>
            </article>

            <article class="artic cl-4">
                <fieldset class="field ">
                    <legend>Data</legend>
                    <input class="input-form" type="date" name="data" id="data">
                </fieldset>
            </article>

            <article id="status" class="artic cl-3" >
                <fieldset id="fildstatus" class="field cursor">
                    <legend>Status</legend>
                    <input id="input-status" class="input-form cursor" type="text" autocomplete="off" readonly="readonly" value="ABERTO">
                    <button class="btn-status  cursor"><svg width="18px" height="18px" viewBox="0 0 900 300"><path d="M312 251l222 -236c10,-9 23,-15 37,-15l1 0c29,0 53,24 53,53 0,14 -6,27 -17,38l-258 274c-8,7 -17,12 -27,14 -4,1 -7,1 -11,1 -3,0 -7,0 -10,-1 -11,-2 -20,-7 -26,-13l-261 -276c-10,-10 -15,-23 -15,-37 0,-29 24,-53 53,-53l1 0c14,0 27,6 35,15l223 236z" class="fill"></path></svg></button>                    
                </fieldset>
                <section id="lista-status" class="lista-status disable  cursor">
                    <ul>
                        <li onclick="statusadd(this)" data-value="1" data-content="ABERTO">ABERTO</li>
                        <li onclick="statusadd(this)" data-value="2" data-content="CANCELADO">CANCELADO</li>
                        <li onclick="statusadd(this)" data-value="3" data-content="FINALIZADO">FINALIZADO</li>
                    </ul>
                </section>
            </article>
        </section>
    </section>
</section>
<script>
    const status = document.getElementById('status');

    status.addEventListener('click', ativarstatus);

    function ativarstatus(){
    const  fildstatus = document.getElementById("fildstatus");
    const listastatus = document.getElementById("lista-status");

    fildstatus.classList.toggle('ativo');  
    listastatus.classList.toggle('disable');    
    }

function statusadd(dados){
 console.log(dados);
const inputstatus = document.getElementById("input-status");

var content = dados.dataset.content;
var value = dados.dataset.value;

inputstatus.dataset.content = content;
inputstatus.dataset.value = value;
inputstatus.value = content;

}
</script>
@endsection

