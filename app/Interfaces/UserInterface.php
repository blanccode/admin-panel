<?php


namespace App\Interfaces;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;


interface UserInterface

{
    // public function all(): Collection;

    // public function find(int $id): Model;

    // public function create(array $attributes): Model;

    // public function update(array $attributes, int $id): bool;

    // public function delete(int $id): Model;

    public function getAdmin();
}
