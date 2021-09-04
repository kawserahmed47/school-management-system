@extends('layouts.app', ['activePage' => 'studentFee', 'titlePage' => __('Assign Student Fees')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Assign Student Fees </h4>
                            <p class="card-studentFee"> All Assign Student Feess</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('studentFee.create') }}" class="btn btn-sm btn-primary">Add New</a>
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
                                                Fee Category
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


                                        @if ($studentFees)

                                            @foreach ($studentFees as $studentFee)

                                            <tr>
                                                <td>
                                                    {{$studentFee->studentClass->name}}
                                                </td>
                                                <td>
                                                    {{$studentFee->student->first_name}} {{$studentFee->student->last_name}} <br>
                                                    {{$studentFee->id_no}}
                                                </td>
                                                <td>
                                                    {{$studentFee->feeCategoryAmount->feeCategory->name}}
                                                </td>
                                                <td>
                                                    {{$studentFee->amount}}
                                                </td>
                    
                                                <td>
                                                    {{ date("Y-m-d", strtotime($studentFee->created_at) )}}
                                                </td>
                                                <td class="td-actions text-right">
                                                    <a rel="tooltip" class="btn btn-success btn-link" href="{{route('studentFee.edit', $studentFee->id)}}"
                                                        data-original-title="" title="">
                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                    </a>

                                                    <form method="POST"  action="{{route('studentFee.destroy', $studentFee->id)}}">
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
