<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once('application/controllers/account/Account_controller.php');
//include('application/helpers/date_helper.php');

class Test_php extends Account_controller
{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        chdir('application/controllers/account/un_use/test/practice_3/PHP/59160214/');
        $pValue = shell_exec("./k 73 0.266941095890411");
        echo 1.00 - $pValue;
    }//index
}
?>