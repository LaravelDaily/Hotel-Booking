<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCountriesRequest;
use App\Http\Requests\Admin\UpdateCountriesRequest;

class CountriesController extends Controller
{
    /**
     * Display a listing of Country.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('country_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('country_delete')) {
                return abort(401);
            }
            $countries = Country::onlyTrashed()->get();
        } else {
            $countries = Country::all();
        }

        return view('admin.countries.index', compact('countries'));
    }

    /**
     * Show the form for creating new Country.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('country_create')) {
            return abort(401);
        }
        return view('admin.countries.create');
    }

    /**
     * Store a newly created Country in storage.
     *
     * @param  \App\Http\Requests\StoreCountriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCountriesRequest $request)
    {
        if (! Gate::allows('country_create')) {
            return abort(401);
        }
        $country = Country::create($request->all());



        return redirect()->route('admin.countries.index');
    }


    /**
     * Show the form for editing Country.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('country_edit')) {
            return abort(401);
        }
        $country = Country::findOrFail($id);

        return view('admin.countries.edit', compact('country'));
    }

    /**
     * Update Country in storage.
     *
     * @param  \App\Http\Requests\UpdateCountriesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCountriesRequest $request, $id)
    {
        if (! Gate::allows('country_edit')) {
            return abort(401);
        }
        $country = Country::findOrFail($id);
        $country->update($request->all());



        return redirect()->route('admin.countries.index');
    }


    /**
     * Display Country.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('country_view')) {
            return abort(401);
        }
        $customers = \App\Customer::where('country_id', $id)->get();

        $country = Country::findOrFail($id);

        return view('admin.countries.show', compact('country', 'customers'));
    }


    /**
     * Remove Country from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('country_delete')) {
            return abort(401);
        }
        $country = Country::findOrFail($id);
        $country->delete();

        return redirect()->route('admin.countries.index');
    }

    /**
     * Delete all selected Country at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('country_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Country::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Country from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('country_delete')) {
            return abort(401);
        }
        $country = Country::onlyTrashed()->findOrFail($id);
        $country->restore();

        return redirect()->route('admin.countries.index');
    }

    /**
     * Permanently delete Country from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('country_delete')) {
            return abort(401);
        }
        $country = Country::onlyTrashed()->findOrFail($id);
        $country->forceDelete();

        return redirect()->route('admin.countries.index');
    }
}
