@extends('main.index')
@section('content')
<div class="library-cover">

</div>
<div class="container pt-3 pb-3">
    <div class="row">
        @foreach($books as $book)
        <div class="col-6 col-md-4 col-lg-3 book-item">
            <div class="book">
            {!! $book->file !!}
            <div class="book-desc">
                <div class="book-text">
                    <h5 class="book-subject">{{$book->subject}}</h5>
                    <h5 class="book-level">{{$book->level}} კლასი</h5> 
                    <h5 class="book-author">{{$book->author}}</h5>
                    <h5 class="book-years">{{$book->years}} წელი</h5>
                </div>
            </div>
            </div>
           
        </div>
        @endforeach
        <script async defer src="https://online.flippingbook.com/EmbedScriptUrl.aspx?m=redir&hid=245653678"></script>
    </div>
</div>
@stop
