@extends('layouts.app')

@section('content')
    <!-- Navbar -->
    <nav class="fixed w-full z-50 bg-black/80 backdrop-blur-sm border-b border-purple-500/20">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <a href="/" class="text-2xl font-bold text-white">Dev<span class="text-purple-500">Nexus</span></a>
                <div class="flex items-center space-x-6">
                    <a href="#fitur" class="text-gray-300 hover:text-purple-500 transition-colors">Fitur</a>
                    <a href="#komunitas" class="text-gray-300 hover:text-purple-500 transition-colors">Komunitas</a>
                    <a href="#event" class="text-gray-300 hover:text-purple-500 transition-colors">Event</a>
                    <a href="#blog" class="text-gray-300 hover:text-purple-500 transition-colors">Blog</a>
                    <a href="/auth/google" class="btn-primary">Login dengan Google</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&q=80&w=1920&h=1080&fit=crop" 
                 alt="Background" 
                 class="w-full h-full object-cover opacity-20"
                 width="1920" 
                 height="1080"
                 fetchpriority="high">
        </div>
        <div class="container mx-auto px-4 py-20">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                    Tempat Nongkrongnya Para
                    <span class="bg-gradient-to-r from-purple-500 to-purple-400 bg-clip-text text-transparent">
                        Developer Visioner
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-400 mb-12 leading-relaxed">
                    Bergabung dengan ribuan developer Indonesia untuk berbagi pengetahuan, 
                    pengalaman, dan membangun koneksi yang berharga.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="/auth/google" class="btn-primary text-lg px-8">
                        Gabung Sekarang
                    </a>
                    <a href="#fitur" class="text-gray-400 hover:text-purple-500 transition-colors flex items-center gap-2">
                        <span>Pelajari Lebih Lanjut</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-black/70">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl font-bold text-purple-500 mb-2">10K+</div>
                    <div class="text-gray-400">Developer Aktif</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-purple-500 mb-2">50K+</div>
                    <div class="text-gray-400">Thread Diskusi</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-purple-500 mb-2">100+</div>
                    <div class="text-gray-400">Event Terlaksana</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-purple-500 mb-2">30+</div>
                    <div class="text-gray-400">Perusahaan Partner</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="fitur" class="py-20 bg-black/50">
        <div class="container mx-auto px-4">
            <h2 class="section-title text-center">Fitur Unggulan</h2>
            <div class="grid md:grid-cols-3 gap-8 mt-12">
                <div class="feature-card hover:-translate-y-2 transition-all duration-300">
                    <div class="text-purple-500 text-4xl mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Thread & Diskusi</h3>
                    <p class="text-gray-400">Buat dan balas thread dengan mudah. Dukung markdown untuk formatting yang lebih baik.</p>
                </div>

                <div class="feature-card hover:-translate-y-2 transition-all duration-300">
                    <div class="text-purple-500 text-4xl mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Sistem Voting</h3>
                    <p class="text-gray-400">Vote konten berkualitas dan bantu komunitas menemukan solusi terbaik.</p>
                </div>

                <div class="feature-card hover:-translate-y-2 transition-all duration-300">
                    <div class="text-purple-500 text-4xl mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Code Highlighting</h3>
                    <p class="text-gray-400">Bagikan kode dengan syntax highlighting yang mendukung berbagai bahasa pemrograman.</p>
                </div>
            </div>
            <div class="container mx-auto px-4 mt-16">
                <h3 class="text-3xl font-bold mb-6 text-center">Teknologi yang Didukung</h3>
                <div class="max-w-4xl mx-auto">
                    <div class="grid grid-cols-3 md:grid-cols-6 gap-4">
                        <div class="bg-purple-500/10 p-4 rounded-lg text-center hover:bg-purple-500/20 transition-all">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" 
                                 alt="JavaScript" 
                                 class="w-16 h-16 mx-auto mb-2"
                                 width="64" 
                                 height="64"
                                 loading="lazy">
                            <span class="text-sm text-gray-400">JavaScript</span>
                        </div>
                        <div class="bg-purple-500/10 p-4 rounded-lg text-center hover:bg-purple-500/20 transition-all">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" 
                                 alt="Python" 
                                 class="w-16 h-16 mx-auto mb-2"
                                 width="64" 
                                 height="64"
                                 loading="lazy">
                            <span class="text-sm text-gray-400">Python</span>
                        </div>
                        <div class="bg-purple-500/10 p-4 rounded-lg text-center hover:bg-purple-500/20 transition-all">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" 
                                 alt="Java" 
                                 class="w-16 h-16 mx-auto mb-2"
                                 width="64" 
                                 height="64"
                                 loading="lazy">
                            <span class="text-sm text-gray-400">Java</span>
                        </div>
                        <div class="bg-purple-500/10 p-4 rounded-lg text-center hover:bg-purple-500/20 transition-all">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" 
                                 alt="PHP" 
                                 class="w-16 h-16 mx-auto mb-2"
                                 width="64" 
                                 height="64"
                                 loading="lazy">
                            <span class="text-sm text-gray-400">PHP</span>
                        </div>
                        <div class="bg-purple-500/10 p-4 rounded-lg text-center hover:bg-purple-500/20 transition-all">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/go/go-original.svg" 
                                 alt="Go" 
                                 class="w-16 h-16 mx-auto mb-2"
                                 width="64" 
                                 height="64"
                                 loading="lazy">
                            <span class="text-sm text-gray-400">Go</span>
                        </div>
                        <div class="bg-purple-500/10 p-4 rounded-lg text-center hover:bg-purple-500/20 transition-all">
                            <img src="https://www.rust-lang.org/logos/rust-logo-512x512.png" 
                                 alt="Rust" 
                                 class="w-16 h-16 mx-auto mb-2"
                                 width="64" 
                                 height="64"
                                 loading="lazy">
                            <span class="text-sm text-gray-400">Rust</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Section -->
    <section id="komunitas" class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <h2 class="section-title text-center">Bergabung dengan Komunitas</h2>
                <p class="text-xl text-gray-400 mb-12 text-center">
                    Temukan developer lain yang memiliki minat yang sama, berbagi pengalaman,
                    dan tumbuh bersama dalam komunitas yang supportif.
                </p>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-gradient-to-br from-purple-500/20 to-purple-900/20 p-8 rounded-2xl border border-purple-500/20 hover:border-purple-500/40 transition-all duration-300 hover:shadow-lg hover:shadow-purple-500/10">
                        <h3 class="text-2xl font-semibold mb-6">Untuk Developer</h3>
                        <ul class="text-gray-400 space-y-4">
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-purple-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Akses ke komunitas developer berpengalaman</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-purple-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Diskusi teknis yang mendalam</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-purple-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Kesempatan networking</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-purple-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Akses ke resources premium</span>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-gradient-to-br from-purple-500/20 to-purple-900/20 p-8 rounded-2xl border border-purple-500/20 hover:border-purple-500/40 transition-all duration-300 hover:shadow-lg hover:shadow-purple-500/10">
                        <h3 class="text-2xl font-semibold mb-6">Untuk Tim</h3>
                        <ul class="text-gray-400 space-y-4">
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-purple-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Rekrut talent berkualitas</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-purple-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Branding perusahaan</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-purple-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Kolaborasi project</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-purple-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Akses ke talent pool</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Section -->
    <section id="event" class="py-20 bg-black/50">
        <div class="container mx-auto px-4">
            <h2 class="section-title text-center mb-12">Event Mendatang</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-purple-500/10 to-purple-900/10 rounded-xl overflow-hidden hover:-translate-y-2 transition-all duration-300">
                    <div class="h-48 bg-purple-500/20">
                        <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&q=80&w=400&h=192&fit=crop" 
                             alt="Workshop" 
                             class="w-full h-full object-cover"
                             width="400" 
                             height="192"
                             loading="lazy">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-purple-500 text-sm mb-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span>25 Maret 2024</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Workshop React & Next.js</h3>
                        <p class="text-gray-400 mb-4">Belajar membangun aplikasi modern dengan React dan Next.js bersama expert.</p>
                        <a href="#" class="text-purple-500 hover:text-purple-400 transition-colors inline-flex items-center gap-2">
                            Daftar Sekarang
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-purple-500/10 to-purple-900/10 rounded-xl overflow-hidden hover:-translate-y-2 transition-all duration-300">
                    <div class="h-48 bg-purple-500/20">
                        <img src="https://images.unsplash.com/photo-1591115765373-5207764f72e7?auto=format&q=80&w=400&h=192&fit=crop" 
                             alt="Meetup" 
                             class="w-full h-full object-cover"
                             width="400" 
                             height="192"
                             loading="lazy">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-purple-500 text-sm mb-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span>1 April 2024</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">DevNexus Meetup #12</h3>
                        <p class="text-gray-400 mb-4">Networking dan sharing session bersama komunitas developer Jakarta.</p>
                        <a href="#" class="text-purple-500 hover:text-purple-400 transition-colors inline-flex items-center gap-2">
                            Daftar Sekarang
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-purple-500/10 to-purple-900/10 rounded-xl overflow-hidden hover:-translate-y-2 transition-all duration-300">
                    <div class="h-48 bg-purple-500/20">
                        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&q=80&w=400&h=192&fit=crop" 
                             alt="Hackathon" 
                             class="w-full h-full object-cover"
                             width="400" 
                             height="192"
                             loading="lazy">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-purple-500 text-sm mb-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span>15 April 2024</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Hackathon: AI Innovation</h3>
                        <p class="text-gray-400 mb-4">Kompetisi development dengan fokus pada implementasi AI dalam produk.</p>
                        <a href="#" class="text-purple-500 hover:text-purple-400 transition-colors inline-flex items-center gap-2">
                            Daftar Sekarang
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="section-title text-center mb-12">Apa Kata Mereka</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-purple-500/10 to-purple-900/10 p-6 rounded-xl">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&q=80&w=40&h=40&fit=crop" 
                             alt="User" 
                             class="w-12 h-12 rounded-full object-cover"
                             width="40" 
                             height="40"
                             loading="lazy">
                        <div>
                            <h4 class="font-semibold">Rudi Setiawan</h4>
                            <p class="text-sm text-gray-400">Senior Developer di TechCorp</p>
                        </div>
                    </div>
                    <p class="text-gray-400">"DevNexus membantu saya terhubung dengan developer lain dan mendapatkan insight berharga untuk project-project saya."</p>
                </div>

                <div class="bg-gradient-to-br from-purple-500/10 to-purple-900/10 p-6 rounded-xl">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&q=80&w=40&h=40&fit=crop" 
                             alt="User" 
                             class="w-12 h-12 rounded-full object-cover"
                             width="40" 
                             height="40"
                             loading="lazy">
                        <div>
                            <h4 class="font-semibold">Diana Putri</h4>
                            <p class="text-sm text-gray-400">Frontend Developer di StartupX</p>
                        </div>
                    </div>
                    <p class="text-gray-400">"Forum ini sangat membantu dalam pengembangan karir saya. Banyak kesempatan networking yang terbuka."</p>
                </div>

                <div class="bg-gradient-to-br from-purple-500/10 to-purple-900/10 p-6 rounded-xl">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&q=80&w=40&h=40&fit=crop" 
                             alt="User" 
                             class="w-12 h-12 rounded-full object-cover"
                             width="40" 
                             height="40"
                             loading="lazy">
                        <div>
                            <h4 class="font-semibold">Budi Santoso</h4>
                            <p class="text-sm text-gray-400">CTO di InnovateLabs</p>
                        </div>
                    </div>
                    <p class="text-gray-400">"Kami menemukan banyak talent berkualitas melalui DevNexus. Platform yang sangat membantu untuk recruitment."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="py-20 bg-black/50">
        <div class="container mx-auto px-4">
            <h2 class="section-title text-center mb-12">Blog & Tutorial Terbaru</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <article class="bg-gradient-to-br from-purple-500/10 to-purple-900/10 rounded-xl overflow-hidden hover:-translate-y-2 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1592424002053-21f369ad7fdb?auto=format&q=80&w=400&h=192&fit=crop" 
                         alt="Laravel Tutorial" 
                         class="w-full h-48 object-cover"
                         width="400" 
                         height="192"
                         loading="lazy">
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-purple-500 text-sm mb-3">
                            <span>Tutorial</span>
                            <span>•</span>
                            <span>5 menit baca</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Memulai dengan Laravel 10 dan Livewire 3</h3>
                        <p class="text-gray-400 mb-4">Pelajari cara membuat aplikasi real-time dengan Laravel 10 dan Livewire 3.</p>
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&q=80&w=40&h=40&fit=crop" 
                                 alt="Author" 
                                 class="w-10 h-10 rounded-full object-cover"
                                 width="40" 
                                 height="40"
                                 loading="lazy">
                            <div>
                                <p class="font-medium">Ahmad Santoso</p>
                                <p class="text-sm text-gray-400">20 Maret 2024</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="bg-gradient-to-br from-purple-500/10 to-purple-900/10 rounded-xl overflow-hidden hover:-translate-y-2 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&q=80&w=400&h=192&fit=crop" 
                         alt="VS Code Tips" 
                         class="w-full h-48 object-cover"
                         width="400" 
                         height="192"
                         loading="lazy">
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-purple-500 text-sm mb-3">
                            <span>Tips</span>
                            <span>•</span>
                            <span>3 menit baca</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">10 Extension VS Code untuk PHP Developer</h3>
                        <p class="text-gray-400 mb-4">Tingkatkan produktivitas coding dengan extension VS Code pilihan.</p>
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&q=80&w=40&h=40&fit=crop" 
                                 alt="Author" 
                                 class="w-10 h-10 rounded-full object-cover"
                                 width="40" 
                                 height="40"
                                 loading="lazy">
                            <div>
                                <p class="font-medium">Budi Prakoso</p>
                                <p class="text-sm text-gray-400">18 Maret 2024</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="bg-gradient-to-br from-purple-500/10 to-purple-900/10 rounded-xl overflow-hidden hover:-translate-y-2 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&q=80&w=400&h=192&fit=crop" 
                         alt="Web Trends" 
                         class="w-full h-48 object-cover"
                         width="400" 
                         height="192"
                         loading="lazy">
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-purple-500 text-sm mb-3">
                            <span>Artikel</span>
                            <span>•</span>
                            <span>7 menit baca</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Tren Web Development 2024</h3>
                        <p class="text-gray-400 mb-4">Eksplorasi tren teknologi web yang akan mendominasi tahun 2024.</p>
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&q=80&w=40&h=40&fit=crop" 
                                 alt="Author" 
                                 class="w-10 h-10 rounded-full object-cover"
                                 width="40" 
                                 height="40"
                                 loading="lazy">
                            <div>
                                <p class="font-medium">Citra Dewi</p>
                                <p class="text-sm text-gray-400">15 Maret 2024</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="bg-gradient-to-br from-purple-500/10 to-purple-900/10 rounded-xl overflow-hidden hover:-translate-y-2 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&q=80&w=400&h=192&fit=crop" 
                         alt="Clean Code" 
                         class="w-full h-48 object-cover"
                         width="400" 
                         height="192"
                         loading="lazy">
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-purple-500 text-sm mb-3">
                            <span>Best Practice</span>
                            <span>•</span>
                            <span>6 menit baca</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Clean Code: Panduan untuk Developer Modern</h3>
                        <p class="text-gray-400 mb-4">Tips dan trik menulis kode yang bersih dan mudah dimaintain.</p>
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&q=80&w=40&h=40&fit=crop" 
                                 alt="Author" 
                                 class="w-10 h-10 rounded-full object-cover"
                                 width="40" 
                                 height="40"
                                 loading="lazy">
                            <div>
                                <p class="font-medium">Dimas Prayoga</p>
                                <p class="text-sm text-gray-400">13 Maret 2024</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="bg-gradient-to-br from-purple-500/10 to-purple-900/10 rounded-xl overflow-hidden hover:-translate-y-2 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&q=80&w=400&h=192&fit=crop" 
                         alt="Security" 
                         class="w-full h-48 object-cover"
                         width="400" 
                         height="192"
                         loading="lazy">
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-purple-500 text-sm mb-3">
                            <span>Keamanan</span>
                            <span>•</span>
                            <span>8 menit baca</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Keamanan Web: Praktik Terbaik 2024</h3>
                        <p class="text-gray-400 mb-4">Panduan lengkap mengamankan aplikasi web modern Anda.</p>
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&q=80&w=40&h=40&fit=crop" 
                                 alt="Author" 
                                 class="w-10 h-10 rounded-full object-cover"
                                 width="40" 
                                 height="40"
                                 loading="lazy">
                            <div>
                                <p class="font-medium">Reza Pratama</p>
                                <p class="text-sm text-gray-400">10 Maret 2024</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="bg-gradient-to-br from-purple-500/10 to-purple-900/10 rounded-xl overflow-hidden hover:-translate-y-2 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1629904853716-f0bc54eea481?auto=format&q=80&w=400&h=192&fit=crop" 
                         alt="Docker" 
                         class="w-full h-48 object-cover"
                         width="400" 
                         height="192"
                         loading="lazy">
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-purple-500 text-sm mb-3">
                            <span>DevOps</span>
                            <span>•</span>
                            <span>10 menit baca</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Docker untuk Pemula: Panduan Lengkap</h3>
                        <p class="text-gray-400 mb-4">Mulai containerization dengan Docker dari dasar hingga mahir.</p>
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&q=80&w=40&h=40&fit=crop" 
                                 alt="Author" 
                                 class="w-10 h-10 rounded-full object-cover"
                                 width="40" 
                                 height="40"
                                 loading="lazy">
                            <div>
                                <p class="font-medium">Fajar Sidik</p>
                                <p class="text-sm text-gray-400">8 Maret 2024</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <div class="text-center mt-12">
                <a href="#" class="btn-primary inline-flex items-center gap-2">
                    Lihat Semua Artikel
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Showcase Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="section-title text-center mb-12">Project Showcase</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-purple-500/10 to-purple-900/10 rounded-xl overflow-hidden hover:-translate-y-2 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?auto=format&q=80&w=400&h=192&fit=crop" 
                         alt="E-Commerce App" 
                         class="w-full h-48 object-cover"
                         width="400" 
                         height="192"
                         loading="lazy">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-3">E-Commerce Platform</h3>
                        <p class="text-gray-400 mb-4">Platform e-commerce modern dengan Laravel dan Vue.js</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-purple-500/20 rounded-full text-purple-400 text-sm">Laravel</span>
                            <span class="px-3 py-1 bg-purple-500/20 rounded-full text-purple-400 text-sm">Vue.js</span>
                            <span class="px-3 py-1 bg-purple-500/20 rounded-full text-purple-400 text-sm">Tailwind</span>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-purple-500/10 to-purple-900/10 rounded-xl overflow-hidden hover:-translate-y-2 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?auto=format&q=80&w=400&h=192&fit=crop" 
                         alt="Learning App" 
                         class="w-full h-48 object-cover"
                         width="400" 
                         height="192"
                         loading="lazy">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-3">Learning Management System</h3>
                        <p class="text-gray-400 mb-4">Platform pembelajaran online dengan fitur video streaming</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-purple-500/20 rounded-full text-purple-400 text-sm">Next.js</span>
                            <span class="px-3 py-1 bg-purple-500/20 rounded-full text-purple-400 text-sm">Node.js</span>
                            <span class="px-3 py-1 bg-purple-500/20 rounded-full text-purple-400 text-sm">MongoDB</span>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-purple-500/10 to-purple-900/10 rounded-xl overflow-hidden hover:-translate-y-2 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&q=80&w=400&h=192&fit=crop" 
                         alt="Analytics Dashboard" 
                         class="w-full h-48 object-cover"
                         width="400" 
                         height="192"
                         loading="lazy">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-3">Analytics Dashboard</h3>
                        <p class="text-gray-400 mb-4">Dashboard analitik real-time dengan visualisasi data</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-purple-500/20 rounded-full text-purple-400 text-sm">React</span>
                            <span class="px-3 py-1 bg-purple-500/20 rounded-full text-purple-400 text-sm">D3.js</span>
                            <span class="px-3 py-1 bg-purple-500/20 rounded-full text-purple-400 text-sm">Firebase</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="section-title mb-6">Dapatkan Update Terbaru</h2>
                <p class="text-gray-400 mb-8">Berlangganan newsletter kami untuk mendapatkan informasi terbaru tentang event, artikel, dan update komunitas.</p>
                <form class="flex flex-col sm:flex-row gap-4 justify-center">
                    <input type="email" placeholder="Masukkan email Anda" class="bg-purple-500/10 border border-purple-500/20 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:outline-none focus:border-purple-500 flex-1 max-w-md">
                    <button type="submit" class="btn-primary whitespace-nowrap">Berlangganan</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black/80 border-t border-purple-500/20 py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-xl font-bold mb-4">DevNexus</h4>
                    <p class="text-gray-400">Forum komunitas developer Indonesia untuk berbagi dan berkembang bersama.</p>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Navigasi</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-purple-500 transition-colors">Beranda</a></li>
                        <li><a href="#fitur" class="hover:text-purple-500 transition-colors">Fitur</a></li>
                        <li><a href="#komunitas" class="hover:text-purple-500 transition-colors">Komunitas</a></li>
                        <li><a href="#event" class="hover:text-purple-500 transition-colors">Event</a></li>
                        <li><a href="#blog" class="hover:text-purple-500 transition-colors">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Komunitas</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-purple-500 transition-colors">Guidelines</a></li>
                        <li><a href="#" class="hover:text-purple-500 transition-colors">FAQ</a></li>
                        <li><a href="#" class="hover:text-purple-500 transition-colors">Kontak</a></li>
                        <li><a href="#" class="hover:text-purple-500 transition-colors">Karir</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Sosial Media</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-purple-500 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-purple-500 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-800 text-center text-gray-400">
                <p>&copy; 2024 DevNexus. All rights reserved.</p>
            </div>
        </div>
    </footer>
@endsection

@push('styles')
<link rel="preload" as="image" href="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&q=80&w=1920&h=1080&fit=crop">
@endpush

@push('scripts')
<script defer>
    // Lazy load images
    document.addEventListener('DOMContentLoaded', function() {
        var lazyImages = [].slice.call(document.querySelectorAll("img[loading='lazy']"));

        if ("IntersectionObserver" in window) {
            let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        let lazyImage = entry.target;
                        lazyImage.src = lazyImage.dataset.src;
                        lazyImage.classList.remove("lazy");
                        lazyImageObserver.unobserve(lazyImage);
                    }
                });
            });

            lazyImages.forEach(function(lazyImage) {
                lazyImageObserver.observe(lazyImage);
            });
        }
    });
</script>
@endpush
