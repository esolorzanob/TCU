<?php namespace Todo;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{

    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Usuarios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre', 'Apellidos','Usuario','password','Rol'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['remember_token'];

    /**
     * Authenticate a user by username and password.
     *
     * @param string $username The username
     * @param string $password Plain text password
     * @return bool|user The user if the password matches the user's stored password, false otherwise.
     */
    public function authenticate($username, $password)
    {   
        $user = User::where('Usuario', $username)->first();
           if (!Hash::check($password, $user->password)) {
            return false;
        }
        return $user;
    }

}
