<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem !! ');

//membuat suatu class
class M_login extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    // membuat fungsi ambilPengguna
    public function ambilPengguna($username, $password, $level){
        //menselec database codeigniter yang dari tabel user
        $this->db->select('*');
        $this->db->from('user');
        // di mana username = $username
        $this->db->where('username', $username);
        // di mana password = $password
        $this->db->where('pass', $password);
        // di mana status = $status
        $this->db->where('level', $level);
        // membuat query yang mengambil datase
        $query = $this->db->get();
        // kembali ke query
        return $query->num_rows();
    }   
    
    public function ambilLevel($username, $password, $level){
        $this->db->select('level');
        $this->db->from('user');
        // di mana username = $username
        $this->db->where('username', $username);
        // di mana password = $password
        $this->db->where('pass', $password);
        // membuat query yang mengambil datase
        $query = $this->db->get();
        // kembali ke query
        return $query->num_rows();
    }

    public function dataPengguna($username,$level){
        $this->db->select('username');
        $this->db->select('level');
        $this->db->select('user');
        $this->db->where('username', $username);
        $query = $this->db->get('user');
        return $query->row();
    }

}