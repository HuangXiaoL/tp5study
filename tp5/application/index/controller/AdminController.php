<?php
/**
 * Created by PhpStorm.
 * User: administer
 * Date: 2017/11/24
 * Time: 16:41
 */

namespace app\index\controller;


use app\index\model\Admin;
use think\Controller;

class AdminController extends Controller
{
    public function Login()
    {
        if(request()->isPost()){
            //var_dump(request()->post());
            $password=Admin::where('username',request()->post('username'))->value('password');
            //var_dump($password);
//            exit();
            if($password){
               $parameter=password_verify(request()->post('password'),$password);
               if ($parameter){


                   $this->success('登录成功', 'index');
               }else{
                   $this->error('登录失败');
               }
            }else{
                $this->error('登录失败');
            }
        }
        return view('login');
    }

    public function Index()
    {
        $admin=Admin::all();
//        var_dump($admin);
//       exit();
//        //传递到页面
        return view('index',array('admin'=>$admin));
    }
    public function Add(){
        //检查 是否是post提交
        if(request()->ispost()){

            //实例化对象
            $admin=new Admin();

            //绑定用户名
            $admin->username=request()->post('username');
           // var_dump(request()->post('username'));
            //var_dump($admin->username);
            //获取传进来的密码
            $password=request()->post('password');

            //绑定密码并且加密
            $admin->password=password_hash($password,PASSWORD_DEFAULT);


//            var_dump($admin->username);
//            var_dump($admin->password);
//            exit();
            //提交到数据库
            $admin->save();
//            var_dump($admin->password);
//            exit();
            return $this->redirect('index');
        }

        return  view('add');
    }


    public function Edit($id)
    {
        if (request()->isGet()){//查询数据
        $admin=Admin::where('id',$id)->find();
//        var_dump($admin->id);
//        exit();
        }

        if(request()->ispost()){

            //找到数据
         $admin=Admin::where('id',request()->post('id'))->find();
            //绑定用户名
            $admin->username=request()->post('username');
            // var_dump(request()->post('username'));
            //var_dump($admin->username);
            //获取传进来的密码
            $password=request()->post('password');

            //绑定密码并且加密
            $admin->password=password_hash($password,PASSWORD_DEFAULT);


//    z        var_dump($admin->username);
//            var_dump($admin->password);
//            exit();
            //提交到数据库
            $admin->save();
//            var_dump($admin->password);
//            exit();
            return $this->redirect('index');
        }



        return view('edit',array('admin'=>$admin));
    }


    public function Del($id)
    {
        $admin = Admin::get($id);
        $admin->delete();

        return $this->redirect('index');
    }
}