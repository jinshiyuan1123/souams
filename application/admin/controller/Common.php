<?php
// +----------------------------------------------------------------------
// | 后台通用公共方法
// +----------------------------------------------------------------------
// | Copyright (c) 2018 https://blog.junphp.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 情深不寿 <2824030364@qq.com>
// +----------------------------------------------------------------------

namespace app\admin\controller;
# 基类控制器加载
use think\Controller;
use think\Db;
use think\Request;

class Common extends Controller {

    /**
     * 获取对应的省市列表
     * @todo 无
     * @author 情深不寿
     * @version v1.0.0.1 + 2019.9.29
     * @deprecated 暂不弃用
     * @global 无
     * @param int|string : $id ajax下传递的POST[id]
     * @return json
    */
    public function city(){
        $pid  = Request::instance()->post('id');
        $list = Db::name('region')->field('r_id as id, r_name as region_name')->where('r_pid', $pid)->select();
        echo json_encode($list);
    }

    /**
     * 获取对应的区域列表
     * @todo 无
     * @author 情深不寿
     * @version v1.0.0.1 + 2019.9.29
     * @deprecated 暂不弃用
     * @global 无
     * @param int|string : $id ajax下传递的POST[id]
     * @return json
    */
    public function area(){
        $pid  = Request::instance()->post('id');
        $list = Db::name('area')->field('r_id as id, r_name as region_name')->where('r_pid', $pid)->select();
        echo json_encode($list);
    }

    /**
     * 更新
     * @todo 无
     * @author 情深不寿
     * @version v1.0.0.1 + 2019.10.08
     * @deprecated 暂不弃用
     * @global 无
     * @return void
    */
    public function edition() {
        $edition = 'v1.0.1';
        $curl = curl_init();  
        curl_setopt($curl, CURLOPT_URL, 'https://v2.soubei1123.cn/edition?edition='.$edition);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);        
        $res = curl_exec($curl);
        curl_close($curl);
        echo $res;
    }

    /**
     * layui编辑器上传文件
     * @todo 无
     * @author 情深不寿
     * @version v1.0.0.1 + 2019.10.09
     * @deprecated 暂不弃用
     * @global 无
     * @return void
    */
    public function add_images() {
        $file = request()->file('file');
        $path = ROOT_PATH . 'public' . DS . 'edit' . DS;

        if($file){
            # 默认最大上传2M图片文件
            $info = $file->validate(['size'=>2097152,'ext'=>'jpg,png,gif'])->move($path);
            if($info){
                # 成功上传后 获取上传信息
                echo json_encode([
                    'code' => 0,
                    'msg'  => "上传成功",
                    'data' => [
                        'src' => str_replace('\\','/', dirname($_SERVER['SCRIPT_NAME']) .DS. 'public' .DS. 'edit' .DS. $info->getSaveName())
                    ],
                ], JSON_UNESCAPED_UNICODE);exit;
            }
            # 上传失败获取错误信息
            echo json_encode([
                'code' => '01',
                'msg'  => "上传失败：".$file->getError(),
                'data' => '',
            ], JSON_UNESCAPED_UNICODE);exit;
        }
    }
}
