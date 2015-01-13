<div class="ch-box">

    <div class="ch-box-header">
        <h2 class="ch-box-header-title">Image Dropbox</h2>
    </div>

    <div class="ch-box-body">

        <div class="dropbox-file-widget row">
                <div class="dropbox-file large-4 columns"></div>
        </div>
    </div>
</div>

<script id="dropbox-file-template" type="text/template">
    <div class="dropbox-data">
        <div class="columns large-4">
            {{--<img src="<%= icon %>" alt=""/>--}}
            <img src="<%= link %>" alt=""/>
            <input placeholder="" name="blocks[image][0][driver]" type="hidden" value='dropbox-image'>
            <input placeholder="" name="blocks[image][0][data]" type="hidden" value='<%= data %>'>
        </div>
        <div class="large-4 columns">
            <!-- Image name Form Input -->
            <label>Image name:
                {{ Form::text('blocks[image][0][name]', null, ['placeholder' => ''] ) }}
            </label>
            <!-- Alternative text Form Input -->
            <label>Alternative text:
                {{ Form::text('blocks[image][0][alt]', null, ['placeholder' => ''] ) }}
            </label>
            <!-- Alternative text Form Input -->
            <label>Caption:
                {{ Form::text('blocks[image][0][caption]', null, ['placeholder' => ''] ) }}
            </label>
        </div>
    </div>
</script>
