<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biennial Statement Filing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
    @include('includes.header')

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-[#004080] to-[#002b58] text-white py-8 md:py-10 px-4 text-center">
        <div class="max-w-4xl mx-auto">
            <h1 class="font-['Montserrat'] font-bold text-2xl md:text-4xl mb-4 md:mb-6">Biennial Statement Filing Required by NY State Law</h1>
            <p class="text-lg md:text-xl mb-8 max-w-3xl mx-auto opacity-90">
                Avoid the administrative dissolution of your company — stay compliant and in Good Standing with New York State.
            </p>
            @if ($submission)
                <a href="{{ route('checkout.with_data', $submission->dos_id) }}" class="bg-[#F5A81C] hover:bg-[#e69500] text-white font-semibold py-3 px-8 rounded-md shadow-lg transition-all duration-300 transform hover:-translate-y-1 uppercase tracking-wide">
                    File Now - $125
                </a>
            @else
                <button type="button" class="bg-[#F5A81C] hover:bg-[#e69500] text-white font-semibold py-3 px-8 rounded-md shadow-lg transition-all duration-300 transform hover:-translate-y-1 uppercase tracking-wide" data-bs-toggle="modal" data-bs-target="#dosIdRequiredModal">
                    FILE YOUR BIENNIAL STATEMENT NOW
                </button>
            @endif
        </div>
    </section>

    <!-- Notice Container -->
    <div class="bg-gradient-to-b from-[#f0f4f8] to-white py-8 md:py-16 px-4">
        <div class="mx-auto bg-white rounded-xl shadow-md overflow-hidden mx-60">
            <div class="md:flex">
                <!-- Image Section -->
                <div class="md:flex-shrink-0 p-6 flex items-center justify-center md:w-[40%]">
                    <img class="h-auto w-full max-w-xl object-cover rounded-lg" src="/assets/images/map1.jpg" alt="New York State Compliance Notice">
                </div>
                
                <!-- Content Section -->
                <div class="p-6 md:p-8">
                    <h4 class="font-['Montserrat'] font-bold text-xl md:text-2xl mb-4 text-red-600 border-b pb-2">
                        NOTICE OF NON-COMPLIANCE WITH BIENNIAL STATEMENT
                    </h4>

                    <div class="bg-yellow-50 border-l-4 border-[#F5A81C] p-4 mb-4">
                        <p class="font-semibold">
                            You Are Receiving This Notice Because Your Business Has Been Identified as Past Due.
                        </p>
                    </div>

                    <p class="text-gray-600 mb-4">
                        According to public records maintained by the New York Department of State – Division of Corporations, your business has not submitted its required Biennial Statement.
                    </p>

                    <p class="text-gray-600 mb-4">
                        To bring your business into compliance, the Biennial Statement must be filed immediately.
                    </p>

                    <p class="text-gray-600 mb-6">
                        Pursuant to Section 408 of the New York Business Corporation Law and Section 301(e) of the New York Limited Liability Company Law, all domestic and authorized foreign corporations and LLCs must file a Biennial Statement every two years with the New York Department of State.
                    </p>

                    <div class="bg-gray-50 border-l-4 border-[#004080] p-4 mb-6">
                        <h5 class="font-['Montserrat'] font-semibold text-lg mb-2">Failure to comply may result in:</h5>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Risk of involuntary dissolution by the state</li>
                            <li>Suspension of business entity status</li>
                            <li>Loss of ability to receive legal and tax documents</li>
                            <li>Loss of ability to conduct transactions, secure loans, or enter into contracts</li>
                        </ul>
                    </div>

                    <div class="text-center md:text-left">
                        <button type="button" class="bg-[#F5A81C] hover:bg-[#e69500] text-white font-semibold py-2 px-6 rounded-md shadow transition-all duration-300" data-bs-toggle="modal" data-bs-target="#dosIdRequiredModal">
                            FILE YOUR BIENNIAL STATEMENT NOW
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- How It Works Section -->
    <section class="bg-gradient-to-b from-white to-[#f8f9fa] py-12 md:py-20 px-4">
        <div class="max-w-6xl mx-auto">
            <h3 class="font-['Montserrat'] font-bold text-2xl md:text-3xl text-center mb-8 md:mb-12 relative pb-2">
                Follow These Steps to Submit Your Biennial Report
                <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-20 h-1 bg-[#F5A81C] rounded-full"></span>
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Step 1 -->
                <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition-all duration-300 hover:-translate-y-2 text-center">
                    <div class="text-[#004080] text-4xl mb-4 transition-all duration-300 hover:scale-110">
                        <i class="bi bi-file-earmark-text-fill"></i>
                    </div>
                    <h5 class="font-['Montserrat'] font-bold text-lg mb-2">Step 1: Submit Info</h5>
                    <p class="text-gray-600">
                        Provide your business details through our secure online form. Takes just 2 minutes.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition-all duration-300 hover:-translate-y-2 text-center">
                    <div class="text-[#004080] text-4xl mb-4 transition-all duration-300 hover:scale-110">
                        <i class="bi bi-gear-fill"></i>
                    </div>
                    <h5 class="font-['Montserrat'] font-bold text-lg mb-2">Step 2: We File for You</h5>
                    <p class="text-gray-600">
                        Our experts prepare and submit your Biennial Statement to NY Department of State.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition-all duration-300 hover:-translate-y-2 text-center">
                    <div class="text-[#004080] text-4xl mb-4 transition-all duration-300 hover:scale-110">
                        <i class="bi bi-check2-circle"></i>
                    </div>
                    <h5 class="font-['Montserrat'] font-bold text-lg mb-2">Step 3: Get Confirmation</h5>
                    <p class="text-gray-600">
                        Receive official filing confirmation by email within 24-48 business hours.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="dosIdRequiredModal" tabindex="-1" aria-labelledby="dosIdRequiredModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-['Montserrat'] font-bold" id="dosIdRequiredModalLabel">Action Required</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Invalid DOS ID or DOS ID Not available. Please contact admin.
                </div>
                <div class="modal-footer">
                    <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded" data-bs-dismiss="modal">Close</button>
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