<?php 
/*

	This is general helpers for your applications 
	any library or helper should be write here

*/
class FormaterHelper {
	public static function test( $status ) {
		if( $status == 'Pending' )
			return '<button class="btn btn-warning" disabled>'.$status.'</button>';
		elseif( $status == 'Delivered' )
			return '<span class="btn btn-primary" disabled>'.$status.'</span>';
		else
			return '<span class="btn btn-danger" disabled>'.$status.'</span>';
	}
}
