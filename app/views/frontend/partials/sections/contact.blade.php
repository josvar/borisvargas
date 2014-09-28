<div class="page contact">

    <div class="row first-container">
        <div class="columns">
            <h1 class="title-huge">Say Hello</h1>
        </div>
    </div>
    <div class="row form-container">
        <div class="columns">
            <div class="row name-email">
                <!-- Name Form Input -->
                <div class="columns large-6">
                    {{ Form::text('name', null, ['placeholder' => 'Your Name'] ) }}
                </div>
                <!-- Email Form Input -->
                <div class="columns large-6">
                    {{ Form::text('email', null, ['placeholder' => 'Your E-Mail'] ) }}
                </div>
            </div>

            <!-- Message Form Input -->
            <div class="row message">
                <div class="columns">

                    {{ Form::textarea('message', null, ['placeholder' => 'Your Message', 'rows' => 9] ) }}

                </div>
            </div>

            <!-- Send Message Form Input -->
            <div class="row">
                <div class="columns">
                    {{ Form::submit('Send Message', ['class' => 'button medium'] ) }}
                </div>
            </div>

        </div>
    </div>
</div>
