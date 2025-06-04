<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Laravel</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f8f1ee] text-black"> <!-- Creamy pink background -->

  <!-- HEADER -->
  <header class="fixed top-0 left-0 right-0 z-50 bg-[#FFDCDC] bg-opacity-90 text-black shadow">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <div class="text-[#945034] font-bold text-xl">APKELMEY</div>
      <nav class="flex items-center gap-4 text-sm">
        <a href="#home" class="hover:text-[#c75e5e]">Home</a>
        <a href="/login" class="hover:text-[#c75e5e]">Login</a>
            <a href="#contact" class="hover:text-[#c75e5e]">Contact</a>
        <a href="/register" class="hover:text-[#c75e5e]">Register</a>
      </nav>
    </div>
  </header>

  <!-- HERO -->
 <section id="home" class="h-screen bg-[#FFF2EB] flex items-center justify-center relative">
  

  <div class="z-10 text-center px-4">
    <h1 class="text-4xl md:text-5xl font-bold mb-4 text-black">Aplikasi PKL Meylani</h1>
    <p class="text-black text-lg max-w-xl mx-auto">Bersama platform ini, atur jadwal, pantau progres, dan nikmati pengalaman PKL yang lebih terarah dan seru. Yuk mulai!</p>
  </div>
</section>




  <!-- CONTACT -->
 <section id="contact" class="py-24 bg-[#FFDCDC] text-black text-center">
    <h2 class="text-3xl font-bold mb-4">Contact Person</h2>
    <p class="text-gray-800 mb-6 max-w-lg mx-auto">
      Kami siap membantu! Untuk pertanyaan seputar program PKL, jangan ragu menghubungi kami melalui kontak atau media sosial.
    </p>

    <div class="flex justify-center gap-6 mb-6">
      <!-- Instagram -->
      <!-- Instagram -->
<a href="https://www.instagram.com/meyyln._/" target="_blank" class="flex items-center gap-2 bg-[#F79B72] hover:bg-[#E55050] px-4 py-2 rounded-md text-white">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
    <path d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm0 1.5A4.25 4.25 0 003.5 7.75v8.5A4.25 4.25 0 007.75 20.5h8.5a4.25 4.25 0 004.25-4.25v-8.5A4.25 4.25 0 0016.25 3.5h-8.5zM12 7a5 5 0 110 10 5 5 0 010-10zm0 1.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zm5.25-.88a.88.88 0 110 1.75.88.88 0 010-1.75z"/>
  </svg>
Instagram
</a>

      </a>

      <!-- WhatsApp -->
      <a href="https://wa.me/6289630731281" target="_blank" class="flex items-center gap-2  bg-[#075B5E] hover:bg-[#E55050] px-4 py-2 rounded-md text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 32 32">
          <path d="M16.003 2.003A13.948 13.948 0 002.05 16.122c0 2.474.64 4.892 1.85 7.035l-1.954 5.79 5.964-1.938a13.916 13.916 0 007.093 1.825h.002a13.949 13.949 0 0013.948-13.948 13.949 13.949 0 00-13.948-13.883zm0 25.67a11.675 11.675 0 01-6.002-1.672l-.43-.26-3.537 1.151 1.16-3.414-.279-.44a11.653 11.653 0 011.935-14.418 11.64 11.64 0 0116.49.77 11.63 11.63 0 01-9.337 18.283zm6.472-8.504c-.352-.176-2.086-1.027-2.408-1.142-.322-.117-.556-.176-.79.176-.233.351-.91 1.141-1.116 1.373-.205.233-.41.263-.762.088-.352-.176-1.484-.546-2.825-1.742-1.043-.93-1.747-2.078-1.952-2.43-.205-.351-.021-.54.154-.716.158-.158.352-.41.528-.616.176-.205.234-.351.352-.586.117-.234.058-.439-.03-.615-.088-.176-.79-1.91-1.084-2.616-.285-.684-.577-.592-.79-.602-.205-.01-.439-.012-.673-.012-.234 0-.615.087-.937.439-.322.351-1.23 1.201-1.23 2.928s1.26 3.395 1.435 3.63c.176.234 2.476 3.793 5.995 5.318.838.36 1.491.575 2 .735.84.268 1.602.23 2.205.14.672-.1 2.086-.85 2.38-1.67.293-.82.293-1.524.205-1.67-.087-.146-.322-.234-.673-.41z"/>
        </svg>
        WhatsApp
      </a>

      <!-- Telegram -->
<a href="https://t.me/+6289630731281" target="_blank" class="flex items-center gap-2 w-40 justify-center bg-[#254D70] hover:bg-[#1e3e5b] px-4 py-2 rounded-md text-white">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
    <path d="M12 0C5.371 0 0 5.372 0 12c0 6.627 5.371 12 12 12s12-5.373 12-12c0-6.628-5.371-12-12-12zm5.671 8.23l-1.833 8.645c-.138.63-.503.784-1.018.488l-2.814-2.077-1.357 1.304c-.15.15-.276.276-.564.276l.202-2.89 5.26-4.756c.229-.202-.05-.315-.356-.113l-6.504 4.092-2.801-.875c-.609-.189-.622-.609.127-.9l10.953-4.22c.505-.189.947.113.786.899z"/>
  </svg>
  Telegram
</a>
    </div>


    <p class="text-sm text-gray-600">&copy; 2025 Aplikasi PKL- SMK Sistem Informasi Jaringan dan Aplikasi</p>
  </section>

</body>
</html>
