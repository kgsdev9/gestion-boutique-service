<!DOCTYPE html>
<html>
<head>
    <title>FACTURE PERSONNALISE DE COMMANDE SONACO </title>
</head>
<style type="text/css">
    body{
        font-family: 'Roboto Condensed', sans-serif;
    }
    .m-0{
        margin: 0px;
    }
    .p-0{
        padding: 0px;
    }
    .pt-5{
        padding-top:5px;
    }
    .mt-10{
        margin-top:10px;
    }
    .text-center{
        text-align:center !important;
    }
    .w-100{
        width: 100%;
    }
    .w-50{
        width:50%;
    }
    .w-85{
        width:85%;
    }
    .w-15{
        width:15%;
    }
    .logo img{
        width:45px;
        height:45px;
        padding-top:30px;
    }
    .logo span{
        margin-left:8px;
        top:19px;
        position: absolute;
        font-weight: bold;
        font-size:25px;
    }
    .gray-color{
        color:#5D5D5D;
    }
    .text-bold{
        font-weight: bold;
    }
    .border{
        border:1px solid black;
    }
    table tr,th,td{
        border: 1px solid #d2d2d2;
        border-collapse:collapse;
        padding:7px 8px;
    }
    table tr th{
        background: #F4F4F4;
        font-size:15px;
    }
    table tr td{
        font-size:13px;
    }
    table{
        border-collapse:collapse;
    }
    .box-text p{
        line-height:10px;
    }
    .float-left{
        float:left;
    }
    .total-part{
        font-size:16px;
        line-height:12px;
    }
    .total-right p{
        padding-right:20px;
    }
</style>
<body>
<div class="head-title">
    <h1 class="text-center m-0 p-0">COMMANDE </h1>
</div>

<div class="table-section bill-tbl w-100 mt-10">
    <table class="table w-100 mt-10">

        <tr>
            <td>
                <div class="box-text">
                    <p>N° Commande : {{$orders->numero}}</p>
                    <p>Date de facturation : {{ date("Y/m/d", strtotime($orders->date))}}</p>
                </div>
            </td>
            <td>
                <div class="box-text">
                    <p>{{$orders->emplacement }}</p>
                    <p>Contact : {{$orders->telephone_one }}  {{$orders->telephone_two }}</p>
                </div>
            </td>
        </tr>
    </table>
</div>

<div class="table-section bill-tbl w-100 mt-10">
    <table class="table w-100 mt-10">
        <tr>
            <th class="w-50">Quantité </th>
            <th class="w-50">Référence </th>
            <th class="w-50">Prix Unit.HT</th>
            <th class="w-50">Montant Hors Taxes </th>
        </tr>
        <tr align="center">
            <td>{{$orders->quantite}}</td>
            <td>{{$orders->reference}}</td>
            <td>{{$orders->prix}}</td>
            <td>{{$orders->total}}</td>
        </tr>
        <tr>
            <td colspan="7">
                <div class="total-part">
                    <div class="total-left w-85 float-left" align="right">
                        <p>TOTAL HT </p>
                        <p>TVA </p>
                        <p>TOTAL TTC </p>
                        <p>TOTAL AIRSI  </p>
                        <p>NET A PAYER (CFA)  </p>
                    </div>
                    <div class="total-right w-15 float-left text-bold" align="right">
                        <p>{{$orders->total}}</p>
                        <p></p>
                        <p>{{$orders->total}}</p>
                        <p></p>
                        <p>{{$orders->total}}</p>
                    </div>
                    <div style="clear: both;"></div>
                </div>
            </td>
        </tr>
    </table>
</div>
</html>
