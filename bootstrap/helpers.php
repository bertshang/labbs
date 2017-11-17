<?php
use Illuminate\Support\Facades\Route;
/*
 * 辅助函数
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}