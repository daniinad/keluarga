@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Anak</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Anak
		<div class="panel-title pull pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div>
			</div>

			<div class="panel-body">
			<form action="{{route('anak.update',$anak->id)}}" method="POST">
			<input type="hidden" name="_method" value="PUT">	
			<input type="hidden" name="_token" value="{{csrf_token() }}">

					<div class="form-group">
						<label class="control-lable">Nama</label>
						<input type="text" name="a" class="form-control" value="{{$anak->nama}}" readonly>
					</div>
					<div class="form-group">
						<label class="control-lable">Nama Orangtua</label>
						<input type="text" name="b" class="form-control" readonly="" value="{{$anak->orangtua->nama_ibu}} dan {{$anak->orangtua->nama_ayah}}" >
					<div class="form-group">
						<label class="control-lable">Umur</label>
						<input type="number" name="c" class="form-control" value="{{$anak->umur}}" readonly>
					</div>
					<div class="form-group">
						<label class="control-lable">alamat</label>
						<textarea class="form-control" name="d" rows="10" readonly>{{$anak->alamat}}</textarea>
					</div>
					
				</form>
			</div>
			</div>
@endsection