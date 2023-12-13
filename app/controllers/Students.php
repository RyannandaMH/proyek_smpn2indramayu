<?php

namespace App\Controllers;

use App\Core\Controller;

class Students extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Student();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('students/index', $data);
	}

	public function input()
	{
		$this->dashboard('students/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/students');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('students/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/students');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/students');
	}
}
