@extends('layouts.app', ['activePage' => 'assignSubject', 'titlePage' => __('Assign Subject')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Assign Subject </h4>
                            <p class="card-assign"> All Assign Subjects</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('assignSubject.create') }}" class="btn btn-sm btn-primary">Add New</a>
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
                                              Subject
                                            </th>
                                            <th>
                                                Full Mark
                                            </th>

                                            <th>
                                                Pass Mark
                                            </th>

                                            <th>
                                                Description
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


                                        @if ($assigns)

                                            @foreach ($assigns as $assign)

                                            <tr>
                                                <td>
                                                    {{$assign->studentClass->name}}
                                                </td>
                                                <td>
                                                    {{$assign->subject->name}}
                                                </td>
                                                <td>
                                                    {{$assign->full_mark}}
                                                </td>
                                                <td>
                                                    {{$assign->pass_mark}}
                                                </td>
                                                <td>
                                                   {{$assign->description}}
                                                </td>
                                                <td>
                                                    {{ date("Y-m-d", strtotime($assign->created_at) )}}
                                                </td>
                                                <td class="td-actions text-right">
                                                    <a rel="tooltip" class="btn btn-success btn-link" href="{{route('assignSubject.edit', $assign->id)}}"
                                                        data-original-title="" title="">
                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                    </a>

                                                    <form method="POST"  action="{{route('assignSubject.destroy', $assign->id)}}">
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
