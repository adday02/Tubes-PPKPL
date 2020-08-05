<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Data Covid Indonesia Terupdate</title>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<h2> Data Covid Indonesia Terupdate </h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Jumlah positif</th>
                <th>Jumlah sembuh</th>
                <th>Jumlah meninggal</th>
            </tr>
        </thead>	
        <tbody>
             @foreach ($data as $covid)
                <tr>
                	<td>{{$covid['list_data']['']}}</td>
                	<td>{{$covid['list_data']['jumlah_kasus']}}</td>
                	<td>{{$covid['list_data']['jumlah_sembuh']}}</td>
                	<td>{{$covid['list_data']['jumlah_meninggal']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
	</body>

</html>