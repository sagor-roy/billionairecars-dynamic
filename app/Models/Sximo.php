<?php namespace App\Models;

use App\Http\Controllers\controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Sximo extends Model {

	public function __construct() 
	{
		parent::__construct();

   }	

	public static function getRows( $args , $gid = 0 )
	{
       $table = with(new static)->table;
	   $key = with(new static)->primaryKey;
	   
        extract( array_merge( array(
			'page' 		=> '0' ,
			'limit'  	=> '0' ,
			'sort' 		=> '' ,
			'order' 	=> '' ,
			'params' 	=> '' ,
			'flimit' 	=> '' ,
			'fstart' 	=> '' ,
			'global'	=> 1	  
        ), $args ));
		
		$offset = ($page-1) * $limit ;	
		$limitConditional = ($page !=0 && $limit !=0) ? "LIMIT  $offset , $limit" : '';	
		/* Added since version 5.1.7 */
		if($fstart !='' && $flimit != '')
			$limitConditional = "LIMIT  $fstart , $flimit" ;	
		/* End Added since version 5.1.7 */

		$orderConditional = ($sort !='' && $order !='') ?  " ORDER BY {$sort} {$order} " : '';

		// Update permission global / own access new ver 1.1
		$table = with(new static)->table;
		if($global == 0 )
				$params .= " AND {$table}.entry_by ='".$gid."'"; 	
		// End Update permission global / own access new ver 1.1			
        
		$rows = array();
	    $result = \DB::select( self::querySelect() . self::queryWhere(). " 
				{$params} ". self::queryGroup() ." {$orderConditional}  {$limitConditional} ");
		
		$total = \DB::select( "SELECT COUNT(*) AS total FROM ".$table." " . self::queryWhere(). " 
				{$params} ". self::queryGroup() );
		$total = (count($total) != 0 ? $total[0]->total : 0 );

		return $results = array('rows'=> $result , 'total' => $total);	


	
	}	

	public static function getRow( $id )
	{
       $table = with(new static)->table;
	   $key = with(new static)->primaryKey;

		$result = \DB::select( 
				self::querySelect() . 
				self::queryWhere().
				" AND ".$table.".".$key." = '{$id}' ". 
				self::queryGroup()
			);	
		if(count($result) <= 0){
			$result = array();		
		} else {

			$result = $result[0];
		}
		return $result;		
	}	

	public static function prevNext( $id ){

       $table = with(new static)->table;
	   $key = with(new static)->primaryKey;

	   $prev = '';
	   $next = '';

		$Qnext = \DB::select( 
			self::querySelect() . 
			self::queryWhere().
			" AND ".$table.".".$key." > '{$id}'  ". 
			self::queryGroup().' LIMIT 1'
		);	


		if(count($Qnext)>=1)   $next = $Qnext[0]->{$key};
		
		$Qprev  = \DB::select( 
			self::querySelect() . 
			self::queryWhere().
			" AND ".$table.".".$key." < '{$id}'". 
			self::queryGroup()." ORDER BY ".$table.".".$key." DESC LIMIT 1"
		);	
		if(count($Qprev)>=1)  $prev = $Qprev[0]->{$key};

		return array('prev'=>$prev , 'next'=> $next);	
	}

	public  function insertRow( $data , $id)
	{
       $table = with(new static)->table;
	   $key = with(new static)->primaryKey;
	    if($id == NULL )
        {
			
            // Insert Here 
			if(isset($data['created_at'])) $data['created_at'] = date("Y-m-d H:i:s");	
			if(isset($data['updated_at'])) $data['updated_at'] = date("Y-m-d H:i:s");	
			 $id = \DB::table( $table)->insertGetId($data);				
            
        } else {
            // Update here 
			// update created field if any
			if(isset($data['created_at'])) unset($data['created_at']);	
			if(isset($data['updated_at'])) $data['updated_at'] = date("Y-m-d H:i:s");			
			 \DB::table($table)->where($key,$id)->update($data);    
        }    
        return $id;    
	}			

	static function makeInfo( $id )
	{	
		$row =  \DB::table('tb_module')->where('module_name', $id)->get();
		$data = array();
		foreach($row as $r)
		{
			$langs = (json_decode($r->module_lang,true));
			$data['id']		= $r->module_id; 
			$data['title'] 	= \SiteHelpers::infoLang($r->module_title,$langs,'title'); 
			$data['note'] 	= \SiteHelpers::infoLang($r->module_note,$langs,'note'); 
			$data['table'] 	= $r->module_db; 
			$data['key'] 	= $r->module_db_key;
			$data['type'] 	= $r->module_type;
			$data['config'] = \SiteHelpers::CF_decode_json($r->module_config);
			$field = array();	
			foreach($data['config']['grid'] as $fs)
			{
				foreach($fs as $f)
					$field[] = $fs['field']; 	
									
			}
			$data['field'] = $field;	
			$data['setting'] = array(
				'gridtype'		=> (isset($data['config']['setting']['gridtype']) ? $data['config']['setting']['gridtype'] : 'native'  ),
				'orderby'		=> (isset($data['config']['setting']['orderby']) ? $data['config']['setting']['orderby'] : $r->module_db_key),
				'ordertype'		=> (isset($data['config']['setting']['ordertype']) ? $data['config']['setting']['ordertype'] : 'asc'  ),
				'perpage'		=> (isset($data['config']['setting']['perpage']) ? $data['config']['setting']['perpage'] : '10'  ),
				'frozen'		=> (isset($data['config']['setting']['frozen']) ? $data['config']['setting']['frozen'] : 'false'  ),
	            'form-method'   => (isset($data['config']['setting']['form-method'])  ? $data['config']['setting']['form-method'] : 'native'  ),
	            'view-method'   => (isset($data['config']['setting']['view-method'])  ? $data['config']['setting']['view-method'] : 'native'  ),
	            'inline'        => (isset($data['config']['setting']['inline'])  ? $data['config']['setting']['inline'] : 'false'  ),				
				
			);			
					
		}
		return $data;
			
	
	} 

	function permission( $id , $gid  )
	{
		$row = \DB::table('tb_groups_access')->where('module_id', $id)->where('group_id', $gid )->get();
		
		if(count($row) >= 1)
		{
			$row = $row[0];
			if($row->access_data !='')
			{
				$data = json_decode($row->access_data,true);
			} else {
				$data = array();
			}	
			return $data;		
			
		} else {
			return false;
		}			
	
	}
    static function getComboselect( $params , $limit =null, $parent = null)
    {   
        $limit = explode(':',$limit);
        $parent = explode(':',$parent);

        if(count($limit) >=3)
        {
            $table = $params[0]; 
            $condition = $limit[0]." `".$limit[1]."` ".$limit[2]." '".$limit[3]."' "; 
            if(count($parent)>=2 )
            {
            	$row =  \DB::table($table)->where($parent[0],$parent[1])->get();
            	 $row =  \DB::select( "SELECT * FROM ".$table." ".$condition ." AND ".$parent[0]." = '".$parent[1]."'");
            } else  {
	           $row =  \DB::select( "SELECT * FROM ".$table." ".$condition);
            }        
        }else{

            $table = $params[0]; 
            if(count($parent)>=2 )
            {
            	$row =  \DB::table($table)->where($parent[0],$parent[1])->get();
            } else  {
	            $row =  \DB::table($table)->get();
            }	           
        }

        return $row;
    }	

	public static function getColoumnInfo( $result )
	{
		$pdo = \DB::getPdo();
		$res = $pdo->query($result);
		$i =0;	$coll=array();	
		while ($i < $res->columnCount()) 
		{
			$info = $res->getColumnMeta($i);			
			$coll[] = $info;
			$i++;
		}
		return $coll;	
	
	}	


	function isAccess( $id , $task , $gid )
	{
		
		$row = \DB::table('tb_groups_access')->where('module_id', $id)->where('group_id', $gid )->get();
		
		if(count($row) >= 1)
		{
			$row = $row[0];
			if($row->access_data !='')
			{
				$data = json_decode($row->access_data,true);
				return $data[$task];	
			} else {
				return  0;
			}	

				
			
		} else {
			return 0;
		}			
	
	}

	function validAccess( $id , $gid = 0)
	{
		$row = \DB::table('tb_groups_access')->where('module_id', $id)->where('group_id', $gid )->get();
		
		if(count($row) >= 1)
		{
			$row = $row[0];
			if($row->access_data !='')
			{
				$data = json_decode($row->access_data,true);
			} else {
				$data = array();
			}	
			return $data;		
			
		} else {
			return false;
		}			
	
	}	

	static function getColumnTable( $table )
	{	  
        $columns = array();
	    foreach(\DB::select("SHOW COLUMNS FROM $table") as $column)
        {
           //print_r($column);
		    $columns[$column->Field] = '';
        }
	  

        return $columns;
	}	

	static function getTableList( $db ) 
	{
	 	$t = array(); 
		$dbname = 'Tables_in_'.$db ; 
		foreach(\DB::select("SHOW TABLES FROM {$db}") as $table)
        {
		    $t[$table->$dbname] = $table->$dbname;
        }	
		return $t;
	}	
	
	static function getTableField( $table ) 
	{
        $columns = array();
	    foreach(\DB::select("SHOW COLUMNS FROM $table") as $column)
		    $columns[$column->Field] = $column->Field;
        return $columns;
	}	

	public function logs( $request , $id )
	{
		 $key = with(new static)->primaryKey;
		if($request->input( $key)  =='')
		{
			$note = 'New Data with ID '.$id.' Has been Inserted !';
		} 
		else {
			$note = 'Data with ID '.$id.' Has been Updated !';
		}
		$data = array(
			'module'	=> $request->segment(1),
			'task'		=> $request->segment(2),
			'user_id'	=> \Session::get('uid'),
			'ipaddress'	=> $request->getClientIp(),
			'note'		=> $note
		);
		\DB::table('tb_logs')->insert($data);
	}

	//public function wigets( $users )


	public  static function updateDataRow( $table , $key , $data ,  $id = null  )
	{

	    if($id == null )
        {
			 $id = DB::table( $table)->insertGetId($data);				
            
        } else {
            // Update here 	
			 DB::table($table)->where($key,$id)->update($data);    
        }    
        return $id;    
	}
	public  static function deleteDataRow( $table , $key , $data  )
	{

	     DB::table($table)->whereIn($key,$data)->delete();       
	}
}
