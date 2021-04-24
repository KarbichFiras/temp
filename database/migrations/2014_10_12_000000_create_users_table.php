<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',50);
            $table->string('Nom',20);
            $table->string('prenom',20);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->binary('enabled');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert([
            'id' => '1',
            'username' => 'kbhassen',
            'Nom' => 'kaabouri',
            'prenom' => 'hassen',
            'email' => 'hassen@gmail.com',
            'password' => '$2y$10$G1XlJV2hs4qqm6rwX1y4juRQZyETm8uqldyxnL3GVh3d9BILS4FF6',
            'enabled' => 'true'

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
