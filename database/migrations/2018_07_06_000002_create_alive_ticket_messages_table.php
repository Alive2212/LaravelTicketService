<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAliveTicketMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alive_ticket_messages', function (Blueprint $table) {
            $table->increments('id');

            // author
            $table->unsignedInteger('author_id')
                ->index();
            $table->foreign('author_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // ticket id
            $table->unsignedInteger('ticket_id')
                ->index();
            $table->foreign('ticket_id')
                ->references('id')
                ->on('alive_tickets')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // body
            $table->text('body');

            // revoked
            $table->boolean('revoked')
                ->default(false);

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
        Schema::dropIfExists('alive_ticket_messages');
    }
}
