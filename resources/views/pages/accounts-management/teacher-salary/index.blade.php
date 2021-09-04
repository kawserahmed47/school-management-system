@extends('layouts.app', ['activePage' => 'teacherSalary', 'titlePage' => __('Teacher Salary')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Teacher Salary </h4>
                            <p class="card-teacherSalary"> All Teacher Salarys</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('teacherSalary.create') }}" class="btn btn-sm btn-primary">Add New</a>
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


                                        @if ($teacherSalaries)

                                            @foreach ($teacherSalaries as $teacherSalary)

                                            <tr>
                                               
                                                <td>
                                                    {{$teacherSalary->teacher->first_name}} {{$teacherSalary->teacher->last_name}} <br>
                                                    {{$teacherSalary->id_no}}
                                                </td>
                                                <td>
                                                    {{$teacherSalary->description}}
                                                </td>
                                                <td>
                                                    {{$teacherSalary->amount}}
                                                </td>
                    
                                                <td>
                                                    {{ date("Y-m-d", strtotime($teacherSalary->created_at) )}}
                                                </td>
                                                <td class="td-actions text-right">
                                                    <a rel="tooltip" class="btn btn-success btn-link" href="{{route('teacherSalary.edit', $teacherSalary->id)}}"
                                                        data-original-title="" title="">
                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                    </a>

                                                    <form method="POST"  action="{{route('teacherSalary.destroy', $teacherSalary->id)}}">
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
