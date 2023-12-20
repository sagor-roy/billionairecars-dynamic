<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class adminfaqs extends Sximo  {
	
	protected $table = 'faq';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT faq.* FROM faq ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE faq.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
