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

    // APPLICATION
    public function data_application()
    {
        $query = $this->db->query("SELECT * FROM application ORDER BY ID ASC LIMIT 1");

        if ($query->num_rows() == 1) {
            return $this->db->query("SELECT * FROM application ORDER BY ID ASC LIMIT 1")->result();
        } else {
            return "FALSE";
        }
    }
}
