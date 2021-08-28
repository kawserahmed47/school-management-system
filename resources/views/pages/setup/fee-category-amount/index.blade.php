@extends('layouts.app', ['activePage' => 'categoryAmount', 'titlePage' => __('Fee amount Amount')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Fee amount Amount </h4>
                            <p class="card-amount"> All Fee amount Amounts</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('feeCategoryAmount.create') }}" class="btn btn-sm btn-primary">Add New</a>
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
                                              Fee  Category
                                            </th>
                                            <th>
                                                Amount
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


                                        @if ($amounts)

                                            @foreach ($amounts as $amount)

                                            <tr>
                                                <td>
                                                    {{$amount->studentClass->name}}
                                                </td>
                                                <td>
                                                    {{$amount->feeCategory->name}}
                                                </td>
                                                <td>
                                                    {{$amount->amount}}
                                                </td>
                                                <td>
                                                   {{$amount->description}}
                                                </td>
                                                <td>
                                                    {{ date("Y-m-d", strtotime($amount->created_at) )}}
                                                </td>
                                                <td class="td-actions text-right">
                                                    <a rel="tooltip" class="btn btn-success btn-link" href="{{route('feeCategoryAmount.edit', $amount->id)}}"
                                                        data-original-title="" title="">
                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                    </a>

                                                    <form method="POST"  action="{{route('feeCategoryAmount.destroy', $amount->id)}}">
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
