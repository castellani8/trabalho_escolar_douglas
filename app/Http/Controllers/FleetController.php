<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fleet;
use App\Http\Requests\FleetRequest;
use App\Models\Company;

class FleetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fleets = Fleet::query()
            ->selectRaw('fleets.*, companies.company_name')
            ->join('companies', 'fleets.company_id', '=', 'companies.id')
            ->get();

        return view('fleet.index', compact('fleets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        $fleets = Fleet::all();
        return view('fleet.create', compact('fleets', 'companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FleetRequest $request)
    {
        Fleet::query()
        ->create($request->validated());
        
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies = Company::all();
        $fleet = Fleet::query()->find($id);
        return view('fleet.edit', compact('fleet', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FleetRequest $request, $id)
    {
        Fleet::query()->find($id)->update($request->validated());
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fleet::destroy($id);
        return $this->index();
    }
}
