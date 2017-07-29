<!DOCTYPE html>
<html>
<head>
	<title>Controller</title>
</head>
<body>
		@foreach($ortu as $data)<hr>
			Nama ibu  : <b>{{ $data->nama_ibu}}</b><br>
			Nama ayah : <b>{{ $data->nama_ayah}}</b><br>
			Umur ibu  : <b>{{ $data->umur_ibu}}</b><br>
			Umur ayah : <b>{{ $data->umur_ayah}}</b><br>
			Nama Anak :
			@foreach($data->anak as $key)
				<li>{{$key->nama}}</li>
			@endforeach
			</hr>
		@endforeach
</body>
</html>