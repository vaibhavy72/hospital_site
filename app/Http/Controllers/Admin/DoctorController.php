<?php
//doctor controller
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Specialization;
use App\Models\Department;
use App\Models\Hospital;
use App\Models\Service;

class DoctorController extends Controller
{
    public function index()
    {
        //get departments
        $departments = Department::all();
        //get specializations
        $specializations = Specialization::all();
        //get hospitals
        $hospitals = Hospital::all();
        //get services
        $services = Service::all();

        $doctors = Doctor::all();
        return view('admin.doctors', ['doctors' => $doctors]);
    }

    public function create()
    {
         //get departments
         $departments = Department::all();
         //get hospitals
         $hospitals = Hospital::all();
         //get services
         $services = Service::all();

        return view('admin.doctor-create', compact('departments', 'specializations', 'hospitals', 'services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:doctors',
            'password' => 'required|min:6',
        ]);
        $doctor = new Doctor();
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->password = bcrypt($request->password);
        $doctor->save();
        return back()->with('success', 'Doctor created successfully');
    }

    public function edit($id)
    {
         //get departments
         $departments = Department::all();
         //get hospitals
         $hospitals = Hospital::all();
         //get services
         $services = Service::all();

        $doctor = Doctor::find($id);
        return view('admin.doctors-edit', compact('doctor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:doctors,email,'.$id,
        ]);
        $doctor = Doctor::find($id);
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->save();
        return back()->with('success', 'Doctor updated successfully');
    }

    public function destroy($id)
    {
        Doctor::destroy($id);
        return back()->with('success', 'Doctor deleted successfully');
    }
}