@extends('layouts.app')

@section('page-title') Cadastrar contrato @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/select2/select2.min.css")}}">
@endsection

@section('main-content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Início</a></li>
    <li class="breadcrumb-item"><a href="{{route("contrato.index")}}">Contratos</a></li>
    <li class="breadcrumb-item active"><a>Cadastrar Contrato</a></li>
</ol>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card_title">Cadastrar Contrato</h4>
                <form action="{{route('contrato.store')}}" method="POST">
                    @csrf
                    @include('contrato.form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script src="{{asset('assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
<script src="{{asset('assets/vendors/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/vendors/select2/plugin/select2.js')}}"></script>
@endsections