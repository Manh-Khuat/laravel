@extends('layouts.admin')
@section('title', 'Category List')
@section('main')
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Total Product</th>
            <th>Created Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $cat)
        <tr>
            <td>{{ $cat->id }}</td>
            <td>{{ $cat->name }}</td>
            <td>{{ $cat->name }}</td>
            <td>{{ $cat->created_at->format('Y-m-d') }}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop()
