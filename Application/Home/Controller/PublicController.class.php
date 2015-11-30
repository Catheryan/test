<?php
/**
 * User: haier
 */

namespace Home\Controller;


class PublicController extends CommonController{
    public function index(){
        $this->assignMenu();
        $this->display('notice');
    }
    public function editPassword(){
        $admin = $_SESSION['current_account'];
        $this->assignMenu();
        $this->assign('admin', $admin);
        $this->display();
    }
    public function notice(){
        $this->assignMenu();
        $this->assign('admin', $admin);
        $this->display();
    }
    public function systeaminfo(){
        $this->assignMenu();
        $this->assign('admin', $admin);
        $this->display('index');
    }
    /**
     * 更新个人密码
     * @return
     */
    public function updatePassword() {
        if (!isset($_POST['admin'])) {
            return $this->errorReturn('无效的操作！');
        }

        $admin = $_SESSION['current_account'];
        $admin['password'] = $_POST['admin']['password'];
        $admin['cfm_password'] = $_POST['admin']['cfm_password'];

        $result = D('Admin', 'Service')->update($admin);
        if (!$result['status']) {
            return $this->errorReturn($result['data']['error']);
        }

        return $this->successReturn('修改密码成功！');
    }
    /**
     * 管理员登出
     * @return
     */
    public function logout() {
        D('Admin', 'Service')->logout();

        $this->success('登出成功！', U('Index/index'));
    }
}