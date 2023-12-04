<div class="container" class="pt-3 pb-3">
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-container" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Brand', (isset($fields['brand']['language'])? $fields['brand']['language'] : array())) }}</td>
						<td>{{ $row->brand}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Model', (isset($fields['model']['language'])? $fields['model']['language'] : array())) }}</td>
						<td>{{ $row->model}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Body', (isset($fields['body']['language'])? $fields['body']['language'] : array())) }}</td>
						<td>{{ $row->body}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Type', (isset($fields['type']['language'])? $fields['type']['language'] : array())) }}</td>
						<td>{{ $row->type}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Fuel', (isset($fields['fuel']['language'])? $fields['fuel']['language'] : array())) }}</td>
						<td>{{ $row->fuel}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Title', (isset($fields['title']['language'])? $fields['title']['language'] : array())) }}</td>
						<td>{{ $row->title}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Slug', (isset($fields['slug']['language'])? $fields['slug']['language'] : array())) }}</td>
						<td>{{ $row->slug}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Transmission', (isset($fields['transmission']['language'])? $fields['transmission']['language'] : array())) }}</td>
						<td>{{ $row->transmission}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Price', (isset($fields['price']['language'])? $fields['price']['language'] : array())) }}</td>
						<td>{{ $row->price}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Short Description', (isset($fields['short_description']['language'])? $fields['short_description']['language'] : array())) }}</td>
						<td>{{ $row->short_description}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Thumbnail', (isset($fields['thumbnail']['language'])? $fields['thumbnail']['language'] : array())) }}</td>
						<td>{!! SiteHelpers::formatRows($row->thumbnail,$fields['thumbnail'],$row ) !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Gallery', (isset($fields['gallery']['language'])? $fields['gallery']['language'] : array())) }}</td>
						<td>{{ $row->gallery}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Created At', (isset($fields['created_at']['language'])? $fields['created_at']['language'] : array())) }}</td>
						<td>{{ $row->created_at}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Updated At', (isset($fields['updated_at']['language'])? $fields['updated_at']['language'] : array())) }}</td>
						<td>{{ $row->updated_at}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Accessories', (isset($fields['accessories']['language'])? $fields['accessories']['language'] : array())) }}</td>
						<td>{{ $row->accessories}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('License Plate Details', (isset($fields['license_plate_details']['language'])? $fields['license_plate_details']['language'] : array())) }}</td>
						<td>{{ $row->license_plate_details}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Financial Details', (isset($fields['financial_details']['language'])? $fields['financial_details']['language'] : array())) }}</td>
						<td>{{ $row->financial_details}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Technical Data', (isset($fields['technical_data']['language'])? $fields['technical_data']['language'] : array())) }}</td>
						<td>{{ $row->technical_data}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Vehicle Data Specific', (isset($fields['vehicle_data_specific']['language'])? $fields['vehicle_data_specific']['language'] : array())) }}</td>
						<td>{{ $row->vehicle_data_specific}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Environmental Data', (isset($fields['environmental_data']['language'])? $fields['environmental_data']['language'] : array())) }}</td>
						<td>{{ $row->environmental_data}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Comments', (isset($fields['comments']['language'])? $fields['comments']['language'] : array())) }}</td>
						<td>{{ $row->comments}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Options', (isset($fields['options']['language'])? $fields['options']['language'] : array())) }}</td>
						<td>{{ $row->options}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Other Information', (isset($fields['other_information']['language'])? $fields['other_information']['language'] : array())) }}</td>
						<td>{{ $row->other_information}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Video Url', (isset($fields['video_url']['language'])? $fields['video_url']['language'] : array())) }}</td>
						<td>{{ $row->video_url}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Map Location', (isset($fields['map_location']['language'])? $fields['map_location']['language'] : array())) }}</td>
						<td>{{ $row->map_location}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Color', (isset($fields['color']['language'])? $fields['color']['language'] : array())) }}</td>
						<td>{{ $row->color}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Drive Type', (isset($fields['drive_type']['language'])? $fields['drive_type']['language'] : array())) }}</td>
						<td>{{ $row->drive_type}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Conditions', (isset($fields['conditions']['language'])? $fields['conditions']['language'] : array())) }}</td>
						<td>{{ $row->conditions}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Year', (isset($fields['year']['language'])? $fields['year']['language'] : array())) }}</td>
						<td>{{ $row->year}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Engine Size', (isset($fields['engine_size']['language'])? $fields['engine_size']['language'] : array())) }}</td>
						<td>{{ $row->engine_size}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Doors', (isset($fields['doors']['language'])? $fields['doors']['language'] : array())) }}</td>
						<td>{{ $row->doors}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cylinders', (isset($fields['cylinders']['language'])? $fields['cylinders']['language'] : array())) }}</td>
						<td>{{ $row->cylinders}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Vin', (isset($fields['vin']['language'])? $fields['vin']['language'] : array())) }}</td>
						<td>{{ $row->vin}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}</td>
						<td>{{ $row->status}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	