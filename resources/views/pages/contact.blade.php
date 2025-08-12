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

    <!-- Hero Section -->
    <section class="bg-gray-100 text-black py-6 px-6 text-center">
        <div class="max-w-4xl mx-auto">
            <h1 class="font-['Montserrat'] font-extrabold text-2xl md:text-3xl">
                {{ __('Biennial Statement Filing Required by NY State Law') }}
            </h1>
            <p class="text-base md:text-lg text-gray-700 font-medium mb-2">
                {{ __('Stay Compliant. Stay Informed.') }}
            </p>
            <p class="text-xs md:text-base text-gray-600 leading-relaxed opacity-95">
                {{ __('All business entities operating in New York are required to file a biennial statement to remain in good standing with the Department of State. Timely filing helps you avoid penalties and ensures ongoing compliance. Our dedicated team is ready to provide expert guidance and support throughout the entire filing process.') }}
            </p>
        </div>
    </section>


    <!-- Contact Info Section -->
    <section class="max-w-[1200px] mx-auto rounded-2xl px-6 py-12 mt-10">
        <div class="flex flex-col md:flex-row items-center gap-10">

            <!-- Left Column -->
            <div class="flex-1">
                <div class="text-blue-600 font-bold uppercase text-sm border-l-4 border-blue-600 pl-3 mb-3">
                    {{ __('Contact Information') }}
                </div>
                <h2 class="text-2xl md:text-3xl font-extrabold mb-4">
                    {{ __('Have Questions?') }}<br>{{ __('We’re Ready to Assist You') }}
                </h2>
                <p class="text-gray-600 mb-6">
                    {{ __('Our knowledgeable team is here to provide clear guidance and prompt assistance at every stage of the process. Get in touch today and experience a smooth, stress-free filing experience.') }}
                </p>

                <!-- Email -->
                <div
                    class="flex items-start gap-4 p-4 rounded-xl bg-white hover:bg-blue-50 border-l-4 border-transparent hover:border-blue-600 transition">
                    <div class="w-12 h-12 text-white bg-blue-600 flex items-center justify-center rounded-full">
                        <i class="bi bi-envelope-fill text-lg"></i>
                    </div>
                    <div>
                        <small class="text-gray-500">{{ __('Email Us') }}</small><br>
                        <a href="mailto:info@nybiennialcompliance.com"
                            class="font-semibold text-gray-800 hover:underline">
                            info@nybiennialcompliance.com
                        </a>
                    </div>
                </div>
            </div>


            <!-- Right Column (Image) -->
            <div class="flex-1 text-center">
                <img src="/assets/images/contact.png" alt="Contact" class="max-w-sm w-full mx-auto" />
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-lg p-8 md:p-12">
            <div class="text-center mb-8">
                <h3 class="text-3xl font-bold text-blue-600 mb-2">{{ __('Let’s Talk') }}</h3>
                <p class="text-gray-600 text-lg">
                    {{ __('Share your message with us, and our team will respond promptly. Whether you have a project proposal, a question, or a potential business collaboration, we’re here to listen and assist.') }}
                </p>
            </div>

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
                    <button type="submit"
                        class="w-full md:w-auto inline-flex items-center justify-center gap-2 bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 transition">
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