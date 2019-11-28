<?php
/**
 * User: tangyijun
 * Date: 2019-02-22
 * Time: 10:22
 */
namespace Libs\Comm;
use Libs\Instance;

/**
 * Class Common
 * @package Tool
 * 作为公共函数库
 */
class Common extends Instance {

    public function success($data = [],$msg = '操作成功',$code = 200)
    {
        $this->error($msg,$code,$data);
    }

    public function error($msg,$code = '-1',$data = [])
    {
        $data = [
            'msg'  => $msg,
            'code' => $code,
            'data' => $data
        ];
        if ('cli' !== PHP_SAPI ){
            header("content-Type: application/json; charset=utf-8");
            die(json_encode($data));
        }
        else {
            die(json_encode($data, JSON_UNESCAPED_UNICODE ));
        }
    }

    public function send($res = true)
    {
        if($res !== false){
            $this->success($res);
        }
        $this->error('操作失败');
    }

    public function generate_code($length = 6)
    {
        $new_str= '';
        $str= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwsyz0123456789';
        for($i= 1; $i<= $length; ++$i) {
            $new_str.=$str[mt_rand(0, 61)];
        }
        return $new_str;
    }

    public function format_date($time = 0){
        $t = time() - $time;
        if($t < 60){
            return '刚刚';
        }
        $f = [
            '31536000'=>'年',
            '2592000'=>'个月',
            '604800'=>'星期',
            '86400'=>'天',
            '3600'=>'小时',
            '60'=>'分钟',
            '1'=>'秒'
        ];
        foreach ($f as $k=>$v){
            if (0 != $c = floor($t / (int)$k)) {
                return $c.$v.'前';
            }
        }
    }

    public function format_money($money,$len = 2)
    {
        return sprintf("%.{$len}f",$money);
    }
}