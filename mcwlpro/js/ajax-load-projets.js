 jQuery(document).ready(function($) {
    $.ajaxSetup({cache:false});

    $(".tiles").click(function(event){

        if (event.preventDefault) {
            event.preventDefault();
        } else {
            event.returnValue = false;
        }

        var postID = $(this).attr('rel');
        var $container = $("#contenuPop");

        $('.filtre').show();
        $("#popUp").show();
        $container.html("Je charge!");

        data={
            action: 'prefix_ajax_single_post', 
            pID: postID, 
        };

        $.post(load_projets_vars.load_projets_ajaxurl, data, function(content) {
            $container.html(content);
        });
    });

    function fermePop(){
        $('.filtre').hide();
        $("#popUp").hide();
    }

    $(".filtre").click(function(){
        fermePop();
    });

    $(".fermePop").click(function(){
        fermePop();
    });

});