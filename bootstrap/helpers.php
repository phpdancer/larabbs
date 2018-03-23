<?php
/**
 * Created by PhpStorm.
 * User: friday.zhu
 * Date: 2018/3/23
 * Time: 12:01
 */

/**
 * 将当前请求的路由名称转换为 CSS 类名称
 * @return mixed
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}