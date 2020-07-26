<?php
   require('/wp-blog-header.php');  // Wordpress need to recongnise your modal file actually loads most the WordPress functionality that you're used to using.
   $post_id = $_GET['ID'];
   $queried_post = get_post($post_id);
   $queried_object = get_queried_object();
?>

<div class="modal-dialog">
           <div class="modal-content">
                <div class="modal-header">
                   <h4 class="modal-title" id="myModalLabel"><?php echo $queried_post->post_title; ?></h4>
                   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">X</span><span class="sr-only">Close</span></button>
                 </div>
                 <div class="modal-body">
                       <?php
                       echo $queried_post->post_content;
                       ?>
                 </div>
              </div>
</div>


 <!--	product details modal  -->
	   <!-- The Modal -->
  <div class="modal fade" id="myModal" data-id="<?php the_ID(); ?>">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
                 

        <!-- Modal body -->
        <div class="modal-body">
        <div class="ps-product--detail pt-10 <?php echo $category->name;?>">
        <div class="modal-wrapper">
          <div class="row">
            <div class="col-12">
                <div class="product-detaiils-top">
                   
                    <div class="zoom-slider-ok pull-left">
                        <div class="zoom-slider-thumbnail-list">
                          <div class="thumbnail-list-container" data-role="thumbnail-list-container">
                            <?php cmb2_output_file_list_for_modal( 'product_images', 'small' ); ?>       
                          </div>
                        </div>
                        <?php 
                            $file_list_meta_key = 'product_images';
                            $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

                            $first_id = key($files);
                            $first_url = reset($files);
                        ?>
                        <div class="zoom-slider-big-box" data-role="slider-big-box" href="<?php echo $first_url;?>">
                            <img id="<?php echo $first_id;?>" src="<?php echo $first_url;?>" id="show-img">
                        </div>
                    </div>
                    
                    <div class="ps-product__info pull-right">
                        <h1><?php  the_title(); ?></h1>
                        <p class="ps-product__price"> <span class="red">Red: 19.90 /- TK </span> | <span class="stone">Stone: 20.00 /- TK </span></p>
                        <div class="ps-product__block ps-product__quickview">
                          <h4>QUICK REVIEW</h4>
                            <p class="product-code">MCW - BC1</p>
                            <p class="product-size">Product size: 9.5in X 4.5in X 2.75in (Approx)</p>
                          <p>Engineers most demandable brick. Maintainance free and durable bricks…</p>
                        </div>

                        <div class="ps-product__block ps-product__size">
                          <h4>Product Calculation</h4>
                            <form id="calc" oninput="updateoutput()">
                                <div class="form-group">
                                    <label for="required-product-sft"> Product Category:
                                      <select name="product-cat" id="brick-cat" class="ps-select selectpicker" onchange="updateOutput()">
                                        <option >Select Catagory</option>
                                        <option value="19.9">Red</option>
                                        <option value="20">Stone</option>
                                      </select>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="required-product-sft"> Product Required per sft:
                                        <input name="product-required" class="form-control" type="text" value="5">
                                    </label>
                              </div>
                              <div class="form-group">
                                    <label for="coverage area">Coverage Area
                                        <input name="coverage-area" class="form-control" type="text" placeholder="Coverage size in sft" onchange="updateOutput()">
                                    </label>
                              </div>
                                <hr>
                                <div class="cal-result">
                                    <span class="total-product">Total Product Require: <output name="totalProduct" for="product-required coverage-area">0</output>  pcs</span>
                                    <span class="total-price">Total Price: <output name="totalPrice" for="product-required coverage-area product-cat">0</output> /-TK</span>
                                    <hr>
                                    <span class="note">Total products are aproximate value and the price are only for product againist quantity. Any other cost are not included here. For more please contact us.</span>
                                </div>
                            </form>
                        </div>

                      </div>
                </div>

              
              <div class="clearfix"></div>
              <div class="ps-product__content mt-50">
                <ul class="tab-list" role="tablist">
                  <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">Technical Speccification</a></li>
                  <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">Features</a></li>
                  <li><a href="#tab_03" aria-controls="tab_03" role="tab" data-toggle="tab">Review</a></li>
                </ul>
              </div>
              <div class="tab-content mb-60">
                <div class="tab-pane active" role="tabpanel" id="tab_01">
                 <?php the_content(); ?>
                </div>
                <div class="tab-pane active" role="tabpanel" id="tab_02">
                  
                    
                </div>
                <div class="tab-pane" role="tabpanel" id="tab_03">
                  <p class="mb-20">1 review for <strong>Shoes Air Jordan</strong></p>
                  <div class="ps-review">
                    <div class="ps-review__thumbnail"><img src="images/user/1.jpg" alt=""></div>
                    <div class="ps-review__content">
                      <header>
                        <select class="ps-rating">
                          <option value="1">1</option>
                          <option value="1">2</option>
                          <option value="1">3</option>
                          <option value="1">4</option>
                          <option value="5">5</option>
                        </select>
                        <p>By<a href=""> Alena Studio</a> - November 25, 2017</p>
                      </header>
                      <p>Soufflé danish gummi bears tart. Pie wafer icing. Gummies jelly beans powder. Chocolate bar pudding macaroon candy canes chocolate apple pie chocolate cake. Sweet caramels sesame snaps halvah bear claw wafer. Sweet roll soufflé muffin topping muffin brownie. Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie.</p>
                    </div>
                  </div>
                  <form class="ps-product__review" action="_action" method="post">
                    <h4>ADD YOUR REVIEW</h4>
                    <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <div class="form-group">
                              <label>Name:<span>*</span></label>
                              <input class="form-control" type="text" placeholder="">
                            </div>

                            <div class="form-group">
                              <label>Email:<span>*</span></label>
                              <input class="form-control" type="email" placeholder="">
                            </div>
                            <div class="form-group">
                              <label>Your rating<span></span></label>
                              <select class="ps-rating">
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                                <option value="5">5</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ">
                            <div class="form-group">
                              <label>Your Review:</label>
                              <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group">
                              <button class="ps-btn ps-btn--sm">Submit<i class="ps-icon-next"></i></button>
                            </div>
                          </div>
                    </div>
                  </form>
                </div>
           
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>