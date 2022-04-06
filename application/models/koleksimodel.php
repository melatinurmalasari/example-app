<?php

class koleksimodel extends CI_model
{
    public function __construct()
    {

        $this->load->database();
    }

    function get_koleksi()
    {
        return $this->db->get('koleksi')->result_array();
    }

    function get_detail ($a)
    {
        $this ->db -> where ('id', $sa);
        return $this -> db -> get('koleksi') -> row_array();
    }

    function insert($a, $cover)
    {
        $data =[
            'judul' => $a ['judul'],
            'penulis' => $a ['penulis'],
            'pengarang' => $a ['pengarang'],
            'cover' => $a ['cover'],
            
        ];
        return $this->db->insert('koleksi', $data);
    }

    function update($a, $id)
    {
        $data = [
            'judul' => $a['judul'],
            'penulis' => $a['penulis'],
            'penerbit' => $a['penerbit']
        ];
        $this->db->where('id', $id);
        return $this->db->update('koleksi', $data);
    }

    function update_cover($a, $id)
    {
        $data = [
            'cover' => $a
        ];
        $this->db->where('id', $id);
        return $this->db->update('koleksi', $data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('koleksi');
    }

}
?>