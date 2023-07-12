<?php


namespace App\Http\Controllers\Admin;
use App\Models\NomeModello;
use App\Http\Requests\StoreNomeModelloRequest;
use App\Http\Requests\UpdateNomeModelloRequest;
use App\Http\Controllers\Controller;
class NomeModelloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNomeModelloRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNomeModelloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NomeModello  $nomeModello
     * @return \Illuminate\Http\Response
     */
    public function show(NomeModello $nomeModello)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NomeModello  $nomeModello
     * @return \Illuminate\Http\Response
     */
    public function edit(NomeModello $nomeModello)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNomeModelloRequest  $request
     * @param  \App\Models\NomeModello  $nomeModello
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNomeModelloRequest $request, NomeModello $nomeModello)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NomeModello  $nomeModello
     * @return \Illuminate\Http\Response
     */
    public function destroy(NomeModello $nomeModello)
    {
        //
    }
}
