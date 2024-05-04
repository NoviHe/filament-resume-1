<?php

use App\Models\MenuNavbar;
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
        Schema::create('menu_navbars', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('name');
            $table->string('icon');
            $table->string('slug');
            $table->integer('ordered');
            $table->boolean('visibility')->default(false);
            $table->boolean('visibility_section')->default(false);
            $table->timestamps();
        });

        MenuNavbar::create([
            'key' => '_home',
            'name' => 'Home',
            'icon' => 'bx bx-home',
            'slug' => '#hero',
            'ordered' => 1,
            'visibility' => true,
            'visibility_section' => true,
        ]);

        MenuNavbar::create([
            'key' => '_about',
            'name' => 'About',
            'icon' => 'bx bx-user',
            'slug' => '#about',
            'ordered' => 2,
            'visibility' => true,
            'visibility_section' => true,
        ]);

        MenuNavbar::create([
            'key' => '_skill',
            'name' => 'Skill',
            'icon' => 'bx bx-user',
            'slug' => '#skill',
            'ordered' => 3,
            'visibility' => false,
            'visibility_section' => true,
        ]);

        MenuNavbar::create([
            'key' => '_resume',
            'name' => 'Resume',
            'icon' => 'bx bx-file-blank',
            'slug' => '#resume',
            'ordered' => 4,
            'visibility' => true,
            'visibility_section' => true,
        ]);

        MenuNavbar::create([
            'key' => '_portfolio',
            'name' => 'Portfolio',
            'icon' => 'bx bx-book-content',
            'slug' => '#portfolio',
            'ordered' => 5,
            'visibility' => true,
            'visibility_section' => true,
        ]);

        MenuNavbar::create([
            'key' => '_services',
            'name' => 'Services',
            'icon' => 'bx bx-server',
            'slug' => '#services',
            'ordered' => 6,
            'visibility' => true,
            'visibility_section' => true,
        ]);

        MenuNavbar::create([
            'key' => '_contact',
            'name' => 'Contact',
            'icon' => 'bx bx-envelope',
            'slug' => '#contact',
            'ordered' => 7,
            'visibility' => true,
            'visibility_section' => true,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_navbars');
    }
};
