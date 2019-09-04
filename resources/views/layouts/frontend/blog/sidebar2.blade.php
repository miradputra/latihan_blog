<div class="col-lg-4 sidebar">
        <div class="single-widget search-widget">
            <form class="example" action="#" style="margin:auto;max-width:300px">
                <input type="text" placeholder="Search Posts" name="search2">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

        <div class="single-widget protfolio-widget">
            <img src="{{ asset('frontend/img/about-img.png')}}" alt="" style="height: 100px; width: 200px">
            <a href="#"><h4>{{ $artikel->user->name }}</h4></a>
            <p>
                MCSE boot camps have its supporters and
                its detractors. Some people do not understand why you should have to spend money
                on boot camp when you can get.
            </p>
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
        </div>

        <div class="single-widget category-widget">
            <h4 class="title">Post Categories</h4>
            <ul>
                @foreach($cat as $c)
                    <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>{{ $c->nama }}</h6> <span>{{ $c->artikel->count() }}</span></a></li>
                @endforeach
            </ul>
        </div>

        <div class="single-widget recent-posts-widget">
            <h4 class="title">Recent Posts</h4>
            <div class="blog-list ">
                @foreach($artikels as $data)
                    <div class="single-recent-post d-flex flex-row">
                        <div class="recent-thumb">
                            <img class="img-fluid" src="{{ asset('assets/img/artikel/'.$data->foto) }}" alt="" style="height: 50px; width: 50px;">
                        </div>
                        <div class="recent-details">
                            <a href="{{ route('detail.blog', $data->slug) }}">
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

        {{--  <div class="single-widget category-widget">
            <h4 class="title">Post Archive</h4>
            <ul>
                <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Dec '17</h6> <span>37</span></a></li>
                <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Nov '17</h6> <span>24</span></a></li>
                <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Oct '17</h6> <span>59</span></a></li>
                <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Sep '17</h6> <span>29</span></a></li>
                <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Aug '17</h6> <span>15</span></a></li>
                <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Jul '17</h6> <span>09</span></a></li>
                <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Jun '17</h6> <span>44</span></a></li>
            </ul>
        </div>  --}}

        <div class="single-widget tags-widget">
            <h4 class="title">Tag Clouds</h4>
                <ul>
                    @foreach($tags as $tg)
                        <li><a href="#">{{ $tg->name }}</a></li>
                    @endforeach
                </ul>
        </div>

    </div>
