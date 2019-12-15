@extends('admin.master')

@section('body')
    <div class="container-fluid">


        <div class="row">

            <div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Comment</th>
                        <th>Created At</th>
                    </tr>
                    @php($i = 1)
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$contact->customer_name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->subject}}</td>
                            <td>{{$contact->comment}}</td>
                            <td>{{$contact->created_at}}</td>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection














