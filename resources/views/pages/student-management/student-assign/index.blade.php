@extends('layouts.app', ['activePage' => 'assignStudent', 'titlePage' => __('Student Assign')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Student Assign</h4>
                            <p class="card-category"> All Student Assigns</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('assignStudent.create') }}" class="btn btn-sm btn-primary">Add New</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                Student ID
                                            </th>
                                            <th>
                                                Student Name
                                            </th>
                                            <th>
                                                Class
                                            </th>
                                            <th>
                                                Year
                                            </th>
                                            <th>
                                                Shift
                                            </th>
                                            <th>
                                                Created at
                                            </th>
                                            <th class="text-right">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @if ($assignStudents)

                                            @foreach ($assignStudents as $assignStudent)

                                            <tr>
                                                <td>
                                                    {{$assignStudent->id_no}}
                                                </td>
                                                <td>
                                                  {{$assignStudent->student->first_name}}
                                                </td>
                                                <td>

                                                    @if ($assignStudent->studentClass)
                                                        {{$assignStudent->studentClass->name}}
                                                    @else
                                                        --
                                                    @endif

                                                   
                                                </td>
                                                <td>
                                                    @if ($assignStudent->studentYear)
                                                    {{$assignStudent->studentYear->name}}
                                                    @else
                                                        --
                                                    @endif
                                                   
                                                </td>
                                                <td>
                                                    @if ($assignStudent->studentShift)
                                                    {{$assignStudent->studentShift->name}}

                                                    @else
                                                        --
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ date("Y-m-d", strtotime($assignStudent->created_at) )}}
                                                </td>
                                                <td class="td-actions text-right">
                                                    <a rel="tooltip" class="btn btn-success btn-link" href="{{route('assignStudent.edit', $assignStudent->id)}}"
                                                        data-original-title="" title="">
                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                    </a>

                                                    <form method="POST"  action="{{route('assignStudent.destroy', $assignStudent->id)}}">
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
