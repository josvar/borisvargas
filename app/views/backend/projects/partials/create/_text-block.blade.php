<div class="ch-box">
    <div class="ch-box-header">
        <h2 class="ch-box-header-title">Text Block</h2>
    </div>
    <div class="ch-box-body">
        <!-- Content Form Input -->
        <div class="">
            <label>Content:
                {{ Form::textarea('blocks[text][0][text]', null, ['placeholder' => '', 'cols' => '30', 'rows' => '5'] ) }}
            </label>
        </div>

    </div>
</div>