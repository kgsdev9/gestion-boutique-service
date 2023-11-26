
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service Payment Invoice</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    .invoice {
      border: 1px solid #ddd;
      padding: 20px;
      max-width: 600px;
      margin: 0 auto;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .invoice-header {
      text-align: center;
      margin-bottom: 20px;
    }

    .invoice-header h1 {
      color: #333;
    }

    .invoice-details {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .invoice-details div {
      flex: 1;
    }

    .invoice-items {
      border-collapse: collapse;
      width: 100%;
      margin-bottom: 20px;
    }

    .invoice-items th, .invoice-items td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    .invoice-total {
      text-align: right;
    }

    .thank-you {
      margin-top: 20px;
      text-align: center;
    }
  </style>
</head>
<body>

  <div class="invoice">
    <div class="invoice-header">
      <h1>{{$singleFacture->service->nom}}</h1>
    </div>

    <div class="invoice-details">
      <div>
        <p><strong>Code Transaction :</strong> {{$singleFacture->code_transaction}}</p>
        <p><strong>Date:</strong>{{$singleFacture->created_at}}</p>
      </div>
      <div>
        <p><strong>Motif:</strong>{{$singleFacture->subService->nom}}</p>
      </div>
    </div>

    <table class="invoice-items">
      <thead>
        <tr>
          <th>PRIX</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$singleFacture->montant_entrant}} FCFA </td>

        </tr>
        <!-- Add more rows for additional services -->
      </tbody>
    </table>

    <div class="thank-you">
      <p>Merci d'etre KGS INFORMATIQUE !</p>
    </div>
  </div>

</body>
</html>

