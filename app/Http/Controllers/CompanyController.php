<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function index()
    {
        return view('company.index', [
            'companies' => Company::latest()->get()
        ]);
    }


    public function create()
    {
        return view('company.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $fileName = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('uploads/logo'), $fileName);
            $validated['logo'] = $fileName;
        }

        Company::create($validated);
        return redirect()->route('company.index')->with('success', 'Data has been added!');
    }


    public function show(company $company)
    {
        return view('company.show', [
            'company' => $company
        ]);
    }


    public function edit(company $company)
    {
        return view('company.edit', [
            'company' => $company
        ]);
    }


    public function update(Request $request, company $company)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('logo')) {

            if ($company->logo && file_exists(public_path('uploads/logo/' . $company->logo))) {
                unlink(public_path('uploads/logo/' . $company->logo));
            }

            $fileName = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('uploads/logo'), $fileName);
            $validated['logo'] = $fileName;
        }
        $company->update($validated);
        return redirect()->route('company.index')->with('success', 'Data has been updated!');
    }


    public function destroy(company $company)
    {
        if ($company->logo && file_exists(public_path('uploads/logo/' . $company->logo))) {
            unlink(public_path('uploads/logo/' . $company->logo));
        }

        $company->delete();
        return redirect()->route('company.index')->with('success', 'Data has been deleted!');
    }
}
