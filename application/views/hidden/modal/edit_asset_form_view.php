﻿<div   id='edit_asset_modal_box'   style='display:none'  >
	<div  class='form_asset_container span7' >
		<form  class="form-horizontal">
			
			<h2>Video Upload
			</h2>
			<div>
				<div  class=' oh' >
					
					
					  <div class="control-group">
					    <label class="control-label" for="asset_name">Name</label>
					    <div class="controls">
					      <input type="text" class="asset_name input-medium" placeholder="Name" >
					    </div>
					  </div>		
					  
					  
					  
					  <div class="control-group"  <?php echo ( $this->session->userdata['user_id'] == 1  ? "   style='display:none'  " : "" );   ?>>
					    <label class="control-label" for="asset_client">Youtube URL</label>
					    <div class="controls">
					      <input type="text" class="asset_youtube_url input-medium" placeholder="Youtube URL" >
					    </div>
					  </div>						  		
					  
					  <div class="control-group"  <?php echo ( $this->session->userdata['user_id'] == 1  ? " style='display:none'" : "   style='display:none'  " );   ?>>
					    <label class="control-label" for="asset_client">Client</label>
					    <div class="controls">
					      <input type="text" class="asset_client input-medium" placeholder="Client" >
					    </div>
					  </div>						  
					  
					  <div class="control-group"  >
					    <label class="control-label" for="asset_description">Description</label>
					    <div class="controls">
					    	<textarea class="asset_description input-medium" placeholder="Description" ></textarea>
					    </div>
					  </div>		  
					  
					
				</div>
				
				
				<div  class=' oh' <?php echo ( $this->session->userdata['user_id'] == 1  ? "" : "   style='display:none'  " );   ?>>
					
					<div  class='img_wrapper ' >
						<img  src="" class="img-polaroid thumb_img">
					</div>
					<div class="input-append">
					  <input class="span2 video_input_field" size="16" type="text"><button class="btn video_uplr" type="button">Go!</button>
					</div>			
					
				</div>				
			</div>
			
			<div  class='submit_wrapper '   >
				<button class='btn btn-primary submit_asset_form'  type="button" >Submit</button>
			</div>

		</form>
		
		<form   style='display:none'   class='uploadVideo'  target='iframe_upload'  action='<?php echo base_url()    ?>ajax/upload'  enctype='multipart/form-data'  method='POST'>
			<input name="filename"  class='filename ' type="file" value=""   >
			<input name="asset_id" type="text" value="">
			<input name="target_name" type="text" value="">
			<input name="target_folder" type="text" value="">
			<input type="submit" value="submit"  >

		</form>		
		
	</div>
</div>