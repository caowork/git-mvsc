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
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->

 </head>
 <body>
 <div class="main">
 	<div class="content">
 <div class="bt">{$title}</div>
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

<!-- {foreach from=$arr item=row}
{$row[0][5]}
{/foreach} -->

{section name=v loop=$arr}

 <div class="main_list_li">
<ul class="tckongzhi">
  <li class="listli scddbh">{$arr[v].scddbh}</li>
  <li class="listli">{$arr[v].sccnlh}</li>
  <li class="listli">{$arr[v].scjjdata}</li>
  <li class="listli">{$arr[v].scjhsl}</li>
  <li class="listli">{$arr[v].scklsl}</li>
  <li class="listli">{$arr[v].sctlsl}</li>
  <li class="listli">{$arr[v].ddrqtime|date_format:"%Y-%m-%d"}</li>
  <li class="listli">{$arr[v].jhrqtime|date_format:"%Y-%m-%d"}</li>
  <li class="listli">{$arr[v].wjm}</li>
  <li class="listli">{$arr[v].gyyqlist}</li>
  <li class="listli">{$arr[v].xdmj}</li>
  <li class="listli"><a href="javascript:void(0);" class="tijiao">递交</a>&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" class="end">完成</a></li>
 <div class="tijiao_box">
<form action="tijiao.php" method="post" name="form">
 <h3>递交任务</h3>
 <ul>
  <li><label class="col-sm-2">订单编号:</label><input class="form-input inpu265" name="ddbh"  type="text" value="{$arr[v].scddbh}"></li>
  <li><label class="col-sm-2">厂内料号:</label><input class="form-input inpu265" name="cnlh"  type="text" value="{$arr[v].sccnlh}"></li>
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
     <li><label class="col-sm-2">总数量:</label><span class="zsl">{$arr[v].sctlsl}</span></li>
  <li><label class="col-sm-2">剩余数量:</label><input class="form-input sysl inpu265" name="sysl"  type="text" value="" readonly="readonly"></li>
  <li><label class="col-sm-2">递交数量:</label><input class="form-input ztjsl inpu265"  type="text" value="">
                               <input class="form-input ztjslx inpu265" name="tjsl"  type="text" value="" readonly="readonly"></li>
  <li><label class="col-sm-2">制作工时:</label><input class="form-input inpu265" name="czgs"  type="text"></li>
  <li><label class="col-sm-2">操作人:</label><input class="form-input inpu265" name="czname"  type="text"></li>
  <li><label class="col-sm-2">MRB:</label><input class="form-input inpu265" name="mrb" value="0" type="text"></li>
  <li><label class="col-sm-2">备注:</label><input class="form-input inpu265" name="bzcont"  type="text"></li>
  <li><label class="col-sm-2">本部门:</label><input class="form-input inpu265" name="bbm" value="开料"  type="text" readonly="readonly"></li>
  <li><label class="col-sm-2">递交部门参数:</label><input class="form-input inpu265 djbm" name="djbm"  type="text" readonly="readonly"></li>
 </ul>
 <input type="submit" value="确认递交" class="zfsub">
</form>
</div>

 <div class="tijiao_end">
<form action="end.php" method="post" name="form">
 <h3>完成转交</h3>
 <ul>
  <li><label class="col-sm-2">订单编号:</label><input class="form-input inpu265" name="ddbh"  type="text" value="{$arr[v].scddbh}"></li>
  <li><label class="col-sm-2">厂内料号:</label><input class="form-input inpu265" name="cnlh"  type="text" value="{$arr[v].sccnlh}"></li>
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
<li><label class="col-sm-2">本部门:</label><input class="form-input inpu265" name="bbm" value="a"  type="text" readonly="readonly"></li>
 </ul>
 <input type="submit" value="确认递交" class="zfsub">
</form>
</div>
</ul>
<div class="main_list_tj">
   <ul class="tckongzhi">
  {section name=y loop=$arr1}
{if {$arr1[y].scddbh} eq {$arr[v].scddbh}}


<li class="listlix">{$arr1[y].kl_czname},&nbsp;
于&nbsp;{$arr1[y].kl_zptime|date_format:"%Y-%m-%d %H:%I"}时&nbsp;
已将订单:{$arr1[y].scddbh},中的 <b>{$arr1[y].kl_zpsl}</b>物料
递交给{$arr1[y].kl_status}&nbsp;工序,该订单目前还剩余
<span class="tjsy"><b>{$arr1[y].kl_sysl}</b></span>件未完成。
<span class="bzxx">备注：{$arr1[y].kl_bzcont}</span>
</li>

{else}

{/if}
  {/section}

</ul>
</div>

</div>
{/section}
</div>
<div class="clearfix"></div>
</div>
</div>








<script src="/mvcs/style/jquery-3.4.1.min.js" ></script>
<script src="/mvcs/style/style.js" ></script>
</body>
</html>