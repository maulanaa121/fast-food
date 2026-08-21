<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.7.2/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Fast Food</title>
</head>
<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>

<body class="bg-gray-100">
    @include('layouts.navbar')
    <section
    id="home"
    class="min-h-screen bg-[#1B1D29] font-poppins"
>
    <div
        class="mx-auto grid min-h-screen max-w-[1440px] grid-cols-1 items-center gap-8 px-6 pt-[106px] sm:px-10 md:grid-cols-2 lg:gap-0 lg:px-12"
    >

        {{-- Left Content --}}
        <div
            class="flex flex-col items-center text-center md:items-start md:text-left"
        >

            {{-- Small Heading --}}
            <span
                class="text-[36px] font-bold leading-tight text-[#FF6527] opacity-0 animate-[fadeInUp_0.8s_ease-out_0.2s_forwards] sm:text-[42px] lg:text-[48px]"
            >
                Full Website
            </span>

            {{-- Main Heading --}}
            <h1
                class="mt-6 max-w-[550px] text-[30px] font-bold leading-[1.4] text-white opacity-0 animate-[fadeInUp_0.8s_ease-out_0.4s_forwards] sm:text-[38px] lg:text-[48px]"
            >
                Food The
                <br>
                Most Precious Things
            </h1>

            {{-- Button --}}
            <a href="#menu" class="mt-10 rounded-xl bg-[#FF6527] px-7 py-4 text-[18px] font-semibold text-white opacity-0 shadow-lg shadow-[#FF6527]/20 transition duration-300 hover:-translate-y-1 hover:bg-[#ff7a45] hover:shadow-[#FF6527]/30 animate-[fadeInUp_0.8s_ease-out_0.6s_forwards] sm:px-8 sm:py-4" >
                Today's Menu
            </a>

        </div>


        {{-- Right Image --}}
        <div class="flex items-center justify-center opacity-0 animate-[fadeInRight_1s_ease-out_0.3s_forwards]" >
            <img src="{{ asset('images/home.png') }}" alt="Delicious Food" class="w-full max-w-[380px] object-contain sm:max-w-[450px] lg:max-w-[650px] xl:max-w-[700px]" >
        </div>

    </div>
</section>


    @include('layouts.footer')
</body>
</html>