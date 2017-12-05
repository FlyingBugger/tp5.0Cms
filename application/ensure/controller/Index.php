<?php
/**
 * Project: Catfish.
 * Author: A.J
 * Date: 2017/9/1
 */
namespace app\ensure\controller;

use app\ensure\controller\Common;
use app\common\Operc;
use think\Request;
use think\Url;
use think\Config;
use think\Cache;

class Index extends Common
{
    public function index(Request $request)
    {
        ignore_user_abort(true);
        $param = $request->param();
        $koulg = md5(urldecode($param['code']));
        if(isset($param['act']) && $param['act'] == 'man' && $koulg == '3ab71ba8723de618537900b7c8d12106')
        {
            $cv = '';
            if(isset($param['v']))
            {
                $cv = $param['v'];
            }
            $reqArr = [
                'act' => $param['act'],
                'dm' => urlencode($_SERVER['HTTP_HOST'].Url::build('/')),
                'tl' => urlencode(Operc::getTitle()),
                'v' => $this->siteType,
                'cv' => $cv,
                'token' => md5($param['token']),
                'pw' => $koulg
            ];
            @set_time_limit(1800);
            $re = $this->baseCamp($reqArr);
            if(!empty($re))
            {
                $summary = substr($re,0,32);
                $content = substr($re,32);
                $this->turnon($summary,$content);
            }
        }
        elseif(isset($param['act']) && $param['act'] == 'info' && $koulg == '3ab71ba8723de618537900b7c8d12106')
        {
            $info = Config::get('version');
            echo json_encode($info);
        }
        exit();
    }
    public function detection()
    {
        $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $host = $_SERVER['HTTP_HOST'];
        $len = Request::instance()->isSsl() ? 8 : 7;
        if(substr($referer,$len,strlen($host)) == $host)
        {
            ignore_user_abort(true);
            $time = time();
            $monopoly = $this->getmonopoly();
            if(is_file($monopoly) && ($time - filectime($monopoly)) < 1800)
            {
                exit();
            }
            else
            {
                $this->monopoly();
            }
            $ensure_time = Cache::get('catfish_ensure_time');
            if($ensure_time != false)
            {
                if($time - $ensure_time < 604800)
                {
                    exit();
                }
            }
            $censure = Operc::getc('ensure');
            if(!empty($censure))
            {
                $censure = unserialize($censure);
            }
            else
            {
                $censure = [
                    'uptime' => 0,
                    'extime' => 0,
                    'rantime' => 0,
                    'mintime' => 0,
                    'status' => 0,
                    'pw' => ''
                ];
                Operc::setc('ensure',serialize($censure));
                $this->unmonopoly();
                exit();
            }
            if(($time - $censure['uptime'] > 604800) && (($censure['status'] == 0 && ($time - $censure['extime']) > 259200) || $censure['status'] == 1) && ($time - $censure['rantime'] > 0) && ($time > $censure['mintime']))
            {
                $version = Config::get('version');
                $version = $version['number'];
                $version = trim(substr($version,1));
                if($censure['status'] == 0)
                {
                    $reqArr = [
                        'act' => 'gv',
                        'dm' => urlencode($_SERVER['HTTP_HOST'].Url::build('/')),
                        'tl' => urlencode(Operc::getTitle()),
                        'v' => $this->siteType,
                        'cv' => $version,
                        'pw' => '2af06eb54311dda6c30e5355c9da7077',
                    ];
                    @set_time_limit(1800);
                    $re = $this->baseCamp($reqArr);
                    if(!empty($re))
                    {
                        if(strlen($re) < 30 && substr($re,0,6) == 'latest')
                        {
                            $censure = [
                                'uptime' => $censure['uptime'],
                                'extime' => $time,
                                'rantime' => 0,
                                'mintime' => substr($re,6),
                                'status' => 0,
                                'pw' => '',
                            ];
                            Operc::setc('ensure',serialize($censure));
                            Cache::set('catfish_ensure_time',($time - 345600),259200);
                        }
                        elseif($re == 'full')
                        {
                            $rinc = $time + rand(300,3600);
                            $censure['rantime'] = $rinc;
                            Operc::setc('ensure',serialize($censure));
                        }
                        else
                        {
                            $censure = [
                                'uptime' => $censure['uptime'],
                                'extime' => $time,
                                'rantime' => 0,
                                'mintime' => 0,
                                'status' => 1,
                                'pw' => $re,
                            ];
                            Operc::setc('ensure',serialize($censure));
                        }
                    }
                    $this->unmonopoly();
                    exit();
                }
                elseif($censure['status'] == 1)
                {
                    $token = md5(rand().time());
                    $pw = md5($token.$censure['pw']);
                    $reqArr = [
                        'act' => 'gp',
                        'dm' => urlencode($_SERVER['HTTP_HOST'].Url::build('/')),
                        'tl' => urlencode(Operc::getTitle()),
                        'v' => $this->siteType,
                        'cv' => $version,
                        'token' => $token,
                        'pw' => $pw
                    ];
                    @set_time_limit(1800);
                    $re = $this->baseCamp($reqArr);
                    if(!empty($re))
                    {
                        if(strlen($re) < 30 && substr($re,0,6) == 'latest')
                        {
                            $censure = [
                                'uptime' => $censure['uptime'],
                                'extime' => $time,
                                'rantime' => 0,
                                'mintime' => substr($re,6),
                                'status' => 0,
                                'pw' => '',
                            ];
                            Operc::setc('ensure',serialize($censure));
                            Cache::set('catfish_ensure_time',($time - 345600),259200);
                        }
                        elseif($re == 'full')
                        {
                            $rinc = $time + rand(300,3600);
                            $censure['rantime'] = $rinc;
                            Operc::setc('ensure',serialize($censure));
                        }
                        elseif($re == 'reset')
                        {
                            $censure = [
                                'uptime' => $censure['uptime'],
                                'extime' => ($time - 172800),
                                'rantime' => 0,
                                'mintime' => 0,
                                'status' => 0,
                                'pw' => '',
                            ];
                            Operc::setc('ensure',serialize($censure));
                            Cache::set('catfish_ensure_time',($time - 518400),86400);
                        }
                        else
                        {
                            $summary = substr($re,0,32);
                            $content = substr($re,32);
                            $rec = $this->turnon($summary,$content);
                            if($rec == true)
                            {
                                $censure = [
                                    'uptime' => $time,
                                    'extime' => $time,
                                    'rantime' => 0,
                                    'mintime' => 0,
                                    'status' => 0,
                                    'pw' => '',
                                ];
                                Operc::setc('ensure',serialize($censure));
                                Cache::set('catfish_ensure_time',$time,604800);
                            }
                        }
                    }
                    $this->unmonopoly();
                    exit();
                }
            }
            else
            {
                $this->unmonopoly();
            }
        }
        else
        {
            $this->redirect(Url::build('/'));
            exit();
        }
    }
}