<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->string('code_toil');
            $table->string('group_code');
            $table->string('group_name');
            $table->string('name');
            $table->string('code');
            $table->string('code_owu');
            $table->boolean('is_subscriptions');
            $table->string('subscription_code')->nullable();
            $table->string('subscription_status')->nullable();
            $table->date('subscription_date_from')->nullable();
            $table->date('subscription_date_to')->nullable();
            $table->string('kind');
            $table->string('type');
            $table->string('partner_name');
            $table->string('partner_code');
            $table->integer('insurer_min_age')->nullable();
            $table->integer('insurer_max_age')->nullable();
            $table->integer('insured_min_age');
            $table->integer('insured_max_age');
            $table->integer('period_of_insurance')->nullable();
            $table->string('premium_type');
            $table->string('system_status');
            $table->string('system_name');
            $table->date('published_at');
            $table->boolean('is_archived');
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
        Schema::dropIfExists('investments');
    }
};
