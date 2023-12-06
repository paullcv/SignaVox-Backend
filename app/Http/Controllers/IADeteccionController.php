<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IADeteccionController extends Controller
{
    public function detectarGesto()
    {
        $rutaModelo = public_path('diego1.h5');
        $scriptPath = base_path('IA_LSTM/detectar.py');
        $venvPath = base_path('IA_LSTM/venv');
        
        $command = "\"$venvPath/Scripts/activate\" && \"$venvPath/Scripts/python\" \"$scriptPath\" \"$rutaModelo\"";
        
        try {
            $output = shell_exec($command);
            
            if ($output) {
                return response()->json(['message' => $output]);
            } else {
                return response()->json(['error' => 'Error al ejecutar el script']);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Excepción al ejecutar el script: ' . $e->getMessage()]);
        }
    }

    public function prueba()
    {
        return view('prueba');
    }
}
