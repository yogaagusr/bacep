<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log Permit</title>

    {{-- bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- bootstrap datatable --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>
    <link rel="stylesheet" href="{{asset('css/log_visitor.css')}}" type="text/css">
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark navbar-bg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('gambar/approval/logo_approve.png')}}" alt="" style="width: 170px; height:70px" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-5">
                        <a class="nav-link" aria-current="page" href="{{url('/home')}}">Home</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link" href="{{ url('home')}}">About Us</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link" href="{{ url('logall')}}">Log Permit</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item mx-3">
                        <a href="#"><img src="{{asset('gambar/log-visitor/lonceng.png')}}" alt=""></a>
                    </li>
                    <li class="nav-item mx-3">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                            <img src="{{asset('gambar/log-visitor/logout.png')}}" class="img-fluid" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-1">
            <div class="card-header py-3">
                <h4 class="judul text-center">Log Form IT Team</h4>
            </div>

            <div class="card-body">
                <div class="container-fluid">
                    <div class="card-body">
                        <a type="button" class="btn btn-sm btn-primary mx-1 my-2" href="{{url('it/form/show')}}">Create Permit IT</a>
                        <a type="button" class="btn btn-sm btn-info mx-1 my-2" href="{{url('logall')}}">Log Permit Tim IT</a>
                        <a type="button" class="btn btn-sm btn-danger mx-1 my-2" href="{{ url('')}}">Permit Reject</a>
                        {{-- <a type="button" class="btn btn-sm btn-success mx-1 my-2" href="{{ url('cleaning/action/export')}}">Export PDF</a>
                        <a type="button" class="btn btn-sm btn-success mx-1 my-2" href="#">Export Excel</a> --}}
                    </div>
                </div>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{-- Tabel It --}}
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="it_table" width="100%" cellspacing="0">
                            <thead>
                                <tr class="judul-table text-center">
                                    <th>No.</th>
                                    <th>Date of Visit</th>
                                    <th>Visitor Name</th>
                                    <th>Checkin</th>
                                    <th>Checkout</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="isi-table text-center">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- modal logout--}}
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="{{ route('logout') }}" type="button" class="btn btn-primary sm"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- date picker --}}
    {{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}

    <!-- Momentjs -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> --}}

    {{-- datatable --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
    <script>
        $(function() {
            $('#it_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url('/it/yajra/show')}}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'visit', name: 'visit' },
                    { data: 'name', name: 'name' },
                    { data: 'checkin_personil', name: 'checkin_personil' },
                    { data: 'checkout_personil', name: 'checkout_personil' },
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });
    </script>

</body>
</html>
