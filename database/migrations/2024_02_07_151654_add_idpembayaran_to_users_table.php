<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class AddIdpembayaranToPaymentTable extends Migration
{

    public function up()
    {
        Schema::table('payment', function (Blueprint $table) {
            $table->uuid('idpembayaran')->nullable()->after('password');
        });

        // Update existing payments with null idpembayaran
        $payments = \App\Payment::whereNull('idpembayaran')->get();
        foreach ($payments as $payment) {
            $payment->update(['idpembayaran' => Str::uuid()]);
        }
    }

    public function down()
    {
        Schema::table('payment', function (Blueprint $table) {
            $table->dropColumn('idpembayaran');
        });
    }
}
