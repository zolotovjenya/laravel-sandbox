@extends('layouts.app')

@section('content')
<table class="table">
    <tr>
        <th scope="col">{{trans('articles.id')}}</th>
        <th scope="col">{{trans('articles.title')}}</th>
        <th scope="col">{{trans('articles.content')}}</th>
    </tr>
    <tr>
        <td>{{$article->id}}</td>
        <td>{{$article->title}}</td>
        <td>{{$article->content}}</td>
    </tr>
    <tr>
    <td colspan="5" align="center">
            <h2>{{ trans('articles.paymentType') }}</h2>
            <div><img src="{{$payment->getImage()}}" width="300" /></div>
        </td>
    </tr>
    <tr>
        <td colspan="5" align="center">
            <h2>{{ trans('articles.sponsor') }}</h2>
            <div><img src="{{$sponsor->getImage()}}" width="300" /></div>
        </td>
    </tr>
</table>
@endsection