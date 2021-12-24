<?php

namespace App\Models\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Validation\Rule;
use Hash;

class AdminsModel extends Model
{
    
    private $id;

    public function getUsers()
    {
        $products = DB::table('admins')->paginate(10);
        return $products;
    }

    public function setUser($post)
    {
        DB::table('admins')->insert([
            'name' => trim($post['name']),
            'email' => trim($post['email']),
            'password' => Hash::make(trim($post['password']))
        ]);
    }

    public function updateUser($post)
    {
        $password = false;
        if (mb_strlen(trim($post['password'], 'UTF-8')) > 0) {
            $password = $post['password'];
        }
        $this->id = $post['edit'];
        $update = [
            'name' => trim($post['name']),
            'email' => trim($post['email'])
        ];
        if ($password !== false) {
            $update['password'] = Hash::make(trim($post['password']));
        }
        DB::table('admins')->where('id', $this->id)->update($update);
    }

    public function getOneUser($id)
    {
        $user = DB::table('admins')->where('id', $id)->first();
        return $user;
    }

    public function deleteUser($id)
    {
        $this->id = $id;
        DB::table('admins')->where('id', $this->id)->delete();
    }

}
