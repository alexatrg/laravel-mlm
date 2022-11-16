<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mlm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('mlm', function (Blueprint $table) {
        //     $table->char('id')->primary();
        //     $table->char('name');
        //     $table->text('address');
        //     $table->text('phone');
        //     $table->text('upline');
        //     $table->text('downline');
        //     $table->text('referral');
        //     $table->timestamps();
        // });

        Schema::create('mlm', function (Blueprint $table) {
            $table->char('id')->primary();
            $table->char('name');
            $table->text('address');
            $table->text('phoneNumber');
            $table->char('upline_id')->nullable();
            $table->json('downline_list')->nullable();
            $table->text('downline_total')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
