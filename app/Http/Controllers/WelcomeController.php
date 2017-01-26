<?php
/**
 * Created by PhpStorm.
 * User: qianlei
 * Date: 2017/1/26
 * Time: 下午10:49
 */

namespace App\Http\Controllers;


use App\Models\Student;

class WelcomeController
{
    public function index()
    {
        //echo 'welcome';
        $student = Student::find(2);
        echo $student->name;
    }
}