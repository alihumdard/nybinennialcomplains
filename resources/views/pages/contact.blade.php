<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="/assets/images/fav.png" />

    <title>{{ __('Contact Us') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @include('includes.header')

    <style>
    body {
        font-family: 'Segoe UI', sans-serif;
    }
    </style>
</head>

<body class="">

    <!-- Contact Info Section -->
    <section class="max-w-[1200px] mx-auto rounded-2xl px-6 py-12 mt-10">
        <div class="flex flex-col md:flex-row items-center gap-10">

            <!-- Left Column -->
            <div class="flex-1">
                <div class="text-blue-600 font-bold uppercase text-sm border-l-4 border-blue-600 pl-3 mb-3">
                    {{ __('Contact Information') }}
                </div>
                <h2 class="text-2xl md:text-3xl font-extrabold mb-4">
                    {{ __('Have a question or need assistance') }}<br>{{ __('regarding your Biennial Statement filing?') }}
                </h2>
                <p class="text-gray-600 mb-6">
                    {{ __('Complete the form below and  will respond promptly.') }}
                </p>
            </div>


            <!-- Right Column (Image) -->
            <div class="flex-1 text-center">
                <img src="/assets/images/envelop.png" alt="Contact" class="max-w-sm w-full mx-auto" />
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-lg p-8 md:p-12">
            @if(session('success'))
            <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-6 text-center font-medium">
                {{ __('Thank you for your message! We will get back to you shortly.') }}
            </div>
            @endif

            <form method="POST" action="{{ route('contact.submit') }}" class="space-y-6">
                @csrf
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Name -->
                    <div>
                        <label class="block font-semibold mb-1">{{ __('Your Name') }}</label>
                        <input type="text" name="name"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror"
                            placeholder="{{ __('Name') }}" value="{{ old('name') }}" required />
                        @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block font-semibold mb-1">{{ __('Email Address') }}</label>
                        <input type="email" name="email"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror"
                            placeholder="{{ __('you@example.com') }}" value="{{ old('email') }}" required />
                        @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Message -->
                <div>
                    <label class="block font-semibold mb-1">{{ __('Message') }}</label>
                    <textarea name="message" rows="6"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('message') border-red-500 @enderror"
                        placeholder="{{ __('Write your message here...') }}" required>{{ old('message') }}</textarea>
                    @error('message')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="w-full md:w-auto inline-flex items-center justify-center gap-2 bg-[#5b95c5] text-white font-semibold px-6 py-3 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-800 transition-all duration-300 transform hover:-translate-y-0.5">
                        <i class="bi bi-send text-base"></i>
                        {{ __('Send Message') }}
                    </button>
                </div>

            </form>
        </div>
    </section>

    @include('includes.footer')

</body>

</html>