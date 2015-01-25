<?php namespace Chenkacrud\Feedback;

use Laracasts\Commander\CommandHandler;
use Mail;

class SendFeedbackCommandHandler implements CommandHandler {

    /**
     * Handle the command.
     *
     * @param object $command
     * @return void
     */
    public function handle($command)
    {
        Mail::send('emails.feedback', [
            'name'   => $command->name,
            'email' => $command->email,
            'body'   => $command->message,

        ], function ($message) use ($command)
        {
            $message->from('feedback@borisvargas.com', $command->name );
            $message->to('feedback@borisvargas.com')->subject('New Feedback from ' . $command->name);

        });
    }

}