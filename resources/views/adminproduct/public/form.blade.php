

		 {!! Form::open(array('url'=>'adminproduct', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Product</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Title" class=" control-label col-md-4 text-left"> Title </label>
										<div class="col-md-6">
										  <input  type='text' name='title' id='title' value='{{ $row['title'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Title (Spanish)" class=" control-label col-md-4 text-left"> Title (Spanish) </label>
										<div class="col-md-6">
										  <input  type='text' name='title_nl' id='title_nl' value='{{ $row['title_nl'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Slug" class=" control-label col-md-4 text-left"> Slug </label>
										<div class="col-md-6">
										  <input  type='text' name='slug' id='slug' value='{{ $row['slug'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Price" class=" control-label col-md-4 text-left"> Price </label>
										<div class="col-md-6">
										  <input  type='text' name='price' id='price' value='{{ $row['price'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Brand" class=" control-label col-md-4 text-left"> Brand </label>
										<div class="col-md-6">
										  <select name='brand' rows='5' id='brand' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Model" class=" control-label col-md-4 text-left"> Model </label>
										<div class="col-md-6">
										  <input  type='text' name='model' id='model' value='{{ $row['model'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Type" class=" control-label col-md-4 text-left"> Type </label>
										<div class="col-md-6">
										  
					<?php $type = explode(',',$row['type']);
					$type_opt = array( 'Premium' => 'Premium' ,  'Commercial' => 'Commercial' , ); ?>
					<select name='type' rows='5'   class='select2 '  > 
						<?php 
						foreach($type_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['type'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Color" class=" control-label col-md-4 text-left"> Color </label>
										<div class="col-md-6">
										  <input  type='text' name='color' id='color' value='{{ $row['color'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Drive Type" class=" control-label col-md-4 text-left"> Drive Type </label>
										<div class="col-md-6">
										  <input  type='text' name='drive_type' id='drive_type' value='{{ $row['drive_type'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Conditions" class=" control-label col-md-4 text-left"> Conditions </label>
										<div class="col-md-6">
										  <input  type='text' name='conditions' id='conditions' value='{{ $row['conditions'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Transmission" class=" control-label col-md-4 text-left"> Transmission </label>
										<div class="col-md-6">
										  
					<?php $transmission = explode(',',$row['transmission']);
					$transmission_opt = array( 'Automaat' => 'Automaat' ,  'Handgeschakeld' => 'Handgeschakeld' , ); ?>
					<select name='transmission' rows='5'   class='select2 '  > 
						<?php 
						foreach($transmission_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['transmission'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Year" class=" control-label col-md-4 text-left"> Year </label>
										<div class="col-md-6">
										  <input  type='text' name='year' id='year' value='{{ $row['year'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Fuel" class=" control-label col-md-4 text-left"> Fuel </label>
										<div class="col-md-6">
										  
					<?php $fuel = explode(',',$row['fuel']);
					$fuel_opt = array( 'Diesel' => 'Diesel' ,  'Petrol' => 'Petrol' , ); ?>
					<select name='fuel' rows='5'   class='select2 '  > 
						<?php 
						foreach($fuel_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['fuel'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Engine Size" class=" control-label col-md-4 text-left"> Engine Size </label>
										<div class="col-md-6">
										  <input  type='text' name='engine_size' id='engine_size' value='{{ $row['engine_size'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cylinders" class=" control-label col-md-4 text-left"> Cylinders </label>
										<div class="col-md-6">
										  <input  type='text' name='cylinders' id='cylinders' value='{{ $row['cylinders'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Doors" class=" control-label col-md-4 text-left"> Doors </label>
										<div class="col-md-6">
										  <input  type='text' name='doors' id='doors' value='{{ $row['doors'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Vin" class=" control-label col-md-4 text-left"> Vin </label>
										<div class="col-md-6">
										  <input  type='text' name='vin' id='vin' value='{{ $row['vin'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Short Description" class=" control-label col-md-4 text-left"> Short Description </label>
										<div class="col-md-6">
										  <textarea name='short_description' rows='5' id='short_description' class='form-control form-control-sm '  
				           >{{ $row['short_description'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Short Description (Spanish)" class=" control-label col-md-4 text-left"> Short Description (Spanish) </label>
										<div class="col-md-6">
										  <textarea name='short_description_nl' rows='5' id='short_description_nl' class='form-control form-control-sm '  
				           >{{ $row['short_description_nl'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Thumbnail" class=" control-label col-md-4 text-left"> Thumbnail </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="thumbnail" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="thumbnail-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["thumbnail"],"/uploads/product/") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Gallery" class=" control-label col-md-4 text-left"> Gallery <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  
					<a href="javascript:void(0)" class="btn btn-xs btn-primary pull-right" onclick="addMoreFiles('gallery')"><i class="fa fa-plus"></i></a>
					<div class="galleryUpl multipleUpl">	
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="gallery[]" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>		
					</div>
					<ul class="uploadedLists " >
					<?php $cr= 0; 
					$row['gallery'] = explode(",",$row['gallery']);
					?>
					@foreach($row['gallery'] as $files)
						@if(file_exists('./uploads/product/gallery/'.$files) && $files !='')
						<li id="cr-<?php echo $cr;?>" class="">							
							<a href="{{ url('/uploads/product/gallery//'.$files) }}" target="_blank" >
							{!! SiteHelpers::showUploadedFile( $files ,"/uploads/images/",100) !!}
							</a> 
							<span class="pull-right removeMultiFiles" rel="cr-<?php echo $cr;?>" url="/uploads/product/gallery/{{$files}}">
							<i class="fa fa-trash-o  btn btn-xs btn-danger"></i></span>
							<input type="hidden" name="currgallery[]" value="{{ $files }}"/>
							<?php ++$cr;?>
						</li>
						@endif
					
					@endforeach
					</ul>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Accessories" class=" control-label col-md-4 text-left"> Accessories </label>
										<div class="col-md-6">
										  <textarea name='accessories' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['accessories'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Accessories (Spanish)" class=" control-label col-md-4 text-left"> Accessories (Spanish) </label>
										<div class="col-md-6">
										  <textarea name='accessories_nl' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['accessories_nl'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="License Plate Details" class=" control-label col-md-4 text-left"> License Plate Details </label>
										<div class="col-md-6">
										  <textarea name='license_plate_details' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['license_plate_details'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="License Plate Details (Spanish)" class=" control-label col-md-4 text-left"> License Plate Details (Spanish) </label>
										<div class="col-md-6">
										  <textarea name='license_plate_details_nl' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['license_plate_details_nl'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Financial Details" class=" control-label col-md-4 text-left"> Financial Details </label>
										<div class="col-md-6">
										  <textarea name='financial_details' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['financial_details'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Financial Details (Spanish)" class=" control-label col-md-4 text-left"> Financial Details (Spanish) </label>
										<div class="col-md-6">
										  <textarea name='financial_details_nl' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['financial_details_nl'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Technical Data" class=" control-label col-md-4 text-left"> Technical Data </label>
										<div class="col-md-6">
										  <textarea name='technical_data' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['technical_data'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Technical Data (Spanish)" class=" control-label col-md-4 text-left"> Technical Data (Spanish) </label>
										<div class="col-md-6">
										  <textarea name='technical_data_nl' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['technical_data_nl'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Vehicle Data Specific" class=" control-label col-md-4 text-left"> Vehicle Data Specific </label>
										<div class="col-md-6">
										  <textarea name='vehicle_data_specific' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['vehicle_data_specific'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Vehicle Data Specific (Spanish)" class=" control-label col-md-4 text-left"> Vehicle Data Specific (Spanish) </label>
										<div class="col-md-6">
										  <textarea name='vehicle_data_specific_nl' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['vehicle_data_specific_nl'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Environmental Data" class=" control-label col-md-4 text-left"> Environmental Data </label>
										<div class="col-md-6">
										  <textarea name='environmental_data' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['environmental_data'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Environmental Data (Spanish)" class=" control-label col-md-4 text-left"> Environmental Data (Spanish) </label>
										<div class="col-md-6">
										  <textarea name='environmental_data_nl' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['environmental_data_nl'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Comments" class=" control-label col-md-4 text-left"> Comments </label>
										<div class="col-md-6">
										  <textarea name='comments' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['comments'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Comments (Spanish)" class=" control-label col-md-4 text-left"> Comments (Spanish) </label>
										<div class="col-md-6">
										  <textarea name='comments_nl' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['comments_nl'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Options" class=" control-label col-md-4 text-left"> Options </label>
										<div class="col-md-6">
										  <textarea name='options' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['options'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Options (Spanish)" class=" control-label col-md-4 text-left"> Options (Spanish) </label>
										<div class="col-md-6">
										  <textarea name='options_nl' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['options_nl'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Other Information" class=" control-label col-md-4 text-left"> Other Information </label>
										<div class="col-md-6">
										  <textarea name='other_information' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['other_information'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Other Information (Spanish)" class=" control-label col-md-4 text-left"> Other Information (Spanish) </label>
										<div class="col-md-6">
										  <textarea name='other_information_nl' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['other_information_nl'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Video Url" class=" control-label col-md-4 text-left"> Video Url </label>
										<div class="col-md-6">
										  <input  type='text' name='video_url' id='video_url' value='{{ $row['video_url'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Map Location" class=" control-label col-md-4 text-left"> Map Location </label>
										<div class="col-md-6">
										  <input  type='text' name='map_location' id='map_location' value='{{ $row['map_location'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Status" class=" control-label col-md-4 text-left"> Status </label>
										<div class="col-md-6">
										  
					<?php $status = explode(',',$row['status']);
					$status_opt = array( '1' => 'Publish' ,  '0' => 'Unpublish' , ); ?>
					<select name='status' rows='5'   class='select2 '  > 
						<?php 
						foreach($status_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['status'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset></div>

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#brand").jCombo("{!! url('adminproduct/comboselect?filter=brands:id:brand_name') !!}",
		{  selected_value : '{{ $row["brand"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
