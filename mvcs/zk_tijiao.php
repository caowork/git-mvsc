<meta charset="utf-8">
<?php


$ddbh=$_POST["ddbh"];
$cnlh=$_POST["cnlh"];
$sysl=$_POST["sysl"];
$zpsl=$_POST["tjsl"];
$scgs=$_POST["czgs"];
$czname=$_POST["czname"];
$mrb=$_POST["mrb"];
$bzcont=$_POST["bzcont"];
$zpgx=$_POST["zpgx"];
$sysl=$_POST["sysl"];
$bbm=$_POST["bbm"];
$djbm=$_POST["djbm"];

$time=date("Y-m-d G:i:s");//获取时间，G为24小时制

      require('db/db.php');


try {
    $dbh = new PDO($dsn, $user, $pass); //初始化一个PDO对象

if ($djbm == 'zk') {
    echo "<script>alert('不能提交给自己部门!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>"; 
}
if ($djbm == 'xl') {
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO fa_ykjp_zk (id, kl_ddbh, kl_cnlh, kl_zptime, kl_zpsl, kl_scgs, kl_czname, kl_mrb, kl_bzcont, kl_status, kl_sysl, kl_bm)
     VALUES (id, '$ddbh', '$cnlh', '$time', '$zpsl', '$scgs', '$czname', '$mrb', '$bzcont', '$zpgx', '$sysl', '$bbm')";
     $dsql = "INSERT INTO fa_ykjp_xl (id, kl_ddbh, kl_cnlh, kl_zptime, kl_zpsl, kl_scgs, kl_czname, kl_mrb, kl_bzcont, kl_status, kl_sysl, kl_bm)
     VALUES (id, '$ddbh', '$cnlh', '$time', '$zpsl', '$scgs', '$czname', '$mrb', '$bzcont', '$zpgx', '$sysl', '$bbm')";
     $fsql = "UPDATE fa_ykjp_sclc SET lcxs=CONCAT('d',lcxs) WHERE scddbh=$ddbh";
    //$dsql = "UPDATE fa_ykjp_sclc SET status='$zpgx' WHERE scddbh=$ddbh";
    $dbh->exec($sql);
    $dbh->exec($dsql);
    $dbh->exec($fsql);
    echo "<script>alert('递交成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>"; 
}





} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}





?>

