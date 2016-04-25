<?php $this->load->view('includes/loggedHeader');?>
<?php 
    if(empty($info))
    {
       
    $this->load->view($main_content);

    }
else
 {

    $data['info'] = $info;
    $this->load->view($main_content,$data);
}
?>
<?php $this->load->view('includes/loggedFooter');?>
