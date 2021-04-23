<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

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
		parent::__construct();				$this->usertypes = array(1,2,3,4,5);
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
		if(strpos($this->loginuser->privileges, ',cssee,') !== false && in_array('CS',$this->sections))
		{
		$data['admessage'] = '';
		$data['system'] = $this->mysystem;
		$this->lang->load($this->loginuser->lang, $this->loginuser->lang);
		$this->config->set_item('language', $this->loginuser->lang);
		$employees = $this->Admin_mo->get('users'); foreach($employees as $employee) { $data['employees'][$employee->id]['name'] = $employee->fname.' '.$employee->lname; $data['employees'][$employee->id]['email'] = $employee->email; $data['employees'][$employee->id]['mobile'] = $employee->mobile; }				$data['preporders'] = $this->Admin_mo->getjoinLeftLimit('courses.*,course_orders.id as course_order_id,course_orders.user as course_order_user,course_orders.time as course_order_time,langs.title as lang','courses',array('course_orders'=>'courses.id = course_orders.course','langs'=>'courses.lang = langs.code'),array(),'course_orders.time desc','');
		//print_r($data['courses']);		if(!empty($data['preporders']))		{			for($i=0;$i<count($data['preporders']);$i++)			{				//$data['orders'][$data['preporders'][$i]->oid] = new stdClass();				$data['courses'][$data['preporders'][$i]->id]['id'] = $data['preporders'][$i]->id;				$data['courses'][$data['preporders'][$i]->id]['code'] = $data['preporders'][$i]->code;				$data['courses'][$data['preporders'][$i]->id]['title'] = $data['preporders'][$i]->title;				$data['courses'][$data['preporders'][$i]->id]['desc'] = $data['preporders'][$i]->desc;				$data['courses'][$data['preporders'][$i]->id]['lang'] = $data['preporders'][$i]->lang;				$data['courses'][$data['preporders'][$i]->id]['img'] = $data['preporders'][$i]->img;				$data['courses'][$data['preporders'][$i]->id]['price'] = $data['preporders'][$i]->price;				$data['courses'][$data['preporders'][$i]->id]['uid'] = $data['preporders'][$i]->uid;				$data['courses'][$data['preporders'][$i]->id]['time'] = $data['preporders'][$i]->time;				$data['courses'][$data['preporders'][$i]->id]['active'] = $data['preporders'][$i]->active;								if($data['preporders'][$i]->course_order_id != '')				{					$data['courses'][$data['preporders'][$i]->id]['items'][$data['preporders'][$i]->course_order_id]['course_order_id'] = $data['preporders'][$i]->course_order_id;					$data['courses'][$data['preporders'][$i]->id]['items'][$data['preporders'][$i]->course_order_id]['course_order_user'] = $data['preporders'][$i]->course_order_user;					$data['courses'][$data['preporders'][$i]->id]['items'][$data['preporders'][$i]->course_order_id]['course_order_time'] = $data['preporders'][$i]->course_order_time;				}			}		}		$this->load->view('calenderdate');
		$this->load->view('headers/courses',$data);
		$this->load->view('sidemenu',$data);
		$this->load->view('topmenu',$data);
		$this->load->view('admin/courses',$data);
		$this->load->view('footers/courses');
		$this->load->view('messages');
		}
		else
		{
		$data['title'] = 'courses';
		$data['admessage'] = 'youhavenoprivls';
		$data['system'] = $this->mysystem;
		$this->lang->load($this->loginuser->lang, $this->loginuser->lang);
		$this->config->set_item('language', $this->loginuser->lang);
		$this->load->view('headers/courses',$data);
		$this->load->view('sidemenu',$data);
		$this->load->view('topmenu',$data);
		$this->load->view('admin/messages',$data);
		$this->load->view('footers/courses');
		$this->load->view('messages');
		}
	}	public function add()
	{
		if(strpos($this->loginuser->privileges, ',csadd,') !== false && in_array('CS',$this->sections))
		{
		$data['admessage'] = '';
		$data['system'] = $this->mysystem;
		$this->lang->load($this->loginuser->lang, $this->loginuser->lang);
		$this->config->set_item('language', $this->loginuser->lang);
		$data['langs'] = $this->Admin_mo->getwhere('langs', array('active'=>'1'));
		$this->load->view('headers/course-add',$data);
		$this->load->view('sidemenu',$data);
		$this->load->view('topmenu',$data);
		$this->load->view('admin/course-add',$data);
		$this->load->view('footers/course-add');
		$this->load->view('messages');
		}
		else
		{
		$data['title'] = 'courses';
		$data['admessage'] = 'youhavenoprivls';
		$data['system'] = $this->mysystem;
		$this->lang->load($this->loginuser->lang, $this->loginuser->lang);
		$this->config->set_item('language', $this->loginuser->lang);
		$this->load->view('headers/courses',$data);
		$this->load->view('sidemenu',$data);
		$this->load->view('topmenu',$data);
		$this->load->view('admin/messages',$data);
		$this->load->view('footers/courses');
		$this->load->view('messages');
		}
	}
	
	public function create()
	{
		if(strpos($this->loginuser->privileges, ',csadd,') !== false && in_array('CS',$this->sections))
		{
		    $this->lang->load($this->loginuser->lang, $this->loginuser->lang);
		$this->config->set_item('language', $this->loginuser->lang);
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>');
		$this->form_validation->set_rules('lang', 'lang:lang' , 'trim|required|max_length[2]|min_length[2]');		
		$this->form_validation->set_rules('title', 'lang:title' , 'trim|required|max_length[255]');				$this->form_validation->set_rules('desc', 'lang:desc' , 'required');				$this->form_validation->set_rules('price', 'lang:price' , 'trim|required|numeric');				if(isset($_FILES['img']['error']) && $_FILES['img']['error'] == 0) $this->form_validation->set_rules('img', 'lang:image' , 'callback_imageSize|callback_imageType');
		if($this->form_validation->run() == FALSE)
		{
			//$data['admessage'] = 'validation error';
			//$_SESSION['time'] = time(); $_SESSION['message'] = 'inputnotcorrect';
			$data['system'] = $this->mysystem;						$data['langs'] = $this->Admin_mo->getwhere('langs', array('active'=>'1'));
			$this->load->view('headers/course-add',$data);
			$this->load->view('sidemenu',$data);
			$this->load->view('topmenu',$data);
			$this->load->view('admin/course-add',$data);
			$this->load->view('footers/course-add');
			$this->load->view('messages');
		}
		else
		{
			$set_arr = array('uid'=>$this->session->userdata('uid'), 'price'=>set_value('price'), 'lang'=>set_value('lang'), 'url'=>str_replace(' ','_',set_value('title')), 'title'=>set_value('title'), 'desc'=>htmlspecialchars_decode(set_value('desc')), 'active'=>set_value('active'), 'time'=>time());						if(isset($_FILES['img']['error']) && $_FILES['img']['error'] == 0) { $set_arr['img'] = $this->uploadimg('img',$this->config->item('courses_folder'),$this->config->item('courses_thumb_folder'),mt_rand()); };
			$id = $this->Admin_mo->set('courses', $set_arr);
			if(empty($id))
			{
				$_SESSION['time'] = time(); $_SESSION['message'] = 'somthingwrong';
				redirect('courses/add', 'refresh');
			}
			else
			{
				$_SESSION['time'] = time(); $_SESSION['message'] = 'success';
				redirect('courses', 'refresh');
			}
		}
		//redirect('courses/add', 'refresh');
		}
		else
		{
		$data['title'] = 'courses';
		$data['admessage'] = 'youhavenoprivls';
		$data['system'] = $this->mysystem;
		$this->lang->load($this->loginuser->lang, $this->loginuser->lang);
		$this->config->set_item('language', $this->loginuser->lang);
		$this->load->view('headers/courses',$data);
		$this->load->view('sidemenu',$data);
		$this->load->view('topmenu',$data);
		$this->load->view('admin/messages',$data);
		$this->load->view('footers/courses');
		$this->load->view('messages');
		}
	}
	
	public function edit($id)
	{
		if(strpos($this->loginuser->privileges, ',csedit,') !== false && in_array('CS',$this->sections))
		{
		$id = abs((int)($id));
		$data['system'] = $this->mysystem;
		$this->lang->load($this->loginuser->lang, $this->loginuser->lang);
		$this->config->set_item('language', $this->loginuser->lang);
		$data['course'] = $this->Admin_mo->getrow('courses',array('id'=>$id));
		if(!empty($data['course']))
		{			$data['langs'] = $this->Admin_mo->getwhere('langs', array('active'=>'1'));			
			$this->load->view('headers/course-edit',$data);
			$this->load->view('sidemenu',$data);
			$this->load->view('topmenu',$data);
			$this->load->view('admin/course-edit',$data);
			$this->load->view('footers/course-edit');
			$this->load->view('messages');
		}
		else
		{
			$data['title'] = 'courses';
			$data['admessage'] = 'youhavenoprivls';
			$this->load->view('headers/courses',$data);
			$this->load->view('sidemenu',$data);
			$this->load->view('topmenu',$data);
			$this->load->view('admin/messages',$data);
			$this->load->view('footers/courses');
			$this->load->view('messages');
		}
		}
		else
		{
		$data['title'] = 'courses';
		$data['admessage'] = 'youhavenoprivls';
		$data['system'] = $this->mysystem;
		$this->lang->load($this->loginuser->lang, $this->loginuser->lang);
		$this->config->set_item('language', $this->loginuser->lang);
		$this->load->view('headers/courses',$data);
		$this->load->view('sidemenu',$data);
		$this->load->view('topmenu',$data);
		$this->load->view('admin/messages',$data);
		$this->load->view('footers/courses');
		$this->load->view('messages');
		}
	}
	
	public function editcourse($id)
	{
		if(strpos($this->loginuser->privileges, ',csedit,') !== false && in_array('CS',$this->sections))
		{
		$id = abs((int)($id));
		if($id != '')
		{
		    $this->lang->load($this->loginuser->lang, $this->loginuser->lang);
			$this->config->set_item('language', $this->loginuser->lang);
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>');
			$this->form_validation->set_rules('lang', 'lang:lang' , 'trim|required|max_length[2]|min_length[2]');			
			$this->form_validation->set_rules('title', 'lang:title' , 'trim|required|max_length[255]');					$this->form_validation->set_rules('desc', 'lang:desc' , 'required');						$this->form_validation->set_rules('price', 'lang:price' , 'trim|required|numeric');					if(isset($_FILES['img']['error']) && $_FILES['img']['error'] == 0) $this->form_validation->set_rules('img', 'lang:image' , 'callback_imageSize|callback_imageType');
			if($this->form_validation->run() == FALSE)
			{
				$data['system'] = $this->mysystem;
				$data['course'] = $this->Admin_mo->getrow('courses',array('id'=>$id));								$data['langs'] = $this->Admin_mo->getwhere('langs',array('active'=>'1'));
				$this->load->view('headers/course-edit',$data);
				$this->load->view('sidemenu',$data);
				$this->load->view('topmenu',$data);
				$this->load->view('admin/course-edit',$data);
				$this->load->view('footers/course-edit');
				$this->load->view('messages');
			}
			else
			{
				if($this->Admin_mo->exist('courses','where id <> '.$id.' and title like "'.set_value('title').'"',''))
				{
					$_SESSION['time'] = time(); $_SESSION['message'] = 'nameexist';
					redirect('courses/edit/'.$id, 'refresh');
				}
				else
				{
					$update_array = array('uid'=>$this->session->userdata('uid'), 'price'=>set_value('price'), 'lang'=>set_value('lang'), 'url'=>str_replace(' ','_',set_value('title')), 'title'=>set_value('title'), 'desc'=>htmlspecialchars_decode(set_value('desc')), 'active'=>set_value('active'), 'time'=>time());					if(isset($_FILES['img']['error']) && $_FILES['img']['error'] == 0) { $update_array['img'] = $this->uploadimg('img',$this->config->item('courses_folder'),$this->config->item('courses_thumb_folder'),mt_rand()); if($update_array['img'] != '' && set_value('oldimg') != '' && file_exists($this->config->item('courses_folder').set_value('oldimg'))) unlink($this->config->item('courses_folder').set_value('oldimg')); if($update_array['img'] != '' && set_value('oldimg') != '' && file_exists($this->config->item('courses_thumb_folder').set_value('oldimg'))) unlink($this->config->item('courses_thumb_folder').set_value('oldimg')); }

					if($this->Admin_mo->update('courses', $update_array, array('id'=>$id)))
					{
						$_SESSION['time'] = time(); $_SESSION['message'] = 'success';
					}
					else
					{
						$_SESSION['time'] = time(); $_SESSION['message'] = 'somthingwrong';
					}
					redirect('courses', 'refresh');
				}
			}
		}
		else
		{
			$data['admessage'] = 'Not Saved';
			$_SESSION['time'] = time(); $_SESSION['message'] = 'somthingwrong';
			redirect('courses', 'refresh');
		}
		//redirect('courses', 'refresh');
		}
		else
		{
		$data['title'] = 'courses';
		$data['admessage'] = 'youhavenoprivls';
		$data['system'] = $this->mysystem;
		$this->lang->load($this->loginuser->lang, $this->loginuser->lang);
		$this->config->set_item('language', $this->loginuser->lang);
		$this->load->view('headers/courses',$data);
		$this->load->view('sidemenu',$data);
		$this->load->view('topmenu',$data);
		$this->load->view('admin/messages',$data);
		$this->load->view('footers/courses');
		$this->load->view('messages');
		}
	}

	public function del($id)
	{
		$id = abs((int)($id));
		if(strpos($this->loginuser->privileges, ',csdelete,') !== false && in_array('CS',$this->sections))
		{
		$course = $this->Admin_mo->getrow('courses', array('id'=>$id));
		if(!empty($course))
		{
			$this->Admin_mo->del('courses', array('id'=>$id));						if($course->img != '' && file_exists($this->config->item('courses_folder').$course->img)) unlink($this->config->item('courses_folder').$course->img);			if(file_exists($this->config->item('courses_thumb_folder').$course->img)) unlink($this->config->item('courses_thumb_folder').$course->img);
			$_SESSION['time'] = time(); $_SESSION['message'] = 'success';
			redirect('courses', 'refresh');
		}
		else
		{
			$data['title'] = 'courses';
			$data['admessage'] = 'youhavenoprivls';
			$data['system'] = $this->mysystem;
			$this->lang->load($this->loginuser->lang, $this->loginuser->lang);
			$this->config->set_item('language', $this->loginuser->lang);
			$this->load->view('headers/courses',$data);
			$this->load->view('sidemenu',$data);
			$this->load->view('topmenu',$data);
			$this->load->view('admin/messages',$data);
			$this->load->view('footers/courses');
			$this->load->view('messages');
		}
		}
		else
		{
		$data['title'] = 'courses';
		$data['admessage'] = 'youhavenoprivls';
		$data['system'] = $this->mysystem;
		$this->lang->load($this->loginuser->lang, $this->loginuser->lang);
		$this->config->set_item('language', $this->loginuser->lang);
		$this->load->view('headers/courses',$data);
		$this->load->view('sidemenu',$data);
		$this->load->view('topmenu',$data);
		$this->load->view('admin/messages',$data);
		$this->load->view('footers/courses');
		$this->load->view('messages');
		}
	}		public function imageSize()	{		if ($_FILES['img']['size'] > 1024000)		{			//$this->form_validation->set_message('imageSize', 'يجب ان يكون حجم الصورة 1 ميجا او اقل');			return FALSE;		}		else		{			return TRUE;		}	}	public function imageType()	{		if (!in_array(strtoupper(pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION)),array('JPG','JPEG','PNG','JIF','BMP','TIF')))		{			//$this->form_validation->set_message('imageType', 'يجب ان يكون نوع الملف المرفوع واحد من هذه الانواع : JPG,JPEG,PNG,JIF,BMP,TIF');			return FALSE;		}		else		{			return TRUE;		}	}	public function uploadimg($inputfilename,$image_director,$image_director_thumb,$newname)	{		$file_extn = pathinfo($_FILES[$inputfilename]['name'], PATHINFO_EXTENSION);		if(!is_dir($image_director)) $create_image_director = mkdir($image_director);		$name = $newname.".".$file_extn;		if(move_uploaded_file($_FILES[$inputfilename]["tmp_name"], $image_director.$name))		{			if($image_director_thumb != '')			{				$this->load->library('Resize');				$this->resize->construct($image_director.$name);				$this->resize->resizeImage(760, 428, 'exact');				$this->resize->saveImage($image_director_thumb.$name, 100);			}			return $name;		}		else return '';	}
}