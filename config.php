<?php

/**
 * Author: Hidden
 * Date: Mon Aug 23 22:25:15 CST 2010
 *
 */

$_IMC = array();
$_IMC["version"] = "1.0.0";//版本
$_IMC["domain"] = "";//网站注册域名
$_IMC["apikey"] = "";//网站注册apikey
$_IMC["host"] = "webim20.cn";//im服务器
$_IMC["port"] = 8000;//服务端接口端口
$_IMC["theme"] = "base";//界面主题，根据webim/static/themes/目录内容选择
$_IMC["local"] = "zh-CN";//本地语言，扩展请修改webim/static/i18n/内容
$_IMC["emot"] = "default";//表情主题
//$_IMC["show_realname"] = false;//是否显示好友真实姓名
//$_IMC["opacity"] = 80;//toolbar背景透明度设置

$query = DB::query("SELECT v.* FROM ".DB::table('common_pluginvar')." v, 
	".DB::table('common_plugin')." p 
	WHERE p.identifier='webim' AND v.pluginid = p.pluginid");
while($var = DB::fetch($query)){
	if(!empty($var['value'])){
		$_IMC[$var['variable']] = $var['value'];
	}
}