<x-layout>
    <x-slot name="title">Home</x-slot>
    <div class="home-page">
        <div class="banner">
            <div class="container">
            <h1 class="logo-font">conduit</h1>
            <p>A place to share your knowledge.</p>
            </div>
        </div>

        <div class="container page">
            <div class="row">
            <div class="col-md-9">
                <div class="feed-toggle">
                <ul class="nav nav-pills outline-active">
                    <li class="nav-item">
                    <a class="nav-link" href="">Your Feed</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="">Global Feed</a>
                    </li>
                </ul>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @foreach ($articles as $article)
                    <div class="article-preview">
                        <div class="article-meta">
                            <a href="/profile/author"><img src="http://i.imgur.com/Qr71crq.jpg" /></a>
                            <div class="info">
                                <a href="/profile/author" class="author">{{ $article->title }}</a>
                                <span class="date">{{ $article->created_at->format('F d, Y') }}</span>
                            </div>
                            <button class="btn btn-outline-primary btn-sm pull-xs-right">
                                <i class="ion-heart"></i> 29
                            </button>
                        </div>
                        <a href="/article/show/{{ $article->id }}" class="preview-link">
                            <h1>{{ $article->title }}</h1>
                            <p>{{ $article->body }}</p>
                            <span>Read more...</span>
                        </a>
                    </div>
                @endforeach

                <ul class="pagination">
                <li class="page-item active">
                    <a class="page-link" href="">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="">2</a>
                </li>
                </ul>
            </div>

            <div class="col-md-3">
                <div class="sidebar">
                <p>Popular Tags</p>

                <div class="tag-list">
                    <a href="" class="tag-pill tag-default">programming</a>
                    <a href="" class="tag-pill tag-default">javascript</a>
                    <a href="" class="tag-pill tag-default">emberjs</a>
                    <a href="" class="tag-pill tag-default">angularjs</a>
                    <a href="" class="tag-pill tag-default">react</a>
                    <a href="" class="tag-pill tag-default">mean</a>
                    <a href="" class="tag-pill tag-default">node</a>
                    <a href="" class="tag-pill tag-default">rails</a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
</x-layout>