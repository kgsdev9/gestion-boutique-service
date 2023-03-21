<!DOCTYPE html>
<html>
<head>

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}



#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<link href="https : //fonts.googleapis.com/css2?family= Inter:wght@300 ; 400;500;600;700;800 & display=swap" rel="stylesheet">
</head>
<body style="text-transform: capitalize; font-family: 'Inter', sans-serif;"  id="#body">

<h1 >LISTE DES COMMANDES </h1>

<table id="customers">
  <tr>
    <th>N° Commande  </th>
     <th>Entreprise </th>
     <th>Prix Unit</th>
     <th>Quantite</th>
    <th>Total  </th>
        <th>Date de facturation </th>
  </tr>

  @foreach ($data as $value )
    <tr>
        <td>{{ $value->numero}}</td>
        <td>{{ $value->entreprise}}</td>
        <td>{{ $value->prix}}</td>
          <td>{{ $value->quantite}}</td>
          <td>{{ $value->total}}</td>
        <td>{{ date("Y/m/d", strtotime($value->date))   }}</td>
      </tr>
  @endforeach


</table>

</body>
</html>
