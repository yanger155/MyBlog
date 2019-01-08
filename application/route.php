<?php

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;
// 设置全局变量规则，全部路由有效
Route::pattern(['id'   => '\d+']);
Route::get('detail/:id', 'index/Index/detail');  // 表示1个或多个数字

return [
    // 别名配置,别名只能是映射到控制器且访问时必须加上请求的方法
    '__alias__'   => [
        'index' => 'index/Index/index',
        'materials' => 'index/Materials/index',
        'notes' => 'index/Notes/index',
        'personage' => 'index/Personage/index',
        'summary' => 'index/Summary/index',


    ],
    // 变量规则
    '__pattern__' => [
    
    ],
    //    域名绑定到模块
       '__domain__'  => [
           'admin' => 'admin',
           'api'   => 'api',
       ],
];
