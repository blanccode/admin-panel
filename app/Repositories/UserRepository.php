<?php



namespace App\Repositories;

use App\Models\User;
use App\Interfaces\UserInterface;
use App\Repositories\BaseRepository;
use App\Repositories\RoleRepository;


class UserRepository extends BaseRepository implements UserInterface
{
    public function __construct(User $user, RoleRepository $roleRepository)
    {
        parent::__construct($user);
    }

    public function getAdmin()
    {
        $admin =  User::all()->where('role_id', 1);

        foreach ($admin as $admin) {
            return $admin;
        }
        
    }
    public function getUserCount() {
        $users = User::all();
        $userCount = 0;
        foreach ($users as $user) {
            $userCount++;
        }
        return $userCount -= 1;

    }

    
}
