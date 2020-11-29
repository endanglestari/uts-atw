<?php 

namespace App\Models;
 
class Gardening extends Model{
	protected $table = 'gardening';

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}
}