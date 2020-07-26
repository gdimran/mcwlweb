
<?php

/*
Template Name: Product page
==========
*/

 get_header(); ?>
		<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 100%;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
            
            
            
            
            h3 {
    background: #fff;
    color: #3498db;
    font-size: 36px;
    line-height: 100px;
    margin: 10px;
    padding: 2%;
    position: relative;
    text-align: center;
}
.action{
  display:block;
  margin:100px auto;
  width:100%;
  text-align:center;
}
.action a {
  display:inline-block;
  padding:5px 10px; 
  background:#f30;
  color:#fff;
  text-decoration:none;
}
.action a:hover{
  background:#000;
}

</style>
				<div class="content-area">
			<div class="main-content">
				
                
				
                    <!-- MAIN (Center website) -->
                    <div class="main">
                         <div class="ps-section__header mb-50">
                            <h3 class="ps-section__title text-left" data-mask="Products">-All Products</h3>
<!--
                            <ul class="ps-masonry__filter">
                              <li class="current"><a href="#" data-filter="*">All <sup>8</sup></a></li>
                              <li><a href="#" data-filter=".nike">Nike <sup>1</sup></a></li>
                              <li><a href="#" data-filter=".adidas">Adidas <sup>1</sup></a></li>
                              <li><a href="#" data-filter=".men">Men <sup>1</sup></a></li>
                              <li><a href="#" data-filter=".women">Women <sup>1</sup></a></li>
                              <li><a href="#" data-filter=".kids">Kids <sup>4</sup></a></li>
                            </ul>
-->
                              <div id="myBtnContainer" class="ps-masonry__filter">
                                  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                                  <button class="btn" onclick="filterSelection('nature')"> Nature</button>
                                  <button class="btn" onclick="filterSelection('wall-tiles')">Wall Tiles</button>
                                  <button class="btn" onclick="filterSelection('people')"> People</button>
                                </div>
                          </div>
                    <hr>


                   

                    <!-- Portfolio Gallery Grid -->
                    <div class="row">
                        <div class="column nature ">
                        <div class="content">
                            <div class="product-show">
                                <div class="slider slider-for">
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick1.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick2.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick3.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick4.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick5.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick6.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick7.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick8.jpg"></div>                   
                                </div>
                                <div class="slider-content">
                                    <div class="slider slider-nav">
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick1.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick2.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick3.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick4.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick5.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick6.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick7.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick8.jpg"></div>
                                    </div>
                                    <div class="product-info" id="myBtn" data-toggle="modal" data-target="#myModal">
                                        <h4>10 Hole Engineering Bricks</h4>
                                        <p>Click for more..</p>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                      </div>
                     
                        <div class="column nature ">
                            <div class="content">
                            <div class="product-show">
                                <div class="slider slider-for">
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick1.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick2.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick3.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick4.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick5.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick6.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick7.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick8.jpg"></div>                   
                                </div>
                                <div class="slider-content">
                                    <div class="slider slider-nav">
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick1.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick2.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick3.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick4.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick5.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick6.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick7.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick8.jpg"></div>
                                    </div>
                                    <div class="product-info" id="myBtn" data-toggle="modal" data-target="#myModal">
                                        <h4>10 Hole Engineering Bricks</h4>
                                        <p>Click for more..</p>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                        </div>
                        
                        <div class="column nature ">
                            <div class="content">
                            <div class="product-show">
                                <div class="slider slider-for">
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick1.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick2.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick3.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick4.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick5.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick6.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick7.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick8.jpg"></div>                   
                                </div>
                                <div class="slider-content">
                                    <div class="slider slider-nav">
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick1.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick2.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick3.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick4.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick5.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick6.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick7.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick8.jpg"></div>
                                    </div>
                                    <div class="product-info" id="myBtn" data-toggle="modal" data-target="#myModal">
                                        <h4>10 Hole Engineering Bricks</h4>
                                        <p>Click for more..</p>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                        </div>
                        
                        <div class="column nature ">
                        <div class="content">
                            <div class="product-show">
                                <div class="slider slider-for">
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick1.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick2.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick3.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick4.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick5.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick6.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick7.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick8.jpg"></div>                   
                                </div>
                                <div class="slider-content">
                                    <div class="slider slider-nav">
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick1.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick2.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick3.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick4.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick5.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick6.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick7.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick8.jpg"></div>
                                    </div>
                                    <div class="product-info" id="myBtn" data-toggle="modal" data-target="#myModal">
                                        <h4>10 Hole Engineering Bricks</h4>
                                        <p>Click for more..</p>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                      </div>
                     
                        <div class="column nature ">
                            <div class="content">
                            <div class="product-show">
                                <div class="slider slider-for">
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick1.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick2.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick3.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick4.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick5.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick6.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick7.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick8.jpg"></div>                   
                                </div>
                                <div class="slider-content">
                                    <div class="slider slider-nav">
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick1.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick2.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick3.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick4.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick5.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick6.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick7.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick8.jpg"></div>
                                    </div>
                                    <div class="product-info" id="myBtn" data-toggle="modal" data-target="#myModal">
                                        <h4>10 Hole Engineering Bricks</h4>
                                        <p>Click for more..</p>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                        </div>
                        
                        <div class="column wall-tiles">
                            <div class="content">
                            <div class="product-show">
                                <div class="slider slider-for">
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick1.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick2.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick3.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick4.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick5.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick6.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick7.jpg"></div>
                                    <div class="slide-big-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick8.jpg"></div>                   
                                </div>
                                <div class="slider-content">
                                    <div class="slider slider-nav">
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick1.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick2.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick3.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick4.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick5.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick6.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick7.jpg"></div>
                                        <div class="slide-small-img"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick8.jpg"></div>
                                    </div>
                                    <div class="product-info" id="myBtn" data-toggle="modal" data-target="#myModal">
                                        <h4>10 Hole Engineering Bricks</h4>
                                        <p>Click for more..</p>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                        </div>
                        
                    <!-- END GRID -->
                    </div>

                    <!-- END MAIN -->
                    </div>
	  <!--	product details modal  -->
	   <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal">&times;</button>



        <!-- Modal body -->
        <div class="modal-body">
        <div class="ps-product--detail pt-10">
        <div class="modal-wrapper">
          <div class="row">
            <div class="col-12">
                <div class="product-detaiils-top">
                    <div class="zoom-slider-ok pull-left">
                        <div class="zoom-slider-thumbnail-list">
                          <div class="thumbnail-list-container" data-role="thumbnail-list-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick1.jpg" class="show-small-img" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick2.jpg" class="show-small-img" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick3.jpg" class="show-small-img" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick4.jpg" class="show-small-img" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick5.jpg" class="show-small-img" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick6.jpg" class="show-small-img" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick7.jpg" class="show-small-img" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick8.jpg" class="show-small-img" alt="">
                          </div>
                        </div>
                        <div class="zoom-slider-big-box" data-role="slider-big-box" href="<?php echo get_template_directory_uri(); ?>/images/slides/brick1.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/slides/brick1.jpg" id="show-img">
                        </div>
                    </div>
                    
                    <div class="ps-product__info pull-right">
                        <h1>10 Hole Enigneering Brick</h1>
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
                  <p>Caramels tootsie roll carrot cake sugar plum. Sweet roll jelly bear claw liquorice. Gingerbread lollipop dragée cake. Pie topping jelly-o. Fruitcake dragée candy canes tootsie roll. Pastry jelly-o cupcake. Bonbon brownie soufflé muffin.</p>
                  <p>Sweet roll soufflé oat cake apple pie croissant. Pie gummi bears jujubes cake lemon drops gummi bears croissant macaroon pie. Fruitcake tootsie roll chocolate cake Carrot cake cake bear claw jujubes topping cake apple pie. Jujubes gummi bears soufflé candy canes topping gummi bears cake soufflé cake. Cotton candy soufflé sugar plum pastry sweet roll..</p>
                </div>
                <div class="tab-pane active" role="tabpanel" id="tab_02">
                  <p>Caramels tootsie roll carrot cake sugar plum. Sweet roll jelly bear claw liquorice. Gingerbread lollipop dragée cake. Pie topping jelly-o. Fruitcake dragée candy canes tootsie roll. Pastry jelly-o cupcake. Bonbon brownie soufflé muffin.</p>
                  <p>Sweet roll soufflé oat cake apple pie croissant. Pie gummi bears jujubes cake lemon drops gummi bears croissant macaroon pie. Fruitcake tootsie roll chocolate cake Carrot cake cake bear claw jujubes topping cake apple pie. Jujubes gummi bears soufflé candy canes topping gummi bears cake soufflé cake. Cotton candy soufflé sugar plum pastry sweet roll..</p>
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
                    <script>
                    filterSelection("all")
                    function filterSelection(c) {
                      var x, i;
                      x = document.getElementsByClassName("column");
                      if (c == "all") c = "";
                      for (i = 0; i < x.length; i++) {
                        w3RemoveClass(x[i], "show");
                        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
                      }
                    }

                    function w3AddClass(element, name) {
                      var i, arr1, arr2;
                      arr1 = element.className.split(" ");
                      arr2 = name.split(" ");
                      for (i = 0; i < arr2.length; i++) {
                        if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
                      }
                    }

                    function w3RemoveClass(element, name) {
                      var i, arr1, arr2;
                      arr1 = element.className.split(" ");
                      arr2 = name.split(" ");
                      for (i = 0; i < arr2.length; i++) {
                        while (arr1.indexOf(arr2[i]) > -1) {
                          arr1.splice(arr1.indexOf(arr2[i]), 1);     
                        }
                      }
                      element.className = arr1.join(" ");
                    }


                    // Add active class to the current button (highlight it)
                    var btnContainer = document.getElementById("myBtnContainer");
                    var btns = btnContainer.getElementsByClassName("btn");
                    for (var i = 0; i < btns.length; i++) {
                      btns[i].addEventListener("click", function(){
                        var current = document.getElementsByClassName("active");
                        current[0].className = current[0].className.replace(" active", "");
                        this.className += " active";
                      });
                    }
                       
                    </script>


			
			</div>
		</div>


<script type="text/javascript">
    function updateOutput() { 
            //get form
        var form = document.getElementById("calc");
            //get output
        var out1 = form.elements["totalProduct"];
        var out2 = form.elements["totalPrice"];
            //get two numbers
        var num1 = parseInt(form.elements["product-cat"].value);
        var num2 = parseInt(form.elements["product-required"].value);
        var num3 = parseInt(form.elements["coverage-area"].value);
            //get operator
    //	var operator = parseInt(form.elements["op"].value);
            //set output depending on operator

        out1.value = num2*num3;
        out2.value=num1*num2*num3;
    //	switch(operator)
    //	{
    //		//add
    //		case 0:
    //		out.value = num1+num2;
    //	  	break;
    //	  	//subtract
    //		case 1: out.value = num1-num2;
    //		break;
    //		//multiply
    //		case 2: out.value = num1*num2;
    //		break;
    //		//divide
    //		case 3: out.value = (num1/num2).toFixed(1);//only one digit after decimal place
    //		break;
    //		default:
    //	  	break;
    //	}
    }

</script>
		
<?php get_footer(); ?>