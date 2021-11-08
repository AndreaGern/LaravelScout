<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="https://picsum.photos/500/200" class="card-img-top img-fluid my-4" alt="...">
                <h5 class="card-title my-2">{{$article->title}}</h5>
                <p class="card-text">{{$article->body}}</p>
            </div>
        </div>
    </div>
</x-layout>
