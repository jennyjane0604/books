<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title_text')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            height: 100vh;
            width: 100%;
        }

        nav {
            padding-left: 2rem;


        }

        nav td {
            text-align: center;
            width: 200px;
        }

        nav td a {
            display: inline-block;
            width: 200px;
        }

        nav td:hover {
            background-color: #636b6f;
        }

        nav td:hover a {
            color: #fff;
            text-decoration: none;
        }

        .pagination {
            justify-content: center;

        }

        table#messagestable tr.table-head {
            background-color: #1b1e21;
            color: #fff;
        }

        table#messagestable tr:not(.table-head):hover {
            background-color: #00f;
            color: #fff;
        }

    </style>
</head>
<body>
    <section>
        <nav>
            <table>
               <tr>
                  <td>
                     <a href="{{ url('/') }}">Home</a>
                  </td>
                  <td>
                     <a href="{{ url('/create') }}">Add</a>
                  </td>
                  <td>
                    <a href="{{ url('/edit') }}">Update</a>
                 </td>
                 <td>
                    <a href="{{ url('/list') }}">List</a>
                 </td>
                 <td>
                    <a href="{{ url('/destroy') }}">Delete</a>
                 </td>
               </tr>
            </table>
        </nav>
        <section>
            @yield('pageContent')
        </section>
    </section>
</body>
</html>
