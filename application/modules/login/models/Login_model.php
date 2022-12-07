<?php
class Login_model extends CI_Model
{
    public function check_login($table, $data)
    {
        $query = $this->db->get_where($table, $data);

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
}
