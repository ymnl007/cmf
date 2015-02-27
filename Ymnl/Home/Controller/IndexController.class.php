<?php
namespace Home\Controller;
use Logic\CommonController;
class IndexController extends CommonController {
    public function index(){
        $arr = array('xx','cc');
        $ss = var_export($arr,true);
        echo $ss;

        eval("\$array = $ss;");
        dump($array);
        // if(IS_POST){
        //    dump($_POST);die; 
        // }
        // $param = 'ticket_template_id=896&ticket_name=%E6%B5%8B%E8%AF%95%E6%B6%88%E6%81%AF%E7%9A%84%E5%8F%91%E9%80%81&price_type=0&type=0&price=10.00&use_day=2015-01-30&owner_name%5B%5D=dfdd&owner_mobile%5B%5D=11234333442&nums%5B%5D=1&owner_card%5B%5D=&note=';
        // parse_str($param,$ss);
        // print_r($ss);die;
        // import("Common.Org.Util.Snoopy");
        // $snoopy = new \Snoopy();
        // $snoopy->host = 'agency.test.demo.org.cn';
        // $snoopy->agent = '  Mozilla/5.0 (Windows NT 6.1; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0';
        // $snoopy->referer = 'http://agency.test.demo.org.cn/site/login';
        // $snoopy->accept = 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
        // $snoopy->cookies['PHPSESSID'] = 'bb7n3nftqcrjtl2iif0blll6i6';
        // $snoopy->cookies['a52e796f3230614e12744b82966bbb11'] = '93116f2ec2a4f6edaf3dd2e0201a3c45eee4831ea:4:{i:0;s:8:"family61";i:1;s:8:"family61";i:2;i:86400;i:3;a:6:{s:3:"uid";s:3:"533";s:12:"display_name";s:8:"family61";s:7:"account";s:8:"family61";s:6:"org_id";s:3:"441";s:8:"is_super";s:1:"1";s:10:"created_at";s:19:"2015-01-30 14:41:58";}}';
        // $uri = 'http://agency.test.demo.org.cn/site/login';http://ticket_agency.piaotai.com/
        // $uri = 'http://ticket_agency.piaotai.com/site/login';
        // // $snoopy->fetch($url);
        // // $param['ULoginForm']['username'] = 'family61';test_landscape
        // $param['ULoginForm']['username'] = 'test_landscape';
        // $param['ULoginForm']['password'] = '123456';
        // // $param['ULoginForm']['password'] = '123456';
        // // dump($param);die;
        // $snoopy->submit($uri,$param);
        // var_dump($snoopy->cookie);
        // $uri = 'http://agency.test.demo.org.cn/site/login';
        // $snoopy->fetch($uri);
        // for ($i=0;$i<10000;$i++) {
        //     $post = 'http://agency.test.demo.org.cn/ticket/buy/placeOrder/';
        //     $params = 'ticket_template_id=896&ticket_name=%E6%B5%8B%E8%AF%95%E6%B6%88%E6%81%AF%E7%9A%84%E5%8F%91%E9%80%81&price_type=0&type=0&price=10.00&use_day=2015-01-30&owner_name%5B%5D=dfdd&owner_mobile%5B%5D=11234333442&nums%5B%5D=1&owner_card%5B%5D=&note=';
        //     // $param = 'ticket_template_id=896&ticket_name=%E6%B5%8B%E8%AF%95%E6%B6%88%E6%81%AF%E7%9A%84%E5%8F%91%E9%80%81&price_type=0&type=0&price=10.00&use_day=2015-01-30&owner_name%5B%5D=dfdd&owner_mobile%5B%5D=11234333442&nums%5B%5D=1&owner_card%5B%5D=&note=';
        //     $param['owner_name'] = rand(100,1000);
        //     parse_str($params,$param);
        //     $snoopy->submit($post, $param);
        // }
        // $post = 'http://agency.test.demo.org.cn/ticket/buy/placeOrder/';
        // $params = 'ticket_template_id=896&ticket_name=%E6%B5%8B%E8%AF%95%E6%B6%88%E6%81%AF%E7%9A%84%E5%8F%91%E9%80%81&price_type=0&type=0&price=10.00&use_day=2015-01-30&owner_name%5B%5D=dfdd&owner_mobile%5B%5D=11234333442&nums%5B%5D=1&owner_card%5B%5D=&note=';
        // // $param = 'ticket_template_id=896&ticket_name=%E6%B5%8B%E8%AF%95%E6%B6%88%E6%81%AF%E7%9A%84%E5%8F%91%E9%80%81&price_type=0&type=0&price=10.00&use_day=2015-01-30&owner_name%5B%5D=dfdd&owner_mobile%5B%5D=11234333442&nums%5B%5D=1&owner_card%5B%5D=&note=';
        // parse_str($params,$param);
        // $snoopy->submit($post, $param);
        // echo $html =  $snoopy->results;
        // // if(IS_POST){
        //     // dump($_POST);die;
        //     $param['ULoginForm']['ULoginForm[username]'] = 'family61';
        //     $param['ULoginForm']['password'] = '123456';
        //     $snoopy->submit($url, $param);
        //     $html = $snoopy->results;
        //     dump($htmls); 
        // // }
        
    }
    function taozi($n){
        return $n*5+1;
    }
    public function fentaozi(){
        $i = 3121;
        for($j=1;$j<=5;$j++){
            echo $i = ($i-1)/5;
            echo '<br/>';
        }
    }
    public function _empty(){

    }
    
    public function test(){
        $this->success('333');
        // $this->display();
    }
}