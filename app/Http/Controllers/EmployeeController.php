<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Departement;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{

        public function dashboard(){
        return view('employee.dashboard',[
        ]);
    }   


    public function index()
    {
        return view('employee.index', [
            'employees' => Employee::all()
        ]);
    }


    public function create()
    {
        return view('employee.create', [
            'employees' => Employee::all(),
            'companies' => Company::all(),
            'departements' => Departement::all(),
            'positions' => Position::all()
        ]);
    }



    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_id' => 'required|max:255',
            'departement_id' => 'required|integer',
            'position_id' => 'required|max:255',
            'name' => 'required|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'birthdate' => 'required|max:255',
            'nik' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'ktp' => 'nullable|mimes:pdf|max:2048',
            'ijazah' => 'nullable|mimes:pdf|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('uploads\foto'), $fileName);
            $validated['foto'] = $fileName;
        }

        if ($request->hasFile('ktp')) {
            $fileName = time() . '.' . $request->ktp->extension();
            $request->ktp->move(public_path('uploads\ktp'), $fileName);
            $validated['ktp'] = $fileName;
        }

        if ($request->hasFile('ijazah')) {
            $fileName = time() . '.' . $request->ijazah->extension();
            $request->ijazah->move(public_path('uploads\ijazah'), $fileName);
            $validated['ijazah'] = $fileName;
        }

        Employee::create($validated);
        return redirect()->route('employee.index')->with('success', 'Data has been added!');
    }


    public function show(Employee $employee)
    {
        return view('employee.show', [
            'employee' => $employee,
            'company' => $employee->company,
            'departement' => $employee->departement,
            'position' => $employee->position
        ]);
    }


    public function edit(Employee $employee)
    {
        return view('employee.edit', [
            'employee' => $employee,
            'companies' => Company::all(),
            'departements' => Departement::all(),
            'positions' => Position::all()
        ]);
    }


    public function update($request, Employee $employee)
    {
        $validated = $request->validate([
            'company_id' => 'required|integer',
            'departement_id' => 'required|integer',
            'position_id' => 'required|max:255',
            'name' => 'required|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'birthdate' => 'required|max:255',
            'nik' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'ktp' => 'nullable|mimes:pdf|max:2048',
            'ijazah' => 'nullable|mimes:pdf|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            if ($employee->foto && file_exists(public_path('uploads/foto/' . $employee->foto))) {
                unlink(public_path('uploads/foto/' . $employee->foto));
            }
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('uploads/foto'), $fileName);
            $validated['foto'] = $fileName;
        }

        if ($request->hasFile('ktp')) {
            if ($employee->ktp && file_exists(public_path('uploads/ktp/' . $employee->ktp))) {
                unlink(public_path('uploads/ktp/' . $employee->ktp));
            }
            $fileName = time() . '.' . $request->ktp->extension();
            $request->ktp->move(public_path('uploads/ktp'), $fileName);
            $validated['ktp'] = $fileName;
        }

        if ($request->hasFile('ijazah')) {
            if ($employee->ijazah && file_exists(public_path('uploads/ijazah/' . $employee->ijazah))) {
                unlink(public_path('uploads/ijazah/' . $employee->ijazah));
            }
            $fileName = time() . '.' . $request->ijazah->extension();
            $request->ijazah->move(public_path('uploads/ijazah'), $fileName);
            $validated['ijazah'] = $fileName;
        }

        $employee->update($validated);
        return redirect()->route('employee.index')->with('success', 'Data has been updated!');
    }


    public function destroy(Employee $employee)
    {
        if ($employee->foto && file_exists(public_path('uploads/foto/' . $employee->foto))) {
            unlink(public_path('uploads/foto/' . $employee->foto));
        }

        if ($employee->ktp && file_exists(public_path('uploads/ktp/' . $employee->ktp))) {
            unlink(public_path('uploads/ktp/' . $employee->ktp));
        }

        if ($employee->ijazah && file_exists(public_path('uploads/ijazah/' . $employee->ijazah))) {
            unlink(public_path('uploads/ijazah/' . $employee->ijazah));
        }

        $employee->delete();
        return redirect()->route('employee.index')->with('success', 'Data has been deleted!');
    }
}
