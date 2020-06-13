<meta charset="utf-8">
<?php
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



// $sth = $dbh->prepare("SELECT * from fa_ykjp_sclc as a,fa_ykjp_ddgl as b,fa_ykjp_kl as c WHERE a.scddbh=b.ddbh AND b.ddbh=c.kl_ddbh AND a.status='开料' AND c.kl_sysl=(SELECT kl_sysl FROM fa_ykjp_kl ORDER BY kl_sysl LIMIT 1 ) ORDER BY kl_sysl");
// $sth = $dbh->prepare("SELECT * FROM fa_ykjp_sclc
// LEFT JOIN fa_ykjp_ddgl ON fa_ykjp_sclc.scddbh = fa_ykjp_ddgl.ddbh
// LEFT JOIN fa_ykjp_kl ON fa_ykjp_ddgl.ddbh = fa_ykjp_kl.kl_ddbh");
// $sth->execute();
// $result = $sth->fetchAll();

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $dbh->prepare("SELECT * FROM fa_ykjp_xl ORDER BY kl_zptime desc"); 
    $stmt->execute();
    $result = $stmt->fetchAll();


    $stmt1 = $dbh->prepare("SELECT * FROM fa_ykjp_ddgl as a,fa_ykjp_sclc as b WHERE a.ddbh=b.scddbh AND b.lcxs like '%d%'"); 
    $stmt1->execute();
    $result1 = $stmt1->fetchAll();


 


// $_arrg=array($results);


//echo "<pre>";print_r($result1);echo "<pre>";
 
    

} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}


  $smarty->assign('arr',$result);
  $smarty->assign('arr1',$result1);
  $smarty->assign('title','线路');
  $smarty->display('tpl/xl.tpl');
?>