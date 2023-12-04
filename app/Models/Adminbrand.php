<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class adminbrand extends Sximo  {
	
	protected $table = 'brands';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT brands.* FROM brands ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE brands.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
