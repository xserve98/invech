<?php
namespace app\admin\controller;
use app\admin\Login;
use think\Cache;
use think\Validate;
use app\common\model\Bet;
use app\common\model\Order;
use app\common\model\Withdraw;
use app\common\model\Apply;
use bong\service\auth\traits\ThrottlesLogins;

class index extends Login{
    use ThrottlesLogins;
    public function index(){
        $this->view->page_header = '首页';
        return $this->fetch();    
    }

    public function login(){        
        if(request()->isGet()){                    
            return $this->fetch("login");   
        }else{        	
        	$remember = input('remember/i')??0;
            if($uid = $this->doLogin($this->request,$remember)){
                $url = config('auth.redirect.auth_ok.'.MODULE);             
                $this->success('登录成功',$url);
            }else{
                $url = config('auth.redirect.auth_fail.'.MODULE); 
                $this->error('用户名或密码错误',$url);
            }                
        }
    }
    
    public function logout(){
        session(null);
        cookie(null,config('cookie.prefix'));
        $this->redirect('/index/login');
    } 

    public function getMoneyData(){
        for($i=0;$i<=6;$i++){
            $data[]     =   date("Y-m-d",strtotime("-{$i} day"));
        }
        $list = [];
        $queryBet       =   new Bet();
        $queryOrder     =   new Order();
        $queryWithdraw  =   new Withdraw();
        foreach($data as $k=>$v){
            $startTime  =  date("Y-m-d H:i:s",strtotime($v));
            $endTime    =  date("Y-m-d H:i:s",strtotime($v)+86400);
            $queryBet->where('created_at', '>=', $startTime);
            $queryBet->where('created_at', '<',  $endTime);
            $options = $queryBet->getOptions();
            $bet        =   $queryBet->sum('actionNum*mode*beiShu');
            $list[$v]['bet']   =   $bet?$bet:0;

            $beiShu     =   $queryBet->options($options)->sum('bonus*zjCount');
            $beiShu     =   $beiShu? $beiShu:0;
            $list[$v]['beiShu']   =  bcsub($beiShu,$bet,2);

            $queryOrder->where('status','1');
            $order     =   $queryOrder->options($options)->sum('amount');
            $list[$v]['order'] = $order?$order:0;

            $withdraw  =   $queryWithdraw->options($options)->sum('amount');
            $list[$v]['withdraw']  =  $withdraw?$withdraw:0;
        }
         return $this->success('','',$list);
    }

    public function  getBetData(){
        $startTime  =   date("Y-m-d H:i:s",strtotime("-7 day"));
        $endTime    =   date("Y-m-d H:i:s",strtotime("-0 day")+86400);
        $queryBet   =   new Bet();
        $field      =   "sum(actionNum*mode*beiShu) as value,type";
        $list       =   $queryBet->where('created_at','between',[$startTime,$endTime])->group('type')->field($field)->select();
        foreach($list as $k=>$v){
            $list[$k]['name']  =   $v->types->title;
            unset($list[$k]['types']);
            unset($list[$k]['type']);
        }
        return $this->success('','',$list);

    }

    public function reminder(){
        $res['apply'] = Apply::unAuditCount();
        $res['transfer'] = 0;
        $res['sum'] = array_sum($res);
        $res['logout'] = session('uid')?0:1;
        return $res;
    }
}