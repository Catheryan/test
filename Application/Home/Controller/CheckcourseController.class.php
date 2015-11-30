<?php
/**
 * User: haier
 */

namespace Home\Controller;


class CheckcourseController extends CommonController{
    public function Index(){
        $this->assignMenu();
        $this->display();
    }
}