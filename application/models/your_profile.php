<?php

 class Your_profile extends CI_Model
 {
       function your_bio()
       {
           $designation = $this->session->userdata('designation');
           $email = $this->session->userdata('email');
           if($designation == 'student')
           {
                  return $this->db->query("Select * from studdbplac where email='$email'");
                   

                

             }
        }
   }
?>