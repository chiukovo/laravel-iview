<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use QL\QueryList;
use Request;
use Curl;

class EggController extends Controller
{
    const QUNI = 'FCE51FF4B9484E6';
    const CHIUKO = '00280F10F793494';

    public function index()
    {
        $log = [];
        $trueCount = 0;

        for ($i=100; $i <= 130; $i++) {
            //待采集的目标页面
            $page = 'https://forum.gamer.com.tw/C.php?bsn=34292&snA=21&tnum=4423&page=' . $i;

            //列表选择器
            $list = '.c-reply__item';

            //采集规则
            $rules = array(
                'url' => ['.reply-content .reply-content__article span', 'text'],
            );

            //采集
            $result = QueryList::Query($page, $rules, $list)->data;

            foreach ($result as $value) {
                $url = $value['url'];
                $explode = explode("http://stoneagem.com/", $url);

                if ( isset($explode[1]) ) {
                    $code = $explode[1];
                    $code = preg_replace('/([\x80-\xff]*)/i', '', $code);

                    $postData = [
                        'userId' => $code,
                        'friendId' => self::QUNI,
                    ];
                    $log[] = $code;

                    $res = Curl::to('http://www.stoneagem.com/achievepet')
                        ->withData($postData)
                        ->post();
                    $res = json_decode($res, true);

                    if ( $res['result']['success'] ) {
                        $trueCount++;
                    }
                }
            }
        }
        echo $trueCount . '</br>';
        print_r($log);
    }

    public function pump()
    {
        $request = Request::input();

        if ( isset($request['num']) ) {
            for ($i=1; $i <= $request['num']; $i++) {
                $postData = [
                    'userId' => self::CHIUKO,
                    'friendId' => self::CHIUKO,
                ];

                $res = Curl::to('http://www.stoneagem.com/achievepet')
                    ->withData($postData)
                    ->post();
            }

            return 'done';
        }

        return 'no number';
    }
}
