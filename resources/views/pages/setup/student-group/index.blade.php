@extends('layouts.app', ['activePage' => 'group', 'titlePage' => __('Student Group')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Student Group</h4>
                            <p class="card-category"> All Group</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('studentGroup.create') }}" class="btn btn-sm btn-primary">Add New</a>
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
                                                Creation date
                                            </th>
                                            <th class="text-right">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @if ($groups)

                                            @foreach ($groups as $group)

                                            <tr>
                                                <td>
                                                    {{$group->name}}
                                                </td>
                                                <td>
                                                   {{$group->description}}
                                                </td>
                                                <td>
                                                    {{ date("Y-m-d", strtotime($group->created_at) )}}
                                                </td>
                                                <td class="td-actions text-right">
                                                    <a rel="tooltip" class="btn btn-success btn-link" href="{{route('studentGroup.edit', $group->id)}}"
                                                        data-original-title="" title="">
                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                    </a>

                                                    <form method="POST"  action="{{route('studentGroup.destroy', $group->id)}}">
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