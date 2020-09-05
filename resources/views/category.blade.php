@extends('layouts/master')

@section('content')

<div class="masonry-wrap">
    <header class="listing-header">
        <h1 class="h2">{{ $category->name }}</h1>
    </header>
    <div class="masonry" style="position: relative; height: 5669.4px;">
        <div class="grid-sizer"></div>
        
        <!-- end article -->
        @foreach($category->posts as $post)
            @include('layouts/card', compact('post'))
        @endforeach
        <!-- end article -->

    </div> 
</div>

@endsection