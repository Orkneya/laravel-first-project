<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('post_tags', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('tag_id');

            $table->index('post_id', name: 'post_tag_post_ind');
            $table->index('tag_id', name: 'post_tag_tag_ind');

            $table->foreign('post_id', name:'post_tag_post_fk')->oh('posts')->references('id') ;
            $table->foreign('tag_id', name:'post_tag_tag_fk')->oh('tags')->references('id') ;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tags');
    }
};
