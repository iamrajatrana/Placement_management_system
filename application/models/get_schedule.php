<?php

 class Get_schedule extends CI_Model
 {
       function get_list()
       {
            $sql = $this->db->query("Select * from schedule order by date asc");
            return $sql;
       }

       function delete($id)
       {
       	$this->db->where('id',$id);
       	$this->db->delete('schedule');
       }

       function add_finally($data)
       {
       	   $this->db->insert('schedule',$data);
       }

       function edit($id)
       {
           $this->db->where('id',$id);
       	   return $this->db->get('schedule');
       }

       function edit_finally($id,$data)
       {
            $this->db->where('id',$id);
            $this->db->update('schedule',$data);
       }

       function get_list_of()
       {
            $sql = $this->db->query("Select * from schedule order by date asc");
            return $sql;
       }
 }


?>