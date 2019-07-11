<?php 

    require_once('../../temp/libs/Smarty.class.php');
  
    $smarty = new Smarty;
    
    // $smarty->debugging = false;
    // $smarty->caching = false;    快取
    // $smarty->cache_lifetime = 120;

    ////////////////* 以上設定檔 *////////////////

    ////////////////* 以 下 規 則 *////////////////
    
    $smarty->assign("test","內容"); //由後端傳送的的值
    $smarty->assign("title","title測試");   //同上
    
    $smarty->display('index.tpl');  //導到view頁面

?>