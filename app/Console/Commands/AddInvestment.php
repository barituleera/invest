<?php

namespace App\Console\Commands;

use App\Mail\NotificationMail;
use App\Wallet;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class AddInvestment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:investment';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        foreach(Wallet::latest()->get() as $wallet) {

            if($wallet->investment > 0) {
                $wallet->profit += $wallet->investment * 0.1;
                $wallet->save();

                $user = $wallet->user;

                $title = "Daily Returns";
                $body = ' Your return on investment has been credited with 10% profit of $'.number_format($wallet->investment * 0.1).'. Your new balance is as below: <br><br>'
                    .'<b>Balance:</b> $'.number_format($wallet->balance, 2).'<br>'
                    .'<b>Profit:</b> $'.number_format($wallet->profit, 2).'<br>'
                    .'<b>Investment:</b> $'.number_format($wallet->investment, 2).'<br>'
                    .'<b>Referral bonus:</b> $'.number_format($wallet->ref_bonus, 2).'<br>';

                $name = $user->first_name .' '. $user->last_name;

                Mail::to('admin@capitalsexpert.com')->send(new NotificationMail($title, $body, $name));
            }
        }
    }
}
