<?php namespace Mangoo\Ui\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMangooUi extends Migration
{
    public function up()
    {
        Schema::create('mangoo_ui_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mangoo_ui_');
    }
}
