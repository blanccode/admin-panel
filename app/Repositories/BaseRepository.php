<?php

namespace App\Repositories;

use App\Interfaces\BaseInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseInterface

{

    /**
     * @var Model
     */

    private $model;


    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function find(int $id): Model
    {
        return $this->model->find($id);
    }

    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    public function update(array $attributes, int $id): bool
    {
        $this->model = $this->find($id);
        return $this->model->update($attributes);
    }

    public function delete(int $id): Model
    {
        $this->model = $this->find($id);
        return $this->model->delete();
    }
   
    
}
