<?php
// +----------------------------------------------------------------------
// | 数据库 - 服务器管理
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
use think\Config;
use org\Baksql;

class Database extends Backend{
    private $DB;

    /**
     * 初始化数据库连接
     * @author  冯俊豪
     * @version 1.0.0.1
     * @return  无
     */
    public function __construct() {
        parent::__construct();
        $this->DB = new Baksql(Config::get('database'));
    }
    
    /**
     * 列表
     * @author  冯俊豪
     * @version 1.0.0.1
     * @return  无
     */
    public function index(){
        # 获取所有表名
        $tables = $this->DB->get_dbname();
        $data   = [];

        # 执行其余查询
        foreach ($tables as $k=>$v) {
            # 表名
            $data[$k]['table'] = $v;
            # 表结构
            $res = Db::query("SHOW CREATE TABLE `{$v}`");
            $res = explode("COMMENT='", $res[0]['Create Table']);
            # 表注释
            $data[$k]['remark'] = str_replace("'",'',$res[1]);
            # 表编码
            $res = explode('CHARSET=', $res[0]);
            $data[$k]['code'] = str_replace(' ','',$res[1]);
            # 总记录数
            $res = Db::query("SELECT COUNT(1) ROWS FROM `{$v}`");
            $data[$k]['count'] = $res[0]['ROWS'];
        }

        $this->assign('tables', $data);
        return $this->fetch();
    }

    /**
     * 查看数据表详情
     * @author  冯俊豪
     * @version 1.0.0.1
     * @return  无
     */
    public function details(){
        $table = Request::instance()->param('id');
        $data  = [];
        # 表名
        $data['table'] = $table;
        # 表结构
        $res = Db::query("SHOW CREATE TABLE `{$table}`");
        $res = explode("COMMENT='", $res[0]['Create Table']);
        # 表注释
        $data['remark'] = str_replace("'",'',$res[1]);
        # 表编码
        $res = explode('CHARSET=', $res[0]);
        $data['code'] = str_replace(' ','',$res[1]);
        # 总记录数
        $res = Db::query("SELECT COUNT(1) ROWS FROM `{$table}`");
        $data['count'] = $res[0]['ROWS'];
        $this->assign('data', $data);

        # 获得字段详情
        $res = Db::query("SHOW FULL COLUMNS FROM `{$table}`");
        $this->assign('list', $res);

        return $this->fetch();
    }

    /**
     * 服务器详情
     * @author  冯俊豪
     * @version 1.0.0.1
     * @return  无
     */
    public function server(){
        $start = disk_total_space('/');
        $end   = disk_free_space('/');

        $data = [];
        $data['thinkphp']    = 'ThinkPHP5.0.12';        // ThinkPHP框架版本
        $data['php_edition'] = PHP_VERSION;             // PHP版本
        $data['mysql']       = get_mysql_server();      // Mysql版本
        $data['php_model']   = php_sapi_name();         // PHP运行内核
        $data['ip']          = $_SERVER['SERVER_NAME']; // 本机IP
        $data['root_path']   = ROOT_PATH;               // 项目根目录
        $data['nginx']       = $_SERVER['SERVER_SOFTWARE']; // 服务器环境
        $data['https']       = $_SERVER['SERVER_PROTOCOL']; // HTTP协议类型
        $data['root_statr_size'] = formatBytes($start);     // 根目录磁盘总大小
        $data['root_end_size']   = formatBytes($start-$end);// 已使用磁盘大小
        $this->assign('data', $data);
        return $this->fetch();
    }

}
