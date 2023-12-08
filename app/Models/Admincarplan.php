<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class admincarplan extends Sximo  {
	
	protected $table = 'blog';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT blog.* FROM blog  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE blog.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
