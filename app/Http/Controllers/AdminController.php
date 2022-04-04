<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function depositView()
    {
        $transactions = Transaction::where('type', '=', 'deposit')->orderBy('id','desc')->get();
        return view('admin.deposits', compact('transactions'));
    }

    public function depositProcessing(Request $data)
    {

        // dd($data->update_status);
        $trans = Transaction::with('user')->find($data->t_id);


        // dd($trans->user->wallet->investment);

        if($trans->status == 'Success' && $data->update_status != 'Success'){
            $newInvest = $trans->user->wallet->investment - $data->amount;
            $newBal = $trans->user->wallet->balance - $data->amount;
        }elseif($data->update_status != 'Success'){
            $newInvest = $trans->user->wallet->investment + 0;
            $newBal = $trans->user->wallet->balance + 0;
        }else{
            $newInvest = $trans->user->wallet->investment + $data->amount;
            $newBal = $trans->user->wallet->balance + $data->amount;
        }

        if($data->update_status == 'Success'){

            $trans->user->wallet->update([
                'balance' => $newBal,
                'investment' => $newInvest
            ]);
            $trans->update(['status' => $data->update_status]);

        }else{
            $trans->user->wallet->update([
                'balance' => $newBal,
                'investment' => $newInvest
            ]);
            $trans->update(['status' => $data->update_status]);
        }

        return redirect()->back()->with('success', 'Status successfully changed');
    }

    public function usersView()
    {
        $users = User::with('wallet')->orderBy('id', 'desc')->get();


        // dd(Auth::user()->wallet->investment);
        // $users = json_decode($users);
        // foreach ($users as $user => $wallet) {
        //     echo $users[];
        // }
        // dd($users->wallet);
        return view('admin.users', compact('users'));
    }


    public function payments(Request $dt)
    {

        $dt->validate([
            'user_id' => 'required|string|max:255',
            'amount' => ['required', 'string', 'max:255'],
            'trans_type' => 'required|max:255',
        ]);

        $user = User::find($dt->user_id);

        // dd($user->wallet);
        if($dt->trans_type == "Profit"){
            $user->wallet->update([
                'profit' => $user->wallet->profit + $dt->amount,
                'balance' => $user->wallet->balance + $dt->amount
            ]);
        }

        if($dt->trans_type == "Bonus"){
            $user->wallet->update([
                'bonus' => $user->wallet->bonus + $dt->amount,
                'balance' => $user->wallet->balance + $dt->amount
            ]);
        }

           if($dt->trans_type == "Referal Bonu"){
            $user->wallet->update([
                'ref_bonus' => $user->wallet->ref_bonus + $dt->amount,
                'balance' => $user->wallet->balance + $dt->amount
            ]);
        }

        Transaction::create([
            'user_id' => $dt->user_id,
            'reference' => uniqid(),
            'type' => $dt->trans_type,
            'transaction_id' => uniqid(),
            'payment_method' => "Bitcoin",
            'previous_bal' => Auth::user()->wallet->balance,
            'amount' => $dt->amount,
            'status' => 'Success'
        ]);

        dd($dt->user_id);

        return redirect()->back()->with('success', "Credited successfully");
        // dd($users->wallet->balance);

        // return view('admin.users', compact('users'));
    }

    public function withdrawalView()
    {
        $transactions = Transaction::where('type', 'Withdrawal')->orderBy('id', 'desc')->get();
        return view('admin.withdrawal_request', compact('transactions'));
    }

    public function withdrawalApproval(Request $data)
    {

        // dd($data->update_status);
        $trans = Transaction::with('user')->find($data->t_id);


        // dd($trans->user->wallet->investment);

        if($trans->status == 'Success' && $data->update_status != 'Success'){
            $newInvest = $trans->user->wallet->investment + $data->amount;
            $newBal = $trans->user->wallet->balance + $data->amount;
        }elseif($data->update_status != 'Success'){
            $newInvest = $trans->user->wallet->investment + 0;
            $newBal = $trans->user->wallet->balance + 0;
        }else{
            $newInvest = $trans->user->wallet->investment - $data->amount;
            $newBal = $trans->user->wallet->balance - $data->amount;
        }

        if($data->update_status == 'Success'){

            $trans->user->wallet->update([
                'balance' => $newBal,
                'investment' => $newInvest
            ]);
            $trans->update(['status' => $data->update_status]);

        }else{
            $trans->user->wallet->update([
                'balance' => $newBal,
                'investment' => $newInvest
            ]);
            $trans->update(['status' => $data->update_status]);
        }

        return redirect()->back()->with('success', 'Status successfully changed');
    }
}
