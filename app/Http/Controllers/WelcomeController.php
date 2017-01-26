<?php
/**
 * Created by PhpStorm.
 * User: qianlei
 * Date: 2017/1/26
 * Time: 下午10:49
 */

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Container\Container;

class WelcomeController
{
    /**
     * @return mixed
     */
    public function index()
    {
        //echo 'welcome';
        $student = Student::find(2);
        $data = $student->getAttributes();
        //echo $student->name;
        $app = Container::getInstance();
        $factory = $app->make('view');
        return $factory->make('welcome')->with('data',$data);
    }
}