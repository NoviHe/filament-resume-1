<?php

use App\Models\Setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        Setting::create([
            'key' => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'Novi Herlambang',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_site_skill',
            'label' => 'Bidang Keahlian',
            'value' => 'Full Stack Developer',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_site_description',
            'label' => 'Deskripsi Situs',
            'value' => 'Saya adalah seorang Full Stack Developer Lulusan SMKN 1 PADAHERANG Jurusan Rekayasa Perangkat Lunak (Software Engineering). Saya lahir di Ciamis, pada Tanggal 26 September 2001.',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_email',
            'label' => 'Email',
            'value' => 'noovv9@gmail.com',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_phone',
            'label' => 'Nomor Telepon',
            'value' => '+62 822 1735 2703',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_location',
            'label' => 'Lokasi',
            'value' => 'Pangandaran, Jawa Barat, Indonesia',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_github',
            'label' => 'Github',
            'value' => 'https://github.com/NoviHe/',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_facebook',
            'label' => 'Facebook',
            'value' => 'https://www.facebook.com/herlambang.kun.3/',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://www.instagram.com/herlambang.saja/',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_youtube',
            'label' => 'Youtube',
            'value' => 'https://www.youtube.com/@nobicode',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_linkedin',
            'label' => 'Linked In',
            'value' => 'https://www.linkedin.com/in/novi-herlambang/',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_whatsapp',
            'label' => 'Whatsapp',
            'value' => 'https://wa.me/6282217352703',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_theme_landing',
            'label' => 'Theme Landing',
            'value' => 'MyResume',
            'type' => 'select',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
