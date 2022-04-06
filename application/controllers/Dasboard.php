<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasboard extends CI_Controller 
{

	public function index()
	{
        $data['nama'] = 'Melati Nur Malasari';
        $data['alamat'] = 'Rumah';
        $data['email'] = 'Mela@gmail.com';
        $data['Hobi'] = ['Membaca', 'Menulis', 'Berenang'];
		$this->load->view('Dasboard', $data);
	}



}

