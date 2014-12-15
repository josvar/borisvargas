<div class="row">
    <div class="columns medium-6 medium-centered large-6 large-centered">
        <div class="text_presentation text_presentation-contact">
            <h1 class="section-heading-ssf text-center">Say Hello</h1>
            <hr class="text_presentation-hr"/>
            <p class="text_presentation-p text_presentation-p-contact">We are Temply. We sell high-end, ready to print Indesign templates to agencies and designers.
            Whether you're under a tight deadline, looking for inspiration,
            or just need a document with the legwork already done,
            we have the template for you.
            </p>
            <div class="text_presentation-vr"></div>
        </div>
        <div class="contact_me">
        <!-- Name Form Input -->
        <div class="">
            <label>Name:
            {{ Form::text('name', null, ['placeholder' => ''] ) }}
            </label>
        </div>
        <!-- Email Form Input -->
        <div class="">
            <label>E-Mail:
            {{ Form::text('email', null, ['placeholder' => ''] ) }}
            </label>
        </div>
        </div>

        <!-- Message Form Input -->
        <div class="">
            <label>Message:
            {{ Form::textarea('message', null, ['placeholder' => '', 'rows' => 9] ) }}
            </label>
        </div>

        <!-- Send Message Form Input -->
        <div class="">
            {{ Form::submit('Send Message', ['class' => 'button tiny expand'] ) }}
        </div>
    </div>
</div>