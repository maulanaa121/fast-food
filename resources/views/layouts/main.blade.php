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
    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-40px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(40px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>

<body class="bg-gray-100">
    @include('layouts.navbar')
    <section id="home" class="min-h-screen bg-[#1B1D29] font-poppins" >
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

<section
    id="about"
    class="bg-[#1B1D29] py-20 font-poppins sm:py-24 lg:py-28"
>
    <div
        class="mx-auto grid max-w-[1440px] grid-cols-1 items-center gap-12 px-6 sm:px-10 md:grid-cols-2 md:gap-16 md:px-12"
    >

        {{-- Image --}}
        <div
            class="flex justify-center md:justify-start"
        >
            <img
                src="{{ asset('images/about.png') }}"
                alt="About Us Food"
                class="w-full max-w-[516px] object-contain opacity-0 animate-[fadeInLeft_0.8s_ease-out_forwards]"
            >
        </div>


        {{-- Content --}}
        <div
            class="text-center md:text-left"
        >

            {{-- Label --}}
            <span
                class="text-[20px] font-semibold text-[#FF6527] opacity-0 animate-[fadeInRight_0.8s_ease-out_0.2s_forwards] sm:text-[22px]"
            >
                About Us
            </span>


            {{-- Heading --}}
            <h2
                class="mt-3 text-[32px] font-bold leading-[1.3] text-white opacity-0 animate-[fadeInRight_0.8s_ease-out_0.3s_forwards] sm:text-[40px] lg:text-[44px] xl:text-[48px]"
            >
                We Speak The Good
                <br class="hidden sm:block">
                Food Language
            </h2>


            {{-- Description --}}
            <p
                class="mx-auto mt-6 max-w-[600px] text-[17px] leading-[1.8] text-white/90 opacity-0 animate-[fadeInRight_0.8s_ease-out_0.4s_forwards] sm:text-[18px] lg:mx-0"
            >
                Nikmati berbagai pilihan makanan lezat yang dibuat dengan bahan berkualitas dan cita rasa terbaik untuk menemani setiap momen.
            </p>


            {{-- Button --}}
            <a
                href="#menu"
                class="mt-8 inline-flex rounded-xl bg-[#FF6527] px-7 py-4 text-[17px] font-semibold text-white opacity-0 shadow-lg shadow-[#FF6527]/20 transition duration-300 hover:-translate-y-1 hover:bg-[#ff7a45] hover:shadow-[#FF6527]/30 animate-[fadeInRight_0.8s_ease-out_0.5s_forwards]"
            >
                Today's Menu
            </a>

        </div>

    </div>
</section>

<section
    id="menu"
    class="bg-[#1B1D29] py-20 font-poppins sm:py-24 lg:py-28"
>
    <div class="mx-auto max-w-[1280px] px-6 sm:px-10 lg:px-12">

        {{-- Section Heading --}}
        <div class="text-center">

            <span class="text-[20px] font-semibold text-[#FF6527] sm:text-[22px]">
                Food menu
            </span>

            <h2
                class="mt-2 text-[32px] font-bold leading-tight text-white sm:text-[40px] lg:text-[44px]"
            >
                Fresh taste and great price
            </h2>

        </div>


        {{-- Food Cards --}}
        <div
            class="mt-14 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 px-4.5 sm:px-0 "
        >

            {{-- Card 1 --}}
            <div
                class="group relative overflow-hidden rounded-xl bg-[#FFF0E8] p-6 text-center transition duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/20"
            >

                {{-- Cart Button --}}
                <button
                    type="button"
                    aria-label="Add Chicken Burger to cart"
                    class="absolute right-0 top-0 flex h-11 w-11 items-center justify-center rounded-bl-xl bg-[#FF6527] text-white transition duration-300 group-hover:bg-[#e9521c]"
                >
                    <i class="fa-solid fa-cart-shopping text-[17px]"></i>
                </button>


                {{-- Food Image --}}
                <div class="flex h-[250px] items-center justify-center">
                    <img
                        src="{{ asset('images/menu/food1.png') }}"
                        alt="Chicken Burger"
                        class="h-full w-full object-contain transition duration-500 group-hover:scale-105"
                    >
                </div>


                {{-- Food Name --}}
                <h3
                    class="mt-5 text-[25px] font-bold text-[#1B1D29]"
                >
                    Chicken Burger
                </h3>


                {{-- Description --}}
                <p
                    class="mt-2 text-[18px] text-[#1B1D29]"
                >
                    Tasty food
                </p>


                {{-- Price --}}
                <p
                    class="mt-4 text-[18px] font-semibold text-[#FF6527]"
                >
                    $11.00
                </p>

            </div>


            {{-- Card 2 --}}
            <div
                class="group relative overflow-hidden rounded-xl bg-[#FFF0E8] p-6 text-center transition duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/20"
            >

                {{-- Cart Button --}}
                <button
                    type="button"
                    aria-label="Add Special Beef Burger to cart"
                    class="absolute right-0 top-0 flex h-11 w-11 items-center justify-center rounded-bl-xl bg-[#FF6527] text-white transition duration-300 group-hover:bg-[#e9521c]"
                >
                    <i class="fa-solid fa-cart-shopping text-[17px]"></i>
                </button>


                {{-- Food Image --}}
                <div class="flex h-[250px] items-center justify-center">
                    <img
                        src="{{ asset('images/menu/food2.png') }}"
                        alt="Special Beef Burger"
                        class="h-full w-full object-contain transition duration-500 group-hover:scale-105"
                    >
                </div>


                {{-- Food Name --}}
                <h3
                    class="mt-5 text-[25px] font-bold text-[#1B1D29]"
                >
                    Special beef burger
                </h3>


                {{-- Description --}}
                <p
                    class="mt-2 text-[18px] text-[#1B1D29]"
                >
                    Tasty food
                </p>


                {{-- Price --}}
                <p
                    class="mt-4 text-[18px] font-semibold text-[#FF6527]"
                >
                    $11.00
                </p>

            </div>


            {{-- Card 3 --}}
            <div
                class="group relative overflow-hidden rounded-xl bg-[#FFF0E8] p-6 text-center transition duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/20"
            >

                {{-- Cart Button --}}
                <button
                    type="button"
                    aria-label="Add Chicken Fry Pack to cart"
                    class="absolute right-0 top-0 flex h-11 w-11 items-center justify-center rounded-bl-xl bg-[#FF6527] text-white transition duration-300 group-hover:bg-[#e9521c]"
                >
                    <i class="fa-solid fa-cart-shopping text-[17px]"></i>
                </button>


                {{-- Food Image --}}
                <div class="flex h-[250px] items-center justify-center">
                    <img
                        src="{{ asset('images/menu/food3.png') }}"
                        alt="Chicken Fry Pack"
                        class="h-full w-full object-contain transition duration-500 group-hover:scale-105"
                    >
                </div>


                {{-- Food Name --}}
                <h3
                    class="mt-5 text-[25px] font-bold text-[#1B1D29]"
                >
                    Chicken fry pack
                </h3>


                {{-- Description --}}
                <p
                    class="mt-2 text-[18px] text-[#1B1D29]"
                >
                    Tasty food
                </p>


                {{-- Price --}}
                <p
                    class="mt-4 text-[18px] font-semibold text-[#FF6527]"
                >
                    $11.00
                </p>

            </div>

        </div>

    </div>
</section>
<section
    id="services"
    class="bg-[#1B1D29] py-20 font-poppins sm:py-24 lg:py-28"
>
    <div class="mx-auto max-w-[1280px] px-6 sm:px-10 lg:px-12">

        {{-- Section Heading --}}
        <div class="text-center">

            <span class="text-[20px] font-semibold text-[#FF6527] sm:text-[22px]">
                Services
            </span>

            <h2
                class="mt-2 text-[32px] font-bold leading-tight text-white sm:text-[40px] lg:text-[44px]"
            >
                We provide best quality food
            </h2>

        </div>


        {{-- Services --}}
        <div
            class="mt-16 grid grid-cols-1 gap-14 sm:mt-20 sm:grid-cols-2 md:grid-cols-3 md:gap-8 lg:gap-16"
        >

            {{-- Order --}}
            <div
                class="group flex flex-col items-center text-center"
            >
                {{-- Icon --}}
                <div class="flex h-[100px] items-center justify-center">
                    <img
                        src="{{ asset('images/services/s1.png') }}"
                        alt="Order"
                        class="h-[90px] w-[110px] object-contain transition duration-300 group-hover:-translate-y-2"
                    >
                </div>

                {{-- Title --}}
                <h3
                    class="mt-5 text-[25px] font-bold text-[#FF6527]"
                >
                    Order
                </h3>

                {{-- Description --}}
                <p
                    class="mt-2 max-w-[310px] text-[17px] leading-[1.6] text-white"
                >
                    Pesan makanan favoritmu dengan mudah dan nikmati proses pemesanan yang cepat dan praktis.
                </p>
            </div>


            {{-- Shipping --}}
            <div
                class="group flex flex-col items-center text-center"
            >
                {{-- Icon --}}
                <div class="flex h-[100px] items-center justify-center">
                    <img
                        src="{{ asset('images/services/s2.png') }}"
                        alt="Shipping"
                        class="h-[90px] w-[110px] object-contain transition duration-300 group-hover:-translate-y-2"
                    >
                </div>

                {{-- Title --}}
                <h3
                    class="mt-5 text-[25px] font-bold text-[#FF6527]"
                >
                    Shipping
                </h3>

                {{-- Description --}}
                <p
                    class="mt-2 max-w-[310px] text-[17px] leading-[1.6] text-white"
                >
                    Pesanan diproses dengan cepat dan dikirim dengan aman agar makanan sampai dalam kondisi terbaik.
                </p>
            </div>


            {{-- Delivered --}}
            <div
                class="group flex flex-col items-center text-center"
            >
                {{-- Icon --}}
                <div class="flex h-[100px] items-center justify-center">
                    <img
                        src="{{ asset('images/services/s3.png') }}"
                        alt="Delivered"
                        class="h-[90px] w-[110px] object-contain transition duration-300 group-hover:-translate-y-2"
                    >
                </div>

                {{-- Title --}}
                <h3
                    class="mt-5 text-[25px] font-bold text-[#FF6527]"
                >
                    Delivered
                </h3>

                {{-- Description --}}
                <p
                    class="mt-2 max-w-[310px] text-[17px] leading-[1.6] text-white"
                >
                    Nikmati pesananmu langsung di depan pintu dengan layanan pengiriman yang aman dan terpercaya.
                </p>
            </div>

        </div>

    </div>
</section>
<section
    id="today-menu"
    class="bg-[#1B1D29] px-6 py-16 font-poppins sm:px-10 sm:py-20 lg:px-12 lg:py-24"
>
    <div
        class="mx-auto flex min-h-[380px] max-w-[1280px] items-center justify-center rounded-xl bg-[#FFF0E8] px-6 py-16 sm:min-h-[400px] sm:px-10 lg:px-20"
    >

        <div class="text-center">

            {{-- Heading --}}
            <h2
                class="text-[32px] font-bold leading-[1.35] text-[#111827] sm:text-[40px] lg:text-[44px]"
            >
                We make quality food
                <br>
                Everyday
            </h2>

            {{-- Button --}}
            <a
                href="#menu"
                class="mt-10 inline-flex rounded-xl bg-[#FF6527] px-7 py-4 text-[17px] font-semibold text-white transition duration-300 hover:-translate-y-1 hover:bg-[#ff7a45] hover:shadow-lg hover:shadow-[#FF6527]/25"
            >
                Today's menu
            </a>

        </div>

    </div>
</section>

    @include('layouts.footer')
</body>
</html>