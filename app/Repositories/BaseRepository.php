<?php

namespace App\Repositories;

abstract class BaseRepository
{
    protected $model;

    public function all()
    {
        return $this->model->all();
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }
}