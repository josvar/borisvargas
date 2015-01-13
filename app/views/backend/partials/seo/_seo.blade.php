<div class="ch-box">
    <div class="ch-box-header">
        <h2 class="ch-box-header-title">SEO</h2>
    </div>

    <div class="ch-box-body">
        <!-- Page Title Form Input -->
        <div class="">
            <label>Page Title:
                {{ Form::text('seo_tags[title]', null, ['placeholder' => ''] ) }}
            </label>
        </div>

        <!-- Description Form Input -->
        <div class="">
            <label>Description:
                {{ Form::text('seo_tags[description]', null, ['placeholder' => ''] ) }}
            </label>
        </div>
        <div class="">
            <fieldset>
                <legend>OPEN GRAPH</legend>
                <!-- Open Graph Title Form Input -->
                <div class="row">
                    <div class="columns">
                        <label>Open Graph Title:
                            {{ Form::text('seo_tags[og][og:title]', null, ['placeholder' => ''] ) }}
                        </label>
                    </div>
                </div>

                <!-- Open Graph Description Form Input -->
                <div class="row">
                    <div class="columns">
                        <label>Open Graph Description:
                            {{ Form::text('seo_tags[og][og:description]', null, ['placeholder' => ''] ) }}
                        </label>
                    </div>
                </div>

                <!-- Open Graph Type Form Input -->
                <div class="row">
                    <div class="columns">
                        <label>Open Graph Type:
                            {{ Form::text('seo_tags[og][og:type]', null, ['placeholder' => ''] ) }}
                        </label>
                    </div>
                </div>

                <!-- Open Graph Image Form Input -->
                <div class="row">
                    <div class="columns">
                        <label>Open Graph Image:
                            {{ Form::text('seo_tags[og][og:image]', null, ['placeholder' => ''] ) }}
                        </label>
                    </div>
                </div>

            </fieldset>
        </div>

        <div class="">
            <fieldset>
                <legend>TWITTER CARD</legend>
                <!-- Twitter Card Type Form Input -->
                <div class="row">
                    <div class="columns">
                        <label>Twitter Card Type:
                            <select name="seo_tags[twitter][twitter:card]">
                                <option value="">- None -</option>
                                <option value="summary" selected="selected">Summary (default)</option>
                                <option value="summary_large_image">Summary with large image</option>
                                <option value="photo">Photo</option>
                                <option value="player">Media player</option>
                                <option value="gallery">Gallery</option>
                                <option value="app">App</option>
                                <option value="product">Product</option>
                            </select>
                        </label>
                    </div>
                </div>

                <!-- Twitter Card Site Form Input -->
                <div class="row">
                    <div class="columns">
                        <label>Twitter Card Site:
                            {{ Form::text('seo_tags[twitter][twitter:site]', null, ['placeholder' => ''] ) }}
                        </label>
                    </div>
                </div>

                <!-- Twitter Card Title Form Input -->
                <div class="row">
                    <div class="columns">
                        <label>Twitter Card Title:
                            {{ Form::text('seo_tags[twitter][twitter:title]', null, ['placeholder' => ''] ) }}
                        </label>
                    </div>
                </div>

                <!-- Twitter Card Description Form Input -->
                <div class="row">
                    <div class="columns">
                        <label>Twitter Card Description:
                            {{ Form::text('seo_tags[twitter][twitter:description]', null, ['placeholder' => ''] ) }}
                        </label>
                    </div>
                </div>

                <!-- Twitter Card Image Form Input -->
                <div class="row">
                    <div class="columns">
                        <label>Twitter Card Image:
                            {{ Form::text('seo_tags[twitter][twitter:image]', null, ['placeholder' => ''] ) }}
                        </label>
                    </div>
                </div>


                <!-- Twitter Card Url Form Input -->
                <div class="row">
                    <div class="columns">
                        <label>Twitter Card Url:
                            {{ Form::text('seo_tags[twitter][twitter:url]', null, ['placeholder' => ''] ) }}
                        </label>
                    </div>
                </div>
            </fieldset>
        </div>

    </div>
</div>