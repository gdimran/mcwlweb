///**
// * by MonsterDuang
// */
//;(function($) {
//    /**
//     * 1, 缩略图大小和父容器大小一致
//     * 2, 父容器 href 属性为高清图片路径
//     */
//    $.fn.zoomImage = function(paras) {
//        /**
//         * 默认参数
//         */
//        var defaultParas = {
//            layerW: 100, // 遮罩宽度
//            layerH: 100, // 遮罩高度
//            layerOpacity: 0.2, // 遮罩透明度
//            layerBgc: '#000', // 遮罩背景颜色
//            showPanelW: 500, // 显示放大区域宽
//            showPanelH: 500, // 显示放大区域高
//            marginL: 5, // 放大区域离缩略图右侧距离
//            marginT: 0 // 放大区域离缩略图上侧距离
//        };
//
//        paras = $.extend({}, defaultParas, paras);
//
//        $(this).each(function() {
//            var self = $(this).css({position: 'relative'});
//            var selfOffset = self.offset();
//            var imageW = self.width(); // 图片高度
//            var imageH = self.height();
//
//            self.find('img').css({
//                width: '100%',
//                height: '100%'
//            });
//
//            // 宽放大倍数
//            var wTimes = paras.showPanelW / paras.layerW;
//            // 高放大倍数
//            var hTimes = paras.showPanelH / paras.layerH;
//
//            // 放大图片
//            var img = $('<img>').attr('src', self.attr("href")).css({
//                position: 'absolute',
//                left: '0',
//                top: '0',
//                width: imageW * wTimes,
//                height: imageH * hTimes
//            }).attr('id', 'big-img');
//
//            // 遮罩
//            var layer = $('<div>').css({
//                display: 'none',
//                position: 'absolute',
//                left: '0',
//                top: '0',
//                backgroundColor: paras.layerBgc,
//                width: paras.layerW,
//                height: paras.layerH,
//                opacity: paras.layerOpacity,
//                border: '1px solid #ccc',
//                cursor: 'crosshair'
//            });
//
//            // 放大区域
//            var showPanel = $('<div>').css({
//                display: 'none',
//                position: 'absolute',
//                overflow: 'hidden',
//                left: imageW + paras.marginL,
//                top: paras.marginT,
//                width: paras.showPanelW,
//                height: paras.showPanelH
//            }).append(img);
//
//            self.append(layer).append(showPanel);
//
//            self.on('mousemove', function(e) {
//                // 鼠标相对于缩略图容器的坐标
//                var x = e.pageX - selfOffset.left;
//                var y = e.pageY - selfOffset.top;
//
//                if(x <= paras.layerW / 2) {
//                    x = 0;
//                }else if(x >= imageW - paras.layerW / 2) {
//                    x = imageW - paras.layerW;
//                }else {
//                    x = x - paras.layerW / 2;
//                }
//
//                if(y < paras.layerH / 2) {
//                    y = 0;
//                } else if(y >= imageH - paras.layerH / 2) {
//                    y = imageH - paras.layerH;
//                } else {
//                    y = y - paras.layerH / 2;
//                }
//
//                layer.css({
//                    left: x,
//                    top: y
//                });
//
//                img.css({
//                    left: -x * wTimes,
//                    top: -y * hTimes
//                });
//            }).on('mouseenter', function() {
//                layer.show();
//                showPanel.show();
//            }).on('mouseleave', function() {
//                layer.hide();
//                showPanel.hide();
//            });
//        });
//    }
//})(jQuery);

jQuery( document ).ready(function( $ ) {
function imageZoom(imgID, resultID) {
  var img, lens, result, cx, cy;
  img = document.getElementById(imgID);
  result = document.getElementById(resultID);
  /* Create lens: */
  lens = document.createElement("DIV");
  lens.setAttribute("class", "img-zoom-lens");
  /* Insert lens: */
  img.parentElement.insertBefore(lens, img);
  /* Calculate the ratio between result DIV and lens: */
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
  /* Set background properties for the result DIV */
  result.style.backgroundImage = "url('" + img.src + "')";
  result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
  /* Execute a function when someone moves the cursor over the image, or the lens: */
  lens.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);
  /* And also for touch screens: */
  lens.addEventListener("touchmove", moveLens);
  img.addEventListener("touchmove", moveLens);
  function moveLens(e) {
    var pos, x, y;
    /* Prevent any other actions that may occur when moving over the image */
    e.preventDefault();
    /* Get the cursor's x and y positions: */
    pos = getCursorPos(e);
    /* Calculate the position of the lens: */
    x = pos.x - (lens.offsetWidth / 2);
    y = pos.y - (lens.offsetHeight / 2);
    /* Prevent the lens from being positioned outside the image: */
    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
    if (x < 0) {x = 0;}
    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
    if (y < 0) {y = 0;}
    /* Set the position of the lens: */
    lens.style.left = x + "px";
    lens.style.top = y + "px";
    /* Display what the lens "sees": */
    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /* Get the x and y positions of the image: */
    a = img.getBoundingClientRect();
    /* Calculate the cursor's x and y coordinates, relative to the image: */
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /* Consider any page scrolling: */
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
    
    });