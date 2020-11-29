@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
					 Data Gardening
					 <a href="{{url('gardening/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
					</div>
					<div class="card-body">
						<table class="table table-datatable">
							<thead>
								<hr>
								<th>No</th>
								<th>Aksi</th>
								<th>Judul</th>
								<th>Nama</th>
								
					
							</thead>
							<tbody>
								@foreach($list_gardening as $gardening)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
									
										<div class="btn-group">
										<a href="{{url('gardening', $gardening->id)}}" class="btn btn-dark"><span class="fa fa-info"></span></a>
										<a href="{{url('gardening', $gardening->id)}}/edit" class="btn btn-warning"><span class="fa fa-edit"></span></a>
										@include('template.utils.delete', ['url' => url('gardening', $gardening->id)])
									</div>
									</td>
									<td>{{$gardening->judul}}</td>
									<td>{{$gardening->nama}}</td>
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