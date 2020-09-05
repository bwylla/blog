
<article class="masonry__brick entry format-standard" style="position: absolute; left: 0%; top: 0px;">                   
    <div class="entry__thumb">
        <a href="" class="entry__thumb-link">
            <img src="images/thumbs/masonry/woodcraft-600.jpg" srcset="images/thumbs/masonry/woodcraft-600.jpg 1x, images/thumbs/masonry/woodcraft-1200.jpg 2x" alt="">
        </a>
    </div>

    <div class="entry__text">
        <div class="entry__header">

            <h2 class="entry__title"><a href="{{ route('post', ['id' => $post->id]) }}">{{ $post->name }}</a></h2>
            <div class="entry__meta">
                <span class="entry__meta-cat">
                    <a href="{{ route('category', $post->category->code) }}" role="button">{{ $post->category->name }}</a> 
                </span>
                <span class="entry__meta-date">
                    <a href="single-standard.html">Apr 29, 2019</a>
                </span>
            </div>
            
        </div>
        <div class="entry__excerpt">
            <p>
            {{\Illuminate\Support\Str::limit($post->text, 200)}}         
            </p>
        </div>
    </div>
</article> 