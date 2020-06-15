@extends('layouts.app')
@section('content')
<div class="container">
    <h3 class="text-center">Laravel 5 - Column sorting with pagination example from scratch</h3>
    <table class="table table-bordered">
        <tr>
            <th width="80px">@sortablelink('id')</th>
            <th>@sortablelink('name')</th>
            <th>@sortablelink('email')</th>
            <th>@sortablelink('created_at')</th>
        </tr>
        @if($users->count())
            @foreach($users as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->created_at->format('d-m-Y') }}</td>
                </tr>
            @endforeach
        @endif
    </table>
    {!! $users->appends(\Request::except('page'))->render() !!}
</div>
@endsection