@extends('layouts/master')

@section('content')
<div class="masonry-wrap">
    <div class="masonry" style="position: relative; height: 5669.4px;">
        <div class="grid-sizer"></div>

        <!-- end article -->
        @foreach($posts as $post)
            @include('layouts/card', compact('post'))
        @endforeach

        <!-- end article -->
    </div> 
</div>

@endsection