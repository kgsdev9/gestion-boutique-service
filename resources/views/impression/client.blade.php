<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rapport des clients </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Liste des clients </h2>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nom </th>
        <th>Prénom</th>
        <th>Email</th>
          <th>Adresse</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $value)
      <tr>
        <td>{{ $value->nom}}</td>
        <td>{{ $value->prenom}}</td>
        <td>{{ $value->email}}</td>
          <td>{{ $value->adresse}}</td>
            <td>{{   $value->created_at->diffForHumans()}}</td>
      </tr>
    @endforeach

    </tbody>
  </table>
</div>

</body>
</html>
