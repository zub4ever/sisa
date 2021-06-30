@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
Função
@endsection

@section('main-content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Início</a></li>
    <li class="breadcrumb-item active"><a>Função</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success btn-md" data-toggle="tooltip" data-placement="right" title="Cadastrar novo Orgão Expedidor" href="{{route('funcao.create')}}" role="button">
                    Nova Função
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Funções Cadastradas</h4>
                <div class="table-responsive">
                    <table id="dataTable" class="table text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Função</th>
                                <th class="text-center">Orgão</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($funcao as $fcn)
                            <tr>
                                <td class="text-center">{{$fcn->id}}</td>
                                <td class="text-center">{{$fcn->nm_funcao}}</td>
                                @foreach($orgaomnc as $mnc)
                                @if($fcn->orgao_id == $mnc->id)
                                <td class="text-center">{{$mnc->nm_orgao}}</td>
                                @endif
                                @endforeach
                                <td>
                                    <a href="{{route('funcao.edit', $fcn->id)}}">
                                        <i class="ti-pencil mr-1 btn btn-success"></i>
                                    </a>
                                    &nbsp;
                                    <form action="" method="POST"
                                          id="formLaravel" style="display:inline-block;">
                                        @method('DELETE')
                                        @csrf
                                        <span class="submit" idform="">
                                            <i class="ti-trash btn btn-danger"></i>
                                        </span>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
