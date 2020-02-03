<?php

namespace App\Console\Commands;

use App\Deposit;
use Carbon\Carbon;
use Illuminate\Console\Command;

class DepositLogic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deposit:increment';

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
     * @return mixed
     */
    public function handle()
    {
        $deposits = Deposit::where('status', 1)->get();
        foreach ($deposits as $deposit) {
            $start_dif = $deposit->starts_at->diffInDays(Carbon::now());
            $end_dif = $deposit->finish_at->diffInDays(Carbon::now());

            if($start_dif % 31 == 0 && $start_dif > 30) {
                $user = $deposit->user;
                $bonus = $deposit->amount * ($deposit->profit / 100);
                if($deposit->capitalization) {
                    $deposit->amount += $bonus;
                    $deposit->earned_amount += $bonus;
                } else {
                    $user->balance += $bonus;
                    $deposit->earned_amount += $bonus;
                    //TODO: notify
                }
                if ($end_dif == 0) {
                    $user->balance += $deposit->amount;
                    $deposit->status = 3;//FINISHED
                    //TODO: user notify
                }
                $user->save();
                $deposit->save();
            }
        }

    }
}
