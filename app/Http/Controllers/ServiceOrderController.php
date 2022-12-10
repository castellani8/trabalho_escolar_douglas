<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceOrderRequest;
use App\Models\Fleet;
use App\Models\MaintenanceType;
use App\Models\Order;
use App\Models\Service;
use App\Models\ServiceOrder;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServiceOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceOrders = ServiceOrder::query()
            ->fromRaw('service_orders as so')
            ->selectRaw('so.*, s.service_desc, o.desc_buy, f.desc_frota, mt.desc_manut')
            ->join('services as s', 'so.service_id', '=', 's.id')
            ->join('orders as o', 'so.order_id', '=', 'o.id')
            ->join('fleets as f', 'so.fleet_id', '=', 'f.id')
            ->join('maintenance_types as mt', 'so.maintenance_type_id', '=', 'mt.id')
            ->get();
            
        return view('serviceOrder.index', compact('serviceOrders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       
        $services = Service::all();
        $maintenanceTypes = MaintenanceType::all();
        $orders = Order::all();
        $fleets = Fleet::all();

        return view('serviceOrder.create', compact( "maintenanceTypes", "orders", "services", "fleets" ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceOrderRequest $request)
    {
        
        ServiceOrder::query()
            ->create($request->validated());

        return redirect(url('service-order'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
