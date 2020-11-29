@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
					 Edit Data Kategori
					</div>
					<div class="card-body">
						<form action="{{url('kategori', $kategori->id)}}" method="post">
							@csrf
							@method("PUT")
						<div class="form-group">
							<label for="" class="conrol-label">Jenis</label>
							<input type="text" class="form-control" name="jenis" value="{{$kategori->jenis}}">
						</div>
						<div class="form-group">
							<label for="" class="conrol-label">Nama</label>
							<input type="text" class="form-control" name="nama" value="{{$kategori->nama}}">
						</div>
						<div class="form-group">
							<label for="" class="conrol-label">Stok</label>
							<input type="text" class="form-control" name="stok" value="{{$kategori->stok}}">
						</div>
						<button class="btn btn-dark float-right"><span class="fa fa-save"></span>  Save </button>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>

@endsection