<?php
namespace Home\Controller;
use Logic\CommonController;
class ApiController extends CommonController {
    public function getProducts(){
        C('SHOW_PAGE_TRACE',0);
        $data = array(
                array('area'=>'地区1','place'=>'景区1',
        'count'=>50,'price'=>'111','o_price'=>333,'time'=>date('m月d日',time())),
                array('area'=>'地区1','place'=>'景区1',
        'count'=>50,'price'=>'111','o_price'=>333,'time'=>date('m月d日',time())),
                array('area'=>'地区1','place'=>'景区1',
        'count'=>50,'price'=>'111','o_price'=>333,'time'=>date('m月d日',time())),
                array('area'=>'地区1','place'=>'景区1',
        'count'=>50,'price'=>'111','o_price'=>333,'time'=>date('m月d日',time())),
            );
        
        echo $list = json_encode($data);
    }
}