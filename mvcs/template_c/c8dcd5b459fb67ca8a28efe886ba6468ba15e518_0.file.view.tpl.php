<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-12 16:49:58
  from 'F:\phpstudy_pro\WWW\cgk\public\mvcs\tpl\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee341b69f1bd4_86620598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8dcd5b459fb67ca8a28efe886ba6468ba15e518' => 
    array (
      0 => 'F:\\phpstudy_pro\\WWW\\cgk\\public\\mvcs\\tpl\\view.tpl',
      1 => 1591951796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee341b69f1bd4_86620598 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\phpstudy_pro\\WWW\\cgk\\public\\mvcs\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'F:\\phpstudy_pro\\WWW\\cgk\\public\\mvcs\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<title>订单管理</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">
<link href="style/gx.css" rel="stylesheet">

<link rel="shortcut icon" href="../assets/img/favicon.ico">
<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="/assets/js/html5shiv.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/assets/js/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->

 </head>
 <body>
<?php
$__section_v_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['row']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_v_0_total = $__section_v_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_v'] = new Smarty_Variable(array());
if ($__section_v_0_total !== 0) {
for ($__section_v_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] = 0; $__section_v_0_iteration <= $__section_v_0_total; $__section_v_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']++){
?>
 <div class="main">
 	<div class="content">

<?php echo $_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['id'];?>

<table width="950" border="1">
  <tr>
    <td colspan="8" width="410">DS 生产流程制作指示</td>
    <td colspan="4">文件名：<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['wjm']);?>
</td>
    <td colspan="4"><?php echo $_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['scddztdata'];?>
</td>
  </tr>
  <tr>
    <td colspan="7">
        订单编号: <?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['scddbh']);?>


    </td>
    <td>厂内料号: <?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['sccnlh']);?>
</td>
    <td colspan="3" class="bgh">下单日期:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ddrqtime'],"%Y-%m-%d");?>
</td>
    <td colspan="3" class="bgh">交货日期:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['jhrqtime'],"%Y-%m-%d");?>
</td>
    <td colspan="2">是否加急:<?php echo $_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['scjjdata'];?>
</td>
  </tr>
  
  <tr>
    <td colspan="4">交货数量:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['scjhsl']);?>
 pcs</td>
    <td colspan="4">开料数量:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['scklsl']);?>
</td>
    <td colspan="4">开料尺寸:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['scklccc']);?>
*<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['scklcck']);?>
</td>
    <td colspan="4">投料数量:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['sctlsl']);?>
 PNL</td>
  </tr>
  <tr>
    <td colspan="4" class="bgh">工艺:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['gyyqlist']);?>
</td>
    <td colspan="4">单片尺寸:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['scdpccc']);?>
*<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['scdpcck']);?>
</td>
    <td colspan="4">连片尺寸:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['sclpccc']);?>
*<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['sclpcck']);?>
</td>
    <td colspan="4" class="bgh">1PNL=<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['scbpnl']);?>
  SET/1SET= <?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['scset']);?>
 PCS</td>
  </tr>
  <tr>
    <td colspan="4">板材类型:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['scbclx']);?>
</td>
    <td colspan="4">成品板厚:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['sccpbh']);?>
 ±10%MM</td>
    <td colspan="2">黑菲林张数:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['schfl']);?>
</td>
    <td colspan="2">线路:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['schflz']);?>
 张</td>
    <td colspan="2">阻焊:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['sczh']);?>
</td>
    <td colspan="2">字符:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['sczf']);?>
</td>
  </tr>
</table>


<table width="950" border="1">
  <tr>
    <td colspan="8" class="bgss">二:工序流程: </td>
    <td colspan="8" class="bgss">三：过板记录</td>
  </tr>
  <tr>
    <td width="32" class="bgs">序号</td>
    <td colspan="2" class="bgs">工序</td>
    <td colspan="5" class="bgs">操作指示</td>
    <td class="bgs">数量</td>
    <td colspan="2" class="bgs">时间</td>
    <td colspan="2" class="bgs">操作人</td>
    <td class="bgs">MRB</td>
    <td colspan="2" class="bgs">备注</td>
  </tr>
  <tr>
    <td rowspan="2" class="bgs">1</td>
    <td colspan="2" rowspan="2">开料</td>
    <td colspan="5">开料板厚:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['aklbh']);?>
</td>
    <td rowspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['asl']);?>
</td>
    <td colspan="2" rowspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['asj']);?>
</td>
    <td colspan="2" rowspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['aczr']);?>
</td>
    <td rowspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['amrb']);?>
</td>
    <td colspan="2" rowspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['agz']);?>
</td>
  </tr>
  <tr>
    <td colspan="5"><?php echo $_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['aklkbdate'];?>
  150  ℃/4小时</td>
  </tr>
  <tr>
    <td class="bgs">2</td>
    <td colspan="2">一次钻孔</td>
    <td colspan="5">最小孔:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['bkh']);?>
</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['bsl']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['bsj']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['bczr']);?>
</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['bmrb']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['bgz']);?>
</td>
  </tr>
  <tr>
    <td class="bgs">3</td>
    <td colspan="2">孔化</td>
    <td colspan="5"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ckh']);?>
</td>
    <td rowspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['csl']);?>
</td>
    <td colspan="2" rowspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['csj']);?>
</td>
    <td colspan="2" rowspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['cczr']);?>
</td>
    <td rowspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['cmrb']);?>
</td>
    <td colspan="2" rowspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['cgz']);?>
</td>
  </tr>
  <tr>
    <td class="bgs">4</td>
    <td colspan="2">检验</td>
    <td colspan="5"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['djy']);?>
</td>
  </tr>
  <tr>
    <td rowspan="4" class="bgs">5</td>
    <td rowspan="4">线路转移</td>
    <td>涂布</td>
    <td colspan="5"><?php echo $_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['eadata'];?>
</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['easl']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['easj']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['eaczr']);?>
</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['eamrb']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['eagz']);?>
</td>
  </tr>
  <tr>
    <td>对位</td>
    <td colspan="5">最小线宽:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ebdw']);?>
</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ebsl']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ebsj']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ebczr']);?>
</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ebmrb']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ebgz']);?>
</td>
  </tr>
  <tr>
    <td>显影</td>
    <td colspan="5">最小线距:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ecxy']);?>
</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ecsl']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ecsj']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ecczr']);?>
</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ecmrb']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ecgz']);?>
</td>
  </tr>
  <tr>
    <td>检验</td>
    <td colspan="5"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ecjy']);?>
</td>
    <td colspan="8">&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="3" class="bgs">6</td>
    <td colspan="2" rowspan="3">图形电镀</td>
    <td colspan="5">电镀面积:GTL:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['fgtl']);?>
 GBL:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['fgbl']);?>
</td>
    <td rowspan="3"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['fsl']);?>
</td>
    <td colspan="2" rowspan="3"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['fsj']);?>
</td>
    <td colspan="2" rowspan="3"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['fczr']);?>
</td>
    <td rowspan="3"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['fmrb']);?>
</td>
    <td colspan="2" rowspan="3"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['fgz']);?>
</td>
  </tr>
  <tr>
    <td colspan="5">材质:<?php echo $_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['fczdata'];?>
</td>
  </tr>
  <tr>
    <td colspan="5">加镀铜厚:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['fjdth']);?>
 成品铜厚:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['fcpth']);?>
</td>
  </tr>
  <tr>
    <td rowspan="2" class="bgs">7</td>
    <td colspan="2" rowspan="2">蚀刻/检验</td>
    <td colspan="5">最小线宽:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['gzxxk']);?>
&nbsp;&nbsp;MM&nbsp;&nbsp;原稿</td>
    <td rowspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['gsl']);?>
</td>
    <td colspan="2" rowspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['gsj']);?>
</td>
    <td colspan="2" rowspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['gczr']);?>
</td>
    <td rowspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['gmrb']);?>
</td>
    <td colspan="2" rowspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ggz']);?>
</td>
  </tr>
  <tr>
    <td colspan="5">最小线距:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['gzxxj']);?>
MM&nbsp;&nbsp;原稿</td>
  </tr>
  <tr>
    <td class="bgs">&nbsp;</td>
    <td colspan="2">中测</td>
    <td colspan="5"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['hzc']);?>
</td>
    <td colspan="8">&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="3" class="bgs">8</td>
    <td colspan="2">防焊</td>
    <td colspan="3">涂布面数:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['iatbms']);?>
</td>
    <td colspan="2">颜色:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['iays']);?>
</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['iasl']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['iasj']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['iaczr']);?>
</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['iamrb']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['iagz']);?>
</td>
  </tr>
  <tr>
    <td colspan="2">对位</td>
    <td colspan="5">过孔阻焊:<?php echo $_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ibgkzh'];?>
</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ibsl']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ibsj']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ibczr']);?>
</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ibmrb']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ibgz']);?>
</td>
  </tr>
  <tr>
    <td colspan="2">显影</td>
    <td colspan="5">&nbsp;</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['icsl']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['icsj']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['icczr']);?>
</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['icmrb']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['icgz']);?>
</td>
  </tr>
  <tr>
    <td rowspan="3" class="bgs">&nbsp;</td>
    <td colspan="2" rowspan="2">文字</td>
    <td colspan="3">菲林面数:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['idflms']);?>
</td>
    <td colspan="2">颜色:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['idys']);?>
</td>
    <td rowspan="3"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['idsl']);?>
</td>
    <td colspan="2" rowspan="3"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['idsj']);?>
</td>
    <td colspan="2" rowspan="3"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['idczr']);?>
</td>
    <td rowspan="3"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['idmrb']);?>
</td>
    <td colspan="2" rowspan="3"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['idgz']);?>
</td>
  </tr>
  <tr>
    <td colspan="5">加周期:<?php echo $_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['idzqdata'];?>
</td>
  </tr>
  <tr>
    <td colspan="2">检验</td>
    <td colspan="5"><?php echo $_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['idbzdata'];?>
</td>
  </tr>
  <tr>
    <td rowspan="2" class="bgs">9</td>
    <td colspan="2" rowspan="2">表面处理   /检验</td>
    <td colspan="5">表面工艺:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['gyyqlist']);?>
</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['jsl']);?>
</td>
    <td colspan="2"> <?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['jsj']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['jczr']);?>
</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['jmrb']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['jgz']);?>
</td>
  </tr>
  <tr>
    <td colspan="5">GTL:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['jgtl']);?>
 GBL:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['jgbl']);?>
</td>
    <td></td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td class="bgs">&nbsp;</td>
    <td colspan="2">二钻</td>
    <td colspan="5">文件名:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['jwjm']);?>
</td>
    <td colspan="8">&nbsp;</td>
  </tr>
  <tr>
    <td class="bgs">&nbsp;</td>
    <td colspan="2">锣外框</td>
    <td colspan="5">铁边周长:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['jlwk']);?>
</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['jlsl']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['jlsj']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['jlczr']);?>
</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['jlmrb']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['jlgz']);?>
</td>
  </tr>
  <tr>
    <td rowspan="6" class="bgs">10</td>
    <td colspan="2" rowspan="6">成型</td>
    <td colspan="5"><?php echo $_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['kvcutbdata'];?>
</td>
    <td rowspan="5"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ksl']);?>
</td>
    <td colspan="2" rowspan="5"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ksj']);?>
</td>
    <td colspan="2" rowspan="5"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['kczr']);?>
</td>
    <td rowspan="5"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['kmrb']);?>
</td>
    <td colspan="2" rowspan="5"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['kgz']);?>
</td>
  </tr>
  <tr>
    <td colspan="5">新开模日期:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['kxkmtime'],"%Y-%m-%d");?>
</td>
  </tr>
  <tr>
    <td colspan="2">CNC:<?php echo $_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['kcncdata'];?>
</td>
    <td colspan="3">外型公差:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['kwxgc']);?>
MM</td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['kvcutadata'];?>
V-cut</td>
    <td colspan="3">余深:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['kyc']);?>
</td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['kvcutbdata'];?>
V-cut</td>
    <td colspan="3">横:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['kheng']);?>
竖:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['kshu']);?>
</td>
  </tr>
  <tr>
    <td colspan="3">金手指斜:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['kxb']);?>
</td>
    <td colspan="2">深:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['kshen']);?>
</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['kasl']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['kasj']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['kaczr']);?>
</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['kamrb']);?>
</td>
    <td colspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['kagz']);?>
</td>
  </tr>
  <tr>
    <td rowspan="3" class="bgs">11</td>
    <td colspan="2" rowspan="3">测试/   终检</td>
    <td colspan="5">测试方式:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['lcsfs']);?>
</td>
    <td rowspan="3"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['lsl']);?>
</td>
    <td colspan="2" rowspan="3"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['lsj']);?>
</td>
    <td colspan="2" rowspan="3"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['lczr']);?>
</td>
    <td rowspan="3"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['lmrb']);?>
</td>
    <td colspan="2" rowspan="3"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['lgz']);?>
</td>
  </tr>
  <tr>
    <td colspan="5">治具编号:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['lzjbh']);?>
</td>
  </tr>
  <tr>
    <td colspan="5">新开治日期:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['lkzrqtime'],"%Y-%m-%d");?>
</td>
  </tr>
  <tr>
    <td rowspan="2" class="bgs">12</td>
    <td colspan="2" rowspan="2">包装/入货</td>
    <td colspan="5">纸箱尺寸:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['mzxcc']);?>
</td>
    <td rowspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['msl']);?>
</td>
    <td colspan="2" rowspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['msj']);?>
</td>
    <td colspan="2" rowspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['mczr']);?>
</td>
    <td rowspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['mmrb']);?>
</td>
    <td colspan="2" rowspan="2"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['mgz']);?>
</td>
  </tr>
  <tr>
    <td colspan="3">每包set:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['mmb']);?>
</td>
    <td>每层(包):<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['mmc']);?>
</td>
    <td>每箱(层):<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['mmx']);?>
</td>
  </tr>
  <tr>
    <td>备注</td>
    <td colspan="15"><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['nbzcontent']);?>
</td>
  </tr>
  <tr>
    <td colspan="5">工程制作:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['qgczz']);?>
</td>
    <td colspan="5">工程审核:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['qgcsh']);?>
</td>
    <td colspan="6">工程计划:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['qgcjh']);?>
</td>
  </tr>
  <tr>
    <td colspan="16">四:开料指示:</td>
  </tr>
  <tr>
    <td colspan="5">板材类型:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['blleixing']);?>
</td>
    <td colspan="5">板材厂商:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['pbccs']);?>
</td>
    <td colspan="6">大料尺寸:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['pdccl']);?>
</td>
  </tr>
  <tr>
    <td colspan="5">交货数量:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['scjhsl']);?>
</td>
    <td colspan="5">1张大料=<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['pdliao']);?>
</td>
    <td colspan="6">投料数量:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['sctlsl']);?>
</td>
  </tr>
  <tr>
    <td colspan="5">开料尺寸:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['scklsl']);?>
</td>
    <td colspan="5">投料面积：<span class="stlmj"></span>㎡</td>
    <td colspan="6">PNL拼板数量:<span id="spbsl"></span>PCS/PNL</td>
  </tr>
  <tr>
    <td colspan="5">共需开大料:<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['pkdl']);?>
 张<?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ppnl']);?>
 PNL</td>
    <td colspan="5">成品面积：<span id="scpmj"></span>㎡</td>
    <td colspan="6">板料利用率：<span id="sbllyl"></span>%</td>
  </tr>
  <tr>
    <td colspan="2">剩余边料：</td>
    <td>长：</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['f52']);?>
</td>
    <td>宽：</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['h52']);?>
</td>
    <td>数量：</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['k52']);?>
</td>
    <td>张</td>
    <td>长：</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['p52']);?>
</td>
    <td>宽：</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['u52']);?>
</td>
    <td>数量：</td>
    <td><?php echo htmlentities($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['z52']);?>
</td>
    <td>张</td>
  </tr>
  <tr>
    <td colspan="16">开料图:<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['row']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['qkltcontent'],"fixed","inherit");?>
</td>
  </tr>


</table>


<div class="clearfix"></div>
</div>
</div>







<?php
}
}
echo '<script'; ?>
 src="style/jquery-3.4.1.min.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="style/view.js" ><?php echo '</script'; ?>
>
</body>
</html><?php }
}
