<?php namespace Todo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Activo extends Model 
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Activos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Tipo', 'Descripcion', 'Numero_Factura','Fecha_Factura','Financiado_por','Fecha_Prestamo','Fecha_Devolucion','Condicion','Estado','Entregado_por','Centro','Id_Familia'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Authenticate a user by username and password.
     *
     * @param string $username The username
     * @param string $password Plain text password
     * @return bool|user The user if the password matches the user's stored password, false otherwise.
     */
    public function authenticate($username, $password)
    {   
        $user = User::where('usuario', $username)->first();
           if (!Hash::check($password, $user->password)) {
            return false;
        }
        return $user;
    }

}
