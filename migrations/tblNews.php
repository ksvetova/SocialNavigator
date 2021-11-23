<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create_tblNews extends Migration
{
    /**
     * Запустить миграцию.
     *
     * @return void
     */
    public function up()
    {
		/**
		 * Таблица: tblNews - таблица новостей
		 * Атрибуты:
		 * 
		 *id_news (PK) - идентификатор новости
		 *news_title - заголовок новости
		 *news_text - текст новости
		 *news_added_files - прикреплённые файлы (картинки, текстовые документы, аудио-файлы)
		 *news_links - ссылки на дополнительную информацию по новости
		 *news_status - статус новости (размещена ли она на сайте в ленте новостей (1) или нет (0))
		 *news_date_of_creation - дата создания новости
		 *
		 */
        Schema::create('tblNews', function (Blueprint $table) {
            $table->increments('id_news')->autoIncrement();
            $table->string('news_title');
			$table->text('news_text');
			$table->string('news_added_files')->nullable($value = true);
			$table->string('news_links')->nullable($value = true);
			$table->boolean('news_status');
			$table->dateTime('news_date_of_creation');

            $table->timestamps();
        });
    }
}
?>
