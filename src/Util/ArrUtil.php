<?php
/**
 * @copyright Copyright&copy;2022,浙江销巴科技有限公司保留所有权利
 * Notes:描述该文件的用途
 * History：文件历史
 * tanyong 2022/8/12
 */

namespace Tanyong\LaravelUtil\Util;

class ArrUtil
{
    /**
     * Notes:我是谁
     * Author:tanyong
     * DateTime:2022/8/25
     * @param array $arr
     */
    public static function paramsToString(array &$arr)
    {
        foreach($arr as $k=>$v)
        {
            if(is_array($v))
            {
                self::paramsToString($arr[$k]);
            }else if(!is_string($v) && !is_object($v))
            {
                $arr[$k] = strval($v);
            }
        }
    }
}