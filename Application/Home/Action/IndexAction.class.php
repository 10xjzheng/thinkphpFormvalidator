<?php
namespace Home\Action;

class IndexAction extends BaseAction {
	/**
	 * 跳到首页
	 */
    public function index(){
        $this->display("/index");
    }
   
}