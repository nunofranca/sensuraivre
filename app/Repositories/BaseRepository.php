<?php


namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

abstract class BaseRepository
{
    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }
    public function getAllDescId()
    {
        return $this->model->orderByDesc('id')->limit(10)->get();
    }
    public function create($attributes)
    {
        return $this->model->create($attributes);
    }

    public function getBySlug($slug)
    {
        return $this->model->where('slug', $slug)->first();

    }
    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function update($attributes, $id)
    {
        $model = $this->model->find($id);
        if(!$model){
            throw new ModelNotFoundException();
        }
        $model->update($attributes);
        return $model;
    }

    public function destroy($id)
    {
        $model = $this->model->find($id);
        if(!$model){
            throw new ModelNotFoundException();
        }
        return $model->delete();
    }

}
