@extends('layouts.app', ['activePage' => 'employeeSalary', 'titlePage' => __('Employee Salary')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Employee Salary </h4>
                            <p class="card-employeeSalary"> All Employee Salarys</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('employeeSalary.create') }}" class="btn btn-sm btn-primary">Add New</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Description
                                            </th>
                                            <th>
                                                Amount
                                            </th>
                                            
                                            <th>
                                                Creation date
                                            </th>

                                            <th class="text-right">
                                                Actions
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>


                                        @if ($employeeSalaries)

                                            @foreach ($employeeSalaries as $employeeSalary)

                                            <tr>
                                               
                                                <td>
                                                    {{$employeeSalary->employee->first_name}} {{$employeeSalary->employee->last_name}} <br>
                                                    {{$employeeSalary->id_no}}
                                                </td>
                                                <td>
                                                    {{$employeeSalary->description}}
                                                </td>
                                                <td>
                                                    {{$employeeSalary->amount}}
                                                </td>
                    
                                                <td>
                                                    {{ date("Y-m-d", strtotime($employeeSalary->created_at) )}}
                                                </td>
                                                <td class="td-actions text-right">
                                                    <a rel="tooltip" class="btn btn-success btn-link" href="{{route('employeeSalary.edit', $employeeSalary->id)}}"
                                                        data-original-title="" title="">
                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                    </a>

                                                    <form method="POST"  action="{{route('employeeSalary.destroy', $employeeSalary->id)}}">
                                                        @csrf
                                                        @method('delete')

                                                        <button onclick="return(confirm('Are you sure?'))" type="submit" rel="tooltip" class="btn btn-danger btn-link"> <i class="material-icons">close</i>
                                                            <div class="ripple-container"></div></button>

                                                    </form>

                                                </td>
                                            </tr>
    
                                                
                                            @endforeach
                                            
                                        @endif

                                      



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
