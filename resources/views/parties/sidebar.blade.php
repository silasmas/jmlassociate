<div class="col-md-3 col-sm-3">
    <div class="right-sidebar">
        {{-- <div class="search-bar">
            <form action="#">
                <input type="text" value="" class="sidebar-input-text" placeholder="Type and hit enter ...">
                <input type="submit" class="sidebar-input-submit"  value="">
                <i class="fa fa-search"></i>
            </form>
        </div> <!-- end search-bar --> --}}
        <div class="sidebar-category sidebar-inner">
            <h2>Categories</h2>
            <ul>
                @empty($publication)
                @forelse ($publication->categorie as $cat)
                <li><a href="#"><i class="fa fa-long-arrow-right"></i>{{$cat->nom  }}</a></li>
                @empty

                @endforelse

                @endempty


            </ul>
        </div>
        @if(Route::current()->getName()!="publication")
        <div class="sidebar-inner">
            <h2>Recent Posts</h2>
            <div class="recent-post">
                <h3><a href="#">It’s My Pleasure to graduate with excellent!</a></h3>
                <p>June 30, 2015</p>
                <img src="images/recent-post-img-1.png" alt="">
            </div>
            <div class="recent-post">
                <h3><a href="#">All what you want to know about industrial laws</a></h3>
                <p>June 30, 2015</p>
                <img src="images/recent-post-img-2.png" alt="">
            </div>
            <div class="recent-post">
                <h3><a href="#">New Careers, what makes you qualified?</a></h3>
                <p>June 30, 2015</p>
                <img src="images/recent-post-img-3.png" alt="">
            </div>
        </div>
        @endif
        <div class="sidebar-inner">
            <h2>Tag Cloud</h2>
            <div class="tag-cloud">
                <a href="#">Responsive</a>
                <a href="#">Modern</a>
                <a href="#">Corporate</a>
                <a href="#">Business</a>
                <a href="#">Fresh</a>
                <a href="#">Awesome</a>
                <a href="#">Mount</a>
                <a href="#">Fresh</a>
                <a href="#">Responsive</a>
            </div>
        </div>
    </div>
</div>
