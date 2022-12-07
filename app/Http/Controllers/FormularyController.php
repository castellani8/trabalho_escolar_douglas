<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Formulary;
use Illuminate\Http\Request;

global $formulary;
global $company;

class FormularyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formulary = Formulary::all();
        return view('formulary.index', $formulary);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { {
            $customer = Company::create($request->all());

            if ($customer) {
            }
            return redirect()->route('customers.index');
            Formulary::create($request->post());
            return redirect()->route('Formulary.index')->with('success', 'The formulary has been created successfully.');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Formulary.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('formulary.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Formulary $formulary, Company $company)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company->delete();
        return redirect()->route('Formulary.index')->with('success', 'Company has been deleted successfully');
    }
}
;

