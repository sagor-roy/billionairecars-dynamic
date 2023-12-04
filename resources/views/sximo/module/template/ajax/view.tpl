@if($setting['view-method'] =='native')
	<div class="toolbar-nav">
		<div class="row">
			<div class="col-md-6" >
				@if($prevnext['prev'] != '')
				<a href="{{ url('{class}/'.$prevnext['prev'].'?return='.$return ) }}" class="tips btn btn-default btn-sm" onclick="ajaxViewDetail('#{class}',this.href); return false; "><i class="fa fa-arrow-left"></i>  </a>	
				@else
				<a href="#" class="tips btn btn-default  btn-sm "> <i class="fa fa-arrow-left"></i>  </a>
				@endif
				
				@if($prevnext['next'] != '')
				<a href="{{ url('{class}/'.$prevnext['next'].'?return='.$return ) }}" class="tips btn btn-default  btn-sm " onclick="ajaxViewDetail('#{class}',this.href); return false; "> <i class="fa fa-arrow-right"></i>  </a>
				@else
				<a href="#" class="tips btn btn-default  btn-sm "> <i class="fa fa-arrow-right"></i>  </a>
				@endif

			</div>
			<div class="col-md-6 text-right pull-right" >
		   			

				<a href="javascript://ajax" onclick="ajaxViewClose('#{{ $pageModule }}')" class="tips btn btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>					
			</div>	

			
		</div>
	</div>	
		<div class="p-5">
@endif	

		<table class="table  table-bordered" >
			<tbody>	
				{form_view}
			</tbody>	
		</table>  
			
		 {masterdetailview}	
		 
@if($setting['form-method'] =='native')
	</div>	

@endif		
