<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">AmiiboSeries</th>
            <th scope="col">Character</th>
            <th scope="col">GameSeries</th>
          </tr>
        </thead>
        <tbody>
          <!--for each para los usuarios que vienen del controller-->
          @foreach ($amiibos as $amiibo)
          <tr>
            <th scope="row">{{$amiibo['amiiboSeries']}}</th>
            <td>{{$amiibo['character']}}</td>
            <td>{{$amiibo['gameSeries']}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>
