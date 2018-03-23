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

function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return str_limit($excerpt, $length);
}