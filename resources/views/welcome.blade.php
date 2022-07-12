@extends('layouts.app')

@section('content')
<div class="container">
    <ul class="list-group">
        @foreach($article as $a)
            <li class="list-group-item"><a href="{{env('APP_URL')}}/article/{{$a->id}}" class="text-primary text-decoration-underline">{{$a->title}}</a></li>
        @endforeach
    </ul>
  
    {{ $article->links() }}
</div>  
@endsection