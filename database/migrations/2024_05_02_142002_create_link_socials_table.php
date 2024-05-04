<?php

use App\Models\LinkSocial;
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
        Schema::create('link_socials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon');
            $table->string('link');
            $table->timestamps();
        });

        LinkSocial::create([
            'name' => 'Github',
            'icon' => 'bx bxl-github',
            'link' => 'https://github.com/NoviHe/',
        ]);

        LinkSocial::create([
            'name' => 'Facebook',
            'icon' => 'bx bxl-facebook',
            'link' => 'https://www.facebook.com/herlambang.kun.3/',
        ]);

        LinkSocial::create([
            'name' => 'Instagram',
            'icon' => 'bx bxl-instagram',
            'link' => 'https://www.instagram.com/herlambang.saja/',
        ]);

        LinkSocial::create([
            'name' => 'Youtube',
            'icon' => 'bx bxl-youtube',
            'link' => 'https://www.youtube.com/@nobicode',
        ]);

        LinkSocial::create([
            'name' => 'Linked In',
            'icon' => 'bx bxl-linkedin',
            'link' => 'https://www.linkedin.com/in/novi-herlambang/',
        ]);

        LinkSocial::create([
            'name' => 'Whatsapp',
            'icon' => 'bx bxl-whatsapp',
            'link' => 'https://wa.me/6282217352703',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('link_socials');
    }
};
