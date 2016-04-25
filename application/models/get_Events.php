<?php

 class Get_Events extends CI_Model
 {
       function get_list()
       {
            $sql = $this->db->query("Select * from events order by event_date asc");
            return $sql;
       }

        function delete($id)
       {
       	$this->db->where('event_id',$id);
       	$this->db->delete('events');
       }

       function add_finally($data)
       {
       	   $this->db->insert('events',$data);
       }

       function edit($id)
       {
           $this->db->where('event_id',$id);
           return $this->db->get('events');
       }

       function edit_finally($id,$data)
       {
            $this->db->where('event_id',$id);
            $this->db->update('events',$data);
       }

       
  }

  ?>