<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Controllers\Controller;
use App\User;
use App\Usersrole;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use MongoDB\Driver\Session;
use mysql_xdevapi\Exception;
use phpDocumentor\Reflection\Types\Array_;
use App\Classes\Larv;

class EmployeeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
//        if ( User::checkAuth() == 2 || User::checkAuth() == 3){
//            return redirect()->route('Dashboard');
//        }
        $emp = Employee::all();
        $arr = array('emp' => $emp);
        return view('employee', $arr);
    }

    public function add()
    {
        return view('admin-employee_add');
    }
    public function adding(Request $request)
    {
        try {
            $request->validate([
                'f_name' => ['required', 'string', 'max:255'],
                'l_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255','unique:employees'],
                'password' => ['required', 'string', 'min:8'],
                'mobile' => ['required','unique:employees', 'regex:/^(009665|9665|\+9665|05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$/'],
                'national_id' => ['string','unique:employees'],
                'gender' => ['string'],
                'fingerprint' => ['string'],
                'status' => ['boolean'],
            ]);
            if ($_FILES['attach']['size'] > 0 && $request->file('attach') != null) {
                $file = $request->file('attach');
                $filename = $request->file('attach')->getClientOriginalName();
                $file->storeAs('', $filename, ['disk' => 'UserPath']);
            } else {
                $filename = 'default.png';
            }
            $emp = new Employee();
            $emp->f_name = $request->input('f_name');
            $emp->l_name = $request->input('l_name');
            $emp->email = $request->input('email');
            $emp->password = Hash::make($request->input('password'));
            $emp->mobile = $request->input('mobile');
            $emp->national_id = $request->input('national_id');
            $emp->gender = $request->input('gender');
            $emp->attachment = $filename;
            $emp->fingerprint = $request->input('fingerprint');
            $emp->status = ($request->input('status') != null ? $request->input('status') : '0');

            $emp->save();
            return $this->show();
        } catch (Exception $ex) {
            return $this->show();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        try {
            $employee = Employee::find($id);
            $arr = array('emp' => $employee);
            session(['id' => $employee->id]);
            return view('admin.employee_edit', $arr);
        } catch (Exception $ex) {
            return view('admin.employee');
        }
    }

    public function editing(Request $request)
    {
        try {
            $request->validate([
                'f_name' => ['required', 'string', 'max:255'],
                'l_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'password' => ['required', 'string', 'min:8'],
                'mobile' => ['required', 'regex:/^(009665|9665|\+9665|05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$/'],
                'national_id' => ['string'],
                'gender' => ['string'],
                'fingerprint' => ['string'],
                'status' => ['boolean'],
            ]);
            if ($_FILES['attach']['size'] > 0 && $request->file('attach') != null) {
                $file = $request->file('attach');
                $filename = $request->file('attach')->getClientOriginalName();
                $file->storeAs('', $filename, ['disk' => 'UserPath']);
            } else {
                $filename = 'default.png';
            }
            $emp = Employee::find(session('id'));
            $emp->f_name = $request->input('f_name');
            $emp->l_name = $request->input('l_name');
            $emp->email = $request->input('email');
            $emp->password = Hash::make($request->input('password'));
            $emp->mobile = $request->input('mobile');
            $emp->national_id = $request->input('national_id');
            $emp->gender = $request->input('gender');
            $emp->attachment = $filename;
            $emp->fingerprint = $request->input('fingerprint');
            $emp->status = ($request->input('status') != null ? $request->input('status') : '0');
            $emp->save();
            session()->forget('id');
            echo session('id');
            return $this->show();
        } catch (Exception $ex) {
            return $this->show();
        }
    }
    public function delete($id)
    {
        $emp = Employee::find($id);
        $notification = array(
            'message' => 'Delete Record for ' . $emp->f_name,
            'alert_type' => 'success',
        );
        $emp->delete();
        return redirect()->route('show')->with('notification', $notification);
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
