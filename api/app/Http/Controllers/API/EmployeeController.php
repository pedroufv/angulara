<?php

namespace App\Http\Controllers\API;

use App\Employee;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeStore;
use App\Http\Resources\Employee as EmployeeResource;
use App\Http\Resources\Employees;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Employees
     */
    public function index()
    {
        return new Employees(Employee::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EmployeeStore $request
     * @return EmployeeResource
     */
    public function store(EmployeeStore $request)
    {
        $employee = Employee::create($request->validated());

        return new EmployeeResource($employee);
    }

    /**
     * Display the specified resource.
     *
     * @param Employee $employee
     * @return EmployeeResource
     */
    public function show(Employee $employee)
    {
        return new EmployeeResource($employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Employee $employee
     * @return EmployeeResource
     */
    public function update(Request $request, Employee $employee)
    {
        $employee = Employee::update($request->validated());

        return new EmployeeResource($employee);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Employee $employee
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return response()->json(null, 204);
    }
}
