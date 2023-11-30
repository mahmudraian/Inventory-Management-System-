<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasFactory, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'phone',
        'address',

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
        'password' => 'hashed',
    ];


    public function prepareUserData($request, User|null $user = null): array
    {
        $data =[
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone ?? $user->phone ?? null,
            'address' => $request->address ?? $user->address ?? null,

        ];
        if($request->password){
            $data['password'] = Hash::make($request->password);
        }else{
            $data['password'] = $user->password ?? Hash::make('12345678');
        }

        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('users', 'public');
        }else{
            $data['image'] = $user->image ?? null;
        }

        return $data;


    }

    public function storeUser($data)
    {
        return $this->create($data);
    }

    public function updateUser($data, User $user)
    {
        return $this->where('id', $user->id)->update($data);
    }
   

    public function deleteUser(User $user)
    {
       
        return $this->where('id', $user->id)->delete();
    }

    final public function findUserByEmailOrPhone(string $email): User|null
    {
        return $this->where('email', $email)
        ->orWhere('phone', $email)->first();
    }

    public function getAllUsers(array $input):LengthAwarePaginator
    {
        $query = self::role('user')->orderBy('id', 'desc');
        $perPage = $input['per_page'] ?? 10;
        if(isset($input['search']) && $input['search']){
            $query->where('name', 'like', '%'.$input['search'].'%');
            $query->orWhere('email', 'like', '%'.$input['search'].'%');
        }
        return $query->paginate($perPage);
    }



}
