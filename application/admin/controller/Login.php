<?php
// +----------------------------------------------------------------------
// | 后台登录模块
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
use think\Session;

class Login extends Backend{

    /**
     * 登录界面
     * @todo 无
     * @author 情深不寿
     * @version v1.0.0.1 + 2019.9.29
     * @deprecated 暂不弃用
     * @global 无
     * @return void
    */
    public function index() {
        if (Request::instance()->isAjax() == false) {
            $this->view->engine->layout(false); 
            return $this->fetch();
        }
        
        $user = Request::instance()->post('user');
        $pwd  = Request::instance()->post('pwd');
        $vif  = Request::instance()->post('vif');

        # 验证码核验
        if (!captcha_check($vif)) $this->json('01', '验证码错误');
        if (empty($user) || empty($pwd)) $this->json('01', '用户名或密码错误');
        
        $res  = Db::name('manager')
                ->alias('A')
                ->field('A.*, B.s_name, C.j_name')
                ->join('__STRUCTURE__ B', 'A.m_structure = B.s_id','LEFT')
                ->join('__JOB__ C', 'A.m_job = C.j_id','LEFT')
                ->where('A.m_user', $user)
                ->find();
        if (!$res) $this->json('01', '用户名或密码错误');
        if (md5($pwd . $res['m_time']) != $res['m_pwd']) $this->json('01', '用户名或密码错误');

        Session::set('admin', $res);
        # 写入日志
        $this->add_login_log($res['m_id']);
        $this->json('00', '登录成功');
    }

    /**
     * 退出登录(公共)
     * @todo 无
     * @author 情深不寿
     * @version v1.0.0.1 + 2019.9.19
     * @deprecated 暂不弃用
     * @global 无
     * @return void
    */
	public function out(){
		Session::delete('admin');
		$this->redirect('login/index');
	}

    /**
     * 添加日志记录(公共)
     * @todo 无
     * @author 情深不寿
     * @version v1.0.0.1 + 2019.9.19
     * @deprecated 暂不弃用
     * @global 无
     * @param int $id 管理员ID
     * @return void
    */
	private function add_login_log($id){

		$request = Request::instance();
        $ip      = $request->ip();

        $data    = isTaobao($ip);

		$datas    = [
			'm_id'   => $id,
			'l_ip'   => $ip,
            'l_province' => $data['region'] ?: '无',
            'l_city' => $data['city'] ?: '无',
            'l_area' => $data['county'] ?: '无',
			'l_time' => time(),
		];

		Db::name('manager_login_log')->insert($datas);
    }
}