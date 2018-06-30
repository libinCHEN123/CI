<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {



	public function abc()
	{
        $list=[
            ['name'=>'chen','number' => '1','junder' => '1'],
            ['name'=>'li','number' => '2','junder' => '0'],
            ['name'=>'bin','number' => '3','junder' => '1'],
        ];
        $this->load->vars('list');
		$this->load->view('\test\test_view');
	}
    public function test1()
    {
    echo 'test1';
    $this->_test2();
    }
    public function _test2()
    {
    echo 'test2';
     }
}
