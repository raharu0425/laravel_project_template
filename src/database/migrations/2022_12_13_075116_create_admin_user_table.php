<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_user', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment("管理者名");
            $table->string('email')->unique()->comment("メールアドレス");
            $table->string('password')->comment("パスワード");
            $table->string('role')->default("member")->comment("権限 guest member admin");
            $table->datetime('created_at')->comment("作成日時");
            $table->datetime('updated_at')->comment("更新日時");
            $table->datetime('deleted_at')->comment("削除日時")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_user');
    }
};
