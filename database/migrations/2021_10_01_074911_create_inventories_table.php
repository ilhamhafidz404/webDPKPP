<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up() {
    Schema::create('inventories', function (Blueprint $table) {
      $table->id();
      $table->string('daerah');
      $table->string('pengembang');
      $table->string('perumahan');
      $table->string('asset');
      $table->string('luas');
      $table->string('perolehan')->default('-');
        $table->string('permasalahan');
        $table->string('progres');
        $table->timestamps();
      });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down() {
      Schema::dropIfExists('inventories');
    }
  }