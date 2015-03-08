<?php
/*
 * ss-panel配置文件
 * https://github.com/orvice/ss-panel
 * Author @orvice
 * https://orvice.org
 */

//定义流量
$tomb = 1024*1024;
$togb = $tomb*1024;


//Define DB Connection  数据库信息
define('DB_HOST','localhost');
define('DB_USER','ss');
define('DB_PWD','Austinzhao1997');
define('DB_DBNAME','shadowsocks');
define('DB_CHARSET','utf8');
define('DB_TYPE','mysql'); 
/*
 * 下面的东西根据需求修改
 */

//define Plan
//注册用户的初始化流量
//默认5GiB
$a_transfer = $togb*5;

//签到设置 签到活的的最低最高流量,单位MB
$check_min = 100;
$check_max = 500;

//name
$site_name = "RyotaSS";
$site_url  = "http://ss.ryotamono.com/";

//invite only
$invite_only = true;
//用户注册后获得的邀请码最低最高
//都设置为0用户就不能邀请
$user_invite_min = '5';
$user_invite_max = '10';

//mail-gun
// Get your key from https://mailgun.com
$mailgun_key = "";
$mailgun_domain = "";


//
require_once 'do.php';
