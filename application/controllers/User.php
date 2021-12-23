<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'My Order';
        // echo 'mantap '  . $data['user']['firstname'] . " " . $data['user']['lastname'];
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('add_to_cart', 'add_to_cart.product_id = products.id');
        $this->db->where('add_to_cart.user_id = ' . $this->session->userdata('user_id'));
        $data['buyProduct'] = $this->db->get()->result_array();
        // $data['buyProduct'] = $this->db->get_where('products', array(`add_to_cart` . '.' . `user_id` => $this->session->userdata(`user_id`), `add_to_cart` . '.' . `product_id` => `products` . '.' . `id`))->result_array();
        // print_r($data['buyProduct']);
        // die();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function menu()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'Menu';
        $data['products_indonesia'] = $this->db->get_where('products', array('category_id' => 1))->result_array();
        $data['products_chinese'] = $this->db->get_where('products', array('category_id' => 2))->result_array();
        $data['products_western'] = $this->db->get_where('products', array('category_id' => 3))->result_array();
        $data['products_italian'] = $this->db->get_where('products', array('category_id' => 4))->result_array();
        // echo 'mantap '  . $data['user']['firstname'] . " " . $data['user']['lastname'];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/menu', $data);
        $this->load->view('templates/footer', $data);
    }

    public function Delete()
    {
        $name = $this->input->post('menuName');
        $id = $this->input->post('menuID');
        $this->db->from('add_to_cart');
        $this->db->join('products', 'products.id = add_to_cart.product_id');
        $this->db->delete('add_to_cart', array('add_to_cart.user_id' => $this->session->userdata('user_id'), 'add_to_cart.product_id' => $id));
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">'
            . $name . ' Successfully deleted from cart
		  </div>');
        redirect('User');
    }
}
