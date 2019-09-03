<?php

namespace App\Http\Controllers;

use app\controllers\PageController;
use App\Users;
use Illuminate\Http\Request;

class Qq extends Controller
{
    /**
     * 展示注册页面
     * @return view
     */
    public function Reg()
    {
        //展示注册页面
        return view('qq.reg');
    }

    /**
     * 注册添加
     * @param Request $request 接收表单传输的值
     */
    public function RegDo(Request $request)
    {
        //生成一个随机账号
        $request['name']=rand(10000000,99999999);
        //验证数据是否合法
        $this->validate($request, [
            'name' => 'required|unique:users',
            'nickname' => 'required',
            'pwd' => 'required',
            'phone'=>'required'
        ]);
        //实例化
        $user=new Users();
        //添加
        $user->name=$request['name'];
        $user->nickname=$request['nickname'];
        $user->pwd=md5($request['pwd']);
        $user->phone=$request['phone'];
        //判断是否添加成功
        if ($user->save()) {
            return '注册成功，您好的账号为：'.$request['name'];
        } else {
            return '注册失败';
        }

    }

    /**
     * 登录
     */
    public function Login()
    {
        return view('qq.login');
    }

    /**
     * 登录
     * @param Request $request 接收表单传输的值
     */
    public function LoginDo(Request $request)
    {
        //验证数据是否合法
        $this->validate($request, [
            'name' => 'required',
            'pwd' => 'required'
        ]);
        //实例化
        $user=new Users();
        //查询账号是否正确
        $arr=$user->where([
            ['name',$request['name']],
            ['pwd',md5($request['pwd'])]
        ])->first();
        //判断是否存在
        if ($arr) {
            return view('qq.info',['user'=>$arr->toArray()]);
        } else {
            return '账号或密码错误';
        }
    }
}
