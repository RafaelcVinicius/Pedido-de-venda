<link rel="stylesheet" href="{{asset('css/produto/produtos.css')}}">
@extends('layouts.app')
@section('content')
    <Section class="section-1">
        <header class="header">
                <div class="titulo">
                    <h5>Produto</h5>
                </div>
                <div class="novo">
                    <a class="cadastrar" href="{{route('produtos.create')}}">Cadastrar</a>
                </div>            
        </header>
        
        <div class="cadastro">
            <div class="tb">
                <table id="dataTable" class="tabela-1">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Código de barras</th>
                            <th>Qtde</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>                   
                            @foreach ($produtos as $produto)
                            <tr>
                                <td>{{$produto->id}}</td>
                                <td>{{$produto->nome}}</td>
                                <td>{{$produto->codbarras}}</td>
                                <td>{{$produto->qtde}}</td>
                                <td>{{$produto->valor}}</td>
                            </tr>
                            @endforeach                    
                    </tbody>
                </table>
                <div class="tabela-2">
                    <table id="dataTable" class="acao">
                        <thead>
                            <tr>                          
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>                   
                                @foreach ($produtos as $produto)
                                <tr>
                                <td>{{$produto->id}}</td>
                                </tr>
                                @endforeach                    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
<script type="text/javascript"> 

    $(document).ready( function () {
        $('#dataTable').DataTable();
    } );
    
    </script>