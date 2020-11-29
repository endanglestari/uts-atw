@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
					 Detail Data User
					</div>
					<div class="card-body">
						<h3>{{$user->nama}}</h3>
						<hr>
						<h4>
							{{"@".$user->username}}
						</h4> 
						<h4>
							Email : {{$user->email}}
						</h4> 
						<h4>
							No Headphone : {{$user->detail->no_headphone}}
						</h4> 
					</div>
					</div>
				</div>
			</div>
		</div>	
	</div>


@endsection