<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use App\Models\Facture;
use App\Http\Requests\StoreFactureRequest;
use App\Http\Requests\UpdateFactureRequest;
use GuzzleHttp\Psr7\Request;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ($fact = Facture::selectRaw('
        YEAR(date_Facturation) AS y, monthname(date_Facturation) AS m ,month(date_Facturation) AS ma,SUM(montant) montant
    ')
            ->groupBy('y', 'm', "ma")
            ->orderBy('y', 'asc')
            ->get());
        $montants = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0, 8 => 0, 9 => 0, 10 => 0, 11 => 0, 12 => 0];
        $mois = [];
        foreach ($data as $d) {
            $montants[($d->ma)] = $d->montant;
        }

        $xdata = [];
        foreach ($montants as $m) {
            $xdata[] = $m;
        }


        return view('welcome', compact('xdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch(Request $request)
    {
        $data = ($fact = Facture::selectRaw('
        YEAR(date_Facturation) AS y, monthname(date_Facturation) AS m ,month(date_Facturation) AS ma,SUM(montant) montant
    ')
            ->groupBy('y', 'm', "ma")
            ->orderBy('y', 'asc')
            ->get());
        $montants = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0, 8 => 0, 9 => 0, 10 => 0, 11 => 0, 12 => 0];
        $mois = [];
        foreach ($data as $d) {
            $montants[($d->ma)] = $d->montant;
        }

        $xdata = [];
        foreach ($montants as $m) {
            $xdata[] = $m;
        }
        return json($xdata);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFactureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFactureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function show(Facture $facture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function edit(Facture $facture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFactureRequest  $request
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFactureRequest $request, Facture $facture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facture $facture)
    {
        //
    }
}