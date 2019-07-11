<?php 

    require_once(dirname(dirname(dirname(__FILE__))).'\temp\libs\Smarty.class.php');
  
    $smarty = new Smarty;
    
    // $smarty->debugging = false;
    // $smarty->caching = false;    快取
    // $smarty->cache_lifetime = 120;

    ////////////////* 以上設定檔 *////////////////

    ////////////////* 以 下 規 則 *////////////////
  
    $smarty->assign("title","よろしく"); 

    $smarty->assign("page","Heaven Timeless");
    
    $smarty->display('index.tpl');  //導到view頁面

?>