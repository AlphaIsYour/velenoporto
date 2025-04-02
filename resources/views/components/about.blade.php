<section class="about">
    <div class="min-h-screen bg-gradient-to-br from-blue-900 via-gray-900 to-white-700 p-8 rounded-2xl">
      <div class="max-w-7xl mx-auto">
          <!-- Main Content Container with Glass Effect -->
          <div class="backdrop-blur-lg bg-white/10 rounded-3xl p-8 shadow-2xl">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 mb-12" data-aos="fade-down" data-aos-offset="200" data-aos-easing="ease-in-sine">
                   <!-- Profile Image Section -->
                   <div class="lg:col-span-3 flex flex-col items-center" 
                   data-aos="fade-right"
                   data-aos-offset="200"
                   data-aos-anchor-placement="top-bottom">
                      <div class="relative">
                          <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-300 to-white rounded-full blur opacity-75"></div>
                          <div class="relative w-48 h-48 rounded-full overflow-hidden border-4 border-white/20">
                              <img src="{{ asset("profile/pf.jpg") }}" alt="Profile" class="w-full h-full object-cover">
                          </div>
                      </div>
                  </div>

                  <!-- Info Section -->
                  <div class="lg:col-span-9" data-aos="fade-left"data-aos-offset="200" data-aos-anchor-placement="center-bottom">
                      <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10">
                          <h1 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-white mb-2">
                              Alphareno Yanuar Syaputra
                          </h1>
                          <p class="text-xl text-blue-100 mb-6">Mahasiswa D3 Teknologi Informasi | Web Developer | AI Enthusiast</p>
                          
                          <!-- Contact Grid -->
                          <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                              <div class="flex items-center gap-3 bg-white/5 rounded-xl p-3 hover:bg-white/10 transition-all" data-aos="zoom-in" data-aos-delay="200">
                                  <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                  </svg>
                                  <span class="text-blue-100">alphrenoorz@gmail.com</span>
                              </div>
                              <div class="flex items-center gap-3 bg-white/5 rounded-xl p-3 hover:bg-white/10 transition-all" data-aos="zoom-in" data-aos-delay="200">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <span class="text-blue-100">+62 8214 3476 748</span>
                            </div>
                            <div class="flex items-center gap-3 bg-white/5 rounded-xl p-3 hover:bg-white/10 transition-all" data-aos="zoom-in" data-aos-delay="200">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                </svg>
                                <span class="text-blue-100">Jakarta, Indonesia.</span>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Skills Section -->
              <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
                  <!-- Technical Skills -->
                  <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10" 
       data-aos="fade-up"
       data-aos-anchor-placement="bottom-bottom">
                      <h2 class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-white mb-6">
                          Technical Skills
                      </h2>
                      <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                          <!-- Programming Languages dengan animasi yang berbeda -->
                          <div class="flex flex-col items-center p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-all group" data-aos="zoom-in" data-aos-delay="200">
                              <img src="{{ asset("pmrg/html.png") }}" alt="Java" class="w-12 h-12 mb-2 group-hover:scale-110 transition-transform">
                              <span class="text-blue-100">HTML</span>
                          </div>
                          <div class="flex flex-col items-center p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-all group" data-aos="zoom-in" data-aos-delay="200">
                              <img src="{{ asset("pmrg/css.png") }}" alt="Java" class="w-12 h-12 mb-2 group-hover:scale-110 transition-transform">
                              <span class="text-blue-100">CSS</span>
                          </div>
                          <div class="flex flex-col items-center p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-all group" data-aos="zoom-in" data-aos-delay="200">
                              <img src="{{ asset("pmrg/js.png") }}" alt="Java" class="w-12 h-12 mb-2 group-hover:scale-110 transition-transform">
                              <span class="text-blue-100">Java</span>
                          </div>
                          <div class="flex flex-col items-center p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-all group" data-aos="zoom-in" data-aos-delay="200">
                              <img src="{{ asset("pmrg/php.png") }}" alt="Java" class="w-12 h-12 mb-2 group-hover:scale-110 transition-transform">
                              <span class="text-blue-100">PHP</span>
                          </div>
                          <div class="flex flex-col items-center p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-all group" data-aos="zoom-in" data-aos-delay="200">
                              <img src="{{ asset("pmrg/python.png") }}" alt="Java" class="w-12 h-12 mb-2 group-hover:scale-110 transition-transform">
                              <span class="text-blue-100">Python</span>
                          </div>
                          <div class="flex flex-col items-center p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-all group" data-aos="zoom-in" data-aos-delay="200">
                              <img src="{{ asset("pmrg/java.png") }}" alt="Java" class="w-12 h-12 mb-2 group-hover:scale-110 transition-transform">
                              <span class="text-blue-100">Java</span>
                          </div>
                          <!-- ... skill items lainnya dengan delay berbeda ... -->
                      </div>
                  </div>

                  <!-- Frameworks dengan animasi yang berbeda -->
                  <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10" 
       data-aos="fade-up"
       data-aos-anchor-placement="bottom-bottom"
       data-aos-delay="200">
                      <h2 class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-white mb-6">
                          Frameworks & Tools
                      </h2>
                      <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                          <!-- Framework items dengan animasi -->
                          <div class="flex flex-col items-center p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-all group" data-aos="zoom-in" data-aos-delay="200">
                              <img src="{{ asset('pmrg/laravel.png') }}" alt="Laravel" class="w-12 h-12 mb-2 group-hover:scale-110 transition-transform">
                              <span class="text-blue-100">Laravel</span>
                          </div>
                          <div class="flex flex-col items-center p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-all group" data-aos="zoom-in" data-aos-delay="200">
                              <img src="{{ asset('pmrg/react.svg') }}" alt="Laravel" class="w-12 h-12 mb-2 group-hover:scale-110 transition-transform">
                              <span class="text-blue-100">React</span>
                          </div>
                          <div class="flex flex-col items-center p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-all group" data-aos="zoom-in" data-aos-delay="200">
                              <img src="{{ asset('pmrg/tailwind.jpg') }}" alt="Laravel" class="w-12 h-12 mb-2 group-hover:scale-110 transition-transform">
                              <span class="text-blue-100">Tailwind</span>
                          </div>
                          <!-- ... framework items lainnya ... -->
                      </div>
                  </div>
              </div>

              <!-- Education & Profile -->
              <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                  <!-- Education -->
                  <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10" data-aos="fade-up" data-aos-duration="400">
                      <h2 class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-white mb-6">
                          Pendidikan
                      </h2>
                      <div class="bg-white/5 rounded-xl p-4" data-aos="zoom-in" data-aos-delay="500">
                          <h3 class="text-xl font-semibold text-blue-100">D3 Teknologi Informasi</h3>
                          <p class="text-blue-200">Universitas Brawijaya, Fakultas Vokasi</p>
                          <p class="text-blue-300">2023 - Sekarang</p>
                      </div>
                  </div>

                  <!-- Languages -->
                  <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10" data-aos="fade-up" data-aos-duration="400" data-aos-delay="200">
                      <h2 class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-white mb-6">
                          Bahasa
                      </h2>
                      <div class="grid grid-cols-2 gap-4">
                          <div class="bg-white/5 rounded-xl p-4 flex items-center gap-4" data-aos="zoom-in" data-aos-delay="500">
                              <img src="{{ asset('pmrg/indo.png') }}" alt="Indonesia" class="w-10 h-10 rounded-full">
                              <div>
                                  <p class="text-blue-100 font-medium">Indonesia</p>
                                  <p class="text-blue-300">Native</p>
                              </div>
                          </div>
                          <div class="bg-white/5 rounded-xl p-4 flex items-center gap-4" data-aos="zoom-in" data-aos-delay="500">
                              <img src="{{ asset('pmrg/eng.png') }}" alt="Indonesia" class="w-10 h-10 rounded-full">
                              <div>
                                  <p class="text-blue-100 font-medium">English</p>
                                  <p class="text-blue-300">Native</p>
                              </div>
                          </div>
                          <!-- ... language items lainnya ... -->
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </div>
  </section>