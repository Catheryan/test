<?php
$menuConfig = include('menu_config.php');
$securityConfig = include('security_config.php');
$appConfig= array(
    //'配置项'=>'配置值'
    /* 数据库设置 */
    // 开启布局
    'LAYOUT_ON' => true,
    'LAYOUT_NAME' => 'Common/layout',
    'TMPL_LAYOUT_ITEM'      =>  '{__CONTENT__}',

    'DB_TYPE' => 'mysql',     // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址
    'DB_NAME' => 'user',          // 数据库名
    'DB_USER' => 'root',      // 用户名
    'DB_PWD' => '',          // 密码
    'DB_PORT' => '3306',        // 端口
    'DB_PREFIX' => 'user_',    // 数据库表前缀

    'DB_CHARSET' => 'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE' => 0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE' => false,       // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM' => 1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO' => '', // 指定从服务器序号

    'DB_FIELDS_CACHE' =>false,
    'MENU'=>$menuConfig,
    'SESSION_AUTO_START'=>true,

    // 表单令牌
    'TOKEN_ON' => false,
    'TOKEN_NAME' => '__hash__',
    'TOKEN_TYPE' => 'md5',
    'TOKEN_RESET' => false,


    // 认证token
    'AUTH_TOKEN' => 'eaadmin',
    // 认证mask
    'AUTH_MASK' => 'nimdaae',
    // 登录超时
    'LOGIN_TIMEOUT' => 3600,
    // 开启权限认证
    'USER_AUTH_ON' => false,
    // 登录认证模式
    'USER_AUTH_TYPE' => 1,
    // 认证识别号
    'USER_AUTH_KEY' => 'authId',
    // 模块名称（不要修改）
    'GROUP_AUTH_NAME' => 'Admin',
);
// 登录标记
$appConfig['LOGIN_MARKED'] = md5($appConfig['AUTH_TOKEN']);
return array_merge($appConfig);