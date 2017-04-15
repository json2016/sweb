<?php
/**


 * Release Date: 2015-10-16
 */
define('IN_DOUCO', true);

require (dirname(__FILE__) . '/include/init.php');

// 验证并获取合法的ID，如果不合法将其设定为-1
$id = $firewall->get_legal_id('product', $_REQUEST['id'], $_REQUEST['unique_id']);
$cat_id = $dou->get_one("SELECT cat_id FROM " . $dou->table('product') . " WHERE id = '$id'");
$parent_id = $dou->get_one("SELECT parent_id FROM " . $dou->table('product_category') . " WHERE cat_id = '" . $cat_id . "'");

if ($id == -1)
    $dou->dou_msg($GLOBALS['_LANG']['page_wrong'], ROOT_URL);
    
    /* 获取产品信息 */
$query = $dou->select($dou->table('product'), '*', '`id` = \'' . $id . '\'');
$product = $dou->fetch_array($query);

// 格式化数据
$product['price'] = $product['price'] > 0 ? $dou->price_format($product['price']) : $_LANG['price_discuss'];
$product['add_time'] = date("Y-m-d", $product['add_time']);

//1、使用str_replace 来替换换行  
$product['content2'] = str_replace(array("\r\n", "\r", "\n"), "<br/>", $product['content2']);

// 生成缩略图的文件名
$image = explode(".", $product['image']);
$product['thumb'] = ROOT_URL . $image[0] . "_thumb." . $image[1];
$product['image'] = ROOT_URL . $product['image'];

// 格式化自定义参数
foreach (explode(',', $product['defined']) as $row) {
    $row = explode('：', str_replace(":", "：", $row));
    
    if ($row['1']) {
        $defined[] = array (
                "arr" => $row['0'],
                "value" => $row['1'] 
        );
    }
}



// 访问统计

$click = $product['click'] + 1;
$dou->query("update " . $dou->table('product') . " SET click = '$click' WHERE id = '$id'");


// 赋值给模板-meta和title信息
$smarty->assign('page_title', $dou->page_title('product_category', $cat_id, $product['name']));
$smarty->assign('keywords', $product['keywords']);
$smarty->assign('description', $product['description']);

// 赋值给模板-导航栏
$smarty->assign('nav_top_list', $dou->get_nav('top'));
$smarty->assign('nav_middle_list', $dou->get_nav('middle', '0', 'product_category', $cat_id, $parent_id));
$smarty->assign('nav_bottom_list', $dou->get_nav('bottom'));
$smarty->assign('nav_link_list', $dou->get_nav('link'));

// 赋值给模板-数据
$smarty->assign('ur_here', $dou->ur_here('product_category', $cat_id, $product['name']));
$smarty->assign('product_category', $dou->get_category('product_category', 0, $cat_id));
$smarty->assign('product', $product);
$smarty->assign('defined', $defined);

$smarty->display('products_page.dwt');

?>