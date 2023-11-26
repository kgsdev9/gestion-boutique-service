
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
      <h1>Service Payment Invoice</h1>
    </div>

    <div class="invoice-details">
      <div>
        <p><strong>Invoice Number:</strong> INV-2023-001</p>
        <p><strong>Date:</strong> November 25, 2023</p>
      </div>
      <div>
        <p><strong>Customer:</strong> John Doe</p>
        <p><strong>Email:</strong> john.doe@example.com</p>
      </div>
    </div>

    <table class="invoice-items">
      <thead>
        <tr>
          <th>Description</th>
          <th>Quantity</th>
          <th>Unit Price</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Service ABC</td>
          <td>2</td>
          <td>$50.00</td>
          <td>$100.00</td>
        </tr>
        <!-- Add more rows for additional services -->
      </tbody>
    </table>

    <div class="invoice-total">
      <p><strong>Total Amount:</strong> $100.00</p>
    </div>

    <div class="thank-you">
      <p>Thank you for your business!</p>
    </div>
  </div>

</body>
</html>

