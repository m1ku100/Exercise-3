<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>User Management</title>

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
            <h1>Simple User Management System</h1>
        </div>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal"
                data-whatever="@mdo"><i class="bi bi-arrow-down-circle"></i> Add New Data
        </button>

        <!-- Add Form Modal -->
        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">User Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="errorAlert"></div>
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Full name:</label>
                                <input type="text" class="form-control" value="" id="name_input" name="name"/>
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email:</label>
                                <input type="email" class="form-control" value="" id="email_input" name="email"/>
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Gender:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios1"
                                           value="male" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios2"
                                           value="female">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Female
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Phone:</label>
                                <input type="text" class="form-control" value="" id="recipient-name" name="phone"
                                       onkeypress="return numberOnly(event)"/>
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Address:</label>
                                <textarea class="form-control" id="message-text" name="address"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="storeData()">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Form Modal -->
        <div class="modal fade" id="editFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editFormModalTitle">User Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="errorAlertEdit"></div>

                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Full name:</label>
                                <input type="text" class="form-control" value="" id="name_edit" name="name"/>
                                <input type="hidden" class="form-control" value="" id="id_edit" name="user_id"/>
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email:</label>
                                <input type="email" class="form-control" value="" id="email_edit" name="email"/>
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Gender:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gender_edit_m"
                                           value="male" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gender_edit_f"
                                           value="female">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Female
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Phone:</label>
                                <input type="text" class="form-control" value="" id="phone_edit" name="phone"
                                       onkeypress="return numberOnly(event)"/>
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Address:</label>
                                <textarea class="form-control" id="address_edit" name="address"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="updateUserData()">Save Changes</button>
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
                                                                             class="underline text-gray-900 dark:text-white">Users
                                List</a>
                        </div>
                    </div>

                    <div class="ml-1">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody id="tableBody">
                                @foreach(\App\Models\User::all() as $item)
                                    <tr id="row_{{$item->id}}">
                                        <th scope="row">#</th>
                                        <td id="name_{{$item->id}}">{{$item->name}}</td>
                                        <td id="gender_{{$item->id}}">{{$item->gender}}</td>
                                        <td id="email_{{$item->id}}">{{$item->email}}</td>
                                        <td id="phone_{{$item->id}}">{{$item->phone}}</td>
                                        <td id="address_{{$item->id}}">{{$item->address}}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success"
                                                        onclick="getDataUser('{{$item->id}}')">Edit
                                                </button>
                                                <button type="button" class="btn btn-danger"
                                                        onclick="deleteDataUser('{{$item->id}}')">Delete
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
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
    $(document).ready(function () {

    });

    function numberOnly(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }

    function storeData() {
        var _name = $('input[name="name"]').val();
        var _password = "secret";
        var _email = $('input[name="email"]').val();
        var _gender = $('input[name="gender"]:checked').val();
        var _address = $("textarea[name='address']").val();
        var _phone = $("input[name='phone']").val();

        $("#errorAlert").empty();

        $.ajax({
            type: 'POST',
            url: "{{ route('api.user.store') }}",
            data: {name: _name, password: _password, email: _email, gender: _gender, phone: _phone, address: _address},
            success: function (data) {
                console.log(data.message);
                $('#formModal').modal('hide');
                alert(data.message);
                addRowDataTable(_name, _gender, _email, _phone, _address, data.secret);
                resetForm();
            }, error: function (xhr, status, error) {
                var response = JSON.parse(xhr.responseText);

                // Set Error Message each input
                $.each(response.error, function (key, item) {
                    $("#errorAlert").append("<li class='alert alert-danger'>" + item + "</li>")
                });

            }
        });
    }

    function getDataUser(user_id) {
        $.ajax({
            type: 'POST',
            url: "{{ route('api.get.user') }}",
            data: {user_id: user_id},
            success: function (data) {
                showEditForm(data.data.name, data.data.gender, data.data.email, data.data.phone, data.data.address, data.data.id);
                $('#editFormModal').modal('show');
            }, error: function (xhr, status, error) {
                var response = JSON.parse(xhr.responseText);
                console.log(response.message);
            }
        });
    }

    function showEditForm(name, gender, email, phone, address, id) {
        $('#editFormModalTitle').text('Edit Data : ' + name);
        $('#name_edit').val(name);
        $('#email_edit').val(email);
        $('#phone_edit').val(phone);
        $('#address_edit').val(address);
        $('#id_edit').val(id);

    }

    function updateUserData() {
        var _name = $('#name_edit').val();
        var _password = "secret";
        var _email = $('#email_edit').val();
        var _gender = $('input[name="gender"]:checked').val();
        var _address = $('#address_edit').val();
        var _phone = $('#phone_edit').val();
        var _user_id = $('#id_edit').val();

        $("#errorAlertEdit").empty();

        $.ajax({
            type: 'POST',
            url: "{{ route('api.update.user') }}",
            data: {
                name: _name,
                password: _password,
                email: _email,
                gender: _gender,
                phone: _phone,
                address: _address,
                user_id: _user_id
            },
            success: function (data) {
                console.log(data.message);
                $('#editFormModal').modal('hide');
                alert(data.message);
                changeCurrentRow(_name, _gender, _email, _phone, _address, _user_id);
            }, error: function (xhr, status, error) {
                var response = JSON.parse(xhr.responseText);

                // Set Error Message each input
                $.each(response.error, function (key, item) {
                    $("#errorAlertEdit").append("<li class='alert alert-danger'>" + item + "</li>")
                });
            }
        });
    }

    function changeCurrentRow(name, gender, email, phone, address, id) {
        $('#name_' + id).text(name);
        $('#gander_' + id).text(gender);
        $('#email_' + id).text(email);
        $('#phone_' + id).text(phone);
        $('#address_' + id).text(address);
    }

    function deleteDataUser(user_id) {
        $.ajax({
            type: 'POST',
            url: "{{ route('api.user.delete') }}",
            data: {user_id: user_id},
            success: function (data) {
                console.log(data.message);
                alert(data.message);
                $('#row_' + user_id).remove();
            }, error: function (xhr, status, error) {
                var response = JSON.parse(xhr.responseText);
                console.log(response.message);
            }
        });
    }

    function addRowDataTable(name, gender, email, phone, address, id) {
        $('#tableBody').append('  <tr id="row_' + id + '">\n' +
            '                                        <th scope="row">#</th>\n' +
            '                                        <td id="name_' + id + '">' + name + '</td>\n' +
            '                                        <td  id="gender_' + id + '">' + gender + '</td>\n' +
            '                                        <td  id="email_' + id + '">' + email + '</td>\n' +
            '                                        <td  id="phone_' + id + '">' + phone + '</td>\n' +
            '                                        <td  id="address_' + id + '">' + address + '</td>\n' +
            '                                        <td>\n' +
            '                                            <div class="btn-group" role="group" aria-label="Basic example">\n' +
            '                                                <button type="button" class="btn btn-success" onclick="getDataUser(' + id + ')">Edit</button>\n' +
            '                                                <button type="button" class="btn btn-danger"\n' +
            '                                                        onclick="deleteDataUser(' + id + ')">Delete\n' +
            '                                                </button>\n' +
            '                                            </div>\n' +
            '                                        </td>\n' +
            '                                    </tr>');
    }

    function resetForm() {
        $('input[name="name"]').val('');
        $('input[name="email"]').val('');
        $('input[name="gender"]:checked').val();
        $("textarea[name='address']").val('');
        $("input[name='phone']").val('');
    }
</script>

</body>

</html>
