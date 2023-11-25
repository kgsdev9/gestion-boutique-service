

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rapport des transactions du mois  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Liste Des transactions du mois   </h2>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Service </th>
        <th>Sous service </th>
        <th>Montant</th>
        <th>Code transaction </th>
        <th>Date de facturation </th>

      </tr>
    </thead>
    <tbody>
        @php
        $total  =0;
        @endphp
      @foreach($invoiceTransactionMountly as $value)

      @php
          $total+= $value->montant_entrant
      @endphp
      <tr>
        <td>{{ $value->service?->nom}} FCFA</td>
        <td>{{ $value->subService?->nom}}</td>
        <td>{{ $value->montant_entrant}} FCFA</td>
        <td>{{ $value->code_transaction}}</td>
        <td>{{ $value->created_at}}</td>
      </tr>
    @endforeach
    <span>TOTAL DES TRANSACTIONQ{{$total}} FCFA </span>
    </tbody>
  </table>
</div>

</body>
</html>
