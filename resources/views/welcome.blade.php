<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>20RP00932</title>
    <script src="{{ asset('assets/tailwind.js') }}"></script>
    <script src="{{ asset('assets/jquery.js') }}"></script>
</head>

<body class="bg-slate-50 flex justify-center items-center h-[100vh]">

    <div class="bg-white shadow rounded-lg p-10 w-5/12">
        <h1 class="text-2xl font-bold text-indigo-900">LARAVEL AJAX</h1>
        <p class="text-gray-700">
            Objective:
            The objective of this assignment is to create an API using Laravel that provides endpoints for retrieving
            provinces and districts data. Additionally, you will implement a frontend interface using AJAX and PHP to
            select a province and display only the districts from that selected province. You will also learn how to
            manipulate the DOM to update the UI dynamically.

        </p>

        <div class="mt-5 space-x-5 flex justify-between items-center">
            <label>Select a province to view a its districts</label>
            <select id="provinceSelector" class="border w-[100px] py-1 roounded">
                <option value="North">Northern</option>
                <option value="South">Southern</option>
                <option value="West">Western</option>
                <option value="Eastern">Eastern</option>
                <option value="Kigali">Kigali</option>
            </select>
        </div>

        <div id="results" class="mt-5 bg-gray-100 p-5"></div>
        <div id="loader" class="hidden">
            <div class="flex items-center justify-center">
                <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-indigo-900 border-10"></div>
            </div>

        </div>

    </div>

    <script src="{{ asset('assets/ajaxScripts.js') }}"></script>

</body>

</html>