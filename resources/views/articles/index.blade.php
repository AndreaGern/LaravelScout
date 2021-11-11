<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-4">All our articles</h1>
                <div class="row">
                    @forelse ($articles as $article)
                        <div class="col-12 col-md-4 my-4">
                            <div class="card" style="width: 18rem;">
                            <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$article->title}}</h5>
                                <p class="card-text  text-truncate">{{$article->body}}</p>
                                <a href="{{route('articles.show',compact('article'))}}" class="btn btn-primary shadow">Read</a>
                            </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <p>No results found</p>
                        </div>
                    @endforelse
                </div>
                {{$articles->links()}}
            </div>
        </div>
    </div>
</x-layout>
