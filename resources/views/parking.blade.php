<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Parking System</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }


    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <h1>Parking Management System</h1>
        </div>
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-1">
                <div class="p-6">
                    <div class="flex items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href=""
                                                                             class="underline text-gray-900 dark:text-white">Input</a>
                        </div>
                    </div>

                    <div class="ml-3">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            <class class="form-inline">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="inputPassword2" class="sr-only">Command</label>
                                    <input type="text" class="form-control" id="command_input" placeholder="Command">
                                </div>
                                <button type="button" class="btn btn-primary mb-2" onclick="defineCommand()">Submit
                                </button>
                            </class>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-1">
                <div class="p-6">
                    <div class="flex items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href=""
                                                                             class="underline text-gray-900 dark:text-white">Output</a>
                        </div>
                    </div>

                    <div class="ml-1">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            <div id="output_div">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script type="text/javascript">

    var parking_slot = [];

    function defineCommand() {
        var command = $('#command_input').val();
        var splitCommand = command.split(' ');
        var commandType = splitCommand[0];

        if (command != null && command != '') {
            $("#output_div").append("<li class='alert alert-primary'> " + command + "</li>");
        }

        switch (commandType) {
            case 'create_parking_lot':
                // code block
                var commandParam = splitCommand[1];
                createParkingSlot(commandParam);
                break;
            case 'park':
                // code block
                var commandParamPlat = splitCommand[1];
                var commandParamColor = splitCommand[2];
                allocateParkingSlot(commandParamPlat, commandParamColor);
                break;
            case 'leave':
                // code block
                var commandParam = splitCommand[1];
                leavingPakingLot(commandParam);
                break;
            case 'status':
                // code block
                showStatus();
                break;
            case 'registration_numbers_for_cars_with_colour':
                var commandParam = splitCommand[1];
                // code block
                parkingWRegistrationByColors(commandParam);
                break;
            case 'slot_numbers_for_cars_with_colour':
                var commandParam = splitCommand[1];
                slotNumbersForCarsWithColour(commandParam);
                // code block
                break;
            case 'slot_number_for_registration_number':
                var commandParam = splitCommand[1];
                slotNumberForRegistrationNumber(commandParam);
                // code block
                break;
            default:
                // code block
                $("#output_div").append("<li class='alert alert-danger'> Invalid Command</li>");
        }
    }

    function createParkingSlot(limit) {
        for (let i = 0; i < limit; i++) {
            parking_slot.push([])
        }

        $("#output_div").append("<li class='alert alert-success'> Created a parking lot with " + parking_slot.length + " slots</li>")
    }

    function allocateParkingSlot(plat, color) {
        var isDone = false;
        if (parking_slot.length > 0) {
            var newItem = [plat, color];
            console.log(newItem);

            parking_slot.forEach((item, index) => {
                if (!isDone) {
                    if (item.length == 0) {
                        parking_slot[index] = newItem;
                        isDone = true;
                        // console.log('fill');
                        $("#output_div").append("<li class='alert alert-success'>Allocated slot number:  " + (index + 1) + "</li>")
                    }
                }
            })
        } else {
            $("#output_div").append("<li class='alert alert-danger'> Sorry, Parking Not Available yet</li>");
        }

        if (!isDone) {
            $("#output_div").append("<li class='alert alert-danger'> Sorry, Parking lot is full</li>");
        }
    }

    function leavingPakingLot(param) {

        if (parking_slot[param - 1].length == 0) {

        } else {
            parking_slot[param - 1] = [];
            $("#output_div").append("<li class='alert alert-success'> Slot number:  " + param + " is free</li>")
        }

        console.log(parking_slot);
    }

    function showStatus() {
        $("#output_div").empty();
        $("#output_div").append(" <div class='alert alert-success'>\n" +
            "                                    <table class=\"table table-bordered\">\n" +
            "                                        <thead>\n" +
            "                                        <tr>\n" +
            "                                            <th scope=\"col\">Slot No.</th>\n" +
            "                                            <th scope=\"col\">Registration No.</th>\n" +
            "                                            <th scope=\"col\">Color</th>\n" +
            "                                        </tr>\n" +
            "                                        </thead>\n" +
            "                                        <tbody id=\"statusTable\">\n" +
            "                                        </tbody>\n" +
            "                                    </table>\n" +
            "                                </div>");

        $.each(parking_slot, function (key, item) {
            if (item.length > 0) {
                $("#statusTable").append(" <tr>\n" +
                    "                                            <th scope=\"row\">" + (key + 1) + "</th>\n" +
                    "                                            <td>" + item[0] + "</td>\n" +
                    "                                            <td>" + item[1] + "</td>\n" +
                    "                                        </tr>");
            } else {
                $("#statusTable").append(" <tr>\n" +
                    "                                            <th scope=\"row\">" + (key + 1) + "</th>\n" +
                    "                                            <td>Empty</td>\n" +
                    "                                            <td>Empty</td>\n" +
                    "                                        </tr>");
            }

        });
    }

    /**
     * Return Registration Number as Array
     *
     * @param param
     */
    function parkingWRegistrationByColors(param) {
        var result = [];

        parking_slot.forEach((item, index) => {
            if (item.includes(param)) {
                result.push(item[0])
            }
        });

        if (result.length < 1) {
            $("#output_div").append("<li class='alert alert-danger'> Not found</li>");
        } else {
            $("#output_div").append("<li class='alert alert-success'>" + result + "</li>")
        }

    }

    function slotNumbersForCarsWithColour(param) {
        var result = [];

        parking_slot.forEach((item, index) => {
            if (item.includes(param)) {
                result.push(index + 1)
            }
        });

        if (result.length < 1) {
            $("#output_div").append("<li class='alert alert-danger'> Not found</li>");
        } else {
            $("#output_div").append("<li class='alert alert-success'>" + result + "</li>")
        }

    }

    function slotNumberForRegistrationNumber(param) {
        var result = [];

        parking_slot.forEach((item, index) => {
            if (item.includes(param)) {
                result.push(index + 1)
            }
        });

        if (result.length < 1) {
            $("#output_div").append("<li class='alert alert-danger'> Not found</li>");
        } else {
            $("#output_div").append("<li class='alert alert-success'>" + result + "</li>")
        }
    }
</script>

</body>

</html>
