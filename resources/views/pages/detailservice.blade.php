@extends("template")

@section("content")
@include("parties.banner")

<section class="ftco-section ftco-degree-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
            <p>
            <img src="../assets/images/practice-1.jpg" alt="" class="img-fluid">
          </p>
          <h2 class="mb-3">Overview:</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>
          <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p>
          <h2 class="mb-3 mt-5">How Can We Help !</h2>
          <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
          <p><a href="#" class="btn btn-primary">Request Free Consultation</a></p>

          <div class="row mt-5 pt-5">
                <div class="col-md-12">
                  <h2 class="mb-4 font-weight-bold">Our Legal Advisors</h2>
                </div>
              {{-- <div class="col-lg-6">
                      <div class="block-2 ftco-animate">
                      <div class="flipper">
                        <div class="front" style="background-image: url(../assets/images/jml.jpeg);">
                          <div class="box">
                            <h2>@lang("info.avocat.1.nom") </h2>
                            <p>@lang("info.avocat.1.titre")</p>
                          </div>
                        </div>
                        <div class="back">
                          <!-- back content -->
                          <blockquote>
                            <p>&ldquo;{{ Str::limit(__("info.avocat.1.detail"), 100, '...') }}&rdquo;</p>
                          </blockquote>
                          <div class="author d-flex">
                            <div class="image mr-3 align-self-center">
                              <img src="{{ asset('assets/images/jml.jpeg') }}" alt="">
                            </div>
                            <div class="name align-self-center">@lang("info.avocat.1.nom")  <span class="position">@lang("info.avocat.1.titre")</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="block-2 ftco-animate">
                      <div class="flipper">
                        <div class="front" style="background-image: url(../assets/images/person_2.jpg);">
                          <div class="box">
                            <h2>Jefford Maxillin</h2>
                            <p>Business Lawyer</p>
                          </div>
                        </div>
                        <div class="back">
                          <!-- back content -->
                          <blockquote>
                            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                          </blockquote>
                          <div class="author d-flex">
                            <div class="image mr-3 align-self-center">
                              <img src="{{ asset('assets/images/person_2.jpg') }}" alt="">
                            </div>
                            <div class="name align-self-center">Jefford Maxillin<span class="position">Business Lawyer</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> --}}
                  
                      @include("parties.team")        
          </div>
                      


        </div> <!-- .col-md-8 -->
        <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
          <div class="sidebar-box">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon icon-search"></span>
                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
              </div>
            </form>
          </div>
          <div class="sidebar-box ftco-animate">
            <div class="categories">
              <h3>Categories </h3>
              <li class="{{ $slug==str_replace(' ', '-', __("info.services.droit.nom"))?"active":"" }}"><a href="{{ route('detailService',['slog'=>str_replace(' ', '-', __("info.services.droit.nom"))]) }}">@lang("info.services.droit.nom")<span class="ion-ios-arrow-forward"></span></a></li>
              <li class="{{ $slug==str_replace(' ', '-', __("info.services.banc.nom"))?"active":"" }}"><a href="{{ route('detailService',['slog'=>str_replace(' ', '-', __("info.services.banc.nom"))]) }}">@lang("info.services.banc.nom") <span class="ion-ios-arrow-forward"></span></a></li>
              <li class="{{ $slug==str_replace(' ', '-', __("info.services.droitf.nom"))?"active":"" }}"><a href="{{ route('detailService',['slog'=>str_replace(' ', '-', __("info.services.droitf.nom"))]) }}">@lang("info.services.droitf.nom") <span class="ion-ios-arrow-forward"></span></a></li>
              <li class="{{ $slug==str_replace(' ', '-', __("info.services.droittr.nom"))?"active":"" }}"><a href="{{ route('detailService',['slog'=>str_replace(' ', '-', __("info.services.droittr.nom"))]) }}">@lang("info.services.droittr.nom") <span class="ion-ios-arrow-forward"></span></a></li>
              
            </div>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3>Recent Blog</h3>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(../assets/images/image_1.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> Oct. 18, 2019</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(../assets/images/image_2.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> Oct. 18, 2019</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(../assets/images/image_3.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> Oct. 18, 2019</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3>Tag Cloud</h3>
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">dish</a>
              <a href="#" class="tag-cloud-link">menu</a>
              <a href="#" class="tag-cloud-link">food</a>
              <a href="#" class="tag-cloud-link">sweet</a>
              <a href="#" class="tag-cloud-link">tasty</a>
              <a href="#" class="tag-cloud-link">delicious</a>
              <a href="#" class="tag-cloud-link">desserts</a>
              <a href="#" class="tag-cloud-link">drinks</a>
            </div>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3>Paragraph</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
          </div>
        </div>

      </div>
    </div>
  </section> <!-- .section -->

 

@endsection