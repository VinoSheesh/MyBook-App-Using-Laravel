<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen font-inter">
    <div class="container mx-auto px-4 py-8 max-w-2xl">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">✏️ Edit Buku</h1>
            <p class="text-gray-600">Perbarui informasi buku dalam koleksi</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-2xl shadow-xl border border-gray-200 overflow-hidden">
            <div class="bg-gradient-to-r from-amber-500 to-amber-600 p-6">
                <h2 class="text-xl font-semibold text-white flex items-center">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    Form Edit Buku
                </h2>
            </div>

            <form action="{{ route('buku.update', $book->id) }}" method="POST" class="p-8 space-y-6">
                @csrf
                @method('PUT')
                
                <!-- Judul Field -->
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2h4a1 1 0 110 2h-1v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6H3a1 1 0 110-2h4zM9 3v1h6V3H9z"></path>
                            </svg>
                            Judul Buku
                        </span>
                    </label>
                    <input type="text" 
                           name="judul" 
                           value="{{ $book->judul }}"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors duration-200 placeholder-gray-400"
                           placeholder="Masukkan judul buku...">
                    @error('judul')
                        <div class="flex items-center mt-2 text-sm text-red-600">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Penulis Field -->
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            Penulis
                        </span>
                    </label>
                    <input type="text" 
                           name="penulis" 
                           value="{{ $book->penulis }}"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors duration-200 placeholder-gray-400"
                           placeholder="Masukkan nama penulis...">
                    @error('penulis')
                        <div class="flex items-center mt-2 text-sm text-red-600">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Tahun Terbit Field -->
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a1 1 0 012 0v4h4V3a1 1 0 112 0v4h.835C18.072 7 19 7.928 19 9.063v9.874C19 20.072 18.072 21 16.937 21H7.063C5.928 21 5 20.072 5 18.937V9.063C5 7.928 5.928 7 7.063 7H8z"></path>
                            </svg>
                            Tahun Terbit
                        </span>
                    </label>
                    <input type="text" 
                           name="tahun_terbit" 
                           value="{{ $book->tahun_terbit }}"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors duration-200 placeholder-gray-400"
                           placeholder="Contoh: 2023">
                    @error('tahun_terbit')
                        <div class="flex items-center mt-2 text-sm text-red-600">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Deskripsi Field -->
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Deskripsi
                            <span class="text-gray-400 text-xs ml-2">(Opsional)</span>
                        </span>
                    </label>
                    <textarea name="deskripsi" 
                              rows="4"
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors duration-200 placeholder-gray-400 resize-vertical"
                              placeholder="Masukkan deskripsi singkat tentang buku...">{{ $book->deskripsi }}</textarea>
                    @error('deskripsi')
                        <div class="flex items-center mt-2 text-sm text-red-600">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit" 
                            class="w-full bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-semibold py-3 px-6 rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                        </svg>
                        Update Buku
                    </button>
                </div>
            </form>
        </div>

        <!-- Back Link -->
        <div class="mt-6 text-center">
            <a href="{{ route('buku.index') }}" 
               class="inline-flex items-center text-gray-600 hover:text-gray-800 transition-colors duration-200">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Kembali ke Daftar Buku
            </a>
        </div>
    </div>
</body>

</html>