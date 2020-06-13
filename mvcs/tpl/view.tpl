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
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->

 </head>
 <body>
{section name=v loop=$row}
 <div class="main">
 	<div class="content">

{$row[v].id}
<table width="950" border="1">
  <tr>
    <td colspan="8" width="410">DS 生产流程制作指示</td>
    <td colspan="4">文件名：{$row[v].wjm|htmlentities}</td>
    <td colspan="4">{$row[v].scddztdata}</td>
  </tr>
  <tr>
    <td colspan="7">
        订单编号: {$row[v].scddbh|htmlentities}

    </td>
    <td>厂内料号: {$row[v].sccnlh|htmlentities}</td>
    <td colspan="3" class="bgh">下单日期:{$row[v].ddrqtime|date_format:"%Y-%m-%d"}</td>
    <td colspan="3" class="bgh">交货日期:{$row[v].jhrqtime|date_format:"%Y-%m-%d"}</td>
    <td colspan="2">是否加急:{$row[v].scjjdata}</td>
  </tr>
  
  <tr>
    <td colspan="4">交货数量:{$row[v].scjhsl|htmlentities} pcs</td>
    <td colspan="4">开料数量:{$row[v].scklsl|htmlentities}</td>
    <td colspan="4">开料尺寸:{$row[v].scklccc|htmlentities}*{$row[v].scklcck|htmlentities}</td>
    <td colspan="4">投料数量:{$row[v].sctlsl|htmlentities} PNL</td>
  </tr>
  <tr>
    <td colspan="4" class="bgh">工艺:{$row[v].gyyqlist|htmlentities}</td>
    <td colspan="4">单片尺寸:{$row[v].scdpccc|htmlentities}*{$row[v].scdpcck|htmlentities}</td>
    <td colspan="4">连片尺寸:{$row[v].sclpccc|htmlentities}*{$row[v].sclpcck|htmlentities}</td>
    <td colspan="4" class="bgh">1PNL={$row[v].scbpnl|htmlentities}  SET/1SET= {$row[v].scset|htmlentities} PCS</td>
  </tr>
  <tr>
    <td colspan="4">板材类型:{$row[v].scbclx|htmlentities}</td>
    <td colspan="4">成品板厚:{$row[v].sccpbh|htmlentities} ±10%MM</td>
    <td colspan="2">黑菲林张数:{$row[v].schfl|htmlentities}</td>
    <td colspan="2">线路:{$row[v].schflz|htmlentities} 张</td>
    <td colspan="2">阻焊:{$row[v].sczh|htmlentities}</td>
    <td colspan="2">字符:{$row[v].sczf|htmlentities}</td>
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
    <td colspan="5">开料板厚:{$row[v].aklbh|htmlentities}</td>
    <td rowspan="2">{$row[v].asl|htmlentities}</td>
    <td colspan="2" rowspan="2">{$row[v].asj|htmlentities}</td>
    <td colspan="2" rowspan="2">{$row[v].aczr|htmlentities}</td>
    <td rowspan="2">{$row[v].amrb|htmlentities}</td>
    <td colspan="2" rowspan="2">{$row[v].agz|htmlentities}</td>
  </tr>
  <tr>
    <td colspan="5">{$row[v].aklkbdate}  150  ℃/4小时</td>
  </tr>
  <tr>
    <td class="bgs">2</td>
    <td colspan="2">一次钻孔</td>
    <td colspan="5">最小孔:{$row[v].bkh|htmlentities}</td>
    <td>{$row[v].bsl|htmlentities}</td>
    <td colspan="2">{$row[v].bsj|htmlentities}</td>
    <td colspan="2">{$row[v].bczr|htmlentities}</td>
    <td>{$row[v].bmrb|htmlentities}</td>
    <td colspan="2">{$row[v].bgz|htmlentities}</td>
  </tr>
  <tr>
    <td class="bgs">3</td>
    <td colspan="2">孔化</td>
    <td colspan="5">{$row[v].ckh|htmlentities}</td>
    <td rowspan="2">{$row[v].csl|htmlentities}</td>
    <td colspan="2" rowspan="2">{$row[v].csj|htmlentities}</td>
    <td colspan="2" rowspan="2">{$row[v].cczr|htmlentities}</td>
    <td rowspan="2">{$row[v].cmrb|htmlentities}</td>
    <td colspan="2" rowspan="2">{$row[v].cgz|htmlentities}</td>
  </tr>
  <tr>
    <td class="bgs">4</td>
    <td colspan="2">检验</td>
    <td colspan="5">{$row[v].djy|htmlentities}</td>
  </tr>
  <tr>
    <td rowspan="4" class="bgs">5</td>
    <td rowspan="4">线路转移</td>
    <td>涂布</td>
    <td colspan="5">{$row[v].eadata}</td>
    <td>{$row[v].easl|htmlentities}</td>
    <td colspan="2">{$row[v].easj|htmlentities}</td>
    <td colspan="2">{$row[v].eaczr|htmlentities}</td>
    <td>{$row[v].eamrb|htmlentities}</td>
    <td colspan="2">{$row[v].eagz|htmlentities}</td>
  </tr>
  <tr>
    <td>对位</td>
    <td colspan="5">最小线宽:{$row[v].ebdw|htmlentities}</td>
    <td>{$row[v].ebsl|htmlentities}</td>
    <td colspan="2">{$row[v].ebsj|htmlentities}</td>
    <td colspan="2">{$row[v].ebczr|htmlentities}</td>
    <td>{$row[v].ebmrb|htmlentities}</td>
    <td colspan="2">{$row[v].ebgz|htmlentities}</td>
  </tr>
  <tr>
    <td>显影</td>
    <td colspan="5">最小线距:{$row[v].ecxy|htmlentities}</td>
    <td>{$row[v].ecsl|htmlentities}</td>
    <td colspan="2">{$row[v].ecsj|htmlentities}</td>
    <td colspan="2">{$row[v].ecczr|htmlentities}</td>
    <td>{$row[v].ecmrb|htmlentities}</td>
    <td colspan="2">{$row[v].ecgz|htmlentities}</td>
  </tr>
  <tr>
    <td>检验</td>
    <td colspan="5">{$row[v].ecjy|htmlentities}</td>
    <td colspan="8">&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="3" class="bgs">6</td>
    <td colspan="2" rowspan="3">图形电镀</td>
    <td colspan="5">电镀面积:GTL:{$row[v].fgtl|htmlentities} GBL:{$row[v].fgbl|htmlentities}</td>
    <td rowspan="3">{$row[v].fsl|htmlentities}</td>
    <td colspan="2" rowspan="3">{$row[v].fsj|htmlentities}</td>
    <td colspan="2" rowspan="3">{$row[v].fczr|htmlentities}</td>
    <td rowspan="3">{$row[v].fmrb|htmlentities}</td>
    <td colspan="2" rowspan="3">{$row[v].fgz|htmlentities}</td>
  </tr>
  <tr>
    <td colspan="5">材质:{$row[v].fczdata}</td>
  </tr>
  <tr>
    <td colspan="5">加镀铜厚:{$row[v].fjdth|htmlentities} 成品铜厚:{$row[v].fcpth|htmlentities}</td>
  </tr>
  <tr>
    <td rowspan="2" class="bgs">7</td>
    <td colspan="2" rowspan="2">蚀刻/检验</td>
    <td colspan="5">最小线宽:{$row[v].gzxxk|htmlentities}&nbsp;&nbsp;MM&nbsp;&nbsp;原稿</td>
    <td rowspan="2">{$row[v].gsl|htmlentities}</td>
    <td colspan="2" rowspan="2">{$row[v].gsj|htmlentities}</td>
    <td colspan="2" rowspan="2">{$row[v].gczr|htmlentities}</td>
    <td rowspan="2">{$row[v].gmrb|htmlentities}</td>
    <td colspan="2" rowspan="2">{$row[v].ggz|htmlentities}</td>
  </tr>
  <tr>
    <td colspan="5">最小线距:{$row[v].gzxxj|htmlentities}MM&nbsp;&nbsp;原稿</td>
  </tr>
  <tr>
    <td class="bgs">&nbsp;</td>
    <td colspan="2">中测</td>
    <td colspan="5">{$row[v].hzc|htmlentities}</td>
    <td colspan="8">&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="3" class="bgs">8</td>
    <td colspan="2">防焊</td>
    <td colspan="3">涂布面数:{$row[v].iatbms|htmlentities}</td>
    <td colspan="2">颜色:{$row[v].iays|htmlentities}</td>
    <td>{$row[v].iasl|htmlentities}</td>
    <td colspan="2">{$row[v].iasj|htmlentities}</td>
    <td colspan="2">{$row[v].iaczr|htmlentities}</td>
    <td>{$row[v].iamrb|htmlentities}</td>
    <td colspan="2">{$row[v].iagz|htmlentities}</td>
  </tr>
  <tr>
    <td colspan="2">对位</td>
    <td colspan="5">过孔阻焊:{$row[v].ibgkzh}</td>
    <td>{$row[v].ibsl|htmlentities}</td>
    <td colspan="2">{$row[v].ibsj|htmlentities}</td>
    <td colspan="2">{$row[v].ibczr|htmlentities}</td>
    <td>{$row[v].ibmrb|htmlentities}</td>
    <td colspan="2">{$row[v].ibgz|htmlentities}</td>
  </tr>
  <tr>
    <td colspan="2">显影</td>
    <td colspan="5">&nbsp;</td>
    <td>{$row[v].icsl|htmlentities}</td>
    <td colspan="2">{$row[v].icsj|htmlentities}</td>
    <td colspan="2">{$row[v].icczr|htmlentities}</td>
    <td>{$row[v].icmrb|htmlentities}</td>
    <td colspan="2">{$row[v].icgz|htmlentities}</td>
  </tr>
  <tr>
    <td rowspan="3" class="bgs">&nbsp;</td>
    <td colspan="2" rowspan="2">文字</td>
    <td colspan="3">菲林面数:{$row[v].idflms|htmlentities}</td>
    <td colspan="2">颜色:{$row[v].idys|htmlentities}</td>
    <td rowspan="3">{$row[v].idsl|htmlentities}</td>
    <td colspan="2" rowspan="3">{$row[v].idsj|htmlentities}</td>
    <td colspan="2" rowspan="3">{$row[v].idczr|htmlentities}</td>
    <td rowspan="3">{$row[v].idmrb|htmlentities}</td>
    <td colspan="2" rowspan="3">{$row[v].idgz|htmlentities}</td>
  </tr>
  <tr>
    <td colspan="5">加周期:{$row[v].idzqdata}</td>
  </tr>
  <tr>
    <td colspan="2">检验</td>
    <td colspan="5">{$row[v].idbzdata}</td>
  </tr>
  <tr>
    <td rowspan="2" class="bgs">9</td>
    <td colspan="2" rowspan="2">表面处理   /检验</td>
    <td colspan="5">表面工艺:{$row[v].gyyqlist|htmlentities}</td>
    <td>{$row[v].jsl|htmlentities}</td>
    <td colspan="2"> {$row[v].jsj|htmlentities}</td>
    <td colspan="2">{$row[v].jczr|htmlentities}</td>
    <td>{$row[v].jmrb|htmlentities}</td>
    <td colspan="2">{$row[v].jgz|htmlentities}</td>
  </tr>
  <tr>
    <td colspan="5">GTL:{$row[v].jgtl|htmlentities} GBL:{$row[v].jgbl|htmlentities}</td>
    <td></td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td class="bgs">&nbsp;</td>
    <td colspan="2">二钻</td>
    <td colspan="5">文件名:{$row[v].jwjm|htmlentities}</td>
    <td colspan="8">&nbsp;</td>
  </tr>
  <tr>
    <td class="bgs">&nbsp;</td>
    <td colspan="2">锣外框</td>
    <td colspan="5">铁边周长:{$row[v].jlwk|htmlentities}</td>
    <td>{$row[v].jlsl|htmlentities}</td>
    <td colspan="2">{$row[v].jlsj|htmlentities}</td>
    <td colspan="2">{$row[v].jlczr|htmlentities}</td>
    <td>{$row[v].jlmrb|htmlentities}</td>
    <td colspan="2">{$row[v].jlgz|htmlentities}</td>
  </tr>
  <tr>
    <td rowspan="6" class="bgs">10</td>
    <td colspan="2" rowspan="6">成型</td>
    <td colspan="5">{$row[v].kvcutbdata}</td>
    <td rowspan="5">{$row[v].ksl|htmlentities}</td>
    <td colspan="2" rowspan="5">{$row[v].ksj|htmlentities}</td>
    <td colspan="2" rowspan="5">{$row[v].kczr|htmlentities}</td>
    <td rowspan="5">{$row[v].kmrb|htmlentities}</td>
    <td colspan="2" rowspan="5">{$row[v].kgz|htmlentities}</td>
  </tr>
  <tr>
    <td colspan="5">新开模日期:{$row[v].kxkmtime|date_format:"%Y-%m-%d"}</td>
  </tr>
  <tr>
    <td colspan="2">CNC:{$row[v].kcncdata}</td>
    <td colspan="3">外型公差:{$row[v].kwxgc|htmlentities}MM</td>
  </tr>
  <tr>
    <td colspan="2">{$row[v].kvcutadata}V-cut</td>
    <td colspan="3">余深:{$row[v].kyc|htmlentities}</td>
  </tr>
  <tr>
    <td colspan="2">{$row[v].kvcutbdata}V-cut</td>
    <td colspan="3">横:{$row[v].kheng|htmlentities}竖:{$row[v].kshu|htmlentities}</td>
  </tr>
  <tr>
    <td colspan="3">金手指斜:{$row[v].kxb|htmlentities}</td>
    <td colspan="2">深:{$row[v].kshen|htmlentities}</td>
    <td>{$row[v].kasl|htmlentities}</td>
    <td colspan="2">{$row[v].kasj|htmlentities}</td>
    <td colspan="2">{$row[v].kaczr|htmlentities}</td>
    <td>{$row[v].kamrb|htmlentities}</td>
    <td colspan="2">{$row[v].kagz|htmlentities}</td>
  </tr>
  <tr>
    <td rowspan="3" class="bgs">11</td>
    <td colspan="2" rowspan="3">测试/   终检</td>
    <td colspan="5">测试方式:{$row[v].lcsfs|htmlentities}</td>
    <td rowspan="3">{$row[v].lsl|htmlentities}</td>
    <td colspan="2" rowspan="3">{$row[v].lsj|htmlentities}</td>
    <td colspan="2" rowspan="3">{$row[v].lczr|htmlentities}</td>
    <td rowspan="3">{$row[v].lmrb|htmlentities}</td>
    <td colspan="2" rowspan="3">{$row[v].lgz|htmlentities}</td>
  </tr>
  <tr>
    <td colspan="5">治具编号:{$row[v].lzjbh|htmlentities}</td>
  </tr>
  <tr>
    <td colspan="5">新开治日期:{$row[v].lkzrqtime|date_format:"%Y-%m-%d"}</td>
  </tr>
  <tr>
    <td rowspan="2" class="bgs">12</td>
    <td colspan="2" rowspan="2">包装/入货</td>
    <td colspan="5">纸箱尺寸:{$row[v].mzxcc|htmlentities}</td>
    <td rowspan="2">{$row[v].msl|htmlentities}</td>
    <td colspan="2" rowspan="2">{$row[v].msj|htmlentities}</td>
    <td colspan="2" rowspan="2">{$row[v].mczr|htmlentities}</td>
    <td rowspan="2">{$row[v].mmrb|htmlentities}</td>
    <td colspan="2" rowspan="2">{$row[v].mgz|htmlentities}</td>
  </tr>
  <tr>
    <td colspan="3">每包set:{$row[v].mmb|htmlentities}</td>
    <td>每层(包):{$row[v].mmc|htmlentities}</td>
    <td>每箱(层):{$row[v].mmx|htmlentities}</td>
  </tr>
  <tr>
    <td>备注</td>
    <td colspan="15">{$row[v].nbzcontent|htmlentities}</td>
  </tr>
  <tr>
    <td colspan="5">工程制作:{$row[v].qgczz|htmlentities}</td>
    <td colspan="5">工程审核:{$row[v].qgcsh|htmlentities}</td>
    <td colspan="6">工程计划:{$row[v].qgcjh|htmlentities}</td>
  </tr>
  <tr>
    <td colspan="16">四:开料指示:</td>
  </tr>
  <tr>
    <td colspan="5">板材类型:{$row[v].blleixing|htmlentities}</td>
    <td colspan="5">板材厂商:{$row[v].pbccs|htmlentities}</td>
    <td colspan="6">大料尺寸:{$row[v].pdccl|htmlentities}</td>
  </tr>
  <tr>
    <td colspan="5">交货数量:{$row[v].scjhsl|htmlentities}</td>
    <td colspan="5">1张大料={$row[v].pdliao|htmlentities}</td>
    <td colspan="6">投料数量:{$row[v].sctlsl|htmlentities}</td>
  </tr>
  <tr>
    <td colspan="5">开料尺寸:{$row[v].scklsl|htmlentities}</td>
    <td colspan="5">投料面积：<span class="stlmj"></span>㎡</td>
    <td colspan="6">PNL拼板数量:<span id="spbsl"></span>PCS/PNL</td>
  </tr>
  <tr>
    <td colspan="5">共需开大料:{$row[v].pkdl|htmlentities} 张{$row[v].ppnl|htmlentities} PNL</td>
    <td colspan="5">成品面积：<span id="scpmj"></span>㎡</td>
    <td colspan="6">板料利用率：<span id="sbllyl"></span>%</td>
  </tr>
  <tr>
    <td colspan="2">剩余边料：</td>
    <td>长：</td>
    <td>{$row[v].f52|htmlentities}</td>
    <td>宽：</td>
    <td>{$row[v].h52|htmlentities}</td>
    <td>数量：</td>
    <td>{$row[v].k52|htmlentities}</td>
    <td>张</td>
    <td>长：</td>
    <td>{$row[v].p52|htmlentities}</td>
    <td>宽：</td>
    <td>{$row[v].u52|htmlentities}</td>
    <td>数量：</td>
    <td>{$row[v].z52|htmlentities}</td>
    <td>张</td>
  </tr>
  <tr>
    <td colspan="16">开料图:{$row[v].qkltcontent|replace:"fixed":"inherit"}</td>
  </tr>


</table>


<div class="clearfix"></div>
</div>
</div>







{/section}
<script src="style/jquery-3.4.1.min.js" ></script>
<script src="style/view.js" ></script>
</body>
</html>