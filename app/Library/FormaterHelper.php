<?php 
/*

	This is general helpers for your applications 
	any library or helper should be write here

*/

use App\Models\Brand;

class FormaterHelper {
	public static function brandName( $id ) {
		return Brand::find($id)->brand_name;
	}
}
