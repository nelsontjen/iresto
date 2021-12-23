<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'Edit Menu';
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('products_category',     'products_category.id = products.category_id');
        $data['Product'] = $this->db->get()->result_array();
        // var_dump($data['Product']);die();
        // echo 'mantap '  . $data['user']['firstname'] . " " . $data['user']['lastname'];

        $this->form_validation->set_rules('menuName', 'Nama Menu', 'required');
        $this->form_validation->set_rules('menuQty', 'Kuantitas', 'required');
        $this->form_validation->set_rules('menuPrice', 'Harga Menu', 'required');
        $this->form_validation->set_rules('KategoriID', 'Kategori Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/footer', $data);
        } else {

            $data = [
                'name' => $this->input->post('menuName'),
                'img' => $this->_uploadImage(),
                'qty' => $this->input->post('menuQty'),
                'price' => $this->input->post('menuPrice'),
                'category_id' => $this->input->post('KategoriID'),
                'description' => $this->input->post('menuDesc')
            ];
            $this->db->insert('products', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			New Menu Has Added
		  </div>');
            redirect('Admin');
        }
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './uploads/products';
        $config['allowed_types'] = 'jpg|png';
        $config['overwrite'] = true;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('menuPhoto')) {
            return $this->upload->data('file_name');
            // $this->db->set('img', $new_image);
        } else {
            return 'default.jpg';
        }
    }

    public function Delete()
    {
        $name = $this->input->post('menuName');
        $this->db->where('name', $name);
        $this->db->delete('products');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">'
            . $name . ' Successfully deleted from menu
		  </div>');
        redirect('Admin');
    }


    public function Edit()
    {
        $this->form_validation->set_rules('menuName', 'Nama Menu', 'required');
        $this->form_validation->set_rules('menuQty', 'Kuantitas', 'required');
        $this->form_validation->set_rules('menuPrice', 'Harga Menu', 'required');
        $this->form_validation->set_rules('KategoriID', 'Kategori Menu', 'required');
        $name = $this->input->post('menuName');
        $qty = $this->input->post('menuQty');
        $price = $this->input->post('menuPrice');
        $category_id = $this->input->post('KategoriID');
        $desc = $this->input->post('menuDesc');
        if (!empty($_FILES["menuPhoto"]["name"])) {
            $image = $this->_uploadImage();
        } else {
            $image = $this->input->post("OldMenuPhoto");
        }
        $data = [
            'name' => $name,
            'img' => $image,
            'qty' => $qty,
            'price' => $price,
            'category_id' => $category_id,
            'description' => $desc
        ];
        // var_dump($data);
        // die();

        $this->db->update('products', $data, array('name' => $name));




        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">'
            . $name . ' Successfully Edited
		  </div>');
        redirect('Admin');
    }
}
