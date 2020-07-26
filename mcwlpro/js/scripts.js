

jQuery( document ).ready(function( $ ) {
   $('.slider-for').not('.slick-initialized').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: false,
   fade: true,
   asNavFor: '.slider-nav'
 });
 $('.slider-nav').not('.slick-initialized').slick({
   slidesToShow:3,
   slidesToScroll: 1,
   asNavFor: '.slider-for',
   dots: true,
   focusOnSelect: true
 });

//  $('.slider-main').slick({
//  slidesToShow: 1,
//  slidesToScroll: 1,
//  arrows: false,
//  fade: true,
//  asNavFor: '.slider-link'
// });
// $('.slider-link').slick({
//  slidesToShow:3,
//  slidesToScroll: 1,
//  asNavFor: '.slider-main',
//  dots: false,
//  focusOnSelect: true
// });

 $('a[data-slide]').click(function(e) {
   e.preventDefault();
   var slideno = $(this).data('slide');
   $('.slider-nav').slick('slickGoTo', slideno - 1);
 });

});


jQuery( document ).ready(function( $ ) {
// $('#myModal').modal('show');
//    $("#myBtn").click(function(){
//    $("#myModal").modal({backdrop: true});
//  });

//$(document).ready(function(){
//    $(".clickme").on
//      ("click", function(){ $("#myModal-" + $(this).attr('data-id')).modal();});
//  });

//    modalContent.load(post_link + ' #modal-ready');

    $(".product_title a").addClass("modal-link");



  //  $(document).ready(function(){
      $(".nav-tabs a").click(function(){
        $(this).tab('show');
      });
      $('.nav-tabs a').on('shown.bs.tab', function(event){
        var x = $(event.target).text();         // active tab
        var y = $(event.relatedTarget).text();  // previous tab
        $(".act span").text(x);
        $(".prev span").text(y);
      });
  //  });


    //$(document).ready(function() {
        $(".tab-btn").click(function () {
            if(!$(this).hasClass('active'))
            {
                $(".tab-btn.active").removeClass("active");
                $(this).addClass("active");
            }
        });
    //});


});
