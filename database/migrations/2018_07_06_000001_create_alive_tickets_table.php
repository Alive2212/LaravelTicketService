<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAliveTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alive_tickets', function (Blueprint $table) {
            $table->increments('id');

            // ticket id
            $table->text('ticket_id');

            // author
            $table->unsignedInteger('author_id')
                ->index();
            $table->foreign('author_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // responsible
            $table->unsignedInteger('responsible_id')
                ->nullable()
                ->index();
            $table->foreign('responsible_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // customer
            $table->unsignedInteger('customer_id')
                ->index();
            $table->foreign('customer_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // category
            $table->unsignedInteger('category_id')
                ->index();
            $table->foreign('category_id')
                ->references('id')
                ->on('alive_ticket_categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // title
            $table->text('title');

            // subtitle
            $table->text('subtitle');

            // description
            $table->text('description');

            // status
            $table->enum('status', ['customer_wrote','operator_wrote','done']);

            // priority
            $table->enum('priority', ['low', 'medium', 'high']);

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
        Schema::dropIfExists('alive_tickets');
    }
}
