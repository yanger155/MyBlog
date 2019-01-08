<?php

namespace app\admin\model;

use think\Model;

class Article extends Model
{
    // 表名
    protected $name = 'article';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    
    // 追加属性
    protected $append = [
        'category_text'
    ];
    

    
    public function getCategoryList()
    {
        return ['总结小栈' => __('总结小栈'),'笔记小栈' => __('笔记小栈'),'资源小栈' => __('资源小栈'),'个人小栈' => __('个人小栈')];
    }     


    public function getCategoryTextAttr($value, $data)
    {        
        $value = $value ? $value : (isset($data['category']) ? $data['category'] : '');
        $list = $this->getCategoryList();
        return isset($list[$value]) ? $list[$value] : '';
    }




}
