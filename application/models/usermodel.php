<?php

class usermodel extends CI_model
{
    public function __construct()
    {

        $this->load->database();
    }

    function get_user()
    {
        $query = $this -> db -> query("SELECT * FROM user");
        return $query -> result_array();
    }

    
    function get_detail ($a)
    {
        $this ->db -> where ('id', $sa);
        return $this -> db -> get('user') -> row_array();
    }

    function insert($a)
    {
        $data =[
            'nama' => $a ['nama'],
            'email' => $a ['email'],
            'password' => $a ['password'],
            'alamat' => $a ['alamat'],
            'telepon' => $a ['telepon'],
            
        ];
        return $this->db->insert('user', $data);
    }

    function update($a, $id)
    {
        $data =[
            'nama' => $a ['nama'],
            'email' => $a ['email'],
            'password' => $a ['password'],
            'alamat' => $a ['alamat'],
            'telepon' => $a ['telepon'],
            
        ];
        $this->db->where('id', $id);
        return $this->db->insert('user', $data);
    }

    function update_cover($a, $id)
    {
        $data = [
            'cover' => $a
        ];
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('user');
    }

}
?>
}
?>