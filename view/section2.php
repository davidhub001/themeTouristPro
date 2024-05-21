<section class="ftco-section ftco-destination">
    	<div class="container">
    		<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">Featured</span>
            <h2 class="mb-4"><strong>Featured</strong> Destination</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="destination-slider owl-carousel ftco-animate">
						<?php 
							foreach($data_sect2 as $data => $valeur){
								?>
								<div class="item">
									<div class="destination">
										<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?=$url_image.$valeur["image_name"]?>);">
											<div class="icon d-flex justify-content-center align-items-center">
												<span class="icon-search2"></span>
											</div>
										</a>
										<div class="text p-3">
											<h3><a href="#"><?=$valeur["destination"]?></a></h3>
											<span class="listing"><?=$valeur["description"]?></span>
										</div>
									</div>
								</div>
						<?php
							}
						?>
					</div>
    			</div>
    		</div>
    	</div>
    </section>