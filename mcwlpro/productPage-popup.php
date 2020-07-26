
<?php

/*
Template Name: Product page popup
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

                              <div id="myBtnContainer" class="ps-masonry__filter">
                                  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                                  <?php
                                       $args = array(
                                         'post_type' => 'mcwl_product_items',
                                                   'taxonomy' => 'category',
                                                   'orderby' => 'name',
                                                   'order'   => 'ASC'
                                               );

                                       $cats = get_categories($args);

                                       foreach($cats as $cat) {
                                    ?>
                                      <button class="btn <?php echo $cat->slug ;?> " onclick="filterSelection('<?php echo $cat->name;?>')"> <?php echo $cat->name;?></button>

                                    <?php
                                       }
                                    ?>

                                </div>
                          </div>
                    <hr>




                    <!-- Portfolio Gallery Grid -->
                    <div class="row">
                         <?php
                            global $post;

                            $args = array(  'order' => 'ASC','post_type' => 'mcwl_product_items');
                            $the_query = new WP_Query( $args );

                            ?>

                            <?php if ( $the_query->have_posts() ) { ?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post();  $id=$post->ID; ?>
                            <?php $categories = get_the_terms( $post->ID, 'category' );
                                foreach( $categories as $category ):
                            ?>
                        <div class="column <?php echo $category->name;?> ">
                        <div class="content">
                            <div class="product-show">

                                <?php //cmb2_output_file_list( 'product_images', 'small' ); ?>
                                <div class="slider slider-for">

                                   <?php cmb2_output_file_list_big( 'product_images', 'small' ); ?>
                                </div>
                                <div class="slider-content">
                                    <div class="slider slider-nav">
                                        <?php cmb2_output_file_list_small( 'product_images', 'small' ); ?>
                                    </div>

                               <div class="product-info post-<?php the_ID(); ?>">
                                        <h4 class="product_title">
                                            <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
                                        </h4>

                                        <?php //echo do_shortcode('[ibenic_post id=' . $id . ' class="btn btn-warning"]') ; ?>
                                        <?php //echo do_shortcode('[modal_new_shortcode class="btn btn-warning"]') ; ?>
<!--                                        <p>Click for more..</p>-->
                                    </div>

                                </div>
                            </div>

                        </div>
                      </div>

                         <?php endforeach; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php }else{?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php } ?>


                    <!-- END GRID -->
                    </div>

                    <!-- END MAIN -->
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




<?php get_footer(); ?>
