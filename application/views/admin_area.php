<?php $this->load->view('includes/loggedHeader');?>

<?php 
     if(!empty($sql1))
     {
      $data['sql1'] = $sql1;
      $data['eve'] = $eve;
      $this->load->view($main_content,$data);

     }
     else
     	$this->load->view($main_content);
      ?>
<?php $this->load->view('includes/loggedFooter');?>

