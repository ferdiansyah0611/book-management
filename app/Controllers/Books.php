<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Book;

class Books extends BaseController
{
	public function __construct()
	{
		$this->data['active'] = 'book';
		$this->rules = [
		    'name' => 'required|min_length[3]',
		    'description' => 'required|min_length[8]',
		];
	}
	public function _wrap()
	{
		$request = $this->request;
		$data = [
			'user_id' => $this->user['id'],
			'name' => $request->getPost('name'),
			'description' => $request->getPost('description'),
		];
		if($request->getPost('id')){
			$data['id'] = $request->getPost('id');
		}
		return $data;
	}
	public function index()
	{
		$pager = \Config\Services::pager();
		$book = new Book();
		if(isset($_GET['search'])){
			$book->like('name', $_GET['search']);
		}
		$this->data['list'] = $book->paginate(10);
		$this->data['pager'] = $book->pager;

		return view('book/index', $this->data);
	}
	public function create()
	{
		$validate = $this->validate($this->rules);
		if(!$validate){
			$this->session->setFlashdata('validation', $this->validator->getErrors());
			return redirect()->back();
		}

		$request = $this->request;
		$book = new Book();
		$data = $this->_wrap();
		$data['created_at'] = date("Y-m-d H:i:s");
		$book->save($data);

		return redirect()->back();
	}
	public function new()
	{
		return view('book/create', $this->data);
	}
	public function show(int $id)
	{
		return view('book/show', $this->data);
	}
	public function edit(int $id)
	{
		$book = new Book();
		$this->data['data'] = $book->where('id', $id)->first();
		return view('book/create', $this->data);
	}
	public function update(int $id)
	{
		$book = new Book();
		$data = $this->_wrap();
		$data['updated_at'] = date("Y-m-d H:i:s");
		$book->update($id, $data);
		return redirect()->back();
	}
	public function delete(int $id)
	{
		$request = $this->request;
		$book = new Book();
		$book->where('id', $id)->delete();
		return redirect()->back();
	}
}