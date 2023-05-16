<?php

namespace App\Controllers;
use App\Models\CourseModel;
use App\Models\UserModel;

class Courses extends BaseController
{	

	public function index( $site)
	{
		if($_SESSION['logged']==1){
			$courseInstance = new CourseModel($db);
			$courses = $courseInstance->like('idnumber',$site,'after')->orderby('mundo','ASC')->withDeleted()->findAll();
			$courses = array(
				'courses'=>$courses, 
				'courseId'=>'1', 
				'site' => $site,
				'tourvisit' => '99',
			);
			$userId =  $_SESSION['user_id'];
			$userInfo = new UserModel($db);
			$tourVisits = $userInfo->getTourVisits($userId);
			//echo $tourVisits;
			$userId = $_SESSION['user_id'];
			$this->session->set('tourVisits', $tourVisits[0]['tourvisits']);			
			return view('courses/index',$courses);
		} else { 
			$this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
			return redirect()->to('/auth/login');
		}
	}

	public function list(){
		echo 'lista';
		if ($_SESSION['logged'] == 1) {
			$courseInstance = new  CourseModel($db);
			$worlds = $courseInstance->readCourses();
			$data = array(
				'worlds' => $worlds,
			);
			$items = array('lessonId','lesson','course','courseId','mundo','mundoName');
			$this->session->remove($items);
			return view('courses/list', $data);
		} else {
			$this->session->setFlashdata('message', 'No se encuentra logueado en el sistema');
			return redirect()->to('/auth/login');
		}
	}
}
