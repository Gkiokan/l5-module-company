<?php

namespace Gkiokan\Company\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use \Illuminate\Support\Facades\Route;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('company::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('company::new');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        // ???

        return redirect()->route('company.index')
                         ->with('message.content', 'Should be done?')
                         ->with('message.type', 'info');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id=null)
    {
        if(!$id)
          $id=\Auth::user()->username;

        return view('company::edit', compact(['id']));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
