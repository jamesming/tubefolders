<div  id='main' class="container">
  <div class="row">
	<div class="span1">
			<style>
				.groups{
					width: 83px;
					height: 29px;
					position:relative;
					clear:both;
				}
				.groups > div{
					position:absolute;	
				}				
				.groups > div >div{
					width: 39px;
					height: 27px;
					position:relative;
					float:left !important;
				}
				.groups .move{
					border: 1px solid red;
				}
				.groups .copy{
					border: 1px solid blue;
				}

				
			</style>
			<h4   class='groups '  group_id='1' >
				<div>80s</div>
				<div>
					<div  class='copy ' ></div>
					<div  class='move ' ></div>
				</div>
				</h4>
			<h4   class='groups '  group_id='2' >
				<div>Rock</div>
				<div>
					<div  class='copy ' ></div>
					<div  class='move ' ></div>
				</div>
			</h4>
			<h4   class='groups '  group_id='3' >
				<div>Unsorted</div>
				<div>
					<div  class='copy ' ></div>
					<div  class='move ' ></div>					
				</div>
			</h4>
			<h4   class='groups '  group_id='4' >
				<div>Pop</div>
				<div>
					<div  class='copy ' ></div>
					<div  class='move ' ></div>
				</div>					
			</h4>			
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
