<?php

use App\Models\Office;
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
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index();
            $table->string('title');
            $table->text('description');
            $table->decimal('lat','11','8');
            $table->decimal('lng','11','8');
            $table->text('address_line1');
            $table->text('address_line2')->nullable();
            $table->tinyInteger('approval_status')->default(Office::APPROVAL_PENDING);
            $table->boolean('hidden')->default(false);
            $table->integer('daily_price')->default(1);
            $table->integer('monthly_discount')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('offices_tags', function (Blueprint $table){
            $table->foreignId('office_id')->index();
            $table->foreignId('tag_id')->index();
            $table->unique(['office_id','tag_id']);
        });

        Office::factory()->count(3)->create();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offices');
    }
};
