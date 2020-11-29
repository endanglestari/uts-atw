@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
					 Data Kategori
					 <a href="{{url('kategori/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data Kategori</a>
					</div>
					<div class="card-body">
						<table class="table table-datatable">
							<thead>
								<hr>
								<th>No</th>
								<th>Aksi</th>
								<th>Jenis</th>
								<th>Nama</th>
								<th>stok</th>
							</thead>
							<tbody>
								@foreach($list_kategori as $kategori)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
										<a href="{{url('admin/kategori', $kategori->id)}}" class="btn btn-dark"><span class="fa fa-info"></span></a>
										<a href="{{url('admin/kategori', $kategori->id)}}/edit" class="btn btn-warning"><span class="fa fa-edit"></span></a>
										@include('template.utils.delete', ['url' => url('admin/kategori', $kategori->id)])
									</div>
									</td>
									<td>{{$kategori->jenis}}</td>
									<td>{{$kategori->nama}}</td>
									<td>{{$kategori->stok}}</td>	
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>	
	</div>


@endsection