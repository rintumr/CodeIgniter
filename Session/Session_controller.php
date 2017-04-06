<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Session_controller extends CI_Controller {
    
    public function index()
    {   
       if($this->input->post()) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('username', 'username','required|min_length[5]|max_length[10]');
            $this->form_validation->set_rules('email','email', 'required|min_length[5]|max_length[15]'); 
            $this->form_validation->set_rules('password','password', 'required|min_length[5]|max_length[15]'); 
            
             $username= $this->input->post('username');
             $email= $this->input->post('email');
             $password= $this->input->post('password');
              
             $data =array('username' => $username,
                          'email' => $email,
                          'password' => $password);
              
            if($this->form_validation->run() == FALSE){
                $this->load->view('Loginpage');
                
            }else{
                $this->load->model('Session_model');
                $credential['result']=$this->Session_model->sessionStart($data);
                $value= $credential['result'];
                if($data['password']==$value[0]->password){
                $newdata = array('username' => $data['username'],
                                     'loggedIn' => TRUE );
                $this->session->set_userdata($newdata);
                $this->load->view('Logout');
                }else{
                	echo "Session failed to start";
			     }
		    }
		}else{
		
	    	$this->load->view('Loginpage');
	    }
      
    }

    public function unset_session(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('loggedIn');
        $this->session->sess_destroy();
        $this->load->view('Loginpage');
    }
    
}
