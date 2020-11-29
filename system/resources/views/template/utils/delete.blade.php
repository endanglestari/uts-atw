<form action="{{$url}}" method="post" class="form-inline" onsubmit="return confirm('YAKIN APAKAH ANDA INGIN MENGHAPUS DATA INI ? :)')">
	@csrf
	@method("delete")
	<button class="btn btn-danger"><span class="fa fa-trash"></span></button>
	
</form>