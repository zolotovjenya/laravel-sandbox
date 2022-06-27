@extends('layouts.app')

@section('content')
<table class="table">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Payment type</th>
    </tr>
    <tr>
        <td>{{$article->id}}</td>
        <td>{{$article->title}}</td>
        <td>{{$article->content}}</td>
        <td>{{$payment->getTitle()}}</td>
    </tr>
    <tr>
        <td colspan="5" align="center"><img src="{{$payment->getImage()}}" width="400" /></td>
    </tr>
</table>
@endsection