<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable
{
    use HasFactory;

    protected $table = 'admin_user';

    /**
     * ログイン情報からデータを取得する
     */
    public function getByAuth($email, $password)
    {
        $condition = [
            "email" => $email,
            "password" => $password,
        ];
        return $this->where($condition)->first();
    }
}
