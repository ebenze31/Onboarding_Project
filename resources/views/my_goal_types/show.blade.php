@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">My_goal_type {{ $my_goal_type->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/my_goal_types') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/my_goal_types/' . $my_goal_type->id . '/edit') }}" title="Edit My_goal_type"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('my_goal_types' . '/' . $my_goal_type->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete My_goal_type" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $my_goal_type->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $my_goal_type->title }} </td></tr><tr><th> Photo </th><td> {{ $my_goal_type->photo }} </td></tr><tr><th> Price </th><td> {{ $my_goal_type->price }} </td></tr><tr><th> Number </th><td> {{ $my_goal_type->number }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
