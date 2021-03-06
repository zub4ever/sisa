@extends('layouts.app')
{{-- Page Title --}}
@section('page-title')
Página inicial
@endsection
{{-- This Page Css --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendors/highcharts/css/highcharts.css') }}" type="text/css"
          media="all"/>
    <link rel="stylesheet" href="{{ asset('assets/vendors/am-charts/css/am-charts.css') }}" type="text/css"
          media="all"/>
    <link rel="stylesheet" href="{{ asset('assets/vendors/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/data-table/css/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendors/data-table/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendors/data-table/css/responsive.bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendors/data-table/css/responsive.jqueryui.min.css') }}">
@endsection
@section('main-content')

<div class="row">
        <script src="{{asset('assets/vendors/highcharts/highcharts.js')}}"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        <div class="col-sm-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">                       
                        <div class="col-sm-4">
                            <figure class="highcharts-figure">
                                <div id="containerATER">
                                </div>
                            </figure>
                        </div>
                        <div class="col-sm-4">
                            <figure class="highcharts-figure">
                                <div id="containerServidores">
                                </div>
                            </figure>
                        </div> 
                         <div class="col-sm-4">
                            <figure class="highcharts-figure">
                                <div id="containerOrigem">
                                </div>
                            </figure>
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
    </div>

    <script>
         var atendimentos =  <?php echo json_encode($atendimentos) ?>;
         var atendimentosAbertos =  <?php echo json_encode($atendimentosAbertos) ?>;
         var atendimentosFechados =  <?php echo json_encode($atendimentosFechados) ?>;
            Highcharts.chart('containerATER', {
                chart: {
                    type: 'column',
                    styledMode: true
                },
                title: {
                    text: 'Atendimentos 2022'
                },
                yAxis: [{
                    className: 'highcharts-color-6',
                    title: {
                        text: 'Quantidade'
                    }
                },],
                plotOptions: {
                    column: {
                        borderRadius: 3
                    }
                },
                series: [{
                    name: 'Geral',
                    data: [atendimentos]
                }, {
                    name: 'Abertos',
                    data: [atendimentosAbertos]
                }, {
                    name: 'Fechados',
                    data: [atendimentosFechados]
                }
                ]
            });
        </script>

        <script>
            var serve =  <?php echo json_encode($serve) ?>;
            var serveAp =  <?php echo json_encode($serveAp) ?>;
            var servePs =  <?php echo json_encode($servePs) ?>;
           
           Highcharts.chart('containerServidores', {
               chart: {
                   type: 'column',
                   styledMode: true
               },
               title: {
                   text: 'Servidores'
               },
               yAxis: [{
                   className: 'highcharts-color-3',
                   title: {
                       text: 'Quantidade'
                   }
               },],
               plotOptions: {
                   column: {
                       borderRadius: 5
                   }
               },
               series: [{
                   name: 'Quantidade Geral',
                   data: [serve]
               }, {
                   name: 'Aposentados',
                   data: [serveAp]
               }, {
                   name: 'Pensionistas',
                   data: [servePs]
               }
               ]
           });
        </script>


@endsection
@section('js')

@endsection
