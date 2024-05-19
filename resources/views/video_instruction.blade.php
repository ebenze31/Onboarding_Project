@extends('layouts.theme_login')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.js" integrity="sha512-9KkIqdfN7ipEW6B6k+Aq20PV31bjODg4AA52W+tYtAE0jE0kMx49bjJ3FgvS56wzmyfMUHbQ4Km2b7l9+Y/+Eg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.css" integrity="sha512-bs9fAcCAeaDfA4A+NiShWR886eClUcBtqhipoY5DM60Y1V3BbVQlabthUBal5bq8Z8nnxxiyb1wfGX2n76N1Mw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.js" integrity="sha512-Zt7blzhYHCLHjU0c+e4ldn5kGAbwLKTSOTERgqSNyTB50wWSI21z0q6bn/dEIuqf6HiFzKJ6cfj2osRhklb4Og==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.css" integrity="sha512-hvNR0F/e2J7zPPfLC9auFe3/SE0yG4aJCOd/qxew74NN7eyiSKjr7xJJMu1Jy2wf7FXITpWS1E/RY8yzuXN7VA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    #header-text-login {
        display: none;
    }

    label {
        color: #7D7D7D;
    }

    .header-instruction {
        align-items: center;
        color: #fff;
        font-weight: 100;
    }

    .video-preview {
        border: #fff 1px solid;
        margin-top: 25px;
        max-width: 888px;
        -webkit-border-radius: 5px;
        border-radius: 5px;
        -moz-border-radius: 5px;
        -khtml-border-radius: 5px;
    }

    .infomation {
        display: flex;
        align-items: center;
        justify-content: center;
        color: #002449;
        margin-top: 10px;



    }

    .infomation .detail {
        font-size: 12px;
        margin-left: 10px;
    }

    .header-infomation {}

    .sub-header-infomation {
        color: #002449;
        font-weight: bold;

        font-size: 16px;
    }

    .detail-register li {
        color: #002449;


    }

    .modal-border {
        -webkit-border-radius: 10px;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -khtml-border-radius: 10px;
    }

    .header-info {
        color: #fff;
        margin: 30px 0 10px 0;
        font-size: 14;
        letter-spacing: 0px;
    }

    .btn-copy {
        width: auto;
        font-size: 14px;
        color: #fff;
        margin-bottom: 16px;
    }

    .header-upload-info {
        color: #fff;
        padding-top: 150px;
    }

    .btn-upload {
        background-color: #005CD3;
        color: #fff;
    }

    .section-info {
        display: block;
        background-color: rgb(255, 255, 255, .3);
        border-radius: 10px;
    }
    @media (width <1200px) {
        .detail-info {
            width: 100%;
            padding: 20px 20px;
        }
    }
    @media (width >=1200px) {
        #header-text-login {
            width: 40% !important;
        }

        .section-info {
            margin-top: 40px;
            display: flex !important;
        }

        .detail-info {
            width: 50%;
            padding: 20px 20px;
        }
    }

    .detail-info ol li {
        font-size: 13px;
        font-weight: lighter;
    }

    .modal-success {
        margin: 10px 60px;
    }

    .label-upload-slip {
        border-radius: 50px;
        color: #949494;
    }

    .after-upload {
        margin-top: 15px;
        color: #A0A0A0;
        font-size: 10px;
        align-items: center;
    }

    .container-center {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 0;
        margin: 0;
    }


    .shape {
        height: 0;
    }

    .shape:before {
        content: "";
        position: absolute;
        top: calc(55% - 50px);
        right: -50px;
        transform: translate(-50%, -50%);
        background-color: tran;
    
        height: 100px;
        width: 100px;
        border-radius: 50px 0 50px 0;
        box-shadow: 0 50px 0 0 #5d6dd6;
    }

    .top-section {
        height: 55vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #2a3c68;
    }

    .second-section {
        height: 45vh;
        width: 100%;
        background: rgb(98, 115, 221);
        background: -moz-linear-gradient(183deg, rgba(98, 115, 221, 1) 0%, rgba(36, 50, 134, 1) 100%);
        background: -webkit-linear-gradient(183deg, rgba(98, 115, 221, 1) 0%, rgba(36, 50, 134, 1) 100%);
        background: linear-gradient(183deg, rgba(98, 115, 221, 1) 0%, rgba(36, 50, 134, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#6273dd", endColorstr="#243286", GradientType=1);
        border-radius: 50px 0 0 0;
        -webkit-border-radius: 50px 0 0 0;
        -moz-border-radius: 50px 0 0 0;
        -ms-border-radius: 50px 0 0 0;
        -o-border-radius: 50px 0 0 0;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .btn-submit-login{
        width: 100%;
        border-radius:  50px;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        -ms-border-radius: 50px;
        -o-border-radius: 50px;
        color: #0E2B81;
        padding:  .7rem 0;
        border: none;
        margin-top: 40px;
        margin-bottom: 30px;
        font-size: 16px;
        font-weight: bolder;
    }

    .btn-submit-login:disabled{
        color: #57759C;
        background-color: rgb(248, 248, 248,0.61);
        
    }
</style>
<div class="container text-white p-0" style="position: relative;">
    <div class="top-section">
        <div class="text-center">
        <img src="{{ url('/img/logo/logo.png') }}" style="width:99px">
            <p style="font-size: 32px;font-weight: bolder;margin: 0;">Allianz Journey</p>
            <p style="font-size: 10px;font-weight: bold;margin: 0;">ALLIANZ ON-BOARDING WEB</p>

            <div class="d-flex-justify-content-center w-100 p-3">
                <video src="https://www.franchisebuilder2024.com/video/The%20Franchise%20Builder_Final.mp4" controls autoplay loop muted style="width:100%;border-radius: 10px; max-width: 700px;" class="video-preview"></video>
            </div>
        </div>

    </div>
    <div class="shape"></div>
    <div class="second-section">
        <div class="text-center px-5 h-100 d-flex align-items-center">

            <div>

                <p style="font-size: 20px;margin: 5px;">ยินดีต้อนรับ !</p>
                <p style="font-size: 23px;margin: 30px 0 30px 0;">{{Auth::user()->name}}</p>
                <p class="m-0">เข้าสู่เว็บ Allianz Journey</p>
                <p>แหล่งรวมความรู้และข่าวสารอัพเดตจาก Allianz</p>
    
               
                <button type="submit" id="btn_dont_show_welcome" class="btn-submit-login" disabled>
                    ถัดไป
                </button>

                <div class="d-flex align-items-center justify-content-center">
                    <input name="check_dont_show_welcome" id="check_dont_show_welcome" class="form-check-input font-20 m-0 p-o" type="checkbox" value="" aria-label="Checkbox for following text input" onchange="validate_condition()">
                    <label for="check_dont_show_welcome" class="ms-2 h-100 mt-1" style="color: #989898;">ไม่แสดงหน้านี้อีก</label>
                </div> 
            </div>
        </div>
    </div>
</div>
<script>
    function validate_condition() {
        if (document.getElementById('check_dont_show_welcome').checked) {
            document.querySelector('#btn_dont_show_welcome').disabled = false;
        } else {
            document.querySelector('#btn_dont_show_welcome').disabled = true;
        }
    }
</script>
<!-- 
<div class="container-center text-white d-none">
    <div style="width: 90vw;">
        <h4 class="header-instruction text-center mt-3">Video Instruction</h4>
        <div class="container section-info pb-3">
            <div>
                <div class="d-flex-justify-content-center w-100">
                    <video src="https://www.franchisebuilder2024.com/video/The%20Franchise%20Builder_Final.mp4" controls autoplay loop muted style="width:100%;" class="video-preview"></video>
                </div>
            </div>

            <div class="detail-info d-flex justify-content-center align-items-center">
                <div>
                     <h2 class="header-info text-center">
                        ยินดีต้อนรับ
                    </h2>
                    <p class="text-center">
                        คุณ <span style="color: #10c6e3;">{{ Auth::user()->name ? Auth::user()->name : 'ไม่พบชื่อ'}}</span> <span style="color: #10c6e3;">{{ Auth::user()->lastname ? Auth::user()->lastname : 'ไม่พบนามสกุล'}}</span>
                    </p>

                    <p class="text-center">
                        เข้าสู่ครอบครัว Alianz
                    </p>
                </div>
               
            </div>
        </div>

        <style>
            .btn-submit {
                -webkit-border-radius: 5px;
                border-radius: 5px;
                -moz-border-radius: 5px;
                -khtml-border-radius: 5px;
                font-size: 16px;
                margin-top: 15px;
                padding: 5px 40px;
                background-color: #005CD3;
                color: #fff;
            }

            .btn-submit:hover {
                border: 1px solid #00E0FF;
                box-shadow: 0px 0px 15px 1px #00FBFF;
                color: #fff;

            }

            .btn-cancel {
                font-size: 16px;
                margin-top: 15px;
                padding: 5px 40px;
                -webkit-border-radius: 5px;
                border-radius: 5px;
                -moz-border-radius: 5px;
                -khtml-border-radius: 5px;

                background-color: #FF3838;
                color: #fff;
            }

            .img-modal {
                margin: 20px 0px;
                width: 120px;
            }

            .modal-text-header {
                font-size: 16px;
            }

            .modal-detail {
                font-size: 12px;
            }

            .accept-text-header {
                color: #128DFF;
            }

            .btn-outline-submit {
                border: #005CD3 1px solid;
                color: #005CD3;

                -webkit-border-radius: 5px;
                border-radius: 5px;
                -moz-border-radius: 5px;
                -khtml-border-radius: 5px;
                font-size: 16px;
                margin-top: 15px;
                padding: 5px 40px;
            }

            .text-agree {
                color: #00377F;
            }

            #checkRegis {
                accent-color: #002449;
                font-size: 18px;
            }

            .text-warn {
                font-size: 12px;
                padding: 0 30px;
            }
        </style>
        <div class="d-flex justify-content-center mt-4 mb-3">
            <a href="{{ url('/profile') }}" class="btn btn-submit mx-3" type="button">Next</a>
        </div>
    </div>
</div> -->

<!-- Modal -->
<!-- <div class="modal fade" id="modalAcceptRegis" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <img src="{{ url('/img/icon/ask.png') }}" class="img-modal text-center">
                </div>

                <h6 class="text-center accept-text-header">
                    <b>คุณต้องการเข้าร่วมกิจกรรมใช่หรือไม่ ?</b>
                </h6>
                <p class="text-center modal-detail">ยืนยันการเข้าร่วม Franchise builder 2024 และยินยอมให้บริษัทหักชำระค่าบริการ</p>
                <div class="text-center mt-5">
                    <input type="checkbox" name="" id="checkRegis" onchange="AcceptRegister()">
                    <span class="text-agree">ฉันยอมรับเงื่อนไขเเละข้อกำหนด</span>
                </div>

                <div class="d-flex justify-content-center ">
                    <button type="submit" id="btnAcceptRegis" class="btn btn-outline-submit mx-3" disabled onclick="location.href='{{ url('first_profile?type=first_profile') }}'">OK</button>
                    <button type="button" class="btn btn-cancel px-4  " data-dismiss="modal">Cancel</button>
                </div>
                <a class="infomation" data-toggle="modal" data-target="#modal-infomation">
                    <div class=" m-0 p-0">

                        <i class="fa-solid fa-circle-info icon m-0 p-0"></i>
                    </div>
                    <span class="detail">กดเพื่อดูข้อมูลเพิ่มเติม</span>
                </a>
            </div>
        </div>
    </div>
</div> -->

<!-- <script>
    function AcceptRegister() {
        let checkRegis = document.getElementById("checkRegis");

        if (checkRegis.checked) {
            document.getElementById("btnAcceptRegis").classList.remove('btn-outline-submit');
            document.getElementById("btnAcceptRegis").classList.add('btn-submit');
            document.getElementById("btnAcceptRegis").disabled = false;
        } else {
            document.getElementById("btnAcceptRegis").classList.add('btn-outline-submit');
            document.getElementById("btnAcceptRegis").classList.remove('btn-submit');
            document.getElementById("btnAcceptRegis").disabled = true;
        }
    }
</script>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>

<script>
    function check_form() {
        if ($("#form_upload_info")[0].checkValidity()) {

            $('#modal_upload_info_success').modal('show');

        } else {
            // Validate Form
            $("#form_upload_info")[0].reportValidity();
            event.preventDefault();
        }
    }
</script> -->

@endsection