@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-4">
				<div class="card">
					<div class="card-header">
					 Edit Data Flowers
					</div>
					<div class="card-body">
						<form action="{{url('gardening', $gardening->id)}}" method="post">
							@csrf
							@method("PUT")
						<div class="form-group">
							<label for="" class="conrol-label">Judul</label>
							<input type="text" class="form-control" name="judul" value="{{$gardening->judul}}">
						</div>
						<div class="form-group">
							<label for="" class="conrol-label">Nama</label>
							<input type="text" class="form-control" name="nama" value="{{$gardening->nama}}">
						</div>
						<div class="form-group">
							<label for="" class="conrol-label">Deskripsi</label>
							<textarea name="deskripsi" class="form-control">{{$gardening->deskripsi}}</textarea>
						</div>
						<button class="btn btn-dark float-right"><span class="mdi mdi-content-save-all"></span>  Save </button>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>

@endsection