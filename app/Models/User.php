<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Http\Request;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getUsers(string $search = '')
    {
        $users = $this->where(function($query) use ($search){
            if($search)
            {
                $query->where('email',"$search");
                $query->orWhere('name', 'LIKE', "%{$search}%");
            };
        })->get();

        return $users;
    }

    public function updateUser($request)
    {
        $data = $request->only('name', 'email');
        if ($request->password)
        {
            $data['password'] = bcrypt($request->password);
        }

        return $data;
    }

    public function storeUser($request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        
        $user = $this -> create($data);
        return $user;
    }

    public function comments()
    {
        return $this -> hasMany(Comment::class, 'user_id', 'id')->where('visible', 'true');
    }
}
