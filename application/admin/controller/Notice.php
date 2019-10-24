<?php
// +----------------------------------------------------------------------
// | 维护公告管理
// +----------------------------------------------------------------------
// | Copyright (c) 2018 https://blog.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 情深不寿 <2824030364@qq.com>
// +----------------------------------------------------------------------

namespace app\admin\controller;
use app\common\controller\Backend;
use think\Db;
use think\Request;

class Notice extends Backend{
    protected $NOTICE_PATH; // 公告文件存放地址

    /**
     * 初始化定义数据
     * @todo 无
     * @author 情深不寿
     * @version v1.0.0.1 + 2019.9.30
     * @deprecated 暂不弃用
     * @global 无
     * @return void
    */
    public function _initialize() {
		parent::_initialize();  
        $this->NOTICE_PATH = ROOT_PATH . 'public' .DS. 'txt' .DS. 'notice.conf';
    }

    /**
     * 公告列表
     * @todo 无
     * @author 情深不寿
     * @version v1.0.0.1 + 2019.9.30
     * @deprecated 暂不弃用
     * @global 无
     * @return void
    */
    public function index(){
        if (!file_exists($this->NOTICE_PATH)) {
            file_put_contents($this->NOTICE_PATH, '',FILE_APPEND);
            chmod($this->NOTICE_PATH, 0777);
        }

        $content = file_get_contents($this->NOTICE_PATH);
        $data    = explode('|', $content);
        if (count($data) == 1) {
            $data[1] = '';
            $data[2] = '';
        }
        $this->assign('content', $data);
        return $this->fetch();
    }

    /**
     * 修改公告
     * @todo 无
     * @author 情深不寿
     * @version v1.0.0.1 + 2019.9.30
     * @deprecated 暂不弃用
     * @global 无
     * @return void
    */
    public function upd(){
        $start   = Request::instance()->post('start');
        $end     = Request::instance()->post('end');
        $content = Request::instance()->post('content');
        $res = file_put_contents($this->NOTICE_PATH, $start.'|'.$end.'|'.$content);
        if ($res) {
            $this->addLog(35, '修改成功', 1, false);
            $this->json('00', '修改成功');
        }
        $this->addLog(35, '修改失败', 2, false);
        $this->json('01', '修改失败');
    }

}
