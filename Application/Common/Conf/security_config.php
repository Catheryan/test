<?php

$config = array(
    // 表单令牌
    'TOKEN_ON' => false,
    'TOKEN_NAME' => '__hash__',
    'TOKEN_TYPE' => 'md5',
    'TOKEN_RESET' => true,

    // 认证token
    'AUTH_TOKEN' => 'eaadmin',
    // 认证mask
    'AUTH_MASK' => 'nimdaae',
    // 登录超时
    'LOGIN_TIMEOUT' => 3600,

    // 开启权限认证
    'USER_AUTH_ON' => true,
    // 登录认证模式
    'USER_AUTH_TYPE' => 1,
    // 认证识别号
    'USER_AUTH_KEY' => 'authId',
    // 模块名称（不要修改）
    'GROUP_AUTH_NAME' => 'Admin',
    // 无需认证模块
    //'NOT_AUTH_MODULE' => 'Index',
    // 需要认证模块
    //'REQUIRE_AUTH_MODULE' => '',
    // 认证网关
    //'USER_AUTH_GATEWAY' => 'Public/index',
    // 关闭游客授权访问
   // 'GUEST_AUTH_ON' => false,
    // 管理员模型
    //'USER_AUTH_MODEL' => 'Admin',
);

// 登录标记
$config['LOGIN_MARKED'] = md5($config['AUTH_TOKEN']);

return $config;
