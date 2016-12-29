<?php

namespace Gkiokan\Company\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;

use Auth;
use Gkiokan\Company\Company;
use Gkiokan\Company\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{

    public function index()
    {
        $companies = Company::where('user_id', Auth::user()->id)->get();

        return view('company::index', compact(['companies']));
    }


    public function create()
    {
        return view('company::new');
    }


    public function store(CompanyRequest $request)
    {
        $user = Auth::user();

        $company = new Company($request->all());
        $company->user_id = $user->id;
        $company->save();

        return redirect()->route('company.index')
                         ->with('message.content', 'Your Company has been created')
                         ->with('message.type', 'success');
    }


    public function edit(Company $company)
    {
        $user = Auth::user();

        if($user->id !== $company->owner()->first()->id):
          session()->flash('message.content', 'This company is NOT yours');
          session()->flash('message.type', 'warning');
        endif;

        return view('company::edit', compact(['company']));
    }


    public function show(Company $company)
    {
        if(!$company) dd('FU');

        return view('company::show', compact(['company']));
    }


    public function update(CompanyRequest $request, Company $id=null)
    {
        $company = $id;
        $id = $company->id;
        $user = Auth::user();

        if($user->id == $company->owner()->first()->id):
            $company->update($request->all());
            session()->flash('message.content', 'Company Information has been updated');
            session()->flash('message.type', 'success');
            return redirect()->route('company.edit', ['id' => $id]);
        endif;

        return back();
    }


    public function delete(Company $id)
    {
        $company = $id;
        $id = $company->id;
        $user = Auth::user();

        if($user->id == $company->owner()->first()->id):
            session()->flash('message.content', 'Attention! Delete Operation!');
            session()->flash('message.type', 'danger');
            return view('company::delete', ['company' => $company]);
        endif;

        return redirect()->route('company.index');
    }


    public function destroy(Company $id){
        $company = $id;
        $id   = $company->id;
        $name = $company->name;
        $user = Auth::user();

        if($user->id == $company->owner()->first()->id):
            $company->delete();
            session()->flash('message.content', "You have successfully deleted your Company $name");
            session()->flash('message.type', 'success');
        endif;

        return redirect()->route('company.index');
    }
}
