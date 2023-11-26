<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service Invoice</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f5f5f5;
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
      <h1>Service Invoice</h1>
    </div>

    <div class="invoice-details">
      <p><strong>Invoice Number:</strong> INV-2023-001</p>
      <p><strong>Date:</strong> November 25, 2023</p>
      <p><strong>Customer:</strong> John Doe</p>
      <p><strong>Email:</strong> john.doe@example.com</p>
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
