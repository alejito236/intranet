<?php

namespace App\Helpers;

use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\DB;


class Helpers
{
    public static function fecha($_date)
    {

        $descomponerFecha = strtotime($_date);
        $anio = date("Y");
        $dia = date("d", $descomponerFecha);
        $mes = date("m", $descomponerFecha);
        $result = $anio . '-' . $mes . '-' . $dia;
        return $result;
    }

   
    public static function usuario($usuarios)
    {

        $eventos = [];
        foreach ($usuarios as $user) {
            $fecha = self::fecha($user->fecha_cumpleanios);
            $eventos[] = [
                'title' => 'cumpleaños' . " " . $user->name,
                'start' => $fecha,
            ];
        }
        return $eventos;
    }

  
}