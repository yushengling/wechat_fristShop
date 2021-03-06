<?php
/**
 * Created by PhpStorm.
 * User: DMF
 * Date: 2018/1/3
 * Time: 16:18
 */

namespace Home\Controller;


use Rice\Core\Controller;
use Rice\Core\Core;

class Detail extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function total(){
        $infos = Core::get('Infos');
        $userid = $infos->get('userid');
        $goodid = $this->getRequest('id');

        $common = Core::instance('\Home\Model\Common');
        $good = $common->getGood($goodid);
        //处理自己的上传路劲
        $imgs = explode(',',$good['imgUrl']);
        foreach($imgs as $k=>$v){
            if(substr(ltrim($v),0,1)!='h'){
                //var_dump(substr($v,0,1));
                $imgs[$k] = $v;
            }
        }

        $good['imgUrl'] = implode(',',$imgs);
        $this->assign('good',$good);
        $common = Core::instance('\Home\Model\Common');
        $comments = $common->getComments($userid,$goodid,0);

        $this->assign('comments',$comments);

        $this->display();
    }

    public function detail(){
        global $dinfos;
        $userid = $dinfos->getInfo('userid');
        $id = $this->getRequest('id');
        $common = \core\dphp::instance('\home\model\common');
        $good = $common->getGood($id);
        $this->assign('good',$good);
        $this->display();
    }

    /*
     * 商品信息页
     */
    public function index(){
        global $dinfos;
        $userid = $dinfos->getInfo('userid');
        $id = $this->getRequest('id');
        $common = \core\dphp::instance('\home\model\common');
        $good = $common->getGood($id);
        $this->assign('good',$good);
        $this->display();
    }

    public function Comments(){
        global $dinfos;
        $userid = $dinfos->getInfo('userid');
        $goodid = $this->getRequest('id');
        $common = \core\dphp::instance('\home\model\common');
        $comments = $common->getComments($userid,$goodid,0);
        $this->assign('goodid',$goodid);
        $this->assign('comments',$comments);
        $this->display();
    }
}