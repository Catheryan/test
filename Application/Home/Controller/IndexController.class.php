<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        layout(false);
        $this->display();
    }
    /**
     * 管理员登录
     * @return
     */
    public function login() {
        $reloadUrl = U('Index/index');
        if (empty($_POST['admin']['email'])) {
            return $this->errorReturn('请填写登录邮箱！', $reloadUrl);
        }

        if (empty($_POST['admin']['password'])) {
            return $this->errorReturn('请填写登录密码！', $reloadUrl);
        }
        if (!M('Admin')->autoCheckToken($_POST)) {
            return $this->errorReturn('登录令牌超时！', $reloadUrl);
        }
        $adminService = D('Admin', 'Service');
        $admin = $_POST['admin'];
        // 登录认证
        $result = $adminService->login($admin);
        if (!$result['status']) {
            return $this->errorReturn($result['data']['error'], $reloadUrl);
        }
        return $this->successReturn('登录成功！',U('Public/index'));
    }
}