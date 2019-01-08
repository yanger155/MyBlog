<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Db;

class Materials extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        // 取出该分类下所有的数据并分页展示
        $data = Db::table('fa_article')->where('category','资源小栈')->select();
        echo "<pre>";
        var_dump($data);
        die;
        // $page = $data->render();
        // $this->assign('page',$page);
        $this->assign('data',$data);
        return $this->fetch();
    }

    // public function detail($id)
    // {
    //     $data = Db::table('fa_article')->where('id',$id)->findOrFail();
        
    //     // var_dump($data);
    //     // 获取文章 id
    //     // 去数据库查询该文章信息
    //     // 渲染视图 

    //     $data['createtime'] = date("Y-m-d H:i:s",$data['createtime']);
    //     return $this->view->fetch('detail',[
    //         'data' => $data
    //     ]);
    // }

  

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
        // return $this->fetch();
        // echo "dnlvgsnfv";
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
