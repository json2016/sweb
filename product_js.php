<?php
/**


 * Release Date: 2015-10-16
 */
define('IN_DOUCO', true);

require (dirname(__FILE__) . '/include/init.php');

// 验证并获取合法的ID，如果不合法将其设定为-1
$id = $firewall->get_legal_id('product', $_REQUEST['id'], $_REQUEST['unique_id']);
   
    /* 获取产品信息 */
$query = $dou->select($dou->table('product'), '*', '`id` = \'' . $id . '\'');
$product = $dou->fetch_array($query);

if ($product['image']){$q=$q.'"/'.$product['image'].'",';}
if ($product['i2']){$q=$q.'"/'.$product['i2'].'",';}
if ($product['i3']){$q=$q.'"/'.$product['i3'].'",';}
if ($product['i4']){$q=$q.'"/'.$product['i4'].'",';}
if ($product['i5']){$q=$q.'"/'.$product['i5'].'",';}
if ($product['i6']){$q=$q.'"/'.$product['i6'].'",';}
if ($product['i7']){$q=$q.'"/'.$product['i7'].'",';}
if ($product['i8']){$q=$q.'"/'.$product['i8'].'",';}
if ($product['i9']){$q=$q.'"/'.$product['i9'].'",';}
$q=substr($q, 0, -1);
?>
jQuery(document).ready(function($) {
        /**
         * identifier variable must be unique ID
         */
        var sangar = $('#sangar-example').sangarSlider({
            timer :  false, // true or false to have the timer
            pagination : 'content-horizontal', // bullet, content, none
            paginationContent : [<?php echo $q; ?>], // can be text, image, or something			        
            paginationContentType : 'image', // text, image
            paginationContentWidth : 90, // pagination content width in pixel
            paginationImageHeight : 90, // pagination image height
            width : 600, // slideshow width
            height : 600, // slideshow height
            fixedHeight: true,
            scaleSlide : true // slider will scale to the container size
        });
    })