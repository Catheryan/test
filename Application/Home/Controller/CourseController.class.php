<?php
/**
 * User: haier
 */

namespace Home\Controller;


class CourseController extends CommonController{
    public function index(){
        $this->assignMenu();
        $this->display();
    }
}