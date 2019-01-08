<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\common\library\Token;
use think\Db;


class Index extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function _initialize()
    {
        parent::_initialize();
    }

    public function index()
    {
        
        // 取出当前最新的前9条数据
        $data = Db::table('fa_article')
        ->order('id','desc')
        ->limit(9)
        ->select();
        // echo "<pre>";
        // var_dump($data);
        // die;
        return $this->fetch('index',[
            'data' => $data
        ]);
    }

    public function detail($id)
    {
        $data = Db::table('fa_article')->where('id',$id)->findOrFail();
        $data['createtime'] = date('Y-m-d H:i:s', time($data['createtime']));
        return $this->fetch('detail',[
            'data' => $data
        ]);
    }

    public function news()
    {
        $newslist = [];
        return jsonp(['newslist' => $newslist, 'new' => count($newslist), 'url' => 'https://www.fastadmin.net?ref=news']);
    }

}
