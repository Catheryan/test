<?php
namespace Home\Controller;

class CheckSleepController extends CommonController{
    public function index(){
        $this->assignMenu();
        $this->display();
    }
}