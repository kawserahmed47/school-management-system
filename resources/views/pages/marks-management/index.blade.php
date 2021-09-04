@extends('layouts.app', ['activePage' => 'mark', 'titlePage' => __('Assign Mark')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Assign Mark </h4>
                            <p class="card-mark"> All Assign Marks</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('mark.create') }}" class="btn btn-sm btn-primary">Add New</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                Class
                                            </th>
                                            <th>
                                                Student
                                            </th>
                                            <th>
                                              Subject
                                            </th>
                                            <th>
                                                Full Mark
                                            </th>

                                            <th>
                                                Pass Mark
                                            </th>

                                            <th>
                                                Obtained Mark
                                            </th>

                                            <th>
                                                Comment
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


                                        @if ($marks)

                                            @foreach ($marks as $mark)

                                            <tr>
                                                <td>
                                                    {{$mark->studentClass->name}}
                                                </td>
                                                <td>
                                                    {{$mark->student->first_name}} {{$mark->student->last_name}} <br>
                                                    {{$mark->id_no}}
                                                </td>
                                                <td>
                                                    {{$mark->assignSubject->subject->name}}
                                                </td>
                                                <td>
                                                    {{$mark->assignSubject->full_mark}}
                                                </td>
                                                <td>
                                                    {{$mark->assignSubject->pass_mark}}
                                                </td>
                                                <td>
                                                    {{$mark->mark}}

                                                </td>
                                                <td>
                                                   {{$mark->description}}
                                                </td>
                                                <td>
                                                    {{ date("Y-m-d", strtotime($mark->created_at) )}}
                                                </td>
                                                <td class="td-actions text-right">
                                                    <a rel="tooltip" class="btn btn-success btn-link" href="{{route('mark.edit', $mark->id)}}"
                                                        data-original-title="" title="">
                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                    </a>

                                                    <form method="POST"  action="{{route('mark.destroy', $mark->id)}}">
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
