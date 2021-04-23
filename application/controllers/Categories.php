<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
    {
		parent::__construct();
		$this->mysystem = $this->Admin_mo->getrow('system',array('id'=>'1'));
	    if(!$this->session->userdata('uid'))
	    { 
			redirect('home');
	    }
		else
		{
			$this->loginuser = $this->Admin_mo->getrowjoinLeftLimit('users.*,usertypes.privileges as privileges,langs.dir as dir','users',array('usertypes'=>'users.utid=usertypes.id','langs'=>'users.lang=langs.code'),array('users.id'=>$this->session->userdata('uid')),'');
			$this->sections = array();
			$sections = $this->Admin_mo->getwhere('sections',array('active'=>'1'));
			if(!empty($sections))
			{
				foreach($sections as $section) { $this->sections[$section->id] = $section->code; }
			}
		}
	}

	public function index()
	{
		if(strpos($this->loginuser->privileges, ',cgsee,') !== false && in_array('CG',$this->sections))
		{
		$data['admessage'] = '';
		$data['system'] = $this->mysystem;
		$this->lang->load($this->loginuser->lang, $this->loginuser->lang);
		$this->config->set_item('language', $this->loginuser->lang);
		$employees = $this->Admin_mo->get('users'); foreach($employees as $employee) { $data['employees'][$employee->id] = $employee->username; }
		$data['preporders'] = $this->Admin_mo->getjoinLeft('categories.*,cg_d.id as cg_d_id,cg_d.title as title,langs.title as lang','cg_d',array('categories'=>'cg_d.category = categories.id','langs'=>'cg_d.code = langs.code'),array());
		if(!empty($data['preporders']))
		{
			for($i=0;$i<count($data['preporders']);$i++)
			{
				//$data['orders'][$data['preporders'][$i]->oid] = new stdClass();
				$data['categories'][$data['preporders'][$i]->id]['id'] = $data['preporders'][$i]->id;
				$data['categories'][$data['preporders'][$i]->id]['uid'] = $data['preporders'][$i]->uid;
				$data['categories'][$data['preporders'][$i]->id]['time'] = $data['preporders'][$i]->time;
				$data['categories'][$data['preporders'][$i]->id]['active'] = $data['preporders'][$i]->active;
				$data['categories'][$data['preporders'][$i]->id]['items'][$i]['id'] = $data['preporders'][$i]->cg_d_id;
				$data['categories'][$data['preporders'][$i]->id]['items'][$i]['lang'] = $data['preporders'][$i]->lang;
				$data['categories'][$data['preporders'][$i]->id]['items'][$i]['title'] = $data['preporders'][$i]->title;
			}
		}
		$this->load->view('calenderdate');
		$this->load->view('headers/categories',$data);
		$this->load->view('sidemenu',$data);
		$this->load->view('topmenu',$data);
		$this->load->view('admin/categories',$data);
		$this->load->view('footers/categories');
		$this->load->view('messages');
		}
		else
		{
		$data['title'] = 'categories';
		$data['admessage'] = 'youhavenoprivls';
		$data['system'] = $this->mysystem;
		$this->lang->load($this->loginuser->lang, $this->loginuser->lang);
		$this->config->set_item('language', $this->loginuser->lang);
		$this->load->view('headers/categories',$data);
		$this->load->view('sidemenu',$data);
		$this->load->view('topmenu',$data);
		$this->load->view('admin/messages',$data);
		$this->load->view('footers/categories');
		$this->load->view('messages');
		}
	}

	public function add()
	{
		if(strpos($this->loginuser->privileges, ',cgadd,') !== false && in_array('CG',$this->sections))
		{
		$data['admessage'] = '';
		$data['system'] = $this->mysystem;
		$this->lang->load($this->loginuser->lang, $this->loginuser->lang);
		$this->config->set_item('language', $this->loginuser->lang);
		$data['langs'] = $this->Admin_mo->getwhere('langs',array('active'=>'1'));
		if(!empty($data['langs']))
		{
			$this->load->view('headers/category-add',$data);
			$this->load->view('sidemenu',$data);
			$this->load->view('topmenu',$data);
			$this->load->view('admin/category-add',$data);
			$this->load->view('footers/category-add');
			$this->load->view('messages');
		}
		else
		{
			$data['title'] = 'categories';
			$data['admessage'] = 'youhavenoprivls';
			$this->load->view('headers/categories',$data);
			$this->load->view('sidemenu',$data);
			$this->load->view('topmenu',$data);
			$this->load->view('admin/messages',$data);
			$this->load->view('footers/categories');
			$this->load->view('messages');
		}
		}
		else
		{
		$data['title'] = 'categories';
		$data['admessage'] = 'youhavenoprivls';
		$data['system'] = $this->mysystem;
		$this->lang->load($this->loginuser->lang, $this->loginuser->lang);
		$this->config->set_item('language', $this->loginuser->lang);
		$this->load->view('headers/categories',$data);
		$this->load->view('sidemenu',$data);
		$this->load->view('topmenu',$data);
		$this->load->view('admin/messages',$data);
		$this->load->view('footers/categories');
		$this->load->view('messages');
		}
	}
	
	public function create()
	{
		if(strpos($this->loginuser->privileges, ',cgadd,') !== false && in_array('CG',$this->sections))
		{
		    $this->lang->load($this->loginuser->lang, $this->loginuser->lang);
			$this->config->set_item('language', $this->loginuser->lang);
			$langs = $this->Admin_mo->getwhere('langs',array('active'=>'1')); foreach($langs as $lang) { $mylang[$lang->code] = $lang->title; }
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>');
		//$this->form_validation->set_rules('titlear', 'lang:titlear' , 'trim|required|max_length[255]|is_unique[categories.cgtitlear]');
		foreach(set_value('title') as $lang => $title) { $this->form_validation->set_rules('title['.$lang.']', $mylang[$lang] , 'trim|required|max_length[255]'); }
		if($this->form_validation->run() == FALSE)
		{
			$data['system'] = $this->mysystem;
			$data['langs'] = $this->Admin_mo->getwhere('langs',array('active'=>'1'));
			$this->load->view('headers/category-add',$data);
			$this->load->view('sidemenu',$data);
			$this->load->view('topmenu',$data);
			$this->load->view('admin/category-add',$data);
			$this->load->view('footers/category-add');
			$this->load->view('messages');
		}
		else
		{
			//foreach(set_value('lang') as $lang) { echo $lang; }
			$set_arr = array('uid'=>$this->session->userdata('uid'), 'active'=>set_value('active'), 'time'=>time());
			$id = $this->Admin_mo->set('categories', $set_arr);
			if(empty($id))
			{
				$_SESSION['time'] = time(); $_SESSION['message'] = 'somthingwrong';
				redirect('categories/add', 'refresh');
			}
			else
			{
				foreach(set_value('title') as $lang => $title) { $cg_d = $this->Admin_mo->set('cg_d', array('category'=>$id, 'title'=>$title, 'code'=>$lang)); }
				$_SESSION['time'] = time(); $_SESSION['message'] = 'success';
				redirect('categories', 'refresh');
			}
		}
		//redirect('categories/add', 'refresh');
		}
		else
		{
		$data['title'] = 'categories';
		$data['admessage'] = 'youhavenoprivls';
		$data['system'] = $this->mysystem;
		$this->lang->load($this->loginuser->lang, $this->loginuser->lang);
		$this->config->set_item('language', $this->loginuser->lang);
		$this->load->view('headers/categories',$data);
		$this->load->view('sidemenu',$data);
		$this->load->view('topmenu',$data);
		$this->load->view('admin/messages',$data);
		$this->load->view('footers/categories');
		$this->load->view('messages');
		}
	}
	
	public function edit($id)
	{
		if(strpos($this->loginuser->privileges, ',cgedit,') !== false && in_array('CG',$this->sections))
		{
		$id = abs((int)($id));
		$data['system'] = $this->mysystem;
		$this->lang->load($this->loginuser->lang, $this->loginuser->lang);
		$this->config->set_item('language', $this->loginuser->lang);
		$data['category'] = $this->Admin_mo->getrow('categories',array('id'=>$id));
		if(!empty($data['category']))
		{
			$data['langs'] = $this->Admin_mo->getwhere('langs',array('active'=>'1'));
			$cg_ds = $this->Admin_mo->getwhere('cg_d',array('category'=>$id));
			foreach($cg_ds as $cg_d) { $data['cg_ds'][$cg_d->code]['title'] = $cg_d->title; }
			$this->load->view('headers/category-edit',$data);
			$this->load->view('sidemenu',$data);
			$this->load->view('topmenu',$data);
			$this->load->view('admin/category-edit',$data);
			$this->load->view('footers/category-edit');
			$this->load->view('messages');
		}
		else
		{
			$data['title'] = 'categories';
			$data['admessage'] = 'youhavenoprivls';
			$this->load->view('headers/categories',$data);
			$this->load->view('sidemenu',$data);
			$this->load->view('topmenu',$data);
			$this->load->view('admin/messages',$data);
			$this->load->view('footers/categories');
			$this->load->view('messages');
		}
		}
		else
		{
		$data['title'] = 'categories';
		$data['admessage'] = 'youhavenoprivls';
		$data['system'] = $this->mysystem;
		$this->lang->load($this->loginuser->lang, $this->loginuser->lang);
		$this->config->set_item('language', $this->loginuser->lang);
		$this->load->view('headers/categories',$data);
		$this->load->view('sidemenu',$data);
		$this->load->view('topmenu',$data);
		$this->load->view('admin/messages',$data);
		$this->load->view('footers/categories');
		$this->load->view('messages');
		}
	}
	
	public function editcategory($id)
	{
		if(strpos($this->loginuser->privileges, ',cgedit,') !== false && in_array('CG',$this->sections))
		{
		$id = abs((int)($id));
		if($id != '')
		{
		    $this->lang->load($this->loginuser->lang, $this->loginuser->lang);
				$this->config->set_item('language', $this->loginuser->lang);
				$langs = $this->Admin_mo->getwhere('langs',array('active'=>'1')); foreach($langs as $lang) { $mylang[$lang->code] = $lang->title; }
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>');
			foreach(set_value('title') as $lang => $title) { $this->form_validation->set_rules('title['.$lang.']', $mylang[$lang] , 'trim|required|max_length[255]'); }
			if($this->form_validation->run() == FALSE)
			{
				$data['system'] = $this->mysystem;
				$data['category'] = $this->Admin_mo->getrow('categories',array('id'=>$id));
				$data['langs'] = $this->Admin_mo->getwhere('langs',array('active'=>'1'));
				$cg_ds = $this->Admin_mo->getwhere('cg_d',array('category'=>$id));
				foreach($cg_ds as $cg_d) { $data['cg_ds'][$cg_d->code] = $cg_d->title; }
				$this->load->view('headers/category-edit',$data);
				$this->load->view('sidemenu',$data);
				$this->load->view('topmenu',$data);
				$this->load->view('admin/category-edit',$data);
				$this->load->view('footers/category-edit');
				$this->load->view('messages');
			}
			else
			{
				$update_array = array('uid'=>$this->session->userdata('uid'), 'active'=>set_value('active'), 'time'=>time());
				if($this->Admin_mo->update('categories', $update_array, array('id'=>$id)))
				{
					$this->Admin_mo->del('cg_d', array('category'=>$id));
					foreach(set_value('title') as $lang => $title) { $cg_d = $this->Admin_mo->set('cg_d', array('category'=>$id, 'title'=>$title, 'code'=>$lang)); }
					$_SESSION['time'] = time(); $_SESSION['message'] = 'success';
				}
				else
				{
					$_SESSION['time'] = time(); $_SESSION['message'] = 'somthingwrong';
				}
				redirect('categories', 'refresh');
			}
		}
		else
		{
			$data['admessage'] = 'Not Saved';
			$_SESSION['time'] = time(); $_SESSION['message'] = 'somthingwrong';
			redirect('categories', 'refresh');
		}
		//redirect('categories', 'refresh');
		}
		else
		{
		$data['title'] = 'categories';
		$data['admessage'] = 'youhavenoprivls';
		$data['system'] = $this->mysystem;
		$this->lang->load($this->loginuser->lang, $this->loginuser->lang);
		$this->config->set_item('language', $this->loginuser->lang);
		$this->load->view('headers/categories',$data);
		$this->load->view('sidemenu',$data);
		$this->load->view('topmenu',$data);
		$this->load->view('admin/messages',$data);
		$this->load->view('footers/categories');
		$this->load->view('messages');
		}
	}

	public function del($id)
	{
		$id = abs((int)($id));
		if(strpos($this->loginuser->privileges, ',cgdelete,') !== false && in_array('CG',$this->sections))
		{
		$category = $this->Admin_mo->getrow('categories', array('id'=>$id));
		if(!empty($category))
		{
			$this->Admin_mo->del('categories', array('id'=>$id));
			$this->Admin_mo->del('cg_d', array('category'=>$id));
			$_SESSION['time'] = time(); $_SESSION['message'] = 'success';
			redirect('categories', 'refresh');
		}
		else
		{
			$data['title'] = 'categories';
			$data['admessage'] = 'youhavenoprivls';
			$data['system'] = $this->mysystem;
			$this->lang->load($this->loginuser->lang, $this->loginuser->lang);
			$this->config->set_item('language', $this->loginuser->lang);
			$this->load->view('headers/categories',$data);
			$this->load->view('sidemenu',$data);
			$this->load->view('topmenu',$data);
			$this->load->view('admin/messages',$data);
			$this->load->view('footers/categories');
			$this->load->view('messages');
		}
		}
		else
		{
		$data['title'] = 'categories';
		$data['admessage'] = 'youhavenoprivls';
		$data['system'] = $this->mysystem;
		$this->lang->load($this->loginuser->lang, $this->loginuser->lang);
		$this->config->set_item('language', $this->loginuser->lang);
		$this->load->view('headers/categories',$data);
		$this->load->view('sidemenu',$data);
		$this->load->view('topmenu',$data);
		$this->load->view('admin/messages',$data);
		$this->load->view('footers/categories');
		$this->load->view('messages');
		}
	}	
}