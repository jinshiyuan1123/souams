<?php
// +----------------------------------------------------------------------
// | 后台主页模块
// +----------------------------------------------------------------------
// | Copyright (c) 2018 https://blog.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 情深不寿 <2824030364@qq.com>
// +----------------------------------------------------------------------

namespace app\admin\controller;
use app\common\controller\Backend;

class Index extends Backend {

    /**
     * 后台主页框架
     * @todo 无
     * @author 情深不寿
     * @version v1.0.0.1 + 2019.10.08
     * @deprecated 暂不弃用
     * @global 无
     * @return void
    */
    public function index() {
        return $this->fetch();
    }

    /**
     * 控制台页面
     * @todo 无
     * @author 情深不寿
     * @version v1.0.0.1 + 2019.10.08
     * @deprecated 暂不弃用
     * @global 无
     * @return void
    */
    public function main() {
        return $this->fetch();
    }

    /**
     * 清除全站缓存
     * @todo 清除后不可逆
     * @author 情深不寿
     * @version v1.0.0.1 + 2019.10.08
     * @deprecated 暂不弃用
     * @global 无
     * @return void
    */
    public function runtime_del($dirName='') {
        if (empty($dirName)) {
            $dirName = ROOT_PATH.'runtime'.DS;
            $this->addLog(36, '清除全站缓存', 1, false);
        }

        if ( $handle = opendir( "$dirName" ) ) {
            while ( false !== ( $item = readdir( $handle ) ) ) {
                if ( $item != "." && $item != ".." ) {
                    if ( is_dir( "$dirName/$item" ) ) {
                        $this->runtime_del("$dirName/$item" );
                    } else {
                        unlink( "$dirName/$item" );   
                    }   
                }   
            }
            closedir( $handle );
        }
    }
}