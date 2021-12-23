<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Noname extends CI_Controller
{
    public function index()
    {
        $data['products'] = $this->db->get('products')->result_array();
        // var_dump($data);
        // die;
        // $data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
        $this->load->view("templates/header");
        $this->load->view("templates/sidebar_noname");
        $this->load->view('noname/index', $data);
    }
    function add_to_cart()
    {
        $check_product = $this->db->get_where('products', array('id' => $_POST['product_id']))->result_array();
        // print_r($_POST);
        // var_dump($check_product);
        // die;
        if ($check_product[0]['qty'] > 0) {
            $this->db->select('b_qty');
            $check_status = $this->db->get_where('add_to_cart', array('user_id' => $_POST['user_id'], 'product_id' => $_POST['product_id']))->row_array();
            // print_r($check_status);
            // var_dump($check_status);
            // die;
            if ($check_status != NULL || $check_status) {
                $q = $check_status['b_qty'] + 1;
                $new_qty = $check_product[0]['qty'] - 1;

                $this->db->where('id', $_POST['product_id']);
                $this->db->update('products', array('qty' => $new_qty));
                $this->db->where($_POST);
                $this->db->set($check_status);
                $res = $this->db->update('add_to_cart', array('b_qty' => $q));
            } else {
                $_POST['b_qty'] = 1;
                // var_dump($_POST);
                // die;
                // $this->db->set($check_status);
                $res = $this->db->insert('add_to_cart', $_POST);
            }

            if ($res)
                echo '1';
            else
                echo '0';
        } else {
            echo '2';
        }
    }
}
