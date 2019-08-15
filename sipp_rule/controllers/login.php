<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem !!');

//Membuat class Login = karena file'nya bernama Login.php | harus sama !
class Login extends CI_Controller{

    //Membuat fungsi Construct
    public function __construct(){
        parent::__construct();
        //MenLoad model yang berada di Folder Model dan File'nya m_login
        $this->load->model('m_login');
        // Meload Library form_validasi dan session 
        $this->load->library(array('form_validation','session'));
        //Meload database
        $this->load->database();
        //Meload url 
        $this->load->helper('url');   
    }

    //Membuat fungsi index 
    public function index(){
        // membuat session yand di ambil dari userdata dan memberi nama isLogin
        $session = $this->session->userdata('isLogin');
            //jika session salah 
            if($session == FALSE){
                $this->load->view('tampil_login');   
            }else{
                //jika session benar 
                redirect('web');
            }
    }

    //membuat fungsi login_form 
    public function login_form()
    {   
        //memberi validasi pada username dan password
        $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|md5|xss_clean');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
        //jika form yang di isi salah , akan kembali lagi ke form_login

        if($this->form_validation->run()==FALSE){
            $this->load->view('tampil_login');   
        }

        else{
        //jika form yang di isi benar 
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $cek = $this->m_login->ambilPengguna($username, $password, 'ADMIN');
        
            if($cek == 1){
            $this->session->set_userdata('isLogin', TRUE);
            $this->session->set_userdata('username',$username);
            $level = 'ADMIN';
            $this->session->set_userdata('level', $level);
            
            redirect('c_admin');
            }
            else{
                $cek = $this->m_login->ambilPengguna($username, $password, 'KAJUR');
                    if($cek == 1){
                    $this->session->set_userdata('isLogin', TRUE);
                    $this->session->set_userdata('username',$username);
                    $level = 'KAJUR';
                    $this->session->set_userdata('level', $level);
                    redirect('c_kajur');
                    }
                    else{
                        $cek = $this->m_login->ambilPengguna($username, $password, 'SEKJUR');
                            if($cek == 1){
                            $this->session->set_userdata('isLogin', TRUE);
                            $this->session->set_userdata('username',$username);
                            $level = 'SEKJUR';
                            $this->session->set_userdata('level', $level);
                            redirect('c_sekjur');
                            }
                            else{
                                $cek = $this->m_login->ambilPengguna($username, $password, 'PIMPINAN');
                                    if($cek == 1){
                                    $this->session->set_userdata('isLogin', TRUE);
                                    $this->session->set_userdata('username',$username);
                                    $level = 'PIMPINAN';
                                    $this->session->set_userdata('level', $level);
                                    redirect('c_pimpinan');
                                    }
                                    else{
                                        		echo" <script>
                                            	alert('Gagal Login: Cek username dan password anda!');
                                            	history.go(-1);
                                            	</script>";
                                    }

                            }
                    }   
            }
                
            }
            ?>
                
                <?php
                }
        
    
    //membuat fungsi keluar /logout 
    public function logout(){
        // menghapus session dan mengembalikan ke login_form
        $this->session->sess_destroy();
        $this->load->view('tampil_login');
    }
}
?>