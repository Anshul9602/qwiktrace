<?php

    class Admin_model extends CI_Model
    {

        function can_login($username, $password)  
        {  
            $pass = md5($password);
           $this->db->where('username', $username);  
           $this->db->where('password', $pass);  
           $query = $this->db->get('admin');  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
        }

        function get_service_headings()
        {
            $query=$this->db->query("SELECT * FROM service_headings");
            $result = $query->result_array();
            return $result;
        }

        function get_service_subheadings($id)
        {
            $query=$this->db->query("SELECT * FROM service_subheadings WHERE hid = $id");
            $result = $query->result_array();
            return $result;
        }

        function get_service_subheading($id)
        {
            $query=$this->db->query("SELECT * FROM service_subheadings WHERE id = $id");
            $result = $query->result_array();
            return $result;
        }

        function get_all_service_subheadings()
        {
            $query=$this->db->query("SELECT * FROM service_subheadings");
            $result = $query->result_array();
            return $result;
        }

        //////////////////////////////////////////////////////////////////


        function add_new_service_heading($data)
        {
            $this->db->insert('service_headings', $data);
        }

        function remove_service_heading($id)
        {
            $query=$this->db->query("DELETE FROM service_headings WHERE id= " . $id);
            $query=$this->db->query("DELETE FROM service_subheadings WHERE hid= " . $id);
        }

        function update_service_heading($data,$id)
        {
            $this->db->where('id', $id);
            $this->db->update('service_headings', $data);
        }

        function get_service_heading($id)
        {
            $query=$this->db->query("SELECT * FROM service_headings WHERE id =" . $id);
	        return $query->result_array();
        }

        ///////////////////////////////////////////////////////////////////////


        // function generate_password_reset_link($email)
        // {   $query = $this->db->query('SELECT * FROM password_reset WHERE email ="' . $email .'" ORDER BY id DESC LIMIT 1');
        //     $result = $query->result_array();
        //     if (!empty($result))
        //     {
        //         $updatedata['expired'] = 1;
        //         $this->db->where('id', $result[0]['id']);
	    //         $this->db->update('password_reset', $updatedata);
        //     }
        //     function generateRandomString($length = 5) {
        //         $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        //         $charactersLength = strlen($characters);
        //         $randomString = '';
        //         for ($i = 0; $i < $length; $i++) {
        //             $randomString .= $characters[rand(0, $charactersLength - 1)];
        //         }
        //         return $randomString;
        //     }
        //     $data['email'] = $email;
        //     $data['reset_link'] =  generateRandomString() . round(microtime(true)) . generateRandomString() . str_pad(rand(0, pow(10, 4)-1), 4, '0', STR_PAD_LEFT) . generateRandomString() . str_pad(rand(0, pow(10, 4)-1), 4, '0', STR_PAD_LEFT) . generateRandomString();
        //     $data['expired'] = 0;
        //     $this->db->insert('password_reset', $data);
        //     $query1 = $this->db->query("SELECT * FROM password_reset ORDER BY id DESC LIMIT 1");
        //     $response = $query1->result_array();
        //     $response = $response[0];
        //     $response['error'] = 0;
        //     $response['msg'] = 'An Email with the password reset link has been sent to your Email address';
        //     return $response;
        // }

        // function valid_reset_link($reset_link)  
        // {  
        //    $this->db->where('reset_link', $reset_link); 
        //    $query = $this->db->get('password_reset');  
        //    if($query->num_rows() > 0)  
        //    {  
        //         return true;  
        //    }  
        //    else  
        //    {  
        //         return false;       
        //    }  
        // }

        // function active_reset_link($reset_link)  
        // {  
          

        //   $this->db->where('reset_link', $reset_link);   
        //   $query = $this->db->get('password_reset');
	    //  $result =  $query->result_array();
        //   $result = $result[0]['expired'];
        //   if($result == 1)
        //   {
        //        return false;
        //   }
        //   else
        //   {
        //        return true;
        //   }
        // }

        // function reset_password($reset_link)  
        // {  

        //   $this->db->where('reset_link', $reset_link); 
        //   $query = $this->db->get('password_reset');  
        //   if($query->num_rows() > 0)  
        //   {  
        //        $this->db->where('reset_link', $reset_link);   
        //        $query = $this->db->get('password_reset');
	    //       $result =  $query->result_array();
        //        $result = $result[0];
        //        if($result['expired'] == 0)
        //        {
        //             $data['password'] = md5($_POST['password']);
        //             $this->db->where('username', 'admin');
        //             $this->db->update('admin', $data);
        //             $resetdata['expired'] = 1;
        //             $this->db->where('reset_link', $result['reset_link']);
        //             $this->db->update('password_reset', $resetdata);

        //             return 'Password successfully changed. Please login with new password.';
        //        }
        //        else
        //        {
        //             return 'Something went wrong, please request a new rest link and try again.';
        //        }  
        //   }  
        //   else  
        //   {  
        //        return 'Something went wrong, please request a new rest link and try again.'; 
        //   }  
        // }

        /////////////////////////////////////////////////////////////////////


        function add_new_subservice($data)
        {
            $this->db->insert('service_subheadings', $data);
        }

        function remove_subservice($id)
        {
            $query=$this->db->query("DELETE FROM service_subheadings WHERE id= " . $id);
        }

        function update_subservice($data,$id)
        {
            $this->db->where('id', $id);
            $this->db->update('service_subheadings', $data);
        }

        function get_subservice($id)
        {
            $query=$this->db->query("SELECT * FROM service_subheadings WHERE id =" . $id);
	        return $query->result_array();
        }

    
    }
?>