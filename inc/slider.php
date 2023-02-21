<div class="header_bottom">
		<div class="header_bottom_left">
			<h1><?php $search_query ?></h1>
			<div class="section group">
				<?php
				$search_query = '';
				if(isset($_POST['search'])) {
					$search_query = $_POST['valueToSearch'];
				}
				$getProducts = $pd -> getProductsWithFilter($search_query);
				if ($getProducts) {
					while ($result = $getProducts->fetch_assoc()) {
						?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proId=<?php echo $result['productId']; ?>"> <img style="height: 150px; width: auto;" src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2 style="font-size: 15px;"><?php echo $result['catName'];?></h2>
						<p><?php echo $result['productName']; ?></p>
						<div class="button"><span><a href="details.php?proId=<?php echo $result['productId']; ?>">Add to cart</a></span></div>
				   </div>
			   </div>					
<?php
                    }
                } ?>
			</div>
			
		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<li><img src="images/1.jpg" alt=""/></li>
						<li><img src="images/2.jpg" alt=""/></li>
						<li><img src="images/3.jpg" alt=""/></li>
						<li><img src="images/4.jpg" alt=""/></li>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
  </div>