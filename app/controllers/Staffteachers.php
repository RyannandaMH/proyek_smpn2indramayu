<?php

namespace App\Controllers;

use App\Core\Controller;

class Staffteachers extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Tenagapendidik();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('staffteachers/index', $data);
	}

	public function input()
	{
		$this->dashboard('staffteachers/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/staffteachers');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('staffteachers/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/staffteachers');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/staffteachers');
	}
}
