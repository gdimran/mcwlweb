<?php

/*
Template Name: Product Filter
==========
*/

 get_header(); ?>


  <body class="ps-loading">

    <main class="ps-main">

      <div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
        <div class="ps-container">
          <div class="ps-section__header mb-50">
            <h3 class="ps-section__title" data-mask="Products">-All Products</h3>
            <ul class="ps-masonry__filter">
              <li class="current"><a href="#" data-filter="*">All <sup>8</sup></a></li>
              <li><a href="#" data-filter=".nike">Nike <sup>1</sup></a></li>
              <li><a href="#" data-filter=".adidas">Adidas <sup>1</sup></a></li>
              <li><a href="#" data-filter=".men">Men <sup>1</sup></a></li>
              <li><a href="#" data-filter=".women">Women <sup>1</sup></a></li>
              <li><a href="#" data-filter=".kids">Kids <sup>4</sup></a></li>
            </ul>
          </div>
          <div class="ps-section__content pb-50">
            <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
              <div class="ps-masonry">
                <div class="grid-sizer"></div>
                <div class="grid-item kids">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-shoe mb-30">
                      <div class="ps-shoe__thumbnail">
                        <div class="ps-badge"><span>New</span></div>
                        <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick1.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants">
                          <div class="ps-shoe__variant normal"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick1.jpg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick2.jpg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick3.jpg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick4.jpg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick5.jpg" alt=""></div>
                          <select class="ps-rating ps-shoe__rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                          </select>
                        </div>
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#" data-toggle="modal" data-target="#myModal">Air Jordan 7 Retro</a>
                          <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">
                            <del>£220</del> £ 120</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid-item nike">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-shoe mb-30">
                      <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/shoe/2.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants">
                          <div class="ps-shoe__variant normal"><img src="images/shoe/2.jpg" alt=""><img src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>
                          <select class="ps-rating ps-shoe__rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                          </select>
                        </div>
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                          <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid-item adidas">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-shoe mb-30">
                      <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/shoe/3.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants">
                          <div class="ps-shoe__variant normal"><img src="images/shoe/2.jpg" alt=""><img src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>
                          <select class="ps-rating ps-shoe__rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                          </select>
                        </div>
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                          <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid-item kids">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-shoe mb-30">
                      <div class="ps-shoe__thumbnail">
                        <div class="ps-badge ps-badge--sale"><span>-35%</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/shoe/4.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants">
                          <div class="ps-shoe__variant normal"><img src="images/shoe/2.jpg" alt=""><img src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>
                          <select class="ps-rating ps-shoe__rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                          </select>
                        </div>
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                          <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">
                            <del>£220</del> £ 120</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid-item men">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-shoe mb-30">
                      <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/shoe/5.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants">
                          <div class="ps-shoe__variant normal"><img src="images/shoe/2.jpg" alt=""><img src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>
                          <select class="ps-rating ps-shoe__rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                          </select>
                        </div>
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                          <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid-item women">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-shoe mb-30">
                      <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/shoe/6.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants">
                          <div class="ps-shoe__variant normal"><img src="images/shoe/2.jpg" alt=""><img src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>
                          <select class="ps-rating ps-shoe__rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                          </select>
                        </div>
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                          <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid-item kids">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-shoe mb-30">
                      <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/shoe/7.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants">
                          <div class="ps-shoe__variant normal"><img src="images/shoe/2.jpg" alt=""><img src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>
                          <select class="ps-rating ps-shoe__rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                          </select>
                        </div>
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                          <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid-item kids">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-shoe mb-30">
                      <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/shoe/8.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants">
                          <div class="ps-shoe__variant normal"><img src="images/shoe/2.jpg" alt=""><img src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>
                          <select class="ps-rating ps-shoe__rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                          </select>
                        </div>
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">Air Jordan 7 Retro</a>
                          <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>






	  <!--	product details modal  -->
	   <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal">&times;</button>



        <!-- Modal body -->
        <div class="modal-body">
         	 <div class="ps-product--detail pt-60">
        <div class="ps-container">
          <div class="row">
            <div class="col-lg-10 col-md-12">
              <div class="ps-product__thumbnail">
                <div class="ps-product__preview">
                  <div class="ps-product__variants">
                    <div class="item"><img src="images/product/Shaan.png" alt=""></div>
                    <div class="item"><img src="images/product/Shaan.png" alt=""></div>
                    <div class="item"><img src="images/product/Shaan.png" alt=""></div>
                    <div class="item"><img src="images/product/Shaan.png" alt=""></div>
                    <div class="item"><img src="images/product/Shaan.png" alt=""></div>
                  </div><a class="popup-youtube ps-product__video" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><img src="images/product/Shaan.png" alt=""><i class="fa fa-play"></i></a>
                </div>
                <div class="ps-product__image">
                  <div class="item"><img class="zoom" src="images/product/Shaan.png" alt="" data-zoom-image="images/product/Shaan.png"></div>
                  <div class="item"><img class="zoom" src="images/product/Shaan.png" alt="" data-zoom-image="images/product/Shaan.png"></div>
                  <div class="item"><img class="zoom" src="images/product/Shaan.png" alt="" data-zoom-image="images/product/Shaan.png"></div>
                </div>
              </div>
              <div class="ps-product__thumbnail--mobile">
                <div class="ps-product__main-img"><img src="images/product/Shaan.png" alt=""></div>
                <div class="ps-product__preview owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="20" data-owl-nav="true" data-owl-dots="false" data-owl-item="3" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="on"><img src="images/product/Shaan.png" alt=""><img src="images/product/Shaan.png" alt=""><img src="images/product/Shaan.png" alt=""></div>
              </div>
              <div class="ps-product__info">
                <div class="ps-product__rating">
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                  </select><a href="#">(Read all 8 reviews)</a>
                </div>
                <h1>Air strong  training</h1>
                <p class="ps-product__category"><a href="#"> Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p>
                <h3 class="ps-product__price">£ 115 <del>£ 330</del></h3>
                <div class="ps-product__block ps-product__quickview">
                  <h4>QUICK REVIEW</h4>
                  <p>The Nike Free RN 2017 Men's Running Sky weighs less than previous versions and features an updated knit material…</p>
                </div>

                <div class="ps-product__block ps-product__size">
                  <h4>CHOOSE SIZE<a href="#">Size chart</a></h4>
                  <select class="ps-select selectpicker">
                    <option value="1">Select Size</option>
                    <option value="2">4</option>
                    <option value="3">4.5</option>
                    <option value="3">5</option>
                    <option value="3">6</option>
                    <option value="3">6.5</option>
                    <option value="3">7</option>
                    <option value="3">7.5</option>
                    <option value="3">8</option>
                    <option value="3">8.5</option>
                    <option value="3">9</option>
                    <option value="3">9.5</option>
                    <option value="3">10</option>
                  </select>
                  <div class="form-group">
                    <input class="form-control" type="number" value="1">
                  </div>
                </div>
                <div class="ps-product__shopping"><a class="ps-btn mb-10" href="cart.html">Add to cart<i class="ps-icon-next"></i></a>
                  <div class="ps-product__actions"><a class="mr-10" href="whishlist.html"><i class="ps-icon-heart"></i></a><a href="compare.html"><i class="ps-icon-share"></i></a></div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="ps-product__content mt-50">
                <ul class="tab-list" role="tablist">
                  <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">Overview</a></li>
                  <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">Review</a></li>
                  <li><a href="#tab_03" aria-controls="tab_03" role="tab" data-toggle="tab">PRODUCT TAG</a></li>
                  <li><a href="#tab_04" aria-controls="tab_04" role="tab" data-toggle="tab">ADDITIONAL</a></li>
                </ul>
              </div>
              <div class="tab-content mb-60">
                <div class="tab-pane active" role="tabpanel" id="tab_01">
                  <p>Caramels tootsie roll carrot cake sugar plum. Sweet roll jelly bear claw liquorice. Gingerbread lollipop dragée cake. Pie topping jelly-o. Fruitcake dragée candy canes tootsie roll. Pastry jelly-o cupcake. Bonbon brownie soufflé muffin.</p>
                  <p>Sweet roll soufflé oat cake apple pie croissant. Pie gummi bears jujubes cake lemon drops gummi bears croissant macaroon pie. Fruitcake tootsie roll chocolate cake Carrot cake cake bear claw jujubes topping cake apple pie. Jujubes gummi bears soufflé candy canes topping gummi bears cake soufflé cake. Cotton candy soufflé sugar plum pastry sweet roll..</p>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab_02">
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
                <div class="tab-pane" role="tabpanel" id="tab_03">
                  <p>Add your tag <span> *</span></p>
                  <form class="ps-product__tags" action="_action" method="post">
                    <div class="form-group">
                      <input class="form-control" type="text" placeholder="">
                      <button class="ps-btn ps-btn--sm">Add Tags</button>
                    </div>
                  </form>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab_04">
                  <div class="form-group">
                    <textarea class="form-control" rows="6" placeholder="Enter your addition here..."></textarea>
                  </div>
                  <div class="form-group">
                    <button class="ps-btn" type="button">Submit</button>
                  </div>
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

   







<?php get_footer(); ?>