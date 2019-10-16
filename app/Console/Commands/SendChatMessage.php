<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use App\Events\ChatMessageWasReceived;

class SendChatMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chat:message {message}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send chat message.';

    private $msg;
    private $user;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        //
        $this->msg = $this->argument('message');
        $this->user = User::first();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
