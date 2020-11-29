@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
					 Detail Nama Kategori
					</div>
					<div class="card-body">
						<h3>{{$kategori->jenis}}</h3>
					</div>
					<div class="card-body">
						<h3>{{$kategori->nama}}</h3>
					</div>
					<div class="card-body">
						<h3>{{$kategori->stok}}</h3>
					</div>
				</div>
			</div>
		</div>	
	</div>

@endsection