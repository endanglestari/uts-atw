@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
					 Tambah Data Gardening
					</div>
					<div class="card-body">
						<form action="{{url('gardening')}}" method="post">
							@csrf
						<div class="form-group">
							<label for="" class="conrol-label">Judul</label>
							<input type="text" class="form-control" name="judul">
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
								<label for="" class="conrol-label">Nama</label>
								<input type="text" class="form-control" name="nama">
								</div>
							</div>
						
					</div>
						<div class="form-group">
							<label for="" class="conrol-label">Deskripsi</label>
							<textarea name="deskripsi" class="form-control"></textarea>
						</div>
						<button class="btn btn-dark float-right"><span class="mdi mdi-content-save-all"></span>  Save </button>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>

@endsection