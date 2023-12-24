<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class adminsocialmedia extends Sximo  {
	
	protected $table = 'social_media';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT social_media.* FROM social_media  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE social_media.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
