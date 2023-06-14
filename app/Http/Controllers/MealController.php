<?php

namespace App\Http\Controllers;

use App\Models\meal;
use Illuminate\Http\Request;
use App\HTTP\Requests\storeMealRequest;

class MealController extends Controller
{

    public function GetIndex(){
        return view('meal.index');
    }

    public function storeMeal(storeMealRequest $request)
    {
        return $request;
    }
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(meal $meal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(meal $meal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, meal $meal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(meal $meal)
    {
        //
    }
}
