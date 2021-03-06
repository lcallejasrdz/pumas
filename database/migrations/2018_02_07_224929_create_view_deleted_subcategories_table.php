<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewDeletedSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE VIEW view_deleted_subcategories AS
            (
                SELECT
                    subcategories.id,
                    categories.name as category_id,
                    subcategories.name,
                    subcategories.created_at

                FROM `subcategories`
                    JOIN categories ON categories.id = subcategories.category_id

                WHERE subcategories.deleted_at IS NOT NULL
            )
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS view_deleted_subcategories');
    }
}
