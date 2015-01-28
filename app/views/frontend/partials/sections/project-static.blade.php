<div class="row">
    <div class="columns columns medium-6 medium-centered large-6 large-centered">
        <div class="text_presentation text_presentation-project">
            <h3 class="sub-heading">{{ $project['category'] }}</h3>

            <h1 class="text_presentation-title">{{ $project['title'] }}</h1>
            <hr class="text_presentation-hr"/>
            <p class="text_presentation-p">{{ $project['text'] }}</p>

            <div class="text_presentation-vr"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="columns medium-8 medium-centered large-8 large-centered">
        <div class="project-img-wrap">
            <div class="share-social-wrap">
                <hr class="share-social-hr-top"/>
                <ul class="share-social-icons">
                    <li>
                        <a data-social-popup target="_blank"
                           href=""><i class="icon-facebook-c"></i>
                        </a>
                    </li>
                    <li>
                        <a data-social-popup target="_blank"
                           href=""><i class="icon-pinterest-c"></i>
                        </a>
                    </li>
                    <li>
                        <a data-social-popup target="_blank"
                           href="https://twitter.com/share?
                           url={{ canonical_url_encoded($project['seo']['canonical']) }}&text={{ urlencode($project['seo']['title']) }}&via=borisvargas21">
                            <i class="icon-twitter-c"></i>
                        </a>
                    </li>
                    <li>
                        <a href=""><i class="icon-linkedin-c"></i>
                        </a>
                    </li>
                </ul>
                <div class="text_with_arrow share-social-vertical-text">SHARE <i class="icon-arrow-right"></i>
                </div>
            </div>
            @foreach ($project['images'] as $image)
                <div class="project-img">
                    <img src="{{$image['link']}}" alt="{{$image['alt']}}">
                </div>
            @endforeach
        </div>
    </div>
</div>

@include('frontend.partials.back-to-top')
