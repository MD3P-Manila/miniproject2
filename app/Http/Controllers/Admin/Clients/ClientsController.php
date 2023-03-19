<?php

namespace App\Http\Controllers\Admin\Clients;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Clients\StoreClientRequest;

class ClientsController extends Controller
{
    //show table data

    public function index()
    {
        return view('admin.clients.index', ['clients' => Client::latest()-> paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        $clients = Client::create($request ->only('name', 'email'));

        if ($request->hasFile('profile_image')) {
            $path = $request->profile_image->store('public/clients/profiles/images');
            $clients->update(['profile_image' => $path]);
        }
        return redirect()->route('admin.clients.dashboard')->with('success', 'successfully Created a new Client!');

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
