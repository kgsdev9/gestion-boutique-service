<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service Invoice</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
    }

    .invoice-container {
      max-width: 600px;
      margin: 50px auto;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
    }

    .invoice-header {
      background-color: #3498db;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .invoice-header h1 {
      margin: 0;
    }

    .invoice-details {
      padding: 20px;
    }

    .invoice-details p {
      margin: 5px 0;
    }

    .invoice-items {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
    }

    .invoice-items th, .invoice-items td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    .invoice-total {
      padding: 20px;
      text-align: right;
    }

    .thank-you {
      background-color: #3498db;
      color: #fff;
      text-align: center;
      padding: 10px;
    }
  </style>
</head>
<body>

  <div class="invoice-container">
    <div class="invoice-header">
      <h1>Facture De Commande </h1>
    </div>

    <div class="invoice-details">
      <p><strong>Invoice Number:</strong> INV-2023-001</p>
      <p><strong>Date:</strong> {{$order->created_at}}</p>
      <p><strong>Client:</strong> {{$order->nom_client}}</p>
      <p><strong>Télephone:</strong>{{$order->telephone_client}}</p>
      <p><strong>Email:</strong>{{$order->email_client}}</p>
    </div>

    <table class="invoice-items">
      <thead>
        <tr>
          <th>Article</th>
          <th>Quantite</th>
          <th>Prix</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        @php
        $total = 0;
        @endphp
        @foreach ($order->articles as $ressource)
        @php
        $total+= $ressource->prix * $ressource->pivot->quantity
        @endphp
        <tr>
          <td>{{$ressource->nom}}</td>
          <td>{{$ressource->pivot->quantity}}</td>
          <td>{{$ressource->prix}} FCFA</td>
          <td>{{$ressource->pivot->total}} FCFA</td>
        </tr>
       @endforeach
      </tbody>
    </table>

    <div class="invoice-total">
      <p><strong>Total:</strong>{{$total}} FCFA </p>
    </div>

    <div class="thank-you">
      <p>Merci pour la commande KGS !</p>
    </div>
  </div>

</body>
</html>
