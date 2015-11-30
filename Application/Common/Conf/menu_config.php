<?php
// 菜单项配置
$systemMenu = array(
    // 后台首页
    'Public' => array(
        'name' => '首页',
        'target' => 'Public/index',
        'sub_menu' => array(
            array('item' => array('Public/notice' => '通知')),
            array('item' => array('Public/systeaminfo' => '系统信息')),
            array('item' => array('Public/editPassword' => '修改密码')))
    ),
    //课表
    'Course' => array(
        'name' => '课表',
        'target' => 'Course/index',
        'sub_menu' => array(
            array('item' => array('Course/index' => '当前课程')),
            array('item' => array('Course/show' => '课表'))
        )
    ),
    //查课
    'Checkcourse' => array(
        'name' => '查课',
        'target' => 'Checkcourse/index',
        'sub_menu' => array(
            array('item' => array('Checkcourse/index' => '当前课表类别'))
        )
    ),
    //查寝
    'CheckSleep' => array(
        'name' => '查寝',
        'target' => 'CheckSleep/index',
        'sub_menu' => array(
            array('item' => array('CheckSleep/index' => '当前寝室列表')),
        )
    ),
    //更多
    'More' => array(
        'name' => '更多',
        'target' => 'More/index',
        'sub_menu' => array(
            array('item' => array('More/index' => '教育班信息')),
            array('item' => array('More/learnDiffMan' => '学困生管理')),
            array('item' => array('More/gradeCongress' => '年级大会')),
            array('item' => array('More/themeActivity' => '主题教育活动')),
            array('item' => array('More/talk' => '学生家长谈话')),
            array('item' => array('More/stuMeeting' => '学生骨干例会')),
            array('item' => array('More/xiMeeting' => '系例会')),
            array('item' => array('More/stuAddressList' => '学生骨干通讯录')),
            array('item' => array('More/teaAddressList' => '教师通讯录'))
        )
    )
);

return array_merge($systemMenu);
