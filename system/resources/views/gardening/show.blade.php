@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
					 Detail Flowers
					</div>
					<div class="card-body">
						<h3>{{$gardening->judul}}</h3>
						<hr>
						<h4>
							nama: {{$gardening->nama}}
						</h4> <br>
						<p>
							{!! nl2br($gardening->deskripsi) !!}
						</p>
					</div>
				</div>
			</div>
		</div>	
	</div>

@endsection