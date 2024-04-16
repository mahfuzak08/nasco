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
        if(! Schema::hasColumns('pages', ['status', 'authorize_by'])) {
            Schema::table('pages', function (Blueprint $table) {
                $table->string('status')->default('draft');
                $table->unsignedBigInteger('authorize_by');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if(Schema::hasColumns('pages', ['status', 'authorize_by'])) {
            Schema::table('pages', function (Blueprint $table) {
                $table->dropColumn('status');
                $table->dropColumn('authorize_by');
            });
        }
    }
};
