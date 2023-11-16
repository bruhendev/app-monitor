<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateEndpointRequest;
use App\Models\Site;
use Illuminate\Http\Request;

class EndpointController extends Controller
{
    public function index(string $site)
    {
        $site = Site::with('endpoints')->find($site);
        if (!$site) {
            return back();
        }

        $endpoints = $site->endpoints;

        return view('admin.endpoints.index', compact('site', 'endpoints'));
    }

    public function create(string $site)
    {
        if (!$site = Site::find($site)) {
            return back();
        }

        return view('admin.endpoints.create', compact('site'));
    }

    public function store(StoreUpdateEndpointRequest $request, Site $site)
    {
        $site->endpoints()->create($request->all());

        return redirect()->route('endpoints.index', $site->id)->with('message', 'Cadastrado com sucesso');
    }
}