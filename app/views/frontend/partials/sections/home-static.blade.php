<script id="welcome-template" type="text/template">
    <div class="text_presentation row">
        <hr class="text_presentation-hr"/>
        <p class="text_presentation-p text_presentation-p-home">
            I'm Boris Vargas. I'm a Graphic Designer currently based in Buenos Aires, Argentina. I work internationally
            as a full-time freelancer and always open for new projects and opportunities. I also sell high-end, ready to
            print Indesign templates to agencies and designers.
        </p>

        <div class="text_presentation-vr"></div>
    </div>
</script>
<script id="preview-template" type="text/template">
    <div class="preview_project row">
        <div class="preview_project-thumb columns medium-6">
            <img src="<%= img %>" alt=""/>
        </div>
        <div class="preview_project-text columns medium-6">
            <h3 class="sub-heading"><%= type %></h3>

            <h2 class="preview_project-title"><a href="project"><%= title %></a></h2>

            <div class="preview_project-desc">
                <p><%= desc %></p>
            </div>
            <a class="text_with_arrow link-arrow" href="projects/<%= link %>">Watch Project<i class="icon-arrow-right"></i></a>
        </div>
    </div>
</script>
<script id="preview-hr-template" type="text/template">
    <hr class="preview_hr_list"/>
</script>
<div id="presenter"></div>
<ul class="listProjects small-block-grid-1 medium-block-grid-2 large-block-grid-3">

    @foreach ($projects as $id => $project)
        <li class="lp-box" data-async="{{$id}}">
            <figure>
                <a class="lp-box-link" href="/projects/{{$id}}">
                    <div class="lp-box-img-wrapper">
                        <img src="{{ asset( $project['thumb'] ) }}" alt="{{$project['images'][0]['alt']}}">
                    </div>
                    <figcaption class="lp-name">
                        <h3>{{ $project['title'] }}</h3>
                        <span class="lp-icon icon-plus"></span>
                    </figcaption>
                </a>
            </figure>
        </li>
    @endforeach
</ul>
