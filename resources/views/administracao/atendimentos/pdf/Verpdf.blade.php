<html lang="pt-br">
    <head>
        <!DOCTYPE html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Atendimento PDF</title>
    <link rel="stylesheet" href="{{asset('css/pdf.css')}}">


</head>

<body>
    <div align="center"><img class="imgcabecalho" src="../public/imagem/rbPrevlogo2.jpg"></div>   
    <h3 align="center">Instituto de Previdência do Município de Rio Branco</h3>
    <table class="tg" style="table-layout: fixed; width: 700px">
        <colgroup>
            <col style="width: 700px">
        </colgroup>
        <tr>
            <th class="tg-0pky">
        <center><strong>Solicitação de Atendimento ao Assegurado</strong></center>
    </th>
</tr>
</table>
<br>    
<table class="tgB" style="table-layout: fixed; width: 700px">
    <tr>
        <th class="tgB-lnuh" ><strong>Protocolo: </strong> <a>{{$atendimentos->id}}</a></th>
        <th class="tgB-s9fk"><strong>Nome do Assegurado: </strong>{{$atendimentos->nm_assegurado}}<br></th>
        <th class="tgB-lnuh"><strong>CPF: </strong> <a>{{$atendimentos->cpf}}</a></th>
    </tr>
</table>
<table class="tgB" style="table-layout: fixed; width: 700px">   
    <tr>
        <th class="tgB-lnuh"><strong>Cidade: </strong> <a>{{$atendimentos->nm_cidade}}</a><br></th>
        <th class="tgB-s9fk"><strong>Número do telefone: </strong>{{$atendimentos->numero_telefone}}<br></th>
        
    </tr>
</table>
<table class="tgB" style="table-layout: fixed; width: 700px">   
    <tr>
        
        <th class="tgB-s9fk"><strong>Email: </strong>{{$atendimentos->email}}<br></th>
        
    </tr>
</table>
<table class="tgd" style="table-layout: fixed; width: 700px">
    <colgroup>
        <col style="width: 700px">
    </colgroup>
    <tr>
        <th class="tgd-x4j0"><p style="width: 20m; word-wrap: break-word;"><strong>Tipo de solicitação de atendimento: </strong>{{ $atendimentos->nm_atendimento }}</p></th>
    </tr>
</table>
<table class="tgd" style="table-layout: fixed; width: 700px">
    <colgroup>
        <col style="width: 700px">
    </colgroup>
    <tr>
        <th class="tgd-x4j0"><p style="width: 20m; word-wrap: break-word;"><strong>Descrição do atendimento realizado: </strong>{{ $atendimentos->descricao }}</p></th>
    </tr>
</table>







<div class="footer" align="center"><img width="100" height="100" src="../public/imagem/pfrb.jpg">   
</div>

</body>

</html>

<style>
    .html, body {
        display: block;
    }

    .cabecalho {
        position: absolute;
        bottom: 0px;
        width: 100%;
    }

    .footer {
        position: absolute;
        bottom: 0px;
        width: 100%;
    }

    .left {
        float: left;
        width: 100px;
    }

    .html, body {
        display: block;
    }

    .cabecalho {
        position: absolute;
        bottom: 0px;
        width: 100%;
    }

    .footer {
        position: absolute;
        bottom: 0px;
        width: 100%;
    }

    .left {
        float: left;
        width: 100px;
    }

    .body {
        margin-top: 0.5cm;
        margin-left: 1cm;
        margin-right: 1cm;
        margin-bottom: 0.5cm;
    }

    .header {
        position: fixed;
        top: 0cm;
        left: 0cm;
        right: 0cm;
        height: 2cm;
        background-color: #3b5998;
        color: white;
        line-height: 1.0cm;
    }

    .table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        size: auto;
        padding: 6px;
        font-size: 14px;
        width: 100%;
    }

    .imgcabecalho {
        width: 120px;
        height: 90px;
        alignment: center;
    }

    .imgrodape {
        width: 740px;
        height: 40px;
        alignment: center;
    }

    <!--alisson-->
    .tg {
        border-collapse: collapse;
        border-spacing: 0;
        border-color: #ccc;
    }

    .tg td {
        font-family: Arial, sans-serif;
        font-size: 14px;
        padding: 10px 5px;
        border-style: solid;
        border-width: 1px;
        overflow: hidden;
        word-break: normal;
        border-color: #ccc;
        color: #333;
        background-color: #f8f8f8;
    }

    .tg th {
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-weight: normal;
        padding: 10px 5px;
        border-style: solid;
        border-width: 1px;
        overflow: hidden;
        word-break: normal;
        border-color: #ccc;
        color: #333;
        background-color: #f8f8f8;
    }

    .tg .tg-xldj {
        border-color: inherit;
        text-align: left
    }

    .tg .tg-0pky {
        border-color: inherit;
        text-align: left;
        vertical-align: top
    }
    .tgd {
        border-collapse: collapse;
        border-spacing: 0;
    }

    .tgd td {
        font-family: Arial, sans-serif;
        font-size: 12px;
        padding: 8px 5px;
        border-style: solid;
        border-width: 1px;
        overflow: hidden;
        word-break: normal;
        border-color: black;
    }

    .tgd th {
        font-family: Arial, sans-serif;
        font-size: 12px;
        font-weight: normal;
        padding: 8px 4px;
        border-style: solid;
        border-width: 1px;
        overflow: hidden;
        word-break: normal;
        border-color: black;
    }

    .tgd .tgd-x4j0 {
        font-family: Arial, sans-serif;
        font-size: 12px;
        padding: 8px 5px;
        border-style: solid;
        border-width: 1px;
        overflow: hidden;
        word-break: normal;
        border-color: black;
    }
</style>
