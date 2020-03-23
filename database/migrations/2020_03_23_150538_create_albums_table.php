<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
				Schema::create('albums', function (Blueprint $table) {
						$table->id();
						$table->char('album', 100);
						$table->char('artist', 100);
						$table->tinyInteger('tracks');
						$table->char('genre', 100);
						$table->year('released');
						$table->char('cover', 100);
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
				Schema::dropIfExists('albums');
		}
}
