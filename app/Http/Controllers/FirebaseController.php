<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class FirebaseController extends Controller
{
    public function __invoke(){

    }

    public function index()
    {
        $firebase = (new Factory)
        ->withServiceAccount(__DIR__.'/chat-in-laravel-firebase-adminsdk-8a49x-43f162e2db.json')
        ->withDatabaseUri('https://chat-in-laravel-default-rtdb.firebaseio.com/');

        $database = $firebase->createDatabase();
        $date = $database->getReference('date');

        return $date->getValue();
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
