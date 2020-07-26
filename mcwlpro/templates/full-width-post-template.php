<?php
/*
Template Name: Full-width layout
Template Post Type: post, page, product,mcwl_product_items
*/
get_header( );

?>

<?php if (have_posts()) :
while (have_posts()) : the_post(); ?>
      <div id="single-post-full-width " class="container post-<?php the_ID(); ?>">
          <div class="row">
              <div class="col-12">
                <div class="product-detaiils-top">
                    <div class="product-slider-container pull-left mt-30">
                      <div class="product-show">
                          <div class="slider slider-for">
                             <?php cmb2_output_file_list_big( 'product_images', 'small' ); ?>
                          </div>
                          <div class="slider-content">
                              <div class="slider slider-nav">
                                  <?php cmb2_output_file_list_small( 'product_images', 'small' ); ?>
                              </div>
                          </div>
                      </div>


                    </div>
                    <div class="ps-product__info pull-right">
                        <h1 class="section__title" ><?php  the_title(); ?></h1>
                        <p class="product__price">
                          <span class="sub-title">Category & Price: </span>
                          <?php
                          $cat_list_data = get_post_meta( get_the_ID() );
                          if ( isset(   $cat_list_data[ 'mcwl_group_product_Cat_price' ][ 0 ] ) ) {
                          $cat_list = maybe_unserialize( $cat_list_data[ 'mcwl_group_product_Cat_price' ][ 0 ] );
                          foreach ($cat_list as $cat_info ) {?>
                            <span class="cat_price <?php echo $cat_info[ 'product_cat_name' ] ; ?>"><?php echo $cat_info[ 'product_cat_name' ] ; ?>: <?php echo $cat_info[ 'product_price' ] ;?> /- TK </span>
                        <?php  }  }?>
                        <div class="ps-product__block ps-product__quickview">
                          <h4 class="sub-sec-title">Quick Review</h4>
                          <hr>
                            <p class="product-size"><span class="sub-title">Product size: </span> <?php $size = get_post_meta( get_the_ID(), 'product_size', true );
                                  echo $size;
                                ?> (Approx)</p>
                          <p><?php $overview = get_post_meta( get_the_ID(), 'product_overview', true );
                                echo $overview;
                              ?></p>
                        </div>

                        <div class="ps-product__block ps-product__size">
                          <h4 class="sub-sec-title">Product Calculation</h4>
                          <hr>
                            <form id="calc" oninput="updateoutput()">
                                <div class="form-group">
                                    <label for="required-product-sft"> <span class="sub-title">Product Category: </span>
                                      <select name="product-cat" id="brick-cat" class="ps-select selectpicker" onchange="updateOutput()">
                                        <option >Select Catagory</option>
                                        <?php
                                          $cat_list_data = get_post_meta( get_the_ID() );
                                          if ( isset(   $cat_list_data[ 'mcwl_group_product_Cat_price' ][ 0 ] ) ) {
                                          $cat_list = maybe_unserialize( $cat_list_data[ 'mcwl_group_product_Cat_price' ][ 0 ] );
                                          foreach ($cat_list as $cat_info ) {?>
                                            <option value="<?php echo $cat_info[ 'product_price' ] ;?>"><?php echo $cat_info[ 'product_cat_name' ] ; ?> </option>
                                        <?php  }  }?>
                                      </select>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="required-product-sft"> <span class="sub-title"> Product Required per sft: </span>
                                      <?php $prs = get_post_meta( get_the_ID(), 'product_required_sft', true );  ?>
                                        <input name="product-required" class="form-control" type="text" value="<?php echo $prs; ?>">
                                    </label>
                              </div>
                              <div class="form-group">
                                    <label for="coverage area"><span class="sub-title">Coverage Area: </span>
                                        <input name="coverage-area" class="form-control" type="text" placeholder="Coverage size in sft" onchange="updateOutput()">
                                    </label>
                              </div>
                                <hr>
                                <div class="cal-result">
                                    <span class="total-product"><span class="sub-title">Total Product Require: </span> <output name="totalProduct" for="product-required coverage-area">0</output>  pcs</span>
                                    <span class="total-price"><span class="sub-title">Total Price: </span><output name="totalPrice" for="product-required coverage-area product-cat">0</output> /-TK</span>
                                    <hr>
                                    <span class="note"><?php $note = get_post_meta( get_the_ID(), 'product_short_note', true );
                                          echo $note;
                                        ?></span>
                                        <span class="text-center">Or</span>
                                    <button class="btn btn-outline-danger mt-10 text-center"><a href="https://mirpurceramic.com/request-a-quotation/">REQUEST A QUOTATION</a></button>
                                </div>
                            </form>
                        </div>
                      </div>
              </div>

              <div class="clearfix"></div>
              <div class="ps-product__content mt-50 mb-10">
                <ul class="nav nav-tabs">
                  <li class="tab-btn active"><a href="#home">Technical specification</a></li>
                  <li class="tab-btn"><a href="#menu1">Features</a></li>

                </ul>
              </div>
              <div class="tab-content mb-60">
                <div id="home" class="tab-pane active in ">
                   <?php the_content(); ?>

                </div>
                <div id="menu1" class="tab-pane fade">
                  <?php $text = get_post_meta( get_the_ID(), 'mcwl_feature_wysiwyg', true );
                      echo $text;
                    ?>
                </div>

              </div>
            </div>

    </div>

<?php endwhile; ?>
<?php endif; ?>
</div>
<?php

    get_footer();

?>
