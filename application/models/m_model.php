<?php

class M_model extends CI_Model
{
    function get_data($tabel)
    {
        return $this->db->get($tabel);
    }
    public function insert($tabel, $data)
	{
		$this->db->insert($tabel, $data);
		return $this->db->insert_id();
    }


    function getwhere($tabel, $data)
    {
        return $this->db->get_where($tabel, $data);
    }
    public function delete($tabel, $field, $id)
    {
        $data = $this->db->delete($tabel, array($field => $id));
        return $data;
    }
    public function tambah_data($tabel, $data)
    {
        $this->db->insert($tabel, $data);
        return $this->db->insert_id();
    }

    public function get_by_id($tabel, $id_column, $id)
    {
        $data= $this->db->where($id_column, $id)->get($tabel);
        return ($data);
    }

    public function ubah_data($tabel, $data, $where)
    {
        $data = $this->db->update($tabel, $data, $where);
        return $this->db->affected_rows();
    }
    function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
	public function last_login($data, $where)
	{
		$this->db->update("admin", $data, $where);
		return $this->db->affected_rows();
	}
	// ambil data dari database yang usernamenya $username dan passwordnya p$assword
    function cek($table,$where)
    {
    return $this->db->get_where($table,$where);
    }

}
?>