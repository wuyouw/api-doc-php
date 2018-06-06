<?php
/**
 *  ==================================================================
 *        文 件 名: Tools.php
 *        概    要:
 *        作    者: IT小强
 *        创建时间: 2018/6/6 8:47
 *        修改时间:
 *        copyright (c) 2016 - 2018 mail@xqitw.cn
 *  ==================================================================
 */

namespace itxq\apidoc\lib;

/**
 * 工具类
 * Class Tools
 * @package itxq\apidoc\lib
 */
class Tools
{
    /**
     * 下划线命名转驼峰命名
     * @param $str - 下划线命名字符串
     * @param $isFirst - 是否为大驼峰（即首字母也大写）
     * @return mixed
     */
    public static function underlineToHump($str, $isFirst = false) {
        $str = preg_replace_callback('/([\-\_]+([a-z]{1}))/i', function ($matches) {
            return strtoupper($matches[2]);
        }, $str);
        if ($isFirst) {
            $str = ucfirst($str);
        }
        return $str;
    }
    
    /**
     * 驼峰命名转下划线命名
     * @param $str
     * @return mixed
     */
    public static function humpToUnderline($str) {
        $str = preg_replace_callback('/([A-Z]{1})/', function ($matches) {
            return '_' . strtolower($matches[0]);
        }, $str);
        $str = preg_replace('/^\_/', '', $str);
        return $str;
    }
}