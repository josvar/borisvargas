<!-- Title Form Input -->
<div class="row">
    <div class="columns">
        {{ Form::text('main[title]', null, ['placeholder' => 'Enter title here'] ) }}
    </div>
</div>

<!-- Summary Form Input -->
<div class="row">
    <div class="columns">
        <label>Summary:
            {{ Form::textarea('main[summary]', null, ['placeholder' => '', 'cols' => '30', 'rows' => '5'] ) }}
        </label>
    </div>
</div>