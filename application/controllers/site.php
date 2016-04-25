<?php

class Site extends CI_Controller
{
     function __construct()
     {
         parent::__construct();
         $this->is_logged_in();
         $this->load->model('get_schedule');
         $this->load->model('get_Events');
     }

     function update_company_profile()
     {
           $data['main_content'] = 'update_company_profile';
         $this->load->view('organisation_area',$data);

     }
  
     function update_student_profile()
     {
           $data['main_content'] = 'update_student_profile';
         $this->load->view('student_area',$data);

     }

  
      function logout()
     {
         $false = false;
        $this->session->set_userdata('is_logged_in',$false);
        $this->session->sess_destroy();
        redirect('login');   
     }

     function admin()
     {
       if($this->session->userdata('is_logged_in') && (($this->session->userdata('designation')=='admin')))
         {
       $data['main_content'] = 'admin';
       $this->load->view('admin_area',$data); 
     }
     }

     function add_student()
     {
         $data['main_content'] = 'add_student';
       $this->load->view('admin_area',$data);
         
     }

     function add_recruiter()
     {
         $data['main_content'] = 'add_recruiter';
       $this->load->view('admin_area',$data);
     }



    
     function admin_area()
     {
         if($this->session->userdata('is_logged_in') && (($this->session->userdata('designation')=='admin')))
         {
          $data['sql1'] = $this->get_schedule->get_list();
         $data['eve'] = $this->get_Events->get_list();
         $data['main_content'] = 'adminhome';
         $this->load->view('admin_area',$data);
         }
         else
         {
            $designation = $this->session->userdata('designation');
         
                    
        if( $designation == 'company')
       {
        redirect('site/organisation_area');
        die();
       }
        else if($designation == 'student')
        {
          redirect('site/student_area');
          die();
        }
         }
         
     }

      function delete_event($id)
     {
         $this->get_Events->delete($id);
         redirect('site/admin_area');
     }

     function add_event()
     {
      $data['op'] = 'add';
      $this->load->view("add_event",$data);
     }

     function add_event_to()
     {
         $op = $this->input->post('op');
         $event_name = $this->input->post('name');
         $require = $this->input->post('require');
         $date = $this->input->post('date');
         $venue = $this->input->post('venue');
         $about = $this->input->post('about');
         
         $data = array(
                        'event_name' => $event_name,
                        'event_date'      => $date,
                        'event_require'   => $require,
                        'event_about'    => $about,
                        'event_venue'     => $venue
                      );

         if( $op == 'edit')
         {
              $id = $this->input->post('id');
              $this->get_Events->edit_finally($id,$data);
              redirect('site/admin_area');
         }
         else if( $op == 'add')
         {
             $this->get_Events->add_finally($data);
             redirect('site/admin_area');
         }
         
     }

      function update_event($id)
     {
         $data['op'] = 'edit';
         $data['id'] = $id;
         $data['sql1'] = $this->get_Events->edit($id);
         $this->load->view("add_event",$data);
     }

     function delete_schedule($id)
     {
         $this->get_schedule->delete($id);
         redirect('site/admin_area');
     }

     function add_schedule()
     {
      $data['op'] = 'add';
      $this->load->view("add_schedule",$data);
     }

     function add_schedule_to()
     {
         $op = $this->input->post('op');
         $comp_name = $this->input->post('name');
         $branch = $this->input->post('branch');
         $date = $this->input->post('date');
         $venue = $this->input->post('venue');
         
         $data = array(
                        'compName' => $comp_name,
                        'date'      => $date,
                        'branch'    => $branch,
                        'venue'     => $venue
                      );

         if( $op == 'edit')
         {
              $id = $this->input->post('id');
              $this->get_schedule->edit_finally($id,$data);
              redirect('site/admin_area');
         }
         else if( $op == 'add')
         {
             $this->get_schedule->add_finally($data);
             redirect('site/admin_area');
         }
         
     }


     function update_schedule($id)
     {
         $data['op'] = 'edit';
         $data['id'] = $id;
         $data['sql'] = $this->get_schedule->edit($id);
         $this->load->view("add_schedule",$data);
     }

   function organisation_area()
     {
         $firstComer  = $this->session->userdata('firstComer');                
         if($firstComer === 'Not Set')
         {
             $data['main_content'] = 'updateProfileRequest';
         }
         else
         {
             redirect('home/view_profile');
         }
                  $this->load->view('organisation_area',$data);
     }

     function welcome_back()
     {
        
           $this->load->model('your_profile');
           $ans = $this->your_profile->your_bio();
           foreach ($ans->result() as $obj) {
                    $data['name'] = $obj->name;
                    $data['college']= $obj->college;
                    $data['email']= $obj->email;
                    $data['aboutyou'] =$obj->aboutyou;
                    $data['rollno'] =$obj->rollno;
                    $data['branch'] =$obj->branch;
                    $data['cgpi']= $obj->CGPI_req;
                    $data['phone'] = $obj->phone;
                    $data['skills'] = $obj->skills;
           }
           $data['main_content'] = 'student_content';
           $this->load->view('student_area',$data);

     }

     function student_area()
     {        
           if($this->session->userdata('is_logged_in') && (($this->session->userdata('designation')=='student')))
         {
           $this->load->model('your_profile');
           $my_info = $this->your_profile->your_bio();
           foreach ($my_info->result() as $obj) {
                    
                    $data['phone'] = $obj->phone;

                  }
                         
           if( $data['phone']== 'Not Set')
            {
               $data['main_content'] = 'updateProfileRequest';
               $this->load->view('student_area',$data);
            }
           else
            {   
             foreach ($my_info->result() as $obj) {
                    $data['name'] = $obj->name;
                    $data['college']= $obj->college;
                    $data['email']= $obj->email;
                    $data['aboutyou'] =$obj->aboutyou;
                    $data['rollno'] =$obj->rollno;
                    $data['branch'] =$obj->branch;
                    $data['cgpi']= $obj->CGPI_req;
                    $data['phone'] = $obj->phone;
                    $data['skills'] = $obj->skills;

                  }
                 $this->load->view('student_content',$data);
                 
            }

            
          }
          else
         {
            $designation = $this->session->userdata('designation');
         
                    
        if( $designation == 'company')
       {
        redirect('site/organisation_area');
        die();
       }
        else if($designation == 'admin')
        {
          redirect('site/admin_area');
          die();
        }
         }
     }

     function view_arrival()
     {
          $data['sql1'] = $this->get_schedule->get_list_of();
          $this->load->view('recuiter_arrival',$data);

     }

     function view_events()
     {
          $data['sql2'] = $this->get_Events->get_list();
          $this->load->view('events',$data);

     }


     function is_logged_in()
     {
         $is_logged_in = $this->session->userdata('is_logged_in');
      if(!isset($is_logged_in) || $is_logged_in!=TRUE)
      {
            echo ' You don\'t have permission to access this page... <a href = "../login"> Login </a>';
            die();
       }
     }

     function forum()
     {
      $data['main_content'] = 'forum_admin_student';
       $this->load->view('admin_area',$data);
     }



     function view_student_message()
    {
        $this->load->model('student');
        $data['query']=$this->student->show_query();
        $this->load->view('student_message',$data);
    }




     function view_recruiter_message()
    {
        $this->load->model('comp_model');
        $data['query']=$this->comp_model->show_query();
        $this->load->view('recruiter_message',$data);
    }


    function view_replies_students()
    {
        $this->load->model('student');
        $data['query']=$this->student->show_query_ans();
        $this->load->view('replies_student',$data);
    }


    function view_replies_recuiters()
    {
        $this->load->model('student');
        $data['query']=$this->student->show_query_ans_recuiter();
        $this->load->view('replies_company',$data);
    }



    function view_material()
    {
        $this->load->model('student');
        $data['ans']=$this->student->get_material();
        
        $this->load->view('material',$data);
    }

}




?>