<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
require_once 'resources/org/code/Code.class.php';
class LoginController extends CommonController
{
    /**
	 * 登陆
	 */
	 public function login()
	 {
	 	return view('admin.login');
	 }
	 
	 /**
	  * 验证
	  */
	  public function code()
	  {
	  	$code = new \Code;
	  	$code->make();
	  }
	  
	  /**
	  * 验证
	  */
	  public function getcode()
	  {
	  	$code = new \Code;
	  	echo $code->get();
	  }
}
