<!DOCTYPE html>
<html>
<head>
    <title>Cleaning Data Center</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 6.5pt;
        }

        .nmr{
            font-size:7pt;
            text-align: center;
        }

        .center{
            text-align: center;
            font-size: 9pt;

        div.page_break + div.page_break{
            page-break-before: always;
        }
        }

        @page {
            margin-top: 0.5cm;
            margin-bottom: 0.5cm;
        }

    </style>

<div class="page_break">
        <h5 class="center">ACCESS REQUEST FORM</h5>
        <h5 class="nmr">Nomor : ARF/001/DCDV/XI/2019</h5>

    <table class='table table-bordered' width="600px" height="30px">
        <tr height="10px">
            <td width="100px"><b>Time of Request</td>
            <td width="500px"><b>: {{$cleaning->created_at}}</td>
        </tr>
        <tr height="10px">
            <td width="100px"><b>No. </td>
            <td width="500px"><b>: {{$cleaning->cleaning_id}}</td>
        </tr>
        <tr height="10px">
            <td width="100px"><b>Purpose of Work</td>
            <td width="500px"><b>: {{$cleaning->cleaning_work}}</td>
        </tr>
    </table>

    <table class='table table-bordered' width="600px" height="30px">
        <tr height="10px">
            <td colspan="2"><b>Bali Tower Requestor </b></td>
        </tr>
        <tr height="10px">
            <td width="70px"><b>Name</td>
            <td width="230px"><b>: Badai Sino Jendrang</td>
            <td width="70px"><b>Phone Number</td>
            <td width="230px"><b>: 0822-1028-2228</td>
        </tr>
        <tr height="10px">
            <td width="70px"><b>Department</td>
            <td colspan="2"><b>: Building Management</td>
    </table>

    <table class='table table-bordered' width="600px" height="40px">
        <tr height="10px">
            <td colspan="2"><b>VISITOR</b></td>
        </tr>
        <tr height="10px">
            <td width="70px"><b>Name</td>
            <td width="230px"><b>: {{$cleaning->cleaning_name_1}} & {{$cleaning->cleaning_name_2}}</td>
            <td width="70px"><b>ID</td>
            <td width="230px"><b>: {{$cleaning->cleaning_id_1}} & {{$cleaning->cleaning_id_2}}</td>
        </tr>
        <tr height="10px">
            <td width="70px"><b>Company</td>
            <td width="230px"><b>: {{$cleaning->cleaning_pt_1}} & {{$cleaning->cleaning_pt_2}}</td>
            <td width="70px"><b>Phone Number</td>
            <td width="230px"><b>: {{$cleaning->cleaning_number_1}} & {{$cleaning->cleaning_number_2}}</td>
        </tr>
        <tr height="10px">
            <td><b>Department</td>
            <td colspan="2"><b>: Cleaner</td>
        </tr>
    </table>

    <table class='table table-bordered' width="600px" height="175px">
        <tr height="10px">
            <td width="150px" colspan="2"><b>Authorized Entry Area :</b></td>
            <td width="150px"><b>Access Type : </b></td>
        </tr>
        <tr height="10px">
            <td width="150px">
                @if($cleaning->server == '1')
                <img src="{{ public_path("gambar/checkbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   Server Room
                @else
                <img src="{{ public_path("gambar/uncheckbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   Server Room
                @endif
            </td>
            <td width="150px">
                @if($cleaning->generator == '1')
                <img src="{{ public_path("gambar/checkbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   Generator Room
                @else
                <img src="{{ public_path("gambar/uncheckbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   Generator Room
                @endif
            </td>
            <td><b>General Access</td>
            <td><img src="{{ public_path("gambar/uncheckbox.png") }}" alt="" style="width: 20px; height: 8px;"></td>
        </tr>
        <tr height="10px">
            <td width="150px">
                @if($cleaning->mmr1 == '1')
                <img src="{{ public_path("gambar/checkbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   MMR 1
                @else
                <img src="{{ public_path("gambar/uncheckbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   MMR 1
                @endif
            </td>
            <td width="150px">
                @if($cleaning->panel == '1')
                <img src="{{ public_path("gambar/checkbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   Panel Room
                @else
                <img src="{{ public_path("gambar/uncheckbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   Panel Room
                @endif
            </td>
            <td><b>Limited Access</td>
            <td><img src="{{ public_path("gambar/uncheckbox.png") }}" alt="" style="width: 20px; height: 8px;"></td>
        </tr>
        <tr height="10px">
            <td width="150px">
                @if($cleaning->mmr2 == '1')
                <img src="{{ public_path("gambar/checkbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   MMR 2
                @else
                <img src="{{ public_path("gambar/uncheckbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   MMR 2
                @endif
            </td>
            <td width="150px">
                @if($cleaning->battery == '1')
                <img src="{{ public_path("gambar/checkbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   Battery Room
                @else
                <img src="{{ public_path("gambar/uncheckbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   Battery Room
                @endif
            </td>
            <td><b>Escorted Access</td>
            <td><img src="{{ public_path("gambar/checkbox.png") }}" alt="" style="width: 20px; height: 8px;"></td>
        </tr>
        <tr height="10px">
            <td width="150px">
                @if($cleaning->ups == '1')
                <img src="{{ public_path("gambar/checkbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   UPS Room
                @else
                <img src="{{ public_path("gambar/uncheckbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   UPS Room
                @endif
            </td>
            <td width="150px">
                @if ($cleaning->fss == '1')
                <img src="{{ public_path("gambar/checkbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   FSS Room
                @else
                <img src="{{ public_path("gambar/uncheckbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   FSS Room
                @endif
            </td>
            <td>  </td>
            <td>  </td>
        </tr>
        <tr height="10px">
            <td width="150px"><img src="{{ public_path("gambar/uncheckbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   Office 2nd FL</td>
            <td width="150px"><img src="{{ public_path("gambar/uncheckbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   Office 3rd FL</td>
            <td width="150px"><b>Validity :</td>
            </tr>
        <tr height="10px">
            <td width="150px">
                @if ($cleaning->trafo == '1')
                <img src="{{ public_path("gambar/checkbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   Trafo Room
                @else
                <img src="{{ public_path("gambar/uncheckbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   Trafo Room
                @endif
            </td>
            <td width="150px"><img src="{{ public_path("gambar/uncheckbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   Yard</td>
            <td><b>From</td>
            <td><b> : {{$cleaning->validity_from}}</td>
        </tr>
        <tr height="10px">
            <td width="150px">
                @if($cleaning->staging == '1')
                <img src="{{ public_path("gambar/checkbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   Others : Staging Room
                @else
                <img src="{{ public_path("gambar/uncheckbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   Others :
                @endif
            </td>
            <td width="150px"><img src="{{ public_path("gambar/uncheckbox.png") }}" alt="" style="width: 20px; height: 8px;"><b>   Parking Lot</td>
            <td><b>To</td>
            <td><b> : {{$cleaning->validity_to}}</td>
        </tr>
    </table>

    {{-- <thead>
        <tr height="10px">
            <th>Requestor By</th>
            <th>Security</th>
            <th>Approved By</th>
        </tr>
    </thead> --}}

    <table class='table table-bordered' width="600px" height="80px">
        <tr>
            @switch($lasthistoryC->status)
                @case('created')
                    <td width="200px" height="40px"> </td>
                    @break

                {{-- @case('checked')
                    <td><img src="{{ public_path("gambar/approved.png") }}" alt="" style="width: 100px; height: 50px;"></td>
                    @break --}}

                @case('secured')
                        <td width="200px" height="40px"></td>
                        <td width="200px" class="nmr"><img src="{{ public_path("gambar/Checked.png") }}" alt="" style="width: 80px; height: 40px;"></td>
                        <td width="200px" height="40px"></td>
                        @break

                @case('final')
                    <td width="200px" height="40px"></td>
                    <td width="200px" class="nmr"><img src="{{ public_path("gambar/Checked.png") }}" alt="" style="width: 80px; height: 40px;"></td>
                    <td width="200px" class="nmr"><img src="{{ public_path("gambar/approved.png") }}" alt="" style="width: 80px; height: 40px;"></td>
                    @break
            @endswitch
        </tr>

        <tr height="7px">
            @if($lasthistoryC->status == 'created')
            <td width="200px" class="nmr"><strong>Badai Sino Jendrang</strong></td>
            <td width="200px" class="nmr"><strong></strong></td>
            <td width="200px" class="nmr"><strong></strong></td>

            @elseif($lasthistoryC->status == 'reviewed')
            <td width="200px" class="nmr"><strong>Badai Sino Jendrang</strong></td>
            <td width="200px" class="nmr"><strong></strong></td>
            <td width="200px" class="nmr"><strong></strong></td>

            @elseif($lasthistoryC->status == 'checked')
            <td width="200px" class="nmr"><strong>Badai Sino Jendrang</strong></td>
            <td width="200px" class="nmr"><strong></strong></td>
            <td width="200px" class="nmr"><strong></strong></td>

            @elseif($lasthistoryC->status == 'secured')
            <td width="200px" class="nmr"><strong>Badai Sino Jendrang</strong></td>
            <td width="200px" class="nmr"><strong>{{ $cleaningHistory[2]->name }}</strong></td>
            <td width="200px" class="nmr"><strong></strong></td>

            @elseif($lasthistoryC->status == 'final')
            <td width="200px" class="nmr"><strong>Badai Sino Jendrang</strong></td>
            <td width="200px" class="nmr"><strong>{{ $cleaningHistory[2]->name }}</strong></td>
            <td width="200px" class="nmr"><strong>{{ $cleaningHistory[3]->name }}</strong></td>
            @endif
        </tr>

        <tr>
            <td width="200px" class="nmr"><b>Requestor</td>
            <td width="200px" class="nmr"><b>Security</td>
            <td width="200px" class="nmr"><b>Dept. Head Data Center</td>
        </tr>
    </table>

            <h5 class="nmr">On public holiday signatory will be handled by appointed Data Center Operation Shift Engineer on duty</h5>
            <h5 class="nmr">**(Pada hari libur Nasional tanda tangan akan diwakilkan kepetugas operasional yang ditunjuk)</h5>


</div>
        <h5 class="center">CHANGE REQUEST FORM</h5>
        <h5 class="nmr">Nomor : CRF/001/DCDV/XI/2019</h5>

</body>
</html>
