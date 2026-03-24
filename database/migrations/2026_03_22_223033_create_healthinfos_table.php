<?php

use App\Models\Category;
use App\Models\Lga;
use App\Models\Relationship;
use App\Models\State;
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
        Schema::create('healthinfos', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 100);
            $table->string('othername', 100)->nullable();
            $table->string('surname', 100);
            $table->foreignId('gender_id')->nullable()->constrained('genders')->onDelete('cascade');
            $table->date('dob')->nullable();

            $table->string('phonenumber', 20)->nullable();
            $table->string('email', 255)->unique()->nullable();
            $table->string('address', 255)->nullable();
            $table->foreignIdFor(Category::class)->nullable()->constrained()->onDelete('cascade');
            $table->foreignIdFor(State::class)->nullable()->constrained()->onDelete('cascade');
            $table->foreignIdFor(Lga::class)->nullable()->constrained()->onDelete('cascade');
            $table->string('insurance_id', 100)->unique()->nullable();
            $table->string('hospital_no', 254)->unique()->nullable();

            // next of kin details
            $table->string('nok_fullname', 200)->nullable();
            $table->string('nok_phonenumber', 20)->nullable();
            $table->string('nok_address', 255)->nullable();
            $table->foreignIdFor(Relationship::class)->nullable()->constrained()->onDelete('cascade');
            // $table->enum('nok_relationship', ['Father','Mother','Brother','Sister','Spouse', 'Child', 'Parent', 'Sibling', 'Other'])->nullable();
           
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('healthinfos');
    }
};
