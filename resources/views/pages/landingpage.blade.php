<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/assets/images/fav.png" />

    <title>Biennial Statement Filing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @include('includes.head')
    @include('includes.script')
    @include('includes.header')
    <style>
    :root {
        --primary-blue: #004080;
        --dark-blue: #002b58;
        --light-blue: #e0f2fe;
        --accent-yellow: #F5A81C;
        --dark-yellow: #e69500;
        --text-dark: #212529;
        --text-muted: #6c757d;
        --bg-light: #f8f9fa;
        --bg-white: #ffffff;
        --border-color: #dee2e6;
        --danger-color: #dc3545;
        --success-color: #28a745;
        --transition: all 0.3s ease;
    }
    </style>
</head>

<body class="font-['Open_Sans'] bg-gray-50 text-gray-800">
    <!-- Header Section -->

    <!-- Hero Section -->
    <section class="bg-gray-100 text-black py-3 md:py-4 px-4 text-center">
        <div class="">
            <h1 class="font-['Montserrat'] font-bold text-2xl mb-1">
                {{ __('Biennial Statement Filing Required by NY State Law') }}</h1>
            <p class="text-sm opacity-90 py-1">
                {{ __('Avoid the administrative dissolution of your company stay compliant and in Good Standing with New York State.') }}
            </p>
            @if ($submission)
            <a href="{{ route('checkout.with_data', $submission->dos_id) }}"
                class="bg-[#F5A81C] hover:bg-[#e69500] text-white font-semibold py-2 px-5 rounded-md shadow-lg transition-all duration-300 transform hover:-translate-y-1 uppercase tracking-wide">
                {{ __('File Now - $125') }}
            </a>
            @else
            <button type="button"
                class="bg-[#F5A81C] hover:bg-[#e69500] text-white font-semibold text-sm py-2 px-3 mt-2 rounded-md shadow-lg transition-all duration-300 transform uppercase tracking-wide"
                data-bs-toggle="modal" data-bs-target="#dosIdRequiredModal">
                {{ __('FILE YOUR BIENNIAL STATEMENT NOW') }}
            </button>
            @endif
        </div>
    </section>

    <!-- Notice Container -->
    <div class=" pb-3 md:py-4 px-4 bg-white">
        <div class="mx-auto bg-white rounded-xl shadow-sm overflow-hidden mx-60">
            <h4 class="font-['Montserrat'] font-bold text-md text-center py-3 md:text-xl text-red-600">
                {{ __('NOTICE OF NON-COMPLIANCE WITH BIENNIAL STATEMENT') }}
            </h4>
            <div class="md:flex">
                <!-- Image Section -->
                <div class="md:flex-shrink-0 p-6 flex items-center justify-center md:w-[27%]">
                    <img class="h-auto w-full max-w-sm object-cover rounded-lg" src="/assets/images/map1.jpg"
                        alt="New York State Compliance Notice">
                </div>


                <!-- Content Section -->
                <div class="px-6 md:px-8">

                    <div class="bg-yellow-50 border-l-4 border-[#F5A81C] px-4 pt-1">
                        <p class="font-semibold py-1 mb-2">
                            {{ __('You Are Receiving This Notice Because Your Business Has Been Identified as Past Due.') }}
                        </p>
                    </div>

                    <p class="text-gray-600 text-sm">
                        {{ __(' According to public records maintained by the New York Department of State – Division of Corporations, your business has not submitted its required Biennial Statement.') }}
                    </p>

                    <p class="text-gray-600 my-2 text-sm">
                        {{ __('To bring your business into compliance, the Biennial Statement must be filed immediately.') }}
                    </p>

                    <p class="text-gray-600 mb-2 text-sm">
                        {{ __('Pursuant to Section 408 of the New York Business Corporation Law and Section 301(e) of the New York Limited Liability Company Law, all domestic and authorized foreign corporations and LLCs must file a Biennial Statement every two years with the New York Department of State.') }}
                    </p>

                    <div class="bg-gray-50 border-l-4 border-[#004080] px-4 py-2 mb-2 ">
                        <h5 class="font-['Montserrat'] font-semibold text-lg mb-2">
                            {{ __('Failure to comply may result in:') }}</h5>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>{{ __('Risk of involuntary dissolution by the state') }}</li>
                            <li>{{ __('Suspension of business entity status') }}</li>
                            <li>{{ __('Loss of ability to receive legal and tax documents') }}</li>
                            <li>{{ __('Loss of ability to conduct transactions, secure loans, or enter into contracts') }}
                            </li>
                        </ul>
                    </div>

                    <div class="text-center md:text-left pt-1 pb-3">
                        <button type="button"
                            class="bg-[#F5A81C] hover:bg-[#e69500] text-white font-semibold py-2 px-6 rounded-md transition-all duration-300"
                            data-bs-toggle="modal" data-bs-target="#dosIdRequiredModal">
                            {{ __('FILE YOUR BIENNIAL STATEMENT NOW') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- How It Works Section -->
    <section class="bg-gradient-to-b from-white to-[#f8f9fa] pb-12 md:pb-10 pt-4 px-4">
        <div class="max-w-[1200px] mx-auto">
            <h3 class="font-['Montserrat'] font-bold text-2xl md:text-3xl text-center mb-3 md:mb-6 relative pb-2">
                {{ __('Follow These Steps to Submit Your Biennial Report') }}
                <span
                    class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-[75%] h-1 bg-[#F5A81C] rounded-full"></span>
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Step 1 -->
                <div
                    class="bg-white p-3 rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition-all duration-300 hover:-translate-y-2 text-center">
                    <div class="text-[#004080] text-4xl mb-4 transition-all duration-300 hover:scale-110">
                        <i class="bi bi-file-earmark-text-fill"></i>
                    </div>
                    <h5 class="font-['Montserrat'] font-bold text-md mb-2">
                        {{ __('Step 1: Submit Required Entity Information') }}</h5>
                    <p class="text-gray-600">
                        {{ __('Complete the secure form with your official business details as registered with the New York Department of State. Estimated completion time: 2 minutes.') }}
                    </p>
                </div>

                <!-- Step 2 -->
                <div
                    class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition-all duration-300 hover:-translate-y-2 text-center">
                    <div class="text-[#004080] text-4xl mb-4 transition-all duration-300 hover:scale-110">
                        <i class="bi bi-gear-fill"></i>
                    </div>
                    <h5 class="font-['Montserrat'] font-bold text-lg mb-2">{{ __('Step 2: Processing and Submission') }}
                    </h5>
                    <p class="text-gray-600">
                        {{ __('Your Biennial Statement is reviewed and submitted for official filing procedures.') }}
                    </p>
                </div>

                <!-- Step 3 -->
                <div
                    class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition-all duration-300 hover:-translate-y-2 text-center">
                    <div class="text-[#004080] text-4xl mb-4 transition-all duration-300 hover:scale-110">
                        <i class="bi bi-check2-circle"></i>
                    </div>
                    <h5 class="font-['Montserrat'] font-bold text-lg mb-2">{{ __('Step 3: Get Confirmation') }}</h5>
                    <p class="text-gray-600">
                        {{ __(' Receive official filing confirmation by email within 24-48 business hours.') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="dosIdRequiredModal" tabindex="-1" aria-labelledby="dosIdRequiredModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-['Montserrat'] font-bold" id="dosIdRequiredModalLabel">
                        {{ __('Action Required') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ __('Invalid DOS ID or DOS ID Not available. Please contact admin.') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    @include('includes.footer')

    <!-- Scripts -->
    @include('includes.script')
</body>

</html>