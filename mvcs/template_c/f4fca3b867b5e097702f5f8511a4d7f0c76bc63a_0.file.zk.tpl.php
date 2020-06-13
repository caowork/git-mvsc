<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-12 13:46:10
  from 'F:\phpstudy_pro\WWW\cgk\public\mvcs\tpl\zk.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee316a28eb849_48147512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4fca3b867b5e097702f5f8511a4d7f0c76bc63a' => 
    array (
      0 => 'F:\\phpstudy_pro\\WWW\\cgk\\public\\mvcs\\tpl\\zk.tpl',
      1 => 1591935641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee316a28eb849_48147512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\phpstudy_pro\\WWW\\cgk\\public\\mvcs\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<title>订单管理</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">
<link href="/mvcs/style/gx.css" rel="stylesheet">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
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
 <div class="main">
 	<div class="content">
 <div class="bt"><span class="gxpdt"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>管理</div>
 <div class="main_tab">
  <ul>
  	<li>全部</li>
  	<li>待生产</li>
  	<li>生产中</li>
  	<li>已递交</li>
  	<li>已完成</li>
  </ul>
 </div>
 <div class="main_bt">
<ul>
 <li>订单号</li>
 <li>厂内料号</li>
 <li>加急</li>
 <li>交货数量</li>
 <li>开料数量</li>
 <li>投料数量</li>
 <li>订单日期</li>
 <li>交货日期</li>
 <li>文件名</li>
 <li>工艺</li>
 <li>下单面积</li>
 <li>操作</li>
 </ul>
 </div>

 <div class="main_list">

<!-- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
echo $_smarty_tpl->tpl_vars['row']->value[0][5];?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> -->


<?php
$__section_v_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr1']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_v_0_total = $__section_v_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_v'] = new Smarty_Variable(array());
if ($__section_v_0_total !== 0) {
for ($__section_v_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] = 0; $__section_v_0_iteration <= $__section_v_0_total; $__section_v_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']++){
?>
 <div class="main_list_li">
<ul class="tckongzhi">
  <li class="listli scddbh"><?php echo $_smarty_tpl->tpl_vars['arr1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ddbh'];?>
</li>
  <li class="listli"><?php echo $_smarty_tpl->tpl_vars['arr1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['sccnlh'];?>
</li>
  <li class="listli"><?php echo $_smarty_tpl->tpl_vars['arr1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['scjjdata'];?>
</li>
  <li class="listli"><?php echo $_smarty_tpl->tpl_vars['arr1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['scjhsl'];?>
</li>
  <li class="listli"><?php echo $_smarty_tpl->tpl_vars['arr1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['scklsl'];?>
</li>
  <li class="listli"><?php echo $_smarty_tpl->tpl_vars['arr1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['sctlsl'];?>
</li>
  <li class="listli"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arr1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ddrqtime'],"%Y-%m-%d");?>
</li>
  <li class="listli"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arr1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['jhrqtime'],"%Y-%m-%d");?>
</li>
  <li class="listli"><?php echo $_smarty_tpl->tpl_vars['arr1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['wjm'];?>
</li>
  <li class="listli"><?php echo $_smarty_tpl->tpl_vars['arr1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['gyyqlist'];?>
</li>
  <li class="listli"><?php echo $_smarty_tpl->tpl_vars['arr1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['xdmj'];?>
</li>
  <li class="listli"><a href="javascript:void(0);" class="tijiao">递交</a>&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" class="end">完成</a></li>
 <div class="tijiao_box">
<form action="zk_tijiao.php" method="post" name="form">
 <h3>递交任务</h3>
 <ul>
  <li><label class="col-sm-2">订单编号:</label><input class="form-input inpu265" name="ddbh"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['arr1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['scddbh'];?>
"></li>
  <li><label class="col-sm-2">厂内料号:</label><input class="form-input inpu265" name="cnlh"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['arr1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['sccnlh'];?>
"></li>
  <li><label class="col-sm-2">指派工序:</label><select name="zpgx" class="inpu265 zpgx">
<option>-请选择-</option>
<option>开料</option>
<option>内层线路</option>
<option>钻孔</option>
<option>线路</option>
<option>电镀</option>
<option>阻焊</option>
<option>文字</option>
<option>喷锡</option>
<option>抗氧化</option>
<option>沉金</option>
<option>铣边</option>
<option>V割</option>
<option>测试</option>
<option>包装</option>
</select></li>
     <li><label class="col-sm-2">总数量:</label><span class="zsl"><?php echo $_smarty_tpl->tpl_vars['arr1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['sctlsl'];?>
</span></li>
  <li><label class="col-sm-2">剩余数量:</label><input class="form-input sysl inpu265" name="sysl"  type="text" value="" readonly="readonly"></li>
  <li><label class="col-sm-2">递交数量:</label><input class="form-input ztjsl inpu265"  type="text" value="">
                               <input class="form-input ztjslx inpu265" name="tjsl"  type="text" value="" readonly="readonly"></li>
  <li><label class="col-sm-2">制作工时:</label><input class="form-input inpu265" name="czgs"  type="text"></li>
  <li><label class="col-sm-2">操作人:</label><input class="form-input inpu265" name="czname"  type="text"></li>
  <li><label class="col-sm-2">MRB:</label><input class="form-input inpu265" name="mrb" value="0" type="text"></li>
  <li><label class="col-sm-2">备注:</label><input class="form-input inpu265" name="bzcont"  type="text"></li>
  <li><label class="col-sm-2">本部门:</label><input class="form-input inpu265" name="bbm" value="钻孔"  type="text"></li>
  <li><label class="col-sm-2">递交部门参数:</label><input class="form-input inpu265 djbm" name="djbm"  type="text" readonly="readonly"></li>
 </ul>
 <input type="submit" value="确认递交" class="zfsub">
</form>
</div>

 <div class="tijiao_end">
<form action="end.php" method="post" name="form">
 <h3>完成转交</h3>
 <ul>
  <li><label class="col-sm-2">订单编号:</label><input class="form-input inpu265" name="ddbh"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['scddbh'];?>
"></li>
  <li><label class="col-sm-2">厂内料号:</label><input class="form-input inpu265" name="cnlh"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['sccnlh'];?>
"></li>
  <li><label class="col-sm-2">转交工序:</label><select name="zpgx" class="inpu265 zpgx">
<option>-请选择-</option>
<option>开料</option>
<option>内层线路</option>
<option>钻孔</option>
<option>线路</option>
<option>电镀</option>
<option>阻焊</option>
<option>文字</option>
<option>喷锡</option>
<option>抗氧化</option>
<option>沉金</option>
<option>铣边</option>
<option>V割</option>
<option>测试</option>
<option>包装</option>
</select></li>
<li><label class="col-sm-2">递交部门参数:</label><input class="form-input inpu265 djbm" name="djbm"  type="text" readonly="readonly"></li>
 </ul>
 <input type="submit" value="确认递交" class="zfsub">
</form>
</div>
</ul>
<div class="main_list_tj">
   <ul class="tckongzhi">
  <?php
$__section_y_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_y_1_total = $__section_y_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_y'] = new Smarty_Variable(array());
if ($__section_y_1_total !== 0) {
for ($__section_y_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_y']->value['index'] = 0; $__section_y_1_iteration <= $__section_y_1_total; $__section_y_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_y']->value['index']++){
ob_start();
echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_y']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_y']->value['index'] : null)]['kl_ddbh'];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['arr1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_v']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_v']->value['index'] : null)]['ddbh'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable1 == $_prefixVariable2) {?>

<li class="listlix">
<span class="jsbt"></span>
<span class="jsbm"><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_y']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_y']->value['index'] : null)]['kl_bm'];?>
</span>&nbsp;工序
<?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_y']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_y']->value['index'] : null)]['kl_czname'];?>
,&nbsp;
于&nbsp;
<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_y']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_y']->value['index'] : null)]['kl_zptime'],"%Y-%m-%d %H:%I");?>
时
&nbsp;
将订单:<?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_y']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_y']->value['index'] : null)]['kl_ddbh'];?>
,中的 
<span class="djsl"><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_y']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_y']->value['index'] : null)]['kl_zpsl'];?>
</span>
物料
<span class="jswz1">递交给</span>
<span class="gxpd"><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_y']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_y']->value['index'] : null)]['kl_status'];?>
</span>&nbsp;
<span class="jswz2"></span>
<span class="tjsy"><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_y']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_y']->value['index'] : null)]['kl_sysl'];?>
</span>
件未完成。<span class="bzxx">备注：<?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_y']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_y']->value['index'] : null)]['kl_bzcont'];?>
</span>
</li>




<?php } else { ?>

<?php }?>
  <?php
}
}
?>

</ul>
</div>

</div>
<?php
}
}
?>
</div>
<div class="clearfix"></div>
</div>
</div>








<?php echo '<script'; ?>
 src="/mvcs/style/jquery-3.4.1.min.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/mvcs/style/zk.js" ><?php echo '</script'; ?>
>
</body>
</html><?php }
}
