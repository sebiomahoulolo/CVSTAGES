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
        Schema::table('cv_downloads', function (Blueprint $table) {
            $table->boolean('is_paid')->default(false)->after('dernier_telechargement');
            $table->string('payment_reference')->nullable()->after('is_paid');
            $table->string('payment_status')->nullable()->after('payment_reference');
            $table->string('payment_method')->nullable()->after('payment_status');
            $table->decimal('payment_amount', 10, 2)->nullable()->after('payment_method');
            $table->timestamp('payment_date')->nullable()->after('payment_amount');
            // Pour FredaPay, tu pourras stocker d'autres infos si besoin (transaction_id, etc.)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cv_downloads', function (Blueprint $table) {
            $table->dropColumn([
                'is_paid',
                'payment_reference',
                'payment_status',
                'payment_method',
                'payment_amount',
                'payment_date',
            ]);
        });
    }
};
