<div  id='main' class="container">
  <div class="row">
	<div class="span1">
			<h4   class='groups '   group_id='14' >80s</h4>
			<h4   class='groups '  group_id='34' >Rock</h4>
			<h4   class='groups '  group_id='54' >Classics</h4>
			<h4   class='groups '  group_id='63' >Broadway</h4>			
	</div>      	
	<div class="span2">
		<div   id='categories' class="accordion" >
		</div>
		<div  id='addNewCategory'  href='#edit_category_modal_box'  category_id='-1'><a class="btn btn-small" href="#"><i class="icon-plus-sign"></i>&nbsp;Add new Category </a>
		</div>
	</div>
	<div   id='thumb-collection' class="span9 fixedRightBody">
		<div>
			<h2></h2>
			<span  href='#edit_category_modal_box'  class='editCategoryTitle ' category_idx='' category_id=''>
				<a class="btn btn-small" href="#">
					Edit Category&nbsp;&nbsp;<i class="icon-edit"></i>
				</a>
			</span>
			<span  class='playAllInCategory ' <?php echo ( $this->session->userdata['user_id'] == 1  ? "   style='display:none'  " : "" );   ?>>
				<!-- <a class="btn btn-small" href="#"> -->
					Play Category&nbsp;&nbsp;<i class=" icon-play"></i>
				<!-- </a> -->
			</span>			
		</div>
		<div   style='clear:both;height:0px'  ></div>
		<ul  class=' assets_ul'   id='thumb-collection-ul' >
		</ul>
		<ul>
			<li href='#edit_asset_modal_box' id='addAsset' >Click to Add Asset</li>
		</ul>
	</div><?php $this->load->view($youtube); ?>	
  </div>
</div>
