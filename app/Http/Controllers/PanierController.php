<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use Illuminate\Http\Request;
use App\Http\Requests\StorePanierRequest;
use App\Http\Requests\UpdatePanierRequest;
use App\Models\Message;

class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePanierRequest $request)
    {
        //
    }
    public function sendMessage(Request $request)
    {
        $rep = Message::create(
            [
                "fullname" => $request->name,
                "phone" => $request->phone,
                "email" => $request->email,
                "sujet" => $request->sujet,
                "content" => $request->message,
            ]
        );
        if ($rep) {
            return response()->json(
                [
                    'reponse' => true,
                    'msg' => 'Message envoyé avec succès',
                ]
            );
        } else {
            return response()->json(
                [
                    'reponse' => false,
                    'msg' => 'Erreur',
                ]
            );
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Panier $panier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Panier $panier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePanierRequest $request, Panier $panier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Panier $panier)
    {
        //
    }
}
