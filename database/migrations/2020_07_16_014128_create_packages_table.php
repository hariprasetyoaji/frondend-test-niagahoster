<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('price');
            $table->string('promo');
            $table->string('registered');
            $table->string('power');
            $table->string('disk_space');
            $table->string('bandwidth');
            $table->string('databases');
            $table->string('addon_domain');
            $table->string('free_domain');
            $table->string('backup');
            $table->string('free_ssl');
            $table->string('pop3_email');
            $table->string('name_server');
            $table->string('mail_protection');
            $table->string('support_priority');
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
        Schema::dropIfExists('packages');
    }
}
