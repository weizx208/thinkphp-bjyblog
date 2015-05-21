<?php
return array(
//此配置项为自动生成；如需改动请在后台网站设置
//*************************************网站设置****************************************
	'WEB_STATUS'				=>	'1',	       //网站状态1:开启 0:关闭
	'WEB_CLOSE_WORD'			=>	'网站升级中，请稍后访问。',	   //网站关闭时提示文字
	'WEB_ICP_NUMBER'			=>	'豫ICP备14009546号-3',	   // 网站ICP备案号
	'ADMIN_EMAIL'				=>	'admin@baijunyao.com',		   // 站长邮箱

//*************************************优化推广****************************************
	'WEB_NAME'					=>	'白俊遥博客',		 	   //网站名：
	'WEB_KEYWORDS'				=>	'白俊遥,帅白,技术博客,个人博客,thinkbjy',	       //网站关键字
	'WEB_DESCRIPTION'			=>	'白俊遥的个人技术博客,thinkbjy官方网站',	   //网站描述
	'AUTHOR'					=>	'白俊遥',	   		   //默认作者
	'WEB_STATISTICS'			=>	'<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?c3338ec467285d953aba86d9bd01cd93";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>',   	   //第三方统计代码
	'COPYRIGHT_WORD'			=>	'本文为白俊遥原创文章,转载无需和我联系,但请注明来自白俊遥博客baijunyao.com',	   //文章保留版权提示

//*************************************水印设置****************************************
	'WATER_TYPE'            	=>	'1',           //水印类型 0:不使用水印 1:文字水印 2:图片水印 3:文字和图片水印同时使用
	'TEXT_WATER_WORD'       	=>	'baijunyao.com',      //文字水印内容
	'TEXT_WATER_TTF_PTH'    	=>	'./Public/static/font/ariali.ttf',   //文字水印字体路径
	'TEXT_WATER_FONT_SIZE'  	=>	'15', //文字水印文字字号
	'TEXT_WATER_COLOR'      	=>	'#008CBA',     //文字水印文字颜色
	'TEXT_WATER_ANGLE'      	=>	'0',     //文字水印文字倾斜程度
	'TEXT_WATER_LOCATE'     	=>	'9',    //文字水印位置 1：上左 2：上中 3：上右 4：中左 5：中中 6：中右 7：下左 8：下中 9：下右
	'IMAGE_WATER_PIC_PTAH'		=>	'./Upload/image/logo/logo.png', //图片水印 水印路径
	'IMAGE_WATER_LOCATE'		=>	'9',   //图片水印 水印位置 1：上左 2：上中 3：上右 4：中左 5：中中 6：中右 7：下左 8：下中 9：下右
	'IMAGE_WATER_ALPHA'			=>	'80',    //图片水印 水印透明度：0-100 

//*************************************第三方api****************************************
	'QQ_APPID'					=>	'101206152',				// QQ登陆APPID
	'CHANGYAN_APPID'			=>	'cyrKRbJ5N',		// 畅言评论APPID
	'CHANGYAN_CONF'				=>	'prod_c654661caf5ab6da98742d040413815b',			//畅言评论设置
	'CHANGEYAN_RETURN_COMMENT'	=>	'http://www.baijunyao.com/index.php/Home/Comment/add_comment/verify/22', //畅言评论回推地址
);