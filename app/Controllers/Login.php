<?php

namespace App\Controllers;

class Login extends BaseController

{

	public function __construct()
	{
	}

	public function index()
	{

		return view('login');
	}

	// public function loginProcess()
	// {
	// 	$post = $this->request->getVar();
	// 	$query = $this->db->table('user')->getWhere(['username' => $post['username']]);
	// 	$user = $query->getRow();
	// 	if ($user) {
	// 		if (password_verify($post['password'], $user->password)) {
	// 			$params = ['id_user' => $user->id_user];
	// 			session()->set($params);

	// 			return redirect()->to(site_url('home'));
	// 		} else {

	// 			return redirect()->back()->with('error', 'password salah');
	// 		}
	// 	} else {
	// 		return redirect()->back()->with('error', 'username tidak ditemukan');
	// 	}
	// }
}
