<?php

namespace App\Http\Middleware;

use Closure;
use App\Payment;

class CheckPaymentStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id = $request->route('id');

        // Check the payment status based on the ID
        $payment = Payment::find($id);

        if ($payment && $payment->status == 'success') {
            // Payment is successful, allow access
            return $next($request);
        }
        return redirect()->route('submit.payment', ['id' => $id]);
    }
}
