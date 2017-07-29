<!DOCTYPE html>
<html>
<head>
	<title>Controller</title>
</head>
<body>
		@foreach($ortu as $data)<center><hr>
			Nama : <b>{{ $data->nama}}</b><br>
			Orangtua ID : <b>{{ $data->orangtua_id}}</b><br>
			Umur : <b>{{ $data->umur}}</b><br>
			Alamat : <b>{{ $data->alamat}}</b><br><hr></center>
		@endforeach
</body>
</html>