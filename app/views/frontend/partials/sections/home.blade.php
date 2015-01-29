<script id="welcome-template" type="text/template">
    <div class="text_presentation row">
        <hr class="text_presentation-hr"/>
        <p class="text_presentation-p text_presentation-p-home">
            Boris Vargas is a Graphic Designer currently based in Buenos Aires, Argentina.
            He works internationally as a full-time freelancer and always open for new projects and opportunities.
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
            <a class="text_with_arrow link-arrow" href="project">Watch Project<i class="icon-arrow-right"></i></a>
        </div>
    </div>
</script>
<script id="preview-hr-template" type="text/template">
    <hr class="preview_hr_list"/>
</script>
<div id="presenter"></div>
<ul class="listProjects small-block-grid-1 medium-block-grid-2 large-block-grid-3">
    <li class="lp-box" data-async="1">
        <figure>
            <a class="lp-box-link" href="">
                <div class="lp-box-img-wrapper">
                    <img src="{{ asset('assets/images/projects/ex1-thumb.jpg') }}" alt="">
                </div>
                <figcaption class="lp-name">
                    <h3>Editorial Design V. 2</h3>
                    <span class="lp-icon icon-plus"></span>
                </figcaption>
            </a>
        </figure>
    </li>
    <li class="lp-box" data-async="2">
        <figure>
            <a class="lp-box-link" href="">
                <div class="lp-box-img-wrapper">
                    <img src="{{ asset('assets/images/projects/ex2-thumb.jpg') }}" alt="">
                </div>
                <figcaption class="lp-name">
                    <h3>Editorial Design V. 2</h3>
                    <span class="lp-icon icon-plus"></span>
                </figcaption>
            </a>
        </figure>
    </li>
    <li class="lp-box" data-async="3">
        <figure>
            <a class="lp-box-link" href="">
                <div class="lp-box-img-wrapper">
                    <img src="{{ asset('assets/images/projects/ex3-thumb.jpg') }}" alt="">
                </div>
                <figcaption class="lp-name">
                    <h3>Editorial Design V. 2</h3>
                    <span class="lp-icon icon-plus"></span>
                </figcaption>
            </a>
        </figure>
    </li>
    <li class="lp-box" data-async="4">
        <figure>
            <a class="lp-box-link" href="">
                <div class="lp-box-img-wrapper">
                    <img src="{{ asset('assets/images/projects/ex4-thumb.jpg') }}" alt="">
                </div>
                <figcaption class="lp-name">
                    <h3>Editorial Design V. 2</h3>
                    <span class="lp-icon icon-plus"></span>
                </figcaption>
            </a>
        </figure>
    </li>
    <li class="lp-box" data-async="5">
        <figure>
            <a class="lp-box-link" href="">
                <div class="lp-box-img-wrapper">
                    <img src="{{ asset('assets/images/projects/ex5-thumb.jpg') }}" alt="">
                </div>
                <figcaption class="lp-name">
                    <h3>Editorial Design V. 2</h3>
                    <span class="lp-icon icon-plus"></span>
                </figcaption>
            </a>
        </figure>
    </li>
    <li class="lp-box" data-async="6">
        <figure>
            <a class="lp-box-link" href="">
                <div class="lp-box-img-wrapper">
                    <img src="{{ asset('assets/images/projects/ex6-thumb.jpg') }}" alt="">
                </div>
                <figcaption class="lp-name">
                    <h3>Editorial Design V. 2</h3>
                    <span class="lp-icon icon-plus"></span>
                </figcaption>
            </a>
        </figure>
    </li>
    <li class="lp-box" data-async="7">
        <figure>
            <a class="lp-box-link" href="">
                <div class="lp-box-img-wrapper">
                    <img src="{{ asset('assets/images/projects/ex7-thumb.jpg') }}" alt="">
                </div>
                <figcaption class="lp-name">
                    <h3>Editorial Design V. 2</h3>
                    <span class="lp-icon icon-plus"></span>
                </figcaption>
            </a>
        </figure>
    </li>
    <li class="lp-box" data-async="8">
        <figure>
            <a class="lp-box-link" href="">
                <div class="lp-box-img-wrapper">
                    <img src="{{ asset('assets/images/projects/ex8-thumb.jpg') }}" alt="">
                </div>
                <figcaption class="lp-name">
                    <h3>Editorial Design V. 2</h3>
                    <span class="lp-icon icon-plus"></span>
                </figcaption>
            </a>
        </figure>
    </li>
</ul>
