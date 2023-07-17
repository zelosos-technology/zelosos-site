<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequestService;
use App\Models\Dashboard\Service;
use App\Models\User;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        //dd($service);
        return view('dashboard.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequestService $request)
    {
        //dd($request);
        $service = new Service();
        $service->title = $request->title;
        $service->category = $request->category;
        $service->description = $request->description;
        $service->save();
        return redirect()->route('services.index')->with('success','Serviço criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($service)
    {
        $EditingService = Service::find($service);
        //dd($EditingService);
        return view('dashboard.services.edit',compact('EditingService'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequestService $request, Service $service)
    {
        $service->title = $request->title;
        $service->category = $request->category;
        $service->description = $request->description;
        $service->update();

        return redirect()->route('services.index')->with('success','Serviço actualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($service)
    {
        Service::find($service)->delete();
        return redirect()->route('services.index')->with('success','Serviço apagado com sucesso');
    }
}
