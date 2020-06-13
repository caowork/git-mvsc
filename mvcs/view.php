<meta charset="utf-8">
<?php

$ddbh=$_GET["ddbh"];




      require('smarty/Smarty.class.php');
      require('db/db.php');
    $smarty = new Smarty();

   $smarty->left_delimiter = "{";
   $smarty->right_delimiter = "}";
   $smarty->template_dir = "tpl";
   $smarty->compile_dir = "template_c";
   $smarty->cache_dir = "cache";
   $smarty->caching = false;

try {
    $dbh = new PDO($dsn, $user, $pass); //初始化一个PDO对象



    $stmt1 = $dbh->prepare("SELECT * FROM fa_ykjp_sclc as a,fa_ykjp_ddgl as b WHERE a.scddbh=$ddbh AND a.scddbh=b.ddbh"); 
    $stmt1->execute();
    $row = $stmt1->fetchAll();

//echo "<pre>";print_r($row[scddbh]);echo "<pre>";

} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}


  $smarty->assign('row',$row);
  $smarty->display('tpl/view.tpl');
?>