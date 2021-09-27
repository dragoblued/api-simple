<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class KsaSimulationController extends Controller
{
    public static function getRFormApproval(Request $request): JsonResponse 
    {
        $data = json_decode($request->getContent());
        return response()->json([
            'id_pakus' => $data->id_pakus,
            'id_pivp' => $data->id_pakus,
            'status' => true,
            'diagnostics' => [
                [
                    'message' => 'RPL received'
                ]
            ]
        ]);
    }

    public static function getRFormApproved(Request $request): JsonResponse 
    {
        $data = json_decode($request->getContent());
        return response()->json([
            'id_pakus' => $data->id_pakus,
            'id_pivp' => $data->id_pakus,
            'status' => true,
            'message' => 'OK'
        ]);
    }
}
