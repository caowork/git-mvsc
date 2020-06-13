<meta charset="utf-8">
<?php


$ddbh=$_POST["ddbh"];
$cnlh=$_POST["cnlh"];
$zpgx=$_POST["zpgx"];
$djbm=$_POST["djbm"];
$bbm=$_POST["bbm"];

      require('db/db.php');

try {
    $dbh = new PDO($dsn, $user, $pass); //初始化一个PDO对象


if ($djbm == 'zk') {
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     // $sql = "INSERT INTO fa_ykjp_kl (id, kl_ddbh, kl_cnlh, kl_zptime, kl_zpsl, kl_scgs, kl_czname, kl_mrb, kl_bzcont, kl_status, kl_sysl)
     // VALUES (id, '$ddbh', '$cnlh', '$time', '$zpsl', '$scgs', '$czname', '$mrb', '$bzcont', '$zpgx', '$sysl')";
    $dsql = "UPDATE fa_ykjp_sclc SET status='$zpgx', lcxs = Replace(lcxs,'$bbm','') WHERE scddbh=$ddbh";
    //$dsql = "UPDATE fa_ykjp_sclc SET status='$zpgx', lcxs = Replace(lcxs,'a','') WHERE scddbh=$ddbh";
    //$dbh->exec($sql);
    $dbh->exec($dsql);
    echo "<script>alert('已交成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>"; 
}

if ($djbm == 'xl') {
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     // $sql = "INSERT INTO fa_ykjp_kl (id, kl_ddbh, kl_cnlh, kl_zptime, kl_zpsl, kl_scgs, kl_czname, kl_mrb, kl_bzcont, kl_status, kl_sysl)
     // VALUES (id, '$ddbh', '$cnlh', '$time', '$zpsl', '$scgs', '$czname', '$mrb', '$bzcont', '$zpgx', '$sysl')";
    $dsql = "UPDATE fa_ykjp_sclc SET status='$zpgx', lcxs = Replace(lcxs,'$bbm','') WHERE scddbh=$ddbh";
    //$dsql = "UPDATE fa_ykjp_sclc SET status='$zpgx', lcxs = Replace(lcxs,'a','') WHERE scddbh=$ddbh";
    //$dbh->exec($sql);
    $dbh->exec($dsql);
    echo "<script>alert('已交成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>"; 
}



} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}





?>

