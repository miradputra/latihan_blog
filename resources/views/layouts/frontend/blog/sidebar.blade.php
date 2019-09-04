<div class="col-lg-4 sidebar">
    <div class="single-widget search-widget">
        <form class="example" action="#" style="margin:auto;max-width:300px">
            <input type="text" placeholder="Search Posts" name="search2">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>


    <div class="single-widget category-widget">
        <h4 class="title">Post Categories</h4>
        <ul>
            @foreach($kategori as $data)
            <li><a href="/blog/kategori/{{ $data->slug }}" class="justify-content-between align-items-center d-flex"><h6>{{ $data->nama_kategori }}</h6> <span>{{ $data->Artikel->count() }}</span></a></li>
            @endforeach
        </ul>
    </div>

    <div class="single-widget recent-posts-widget">
        <h4 class="title">Recent Posts</h4>
        <div class="blog-list ">
            @foreach($recent as $data)
            <div class="single-recent-post d-flex flex-row">
                <div class="recent-thumb">
                    <img class="img-fluid" style="max-width:130px;" src="{{ asset($data->foto) }}" alt="">
                </div>
                <div class="recent-details">
                    <a href="/blog/{{ $data->slug }}">
                        <h4>
                            {{ $data->judul }}
                        </h4>
                    </a>
                    <p>
                        {{ $data->created_at->diffForHumans() }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <div class="single-widget tags-widget">
        <h4 class="title">Tag</h4>
            <ul>
            @foreach($tag as $data)
                @if($data->Artikel->count() > 0)
                    <li><a href="/blog/tag/{{ $data->slug }}">{{ $data->name }}</a></li>
                @endif
            @endforeach
            </ul>
    </div>

</div>
