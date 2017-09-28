<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events',function(Blueprint $event){
        $event->increments('id');
        $event->string('name');
        $event->string('title');
        $event->string('type');
        $event->longText('description');
        $event->string('video')->nullable();
        $event->string('images')->nullable();
        $event->Integer('phone');
        $event->Text('address');
        $event->string('pin_code')->nullable();
        $event->string('account');
        $event->decimal('amount');
        $event->integer('user_id');
        $event->softDeletes();
        $event->timestamps();   
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
