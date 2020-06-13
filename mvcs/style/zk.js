
$(".tijiao").click(function(event){
         event.stopPropagation();  
         
         $(this).parent().parent().children(".tijiao_box").show();  

	 var jqsysl=$(this).parent().parent().children().children().children().children().children(".sysl").val();
	 var zsl = $(this).parent().parent().children().children().children().children().children(".zsl").text();
	 var tjsysl = $(this).parent().parent().parent(".main_list_li").children(".main_list_tj").children(".tckongzhi").children(".listlix").children(".tjsy:first").text();
	 // $(this).parent().parent().children().children().children().children().children(".sysl").val(tjsysl);
	 // var jssyslh = $(this).parent().parent().parent(".main_list_li").children(".main_list_tj").children(".tckongzhi").children(".listlix").children(".jssl").text();
	 // var jssyslh = Number(jssyslh);
	 var sum = 0;
	 $(this).parent().parent().parent(".main_list_li").children(".main_list_tj").children(".tckongzhi").children(".listlix").children(".jssl").each(function(){
          sum += Number($(this).text());
	 });
	 var sumx = 0;
	 $(this).parent().parent().parent(".main_list_li").children(".main_list_tj").children(".tckongzhi").children(".listlix").children(".djsl").each(function(){
          sumx += Number($(this).text());
	 });
	 var sumy = sumx - sum;
	 var sumz = sum - sumy;

	 if (sum=="") {
	$(this).parent().parent().children().children().children().children().children(".sysl").val(zsl);
}else{
	$(this).parent().parent().children().children().children().children().children(".sysl").val(sumz);
	
}
})

$(".end").click(function(event){
    event.stopPropagation();  
    $(this).parent().parent().children(".tijiao_end").show();  

})


$(".zpgx").blur(function(){
     var djbm=$(this).val();
     if (djbm=="开料"){$(this).parent().parent().children().children(".djbm").val('kl');}
     if (djbm=="内层线路"){$(this).parent().parent().children().children(".djbm").val('ncxl');}
     if (djbm=="钻孔"){$(this).parent().parent().children().children(".djbm").val('zk');}
     if (djbm=="线路"){$(this).parent().parent().children().children(".djbm").val('xl');}
     if (djbm=="电镀"){$(this).parent().parent().children().children(".djbm").val('dd');}
     if (djbm=="阻焊"){$(this).parent().parent().children().children(".djbm").val('zh');}
     if (djbm=="文字"){$(this).parent().parent().children().children(".djbm").val('wz');}
     if (djbm=="喷锡"){$(this).parent().parent().children().children(".djbm").val('px');}
     if (djbm=="抗氧化"){$(this).parent().parent().children().children(".djbm").val('kyh');}
     if (djbm=="沉金"){$(this).parent().parent().children().children(".djbm").val('cj');}
     if (djbm=="铣边"){$(this).parent().parent().children().children(".djbm").val('xb');}
     if (djbm=="V割"){$(this).parent().parent().children().children(".djbm").val('vg');}
     if (djbm=="测试"){$(this).parent().parent().children().children(".djbm").val('cs');}
     if (djbm=="包装"){$(this).parent().parent().children().children(".djbm").val('bz');}
})


$(".ztjslx").hide();
$(".ztjsl").blur(function(){

    var tjsl=$(this).val();
    var jqsysl = $(this).parent().parent().children().children(".sysl").val();
    var jqsysl = jqsysl - tjsl;
    
    
    if (jqsysl < 0) {
    	alert('剩余数量不能为负数');
    }else{
    	$(this).parent().parent().children().children(".sysl").val(jqsysl);
    	$(this).hide();
    $(this).parent().children(".ztjslx").show();
    $(this).parent().children(".ztjslx").val(tjsl);
    }

})

$(document).click(function(event){

	var _con = $('.tijiao_box');   // 设置目标区域
	var _end = $('.tijiao_end'); 
		  if(!_con.is(event.target) && _con.has(event.target).length === 0){ // Mark 1
			//$('#divTop').slideUp('slow');   //滑动消失
			$('.tijiao_box').hide(200);       //淡出消失
		  }
		  if(!_end.is(event.target) && _end.has(event.target).length === 0){ // Mark 1
			//$('#divTop').slideUp('slow');   //滑动消失
			$('.tijiao_end').hide(200);       //淡出消失
		  }

})

var gxpdt = $(".gxpdt").text();
$(".gxpd").each(function(){

if ($(this).text() == gxpdt) {
	$(this).parent().addClass("jsgx");
	$(this).parent().children(".jsbt").text("接收到");
	$(this).parent().children(".jswz1").text("给到我们");
	$(this).parent().children(".jswz2").text("对方还剩余");
	$(this).parent().children(".djsl").addClass("jssl");
	
}else{
	$(this).parent().addClass("tjgx");
	$(this).parent().children(".jsbt").text("");
	$(this).parent().children(".jswz2").text("我们还剩余");
	$(this).parent().children(".tjsy").addClass("msy");
}
   
  });

//$(".main_list_li .liebiao:first").show();

// function calTotalMoneys(){

// var zsl = this.val();
// 	var tjsl = $(".ztjsl").val();
// 	var tjsl = Number(tjsl);
// 	var sysl=zsl-tjsl;
// 	$(".sysl").val(sysl);
// }

 //console.log(this);