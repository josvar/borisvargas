<div class="row">
    <div class="columns medium-6 medium-centered large-6 large-centered">
        <div class="text_presentation text_presentation-contact">
            <h1 class="section-heading-ssf text-center">Say Hello</h1>
            <hr class="text_presentation-hr"/>
            <p class="text_presentation-p text_presentation-p-contact">
                Whatever your needs and goals get in touch and I can advise how I can help you take this forward. If you
                would like to discuss your project or would just like to say hello then do get in touch and drop me a
                message below.
            </p>

            <div class="text_presentation-vr"></div>
        </div>
        <div class="contact_me">
            <!-- Form -->
            {{ Form::open(['data-remote', 'url' => 'contact', 'method' => 'POST']) }}

            <!-- Name Form Input -->
            <div class="">
                <label>Name:
                    {{ Form::text('name', null, ['required', 'placeholder' => ''] ) }}
                </label>
            </div>
            <!-- Email Form Input -->
            <div class="">
                <label>E-Mail:
                    {{ Form::email('email', null, ['required', 'placeholder' => ''] ) }}
                </label>
            </div>
            <!-- Message Form Input -->
            <div class="">
                <label>Message:
                    {{ Form::textarea('message', null, ['required', 'placeholder' => '', 'rows' => 9] ) }}
                </label>
            </div>

            {{--<div class="g-recaptcha" data-sitekey="6LfwMwETAAAAAJhPvnGr8oyOHmaxkjYcSEfwf8nU"></div>--}}

            <!-- Send Message Form Input -->
            <div class="">
                {{ Form::submit('Send Message', ['data-send', 'autocomplete' =>'off','class' => 'button tiny expand'] ) }}
            </div>

            {{ Form::close() }}
        </div>

    </div>
</div>

@include('frontend.partials.notifications')
