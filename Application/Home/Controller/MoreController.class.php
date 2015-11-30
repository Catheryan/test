<?php

namespace Home\Controller;


class MoreController extends CommonController{
    /**
     * 教育班信息
     */
    public function index(){
        $this->assignMenu();
        $this->display();
    }
    /**
     * 学困生管理
     */
    public function learnDiffMan(){
        $this->assignMenu();
        $this->display('index');

    }
    /**
     * 年级大会
     */
    public function gradeCongress(){
        $this->assignMenu();
        $this->display('index');
    }
    /**
     * 主题教育活动
     */
    public function themeActivity(){
        $this->assignMenu();
        $this->display('index');
    }
    /**
     * 学生家长谈话
     */
    public function talk(){
        $this->assignMenu();
        $this->display('index');
    }
    /**
     * 学生骨干例会
     */
    public function stuMeeting(){
        $this->assignMenu();
        $this->display('index');
    }
    /**
     * 系例会
     */
    public function xiMeeting(){
        $this->assignMenu();
        $moreService = D('More', 'Service');
        $xiMeeting =$moreService->getXiMeeting();
        $this->assign('xiMeeting',$xiMeeting);
        $this->display();
    }
    /**
     * 学生骨干通讯录
     */
    public function stuAddressList(){
        $this->assignMenu();
        $moreService = D('More', 'Service');
        $teaaddresslist =$moreService->getteaAddressList();
        $this->assign('teaaddresslist',$teaaddresslist);
        $this->display();
    }
    /**
     * 教师通讯录
     */
    public function teaAddressList(){
        $this->assignMenu();
        $moreService = D('More', 'Service');
        $teaaddresslist =$moreService->getteaAddressList();
        $this->assign('teaaddresslist',$teaaddresslist);
        $this->display();
    }
}