<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';
    protected $fillable = [
        'placa',
        'tipo',
        'propietario',
        'observaciones',
        'estado'
    ];
    static public function getVehiculos(){
        return self::where('estado', 'ACTIVO')->get();
    }
    static public function getVehiculosbyId($id){
        return self :: find($id);
    }
    public static function createVehiculo(array $data)
    {
        return self::create($data);
    }

    static public function updateVehiculo($vehiculo, array $data)
    {
        return $vehiculo->update($data);
    }

    static public function eliminarLogico(Vehiculo $vehiculo){
        $vehiculo->estado = 'INACTIVO';
        $vehiculo->save();

        return $vehiculo;
    }
}
