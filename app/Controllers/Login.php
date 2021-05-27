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

	public function loginProcess()
	{
		$post = $this->request->getPost();
		$query = $this->db->table('user')->getWhere(['nama_user' => $post['nama_user']]);
		$user = $query->getRow();
		if ($user) {
			echo "yukkk";
		} else {
			return redirect()->back()->with('error', 'email tidak ditemukan');
		}
	}
}
