<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->timestamps();
        });
        DB::table('roles')->insert([
            'id' => '1',
            'name' => 'user'
        ]);
        DB::table('roles')->insert([
            'id' => '2',
            'name' => 'coach'
        ]);
        DB::table('roles')->insert([
            'id' => '3',
            'name' => 'teacher'
        ]);
        DB::table('roles')->insert([
            'id' => '4',
            'name' => 'admin'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
