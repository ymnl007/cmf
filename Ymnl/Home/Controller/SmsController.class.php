<?php
namespace Home\Controller;
use Logic\CommonController;
class SmsController extends CommonController {
    public function index(){
        if(IS_POST){

            import('Common.Org.Ucpaas');
            $options['accountsid']='5f758d24fbaa6defdc1bed12b1be1612';
            $options['token']='673a199dc5d4a28ee143faca358e4da2';
            $ucpass = new \Ucpaas($options);
            $appId = "1b6d1c0ee9284e0da4dc74891f0bb6cb";
            $to = I('phone','18559168381');
            $templateId = "1";
            $param = I('msg','3245');
            session('paramMsg',$param);
            $ucpass->templateSMS($appId,$to,$templateId,$param);
            $this->success('验证码发送成功',U(MODULE_NAME.'/Sms/active'));
        }else{
            // echo I('msg','3245');
            $this->display();
        }
        
        // $this->send();
        // $this->success('333');
        // $this->display();
    }
    public function active(){
        if(IS_POST){
            if(I('paramMsg') == session('paramMsg')){
                echo '验证成功';
            }
        }else{
            // import('Common.Org.Ucpaas');
            // $options['accountsid']='5f758d24fbaa6defdc1bed12b1be1612';
            // $options['token']='673a199dc5d4a28ee143faca358e4da2';
            // $ucpass = new \Ucpaas($options);
            // $appId = "1b6d1c0ee9284e0da4dc74891f0bb6cb";
            // $to = I('phone','18559168381');
            // $templateId = "1";
            // $param = I('msg','3245');
            // session('paramMsg',$param);
            // echo $ucpass->templateSMS($appId,$to,$templateId,$param); 
            $this->display();
        }
        
    }
    public function _empty(){

    }
    
    public function send(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://sms-api.luosimao.com/v1/send.json");

        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPAUTH , CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD  , 'api:key-19033b432fab9559b437d2982ce3a37f');

        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, array('mobile' => '18559168381','message' => '验证码：028261【测试用的】'));

        $res = curl_exec( $ch );
        curl_close( $ch );
        //$res  = curl_error( $ch );

        var_dump(urldecode($res));
    }
}