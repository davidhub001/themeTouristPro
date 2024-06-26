<div class="hero-wrap js-fullheight" style="background-image: url('<?=$url_image.'images/bg_1.jpg'?>');">
<div class="overlay"></div>
<div class="container">
  <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
    <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
      <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?=get_option('text_header_content')?></h1>
      <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?=get_option('text_header_content_desc')?></p>
      <div class="block-17 my-4">
        <form action="" method="post" class="d-block d-flex">
          <div class="fields d-block d-flex">
            <div class="textfield-search one-third">
                <input type="text" class="form-control" placeholder="Ex: food, service, hotel">
            </div>
            <div class="select-wrap one-third">
              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
              <select name="" id="" class="form-control" placeholder="Keyword search">
                <option value="">Where</option>
              </select>
            </div>
          </div>
          <input type="submit" class="search-submit btn btn-primary" value="Search">  
        </form>
      </div>
      <p><?=get_option('text_header_content_desc2')?></p>
      <p class="browse d-md-flex">
          <span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-fork"></i>Restaurant</a></span>
          <span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-hotel"></i>Hotel</a></span> 
          <span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-meeting-point"></i>Places</a></span> 
          <span class="d-flex justify-content-md-center align-items-md-	center"><a href="#"><i class="flaticon-shopping-bag"></i>Shopping</a></span>
      </p>
    </div>
  </div>
</div>
</div>
