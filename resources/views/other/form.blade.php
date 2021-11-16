<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCESS & CHANGE REQUEST FORM</title>
    <link rel="stylesheet" href="{{asset('/css/other.css')}}">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="/cleaning.js" defer></script> -->

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.14.0/sweetalert2.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.14.0/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
<!--container-->

    <form  id="form_other" class="form-group" enctype="multipart/form-data" method="POST" action="{{url('other.form')}}">
        @csrf
        <!--form-->

        <div  id="form">
        <!--form-->

            <div class="center">
                <h1 class="text-white">Access Request Form</h1>
                <h2 class="text-white">Nomor: FRM-BTS-DCDV-2021-03</h2>
            </div>

            <div id="input">
                <!--input-->
                <div id="input4">
                    <!--input4-->

                    <input type="text" id="input-group" style="background: black;" name="other_work" placeholder="Purpose Of Work">
                    <p>
                    <h6 class="text-white">Request Validity (Berlakunya Permintaan)</h6>
                    <input type="date" name="val_from" id="val_from">
                    <h6 class="text-white"></h6>
                    <h6 class="text-white">To (Sampai)</h6>
                    <input type="date" name="val_to" id="val_to">
                    <h6 class="text-white"></h6>
                    <p>
                    <h6 for="survey_area" style="text-align: left;" class="text-white">Authorized Entry Area </h6>
                    <table class="table table-borderless">
                        <tr>
                            <td>
                                <label class="radiobutton_container">
                                <input id="1" name="server" type="checkbox" value="1">
                                <span class="radiobutton_mark"></span>
                                Server Room
                                </label>
                            </td>
                            <td>
                                <label class="radiobutton_container">
                                <input id="1" name="genset" type="checkbox" value="1">
                                <span class="radiobutton_mark"></span>
                                Generator Room
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="radiobutton_container">
                                <input id="1" name="mmr1" type="checkbox" value="1">
                                <span class="radiobutton_mark"></span>
                                MMR 1
                                </label>
                            </td>
                            <td>
                                <label class="radiobutton_container">
                                <input id="1" name="panel" type="checkbox" value="1">
                                <span class="radiobutton_mark"></span>
                                Panel Room
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="radiobutton_container">
                                <input id="1" name="mmr2" type="checkbox" value="1">
                                <span class="radiobutton_mark"></span>
                                MMR 2
                                </label>
                            </td>
                            <td>
                                <label class="radiobutton_container">
                                <input id="1" name="batre" type="checkbox" value="1">
                                <span class="radiobutton_mark"></span>
                                Battery Room
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="radiobutton_container">
                                <input id="1" name="ups" type="checkbox" value="1">
                                <span class="radiobutton_mark"></span>
                                UPS Room
                                </label>
                            </td>
                            <td>
                                <label class="radiobutton_container">
                                <input id="1" name="fss" type="checkbox" value="1">
                                <span class="radiobutton_mark"></span>
                                FSS Room
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="radiobutton_container">
                                <input id="1" name="2nd" type="checkbox" value="1">
                                <span class="radiobutton_mark"></span>
                                Office 2nd Fl
                                </label>
                            </td>
                            <td>
                                <label class="radiobutton_container">
                                <input id="1" name="3rd" type="checkbox" value="1">
                                <span class="radiobutton_mark"></span>
                                Office 3rd Fl
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="radiobutton_container">
                                <input id="1" name="trafo" type="checkbox" value="1">
                                <span class="radiobutton_mark"></span>
                                Trafo Room
                                </label>
                            </td>
                            <td>
                                <label class="radiobutton_container">
                                <input id="1" name="yard" type="checkbox" value="1">
                                <span class="radiobutton_mark"></span>
                                Yard
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="radiobutton_container">
                                <input id="1" name="parking" type="checkbox" value="1">
                                <span class="radiobutton_mark"></span>
                                Parking Lot
                                </label>
                            </td>
                            <td>
                                <label class="radiobutton_container">
                                <input id="1" type="checkbox">
                                <span class="radiobutton_mark"></span>
                                <textarea id="1" name="other">Other</textarea>
                            </td>
                        </tr>
                      </table>
                </div>
            </div>
        </div>

        <div  id="form2">

            <div class="center">
            <h1 class="text-white">Change Request Form</h1>
            <h2 class="text-white">Nomor: FRM-BTS-DCDV-2021-03</h2>
            </div>

            <div id="input">
                    <!--input-->
                <div id="input4">
                        <!--input4-->
                    <h4 class="text-white">Description of Scope of Work (Deskripsikan Pekerjaan)</h4>
                        <input type="text" id="input-group" placeholder="Fill in here" name="other_describ">
                    <p>

                    {{-- Detail Time & Operation --}}
                    <h4 class="text-white">Detail Time & Operation (Detail Waktu & Operasi) </h4>

                        <font color="red" size="2">*Minimal Mengisi 2</font>
                    </p>
                        <input type="time" id="input-group20" style="background: white; " name="time_1">
                        <input id="input-group14" style="background: black ;" name="item_1" placeholder="Item">
                        <input id="input-group8" style="background: black ;" name="procedure_1" placeholder="Working Procedure">

                        <input type="time" id="input-group20" style="background: white; " name="time_2">
                        <input id="input-group14" style="background: black ;" name="item_2" placeholder="Item">
                        <input id="input-group8" style="background: black ;" name="procedure_2" placeholder="Working Procedure">

                        <input type="time" id="input-group20" style="background: white; " name="time_3">
                        <input id="input-group14" style="background: black ;" name="item_3" placeholder="Item">
                        <input id="input-group8" style="background: black ;" name="procedure_3" placeholder="Working Procedure">

                        <input type="time" id="input-group20" style="background: white; " name="time_4">
                        <input id="input-group14" style="background: black ;" name="item_4" placeholder="Item">
                        <input id="input-group8" style="background: black ;" name="procedure_4" placeholder="Working Procedure">

                        <input type="time" id="input-group20" style="background: white; " name="time_5" placeholder="">
                        <input id="input-group14" style="background: black ;" name="item_5" placeholder="Item">
                        <input id="input-group8" style="background: black ;" name="procedure_5" placeholder="Working Procedure">

                    {{-- Risk Service Area Impact --}}

                    <h4 class="text-white mt-3">Risk and Service Area Impact (Resiko dan Dampak Area Servis)</h4>

                    <font class="mt-2" color="red" size="2">*Minimal Mengisi 2</font>
                    <input class="form-control mt-2" name="risk_1" placeholder="Risk Description">
                    <input name="possibility_1" placeholder="Possibility">
                    <select name="impact_1">
                        <option value="">Impact</option>3
                        <option value="High">High</option>
                        <option value="Medium">Medium</option>
                        <option value="Low">Low</option>
                    </select>
                    <input name="mitigation_1" placeholder="Mitigation Plan">

                    <h4 class="text-white mt-3">Testing and Verification</h4>
                    <input type="text" class="form-control" placeholder="Fill in here (isi disini)" name="testing">

                    <h4 class="text-white mt-3">Rollback Plan</h4>
                    <input type="text" class="form-control" placeholder="Fill in here (isi disini)" name="rollback">

                    <h4 class="pic">Person in charge 1</h4>
                        <input class="nama @error('nama1') is-invalid @enderror" required autocomplete="nama1" type="text" name="name_1" placeholder="Name">
                        @error('nama1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input class="nama @error('company1') is-invalid @enderror" required autocomplete="company1" type="text" name="company_1" placeholder="Company">
                        @error('company1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input class="nama @error('dept1') is-invalid @enderror" required autocomplete="dept1" type="text" name="department_1" placeholder="Department">
                        @error('dept1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input class="nama @error('respon1') is-invalid @enderror" required autocomplete="respon1" type="text" name="respon_1" placeholder="Responsibility">
                        @error('respon1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input class="personil @error('phone1') is-invalid @enderror" required autocomplete="phone1" type="text" name="phone_1" placeholder="Phone number">
                        @error('phone1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="number" class="personil @error('id1') is-invalid @enderror" required autocomplete="id1"  name="id_1" placeholder="ID Number">
                        @error('id1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input class="ktp" id="ktp" type="file" multiple="multiple" name="ktp_1" accept="image/*"/>

                    <h4 class="pic">Person in charge 2</h4>
                        <input class="nama" type="text" name="name_2" placeholder="Name">
                        <input class="nama" type="text" name="company_2" placeholder="Company">
                        <input class="nama" type="text" name="department_2" placeholder="Department">
                        <input class="nama" type="text" name="respon_2" placeholder="Responsibility">
                        <input class="personil" type="text" name="phone_2" placeholder="Phone number">
                        <input type="number" class="personil"  name="id_2" placeholder="ID Number">
                        <input class="ktp" id="ktp" type="file" multiple="multiple" name="ktp_2" accept="image/*"/>

                    <h4 class="pic">Person in charge 3</h4>
                        <input class="nama" type="text" name="name_3" placeholder="Name">
                        <input class="nama" type="text" name="company_3" placeholder="Company">
                        <input class="nama" type="text" name="department_3" placeholder="Department">
                        <input class="nama" type="text" name="respon_3" placeholder="Responsibility">
                        <input class="personil" type="text" name="phone_3" placeholder="Phone number">
                        <input type="number" class="personil"  name="id_3" placeholder="ID Number">
                        <input class="ktp" id="ktp" type="file" multiple="multiple" name="ktp_3" accept="image/*"/>

                    <h4 class="pic">Person in charge 4</h4>
                        <input class="nama" type="text" name="name_4" placeholder="Name">
                        <input class="nama" type="text" name="company_4" placeholder="Company">
                        <input class="nama" type="text" name="department_4" placeholder="Department">
                        <input class="nama" type="text" name="respon_4" placeholder="Responsibility">
                        <input class="personil" type="text" name="phone_4" placeholder="Phone number">
                        <input type="number" class="personil"  name="id_4" placeholder="ID Number">
                        <input class="ktp" id="ktp" type="file" multiple="multiple" name="ktp_4" accept="image/*"/>

                    <h4 class="pic">Person in charge 5</h4>
                        <input class="nama" type="text" name="name_5" placeholder="Name">
                        <input class="nama" type="text" name="company_5" placeholder="Company">
                        <input class="nama" type="text" name="department_5" placeholder="Department">
                        <input class="nama" type="text" name="respon_5" placeholder="Responsibility">
                        <input class="personil" type="text" name="phone_5" placeholder="Phone number">
                        <input type="number" class="personil"  name="id_5" placeholder="ID Number">
                        <input class="ktp" id="ktp" type="file" multiple="multiple" name="ktp_5" accept="image/*"/>
                </div>
            </div>
            <button type="submit" class="btn btn-warning text-white btn-submit">Submit Form</button>
            <button type="reset" class="btn btn-primary">Clear Form</button>
        </div>

    <!--container-->
    </form>
</div>

</body>

{{-- <script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
        }
    });

    $(".btn-submit").click(function(e){

        e.preventDefault();

        var datastring = $("#form_other").serialize();
        $.ajax({
            type:'POST',
            url:"{{url('other.form')}}",
            data: datastring,
            error: function (request, error) {
                console.log(error)
                alert(" Can't do because: " + error);
            },
            success:function(data){
                console.log(data);
                if(data.status == 'SUCCESS'){
                    Swal.fire({
                        title: "Success!",
                        text: 'Data Saved',
                        type: "success",
                    }).then(function(){
                        location.href = "{{url("/home")}}";
                    });

                }else if(data.status == 'FAILED'){

                    Swal.fire({
                        title: "Failed!",
                        text: 'Saving Data Failed',
                    }).then(function(){
                        location.reload();
                    });
                }
            }
        });
    });
</script> --}}
</html>
