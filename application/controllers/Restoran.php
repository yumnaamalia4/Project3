    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Restoran extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->simple_login->cek_login();  

            $this->load->database();
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->load->model('ModelRestoran'); 
        }

        public function index()
        { 
            $data['query'] = $this->ModelRestoran->get_all2();
            $this->load->view('account/v_dashboard', $data);
        }

        public function listMenu()
        { 
            $data['query'] = $this->ModelRestoran->get_all2();
            $this->load->view('restoran/list_menu', $data);
        }

        public function inputForm()
        {
            $this->form_validation->set_rules(
                'kode',
                'kode',
                'required|min_length[3]|max_length[5]',
                array('required' => 'Anda Belum Mengisi %s.')
            );
            $this->form_validation->set_rules(
                'nama',
                'nama',
                'required|min_length[5]|max_length[20]|is_unique[tbl_restoran.nama]',
                array('required' => 'Anda Belum Mengisi %s.',
                      'is_unique'=> 'Menu %s sudah tersedia.')
            );
            $this->form_validation->set_rules(
                'kategori',
                'Kategori',
                'required',
                array('required' => 'Anda Belum Mengisi %s.')
            );
            $this->form_validation->set_rules(
                'harga',
                'Harga',
                'numeric',
                'required',
                array('required' => 'Anda Belum Mengisi %s.')
            );
            $this->form_validation->set_rules(
                'status',
                'Status',
                'required',
                array('required' => 'Anda Belum Mengisi %s.')
            );
            $this->form_validation->set_rules(
                'deskripsi',
                'Deskripsi',
                'required',
                array('required' => 'Anda Belum Mengisi %s.')
            );

            if ($this->form_validation->run() == FALSE) {
                $data['query'] = $this->ModelRestoran->get_all3();
                $this->load->view('restoran/myform',$data);

            } else {
                if (isset($_POST['submit'])) {
                    $data['kode'] = $_POST['kode'];
                    $data['nama'] = $_POST['nama'];
                    $data['kategori'] = $_POST['kategori'];
                    $data['harga'] = $_POST['harga'];
                    $data['status'] = $_POST['status'];
                    $data['deskripsi'] = $_POST['deskripsi'];
                    $this->ModelRestoran->insert_entry($data);
                }
                redirect('restoran');
            }
        }

        public function edit($kode)
        {
            $data['restoran'] = $this->ModelRestoran->getById($kode);
            $data['query'] = $this->ModelRestoran->get_all3();
            $this->load->view('restoran/editform', $data);
        }

        public function UpdateForm()
        {
            $this->form_validation->set_rules(
                'kode',
                'kode',
                'required|min_length[3]|max_length[5]',
                array('required' => 'Anda Belum Mengisi %s.')
            );
            $this->form_validation->set_rules(
                'nama',
                'nama',
                'required|min_length[5]|max_length[20]',
                array('required' => 'Anda Belum Mengisi %s.')
            );
            $this->form_validation->set_rules(
                'kategori',
                'Kategori',
                'required',
                array('required' => 'Anda Belum Mengisi %s.')
            );
            $this->form_validation->set_rules(
                'harga',
                'Harga',
                'numeric',
                'required',
                array('required' => 'Anda Belum Mengisi %s.')
            );
            $this->form_validation->set_rules(
                'status',
                'Status',
                'required',
                array('required' => 'Anda Belum Mengisi %s.')
            );
            $this->form_validation->set_rules(
                'deskripsi',
                'Deskripsi',
                'required',
                array('required' => 'Anda Belum Mengisi %s.')
            );

            if ($this->form_validation->run() == TRUE) {
                $data['kode'] = $this->input->post('kode');
                $data['nama'] = $this->input->post('nama');
                $data['kategori'] = $this->input->post('kategori');
                $data['harga'] = $this->input->post('harga');
                $data['status'] = $this->input->post('status');
                $data['deskripsi'] = $this->input->post('deskripsi');

                $this->ModelRestoran->update($data, $data['kode']);
                redirect('restoran');
            } else {
                $data['kode'] = $this->input->post('kode');
                $this->load->view('restoran/editform', $data);
            }
        }

        public function deleteForm($kode)
        {
            $this->ModelRestoran->delete($kode);
            redirect('restoran');
        }

       
    } //endclass
