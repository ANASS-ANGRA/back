<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <table style="border:1px">
       <tr style="background-color: gray;">
        <td>client</td>
        <td>libelle</td>
        <td>date debut</td>
        <td>date fin</td>
        <td>description</td>
        <td>analyse cyber securite</td>
        <td>compte manager</td>
        <td>ingenieur cyber securite</td>
       <tr>
        @foreach ($data as $d)
        <tr>
            <td>{{$d->libelle}}</td>
            <td>{{$d->libelle_appliance}}</td>
            <td>{{$d->date_debut}}</td>
            <td>{{$d->date_fin}}</td>
            <td>{{$d->description}}</td>
            <td>{{$d->analyse_cybersecurite}}</td>
            <td>{{$d->compte_manager}}</td>
            <td>{{$d->ingenier_cybersecurite}}</td>
        </tr>

        @endforeach
    <table>
</body>
</html>
