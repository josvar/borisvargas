<div class="row">
    <div class="columns large-6 large-centered text_presentation text_presentation-contact">
        <h1 class="section-heading-ssf text-center">Say Hello</h1>
        <hr class="text_presentation-hr"/>
        <p class="text_presentation-p">We are Temply. We sell high-end, ready to print Indesign templates to agencies and designers.
        Whether you're under a tight deadline, looking for inspiration,
        or just need a document with the legwork already done,
        we have the template for you.
        </p>
        <div class="text_presentation-vr"></div>
    </div>
    <div class="contact_me">
    <!-- Name Form Input -->
    <div class="columns large-6 large-centered">
        <label>Name:
        {{ Form::text('name', null, ['placeholder' => ''] ) }}
        </label>
    </div>
    <!-- Email Form Input -->
    <div class="columns large-6 large-centered">
        <label>E-Mail:
        {{ Form::text('email', null, ['placeholder' => ''] ) }}
        </label>
    </div>

    <!-- Message Form Input -->
    <div class="columns large-6 large-centered">
        <label>Message:
        {{ Form::textarea('message', null, ['placeholder' => '', 'rows' => 9] ) }}
        </label>
    </div>

    <!-- Send Message Form Input -->
    <div class="columns large-6 large-centered">
        {{ Form::submit('Send Message', ['class' => 'button tiny expand'] ) }}
    </div>
    </div>
</div>
