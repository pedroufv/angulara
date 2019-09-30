# Employee

## Using
- Resource
- FormRequest
- Migration
- Factory
- ApiResource

## Routes
- GET|HEAD  | api/v1/employees            | api.v1.employees.index   | App\Http\Controllers\API\EmployeeController@index                                                                                                                               |
- POST      | api/v1/employees            | api.v1.employees.store   | App\Http\Controllers\API\EmployeeController@store                                                                                                                               |
- GET|HEAD  | api/v1/employees/{employee} | api.v1.employees.show    | App\Http\Controllers\API\EmployeeController@show                                                                                                                              |
- PUT|PATCH | api/v1/employees/{employee} | api.v1.employees.update  | App\Http\Controllers\API\EmployeeController@update                                                                                                                               |
- DELETE    | api/v1/employees/{employee} | api.v1.employees.destroy | App\Http\Controllers\API\EmployeeController@destroy
