<?php

 class UpdateStudent extends CI_Model
 {
       function update_profile()
       {
          $name = $this->input->post('name');
          $branch = $this->input->post('branch');
          $phone = $this->input->post('phone');
          $email1 = $this->input->post('email');
          $college = $this->input->post('college');
          $aboutyou = $this->input->post('aboutyou');
          $skills = $this->input->post('skills');
          $email = $this->session->userdata('email');

          $data = array(
                        'name' => $name,
                        'phone' => $phone,
                        'branch' => $branch,
                        'CGPI_req' => $email1,
                        'college' => $college,
                        'skills'=>$skills,
                        'aboutyou' => $aboutyou
                       );
                   $this->db->where('email',$email);
                   $query = $this->db->update('studdbplac', $data);
                   if( $query == 1)
                       return true;
                   else
                       return false;
        }


        function upload_mater()
        {
          $name = $this->input->post('name');
          $details = $this->input->post('details');
          
           
          $data = array(
              'subject'=>$name,
              'details'=>$details
              
            );

           $query = $this->db->insert('material',$data);
          if($query)
          {
            return true;
          }
          else
          {
            return false;
          }

        }
    
 }

?>