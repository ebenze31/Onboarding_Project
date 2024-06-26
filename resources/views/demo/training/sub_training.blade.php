@extends('layouts.theme_user')
@section('content')
<style>
    .carousel-fav-course .item {
        height: 311px;
        min-width: 311px;
        color: #fff;

    }

    .carousel-fav-course .item img {
        width: 100%;
        height: 100%;
        object-fit: contain;

    }

    .owl-theme .owl-dots .owl-dot.active span,
    .owl-theme .owl-dots .owl-dot:hover span {
        background: #003781;
    }
</style>
<div class="container">
    <div class="main-body">
        <div class="row">
            <div class="mt-2">
                <a href="" class="d-flex align-items-center" style="color: #003781; font-size: 18px; font-weight: bolder;">
                    <i class="fa-regular fa-chevron-left me-3"></i> <span class="mt-1">กลับหน้ารวมหลักสูตร/อมรม/สอบ</span>
                </a>
            </div>
            <div class="col-lg-12 mt-3">
                <div class="owl-carousel carousel-fav-course owl-theme">
                    <div class="item">
                        <img src="{{ url('/img/icon/ad.png') }}">
                    </div>
                    <div class="item">
                        <img src="{{ url('/img/icon/ad.png') }}">
                    </div>
                    <div class="item">
                        <img src="{{ url('/img/icon/ad.png') }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-3">

                <style>
                    .carousel-menu-course .item {
                        width: 63px;
                        display: flex;
                        justify-content: center;
                    }

                    .icon-menu-course {
                        width: 63px;
                        height: 63px;
                        background-color: #B0C0D5;
                        border-radius: 50%;
                        -webkit-border-radius: 50%;
                        -moz-border-radius: 50%;
                        -ms-border-radius: 50%;
                        -o-border-radius: 50%;
                        color: #fff;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }
                    .menu-course p{
                        color: #B0C0D5;
                    }
                    .menu-course.active p{
                        color: #003781;
                    }
                    .menu-course.active .icon-menu-course {
                        background-color: #003781;
                    }.carousel-menu-course {
    display: flex !important; /* To override display:block I added !important */
    flex-direction: row;
    justify-content: center; /* To center the carousel */
}
                </style>
                <div class="owl-carousel carousel-menu-course owl-theme">
                    <div class="item ">
                        <div class="menu-course text-center active">
                            <div class="icon-menu-course">
                                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.5978 31C18.7376 31 18.0013 30.6932 17.3891 30.0797C16.7755 29.4674 16.4688 28.7312 16.4688 27.8709V19.5978C16.4688 18.7376 16.7755 18.0013 17.3891 17.3891C18.0026 16.7768 18.7389 16.47 19.5978 16.4688H27.8709C28.7312 16.4688 29.4674 16.7755 30.0797 17.3891C30.6932 18.0013 31 18.7376 31 19.5978V27.8709C31 28.7312 30.6932 29.4674 30.0797 30.0797C29.4674 30.6932 28.7312 31 27.8709 31H19.5978ZM19.5978 14.5312C18.7376 14.5312 18.0013 14.2245 17.3891 13.6109C16.7768 12.9974 16.47 12.2611 16.4688 11.4022V3.12906C16.4688 2.26881 16.7755 1.53256 17.3891 0.920312C18.0013 0.306771 18.7376 0 19.5978 0H27.8709C28.7312 0 29.4674 0.306771 30.0797 0.920312C30.6932 1.53256 31 2.26881 31 3.12906V11.4022C31 12.2624 30.6932 12.9987 30.0797 13.6109C29.4674 14.2245 28.7312 14.5312 27.8709 14.5312H19.5978ZM3.12906 14.5312C2.26881 14.5312 1.53256 14.2245 0.920312 13.6109C0.306771 12.9987 0 12.2624 0 11.4022V3.12906C0 2.26881 0.306771 1.53256 0.920312 0.920312C1.53256 0.306771 2.26881 0 3.12906 0H11.4022C12.2624 0 12.9987 0.306771 13.6109 0.920312C14.2245 1.53256 14.5312 2.26881 14.5312 3.12906V11.4022C14.5312 12.2624 14.2245 12.9987 13.6109 13.6109C12.9974 14.2232 12.2611 14.53 11.4022 14.5312H3.12906ZM3.12906 31C2.26881 31 1.53256 30.6932 0.920312 30.0797C0.306771 29.4674 0 28.7312 0 27.8709V19.5978C0 18.7376 0.306771 18.0013 0.920312 17.3891C1.53256 16.7755 2.26881 16.4688 3.12906 16.4688H11.4022C12.2624 16.4688 12.9987 16.7755 13.6109 17.3891C14.2232 18.0026 14.53 18.7389 14.5312 19.5978V27.8709C14.5312 28.7312 14.2245 29.4674 13.6109 30.0797C12.9987 30.6932 12.2624 31 11.4022 31H3.12906Z" fill="#EBF1FD"/>
                                </svg>
                            </div>
                            <p class="mb-0 mt-2">หลักสูตร</p>
                            <p class="mb-0">ทั้งหมด</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="menu-course text-center">
                            <div class="icon-menu-course ">
                                <svg width="27" height="36" viewBox="0 0 27 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.66699 19.6665L19.0003 19.6665L19.0003 34.0792L14.4806 30.9154C13.7919 30.4333 12.8754 30.4333 12.1867 30.9154L7.66699 34.0792L7.66699 19.6665Z" stroke="#EBF1FD" stroke-width="2"/>
                                    <path d="M25.6667 12.6667C25.6667 19.0623 20.1938 24.3333 13.3333 24.3333C6.47287 24.3333 1 19.0623 1 12.6667C1 6.27106 6.47287 1 13.3333 1C20.1938 1 25.6667 6.27106 25.6667 12.6667Z"  stroke="#EBF1FD" stroke-width="2"/>
                                    <path d="M11.5615 10.7278C11.531 10.7843 11.4754 10.8227 11.4118 10.8312L8.41576 11.229L8.3609 11.2392C8.27786 11.2594 8.20215 11.2994 8.14152 11.3552C8.08088 11.4109 8.03749 11.4804 8.01577 11.5565C7.99405 11.6326 7.99478 11.7127 8.01789 11.7885C8.041 11.8643 8.08565 11.9331 8.1473 11.9879L10.3068 13.9129C10.3591 13.9595 10.3832 14.0302 10.3703 14.099L9.86196 16.8134L9.85565 16.8623C9.85056 16.9409 9.8684 17.0194 9.90733 17.0897C9.94625 17.1599 10.0049 17.2195 10.0772 17.2622C10.1495 17.3049 10.2329 17.3292 10.3189 17.3327C10.4048 17.3362 10.4902 17.3186 10.5664 17.2819L13.2496 15.99C13.3045 15.9636 13.3684 15.9636 13.4233 15.9901L16.1002 17.2819L16.1487 17.3024C16.2289 17.3313 16.3159 17.3402 16.401 17.3281C16.4862 17.316 16.5662 17.2834 16.633 17.2336C16.6998 17.1838 16.751 17.1187 16.7812 17.0448C16.8114 16.971 16.8197 16.8911 16.8051 16.8134L16.2962 14.0991C16.2833 14.0302 16.3074 13.9595 16.3597 13.9129L18.5202 11.9874L18.5581 11.9496C18.6122 11.8886 18.6476 11.8156 18.6609 11.7379C18.6741 11.6603 18.6646 11.5808 18.6334 11.5076C18.6021 11.4344 18.5503 11.3701 18.4831 11.3212C18.4159 11.2724 18.3357 11.2407 18.2508 11.2294L15.2548 10.8312C15.1912 10.8227 15.1355 10.7843 15.1051 10.7278L13.769 8.24806C13.7289 8.17361 13.6669 8.11092 13.5899 8.06708C13.513 8.02324 13.4241 8 13.3335 8C13.2429 8 13.1541 8.02324 13.0771 8.06708C13.0001 8.11092 12.9381 8.17361 12.8981 8.24806L11.5615 10.7278Z" fill="#EBF1FD"/>
                                </svg>
                            </div>
                            <p class="mb-0 mt-2">หลักสูตร</p>
                            <p class="mb-0">แนะนำ</p>
                        </div>
                    </div>
                    <div class="item">
                    <div class="menu-course text-center">
                            <div class="icon-menu-course">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 18.875H19.8125H2ZM2 18.875L9.5 27.3125L2 18.875ZM2 18.875L9.5 10.4375L2 18.875ZM19.8125 18.875L29.1875 2L19.8125 18.875ZM19.8125 18.875L29.1875 32L19.8125 18.875ZM29.1875 2L17.9375 3.875L29.1875 2ZM29.1875 2L32 12.3125L29.1875 2ZM29.1875 32L32 21.6875L29.1875 32ZM29.1875 32L17.9375 31.0625L29.1875 32Z" fill="#B0C0D4"/>
                                    <path d="M2 18.875H19.8125M2 18.875L9.5 27.3125M2 18.875L9.5 10.4375M19.8125 18.875L29.1875 2M19.8125 18.875L29.1875 32M29.1875 2L17.9375 3.875M29.1875 2L32 12.3125M29.1875 32L32 21.6875M29.1875 32L17.9375 31.0625" stroke="#EBF1FD" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="mb-0 mt-2">หลักสูตร</p>
                            <p class="mb-0">Unit Links</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="menu-course text-center">
                            <div class="icon-menu-course">
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.66623 10.5238C3.60733 11.4429 1.57787 11.9016 1.09444 13.4542C0.612647 15.0052 1.99531 16.6239 4.7623 19.8596L5.47838 20.6961C6.26376 21.6152 6.6581 22.0755 6.83465 22.6431C7.0112 23.2124 6.9518 23.8262 6.833 25.0521L6.7241 26.1692C6.30666 30.4872 6.09712 32.6454 7.36099 33.6041C8.62486 34.5644 10.5256 33.6882 14.3238 31.9392L15.3088 31.4871C16.3879 30.9888 16.9275 30.7413 17.5 30.7413C18.0725 30.7413 18.6121 30.9888 19.6928 31.4871L20.6745 31.9392C24.4744 33.6882 26.3751 34.5628 27.6374 33.6057C28.9029 32.6454 28.6933 30.4872 28.2759 26.1692M30.2377 19.8596C33.0047 16.6255 34.3874 15.0069 33.9056 13.4542C33.4221 11.9016 31.3927 11.4412 27.3338 10.5238L26.2844 10.2862C25.1311 10.0255 24.5552 9.89518 24.0916 9.54373C23.6296 9.19227 23.3326 8.65932 22.7386 7.59342L22.1974 6.62322C20.1069 2.87441 19.0625 1 17.5 1C15.9375 1 14.8931 2.87441 12.8026 6.62322" stroke="#EBF1FD" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M13.0765 20.7515H10.4316L13.867 10.5696H17.1433L20.5787 20.7515H17.9338L15.5424 13.135H15.4629L13.0765 20.7515ZM12.7235 16.7444H18.252V18.6137H12.7235V16.7444Z" fill="#EBF1FD"/>
                                    <path d="M17.6665 26.8716V25.4696L22.6132 18.6883H17.6714V16.6898H25.7254V18.0918L20.7787 24.873H25.7204V26.8716H17.6665Z" fill="#EBF1FD"/>
                                </svg>
                            </div>
                            <p class="mb-0 mt-2">หลักสูตร</p>
                            <p class="mb-0">Blue Star</p>
                        </div>
                    </div>
                    <div class="item">
                    <div class="menu-course text-center">
                            <div class="icon-menu-course">
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.66623 10.5238C3.60733 11.4429 1.57787 11.9016 1.09444 13.4542C0.612647 15.0052 1.99531 16.6239 4.7623 19.8596L5.47838 20.6961C6.26376 21.6152 6.6581 22.0755 6.83465 22.6431C7.0112 23.2124 6.9518 23.8262 6.833 25.0521L6.7241 26.1692C6.30666 30.4872 6.09712 32.6454 7.36099 33.6041C8.62486 34.5644 10.5256 33.6882 14.3238 31.9392L15.3088 31.4871C16.3879 30.9888 16.9275 30.7413 17.5 30.7413C18.0725 30.7413 18.6121 30.9888 19.6928 31.4871L20.6745 31.9392C24.4744 33.6882 26.3751 34.5628 27.6374 33.6057C28.9029 32.6454 28.6933 30.4872 28.2759 26.1692M30.2377 19.8596C33.0047 16.6255 34.3874 15.0069 33.9056 13.4542C33.4221 11.9016 31.3927 11.4412 27.3338 10.5238L26.2844 10.2862C25.1311 10.0255 24.5552 9.89518 24.0916 9.54373C23.6296 9.19227 23.3326 8.65932 22.7386 7.59342L22.1974 6.62322C20.1069 2.87441 19.0625 1 17.5 1C15.9375 1 14.8931 2.87441 12.8026 6.62322" stroke="#EBF1FD" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M13.0765 20.7515H10.4316L13.867 10.5696H17.1433L20.5787 20.7515H17.9338L15.5424 13.135H15.4629L13.0765 20.7515ZM12.7235 16.7444H18.252V18.6137H12.7235V16.7444Z" fill="#EBF1FD"/>
                                    <path d="M17.6665 26.8716V25.4696L22.6132 18.6883H17.6714V16.6898H25.7254V18.0918L20.7787 24.873H25.7204V26.8716H17.6665Z" fill="#EBF1FD"/>
                                </svg>
                            </div>
                            <p class="mb-0 mt-2">หลักสูตร</p>
                            <p class="mb-0">OIC</p>
                        </div>
                    </div>
                    
                </div>
                <style>
                    
                    .course-item{
                        position: relative;
                        padding: 10px;
                        border-radius:10px;
                        -webkit-border-radius:10px;
                        -moz-border-radius:10px;
                        -ms-border-radius:10px;
                        -o-border-radius:10px;
                        display: flex;
                        background-color: #fff;
                        border: 0px solid rgba(0, 0, 0, 0);
                        box-shadow: 0 0 2rem 0 rgb(136 152 170 / 15%);
                        border-radius: 0.25rem;
                        margin-bottom:1.5rem;
                        

                    }
                    @media (max-width: 770px) {
                        .course-item{
                            width: 100% !important;
                        }
                    }
                    @media (min-width: 770px) {
                        .container-course{
                        display: flex;
                        justify-content: space-between;
                    }
                        .course-item{
                            width: 49% !important;
                        }
                    }
                    .course-item img{
                        width: 100px;
                        height: 100px;
                        object-fit: cover;
                        border-radius:10px;
                        -webkit-border-radius:10px;
                        -moz-border-radius:10px;
                        -ms-border-radius:10px;
                        -o-border-radius:10px;
                    }
                    .course-item .title-course{
                        font-size: 12;
                        color: #0E2B81;
                       -webkit-line-clamp: 2;
                        /* autoprefixer: ignore next */
                        -webkit-box-orient: vertical;
                        display: -webkit-box;
                        overflow: hidden;
                        word-break: break-word;
                        margin-bottom: 5px;
                    }.course-item .detail-course{
                        font-size: 10;
                        color: #000;
                      -webkit-line-clamp: 2;
                        /* autoprefixer: ignore next */
                        -webkit-box-orient: vertical;
                        display: -webkit-box;
                        overflow: hidden;
                        word-break: break-word;
                        margin-bottom: 5px;

                    }
                    .category-course{
                        display: flex;
                        flex-wrap: wrap;
                        gap: 5px;
                    }
                    .category-course span{
                        color: #0E2B81;
                        border: #0E2B81 1px solid;
                        border-radius:50px;
                        -webkit-border-radius:50px;
                        -moz-border-radius:50px;
                        -ms-border-radius:50px;
                        -o-border-radius:50px;
                        font-size: 9px;
                        padding: 2px 10px ;
                    }
                    .container-course .course-item.bookmark .fav-course{
                        display: block !important;
                    }
                    .fav-course{
                        display: none;
                        position: absolute;
                        top: 0px;
                        right: 0px;
                    }
                </style>
                <p class="my-3" style="color: #0E2B81;font-size: 16px;">หลักสูตรทั้งหมด</p>
                <div class="container-course ">
                    <a href="" class="course-item bookmark">
                        <img src="{{ url('/img/icon/ad.png') }}">
                        <div class="ms-3">
                            <p class="title-course">หลักสูตรฝึกอบรมการพัฒนาทักษะการเชิงกลยุทธ์ 505</p>
                            <p class="detail-course">การพัฒนาทักษะการสื่อสารและสร้างความสัมพันธ์ที่ดีกับลูกค้า ของพนักงานขายสินค้าและบริกของพนักงานขายสินค้าและบริกของพนักงานขายสินค้าและบริก</p>
                            <div class="category-course">
                                <span>#หลักสูตรแนะนำ</span>
                                <span>#หลักสูตรแนะนำ</span>
                            </div>
                        </div>
                        <div class="fav-course">
                            <svg width="17" height="22" viewBox="0 0 17 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.0002 0H1.07715C0.524864 0 0.0771484 0.447716 0.0771484 1V20.3889C0.0771484 21.1306 0.856276 21.6141 1.52095 21.285L8.09489 18.0293C8.37455 17.8908 8.70283 17.8908 8.98248 18.0293L15.5564 21.285C16.2211 21.6141 17.0002 21.1306 17.0002 20.3888V1C17.0002 0.447715 16.5525 0 16.0002 0Z" fill="#FFB600"/>
                                <path d="M6.80604 7.04096L3.85769 7.45107L3.80547 7.46126C3.72641 7.4814 3.65435 7.5213 3.59663 7.57689C3.53891 7.63248 3.4976 7.70178 3.47692 7.7777C3.45625 7.85362 3.45694 7.93344 3.47894 8.00902C3.50094 8.0846 3.54345 8.15322 3.60213 8.20788L5.73807 10.2026L5.23436 13.0201L5.22835 13.0689C5.22351 13.1473 5.24049 13.2256 5.27754 13.2957C5.3146 13.3657 5.3704 13.4251 5.43923 13.4677C5.50807 13.5103 5.58746 13.5345 5.66928 13.538C5.75111 13.5415 5.83242 13.524 5.9049 13.4874L8.54178 12.1573L11.1727 13.4874L11.2189 13.5078C11.2951 13.5366 11.378 13.5455 11.4591 13.5334C11.5401 13.5214 11.6163 13.4888 11.6799 13.4392C11.7435 13.3896 11.7922 13.3246 11.8209 13.2509C11.8497 13.1773 11.8576 13.0976 11.8437 13.0201L11.3395 10.2026L13.4763 8.20744L13.5124 8.16975C13.5639 8.10891 13.5976 8.03606 13.6102 7.95862C13.6228 7.88118 13.6138 7.80193 13.5841 7.72893C13.5543 7.65593 13.505 7.5918 13.441 7.54307C13.377 7.49433 13.3007 7.46274 13.2199 7.45151L10.2715 7.04096L8.95354 4.47834C8.9154 4.40409 8.85636 4.34157 8.7831 4.29785C8.70984 4.25413 8.62529 4.23096 8.53901 4.23096C8.45273 4.23096 8.36818 4.25413 8.29492 4.29785C8.22166 4.34157 8.16262 4.40409 8.12448 4.47834L6.80604 7.04096Z" fill="#8C6400"/>
                            </svg>
                        </div>
                    </a>
                    <a href="" class="course-item">
                        <img src="{{ url('/img/icon/ad.png') }}">
                        <div class="ms-3">
                            <p class="title-course">หลักสูตรฝึกอบรมการพัฒนาทักษะการเชิงกลยุทธ์ 505</p>
                            <p class="detail-course">การพัฒนาทักษะการสื่อสารและสร้างความสัมพันธ์ที่ดีกับลูกค้า ของพนักงานขายสินค้าและบริกของพนักงานขายสินค้าและบริกของพนักงานขายสินค้าและบริก</p>
                            <div class="category-course">
                                <span>#หลักสูตรแนะนำ</span>
                                <span>#หลักสูตรแนะนำ</span>
                            </div>
                        </div>
                        <div class="fav-course">
                            <svg width="17" height="22" viewBox="0 0 17 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.0002 0H1.07715C0.524864 0 0.0771484 0.447716 0.0771484 1V20.3889C0.0771484 21.1306 0.856276 21.6141 1.52095 21.285L8.09489 18.0293C8.37455 17.8908 8.70283 17.8908 8.98248 18.0293L15.5564 21.285C16.2211 21.6141 17.0002 21.1306 17.0002 20.3888V1C17.0002 0.447715 16.5525 0 16.0002 0Z" fill="#FFB600"/>
                                <path d="M6.80604 7.04096L3.85769 7.45107L3.80547 7.46126C3.72641 7.4814 3.65435 7.5213 3.59663 7.57689C3.53891 7.63248 3.4976 7.70178 3.47692 7.7777C3.45625 7.85362 3.45694 7.93344 3.47894 8.00902C3.50094 8.0846 3.54345 8.15322 3.60213 8.20788L5.73807 10.2026L5.23436 13.0201L5.22835 13.0689C5.22351 13.1473 5.24049 13.2256 5.27754 13.2957C5.3146 13.3657 5.3704 13.4251 5.43923 13.4677C5.50807 13.5103 5.58746 13.5345 5.66928 13.538C5.75111 13.5415 5.83242 13.524 5.9049 13.4874L8.54178 12.1573L11.1727 13.4874L11.2189 13.5078C11.2951 13.5366 11.378 13.5455 11.4591 13.5334C11.5401 13.5214 11.6163 13.4888 11.6799 13.4392C11.7435 13.3896 11.7922 13.3246 11.8209 13.2509C11.8497 13.1773 11.8576 13.0976 11.8437 13.0201L11.3395 10.2026L13.4763 8.20744L13.5124 8.16975C13.5639 8.10891 13.5976 8.03606 13.6102 7.95862C13.6228 7.88118 13.6138 7.80193 13.5841 7.72893C13.5543 7.65593 13.505 7.5918 13.441 7.54307C13.377 7.49433 13.3007 7.46274 13.2199 7.45151L10.2715 7.04096L8.95354 4.47834C8.9154 4.40409 8.85636 4.34157 8.7831 4.29785C8.70984 4.25413 8.62529 4.23096 8.53901 4.23096C8.45273 4.23096 8.36818 4.25413 8.29492 4.29785C8.22166 4.34157 8.16262 4.40409 8.12448 4.47834L6.80604 7.04096Z" fill="#8C6400"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js'></script>
<script>
    $('.carousel-menu-course').owlCarousel({
        // stagePadding:20,
        loop: false,
        autoWidth: true,
        
        nav: false,    
        dots: false,
        responsive: {
            0: {
                margin: 20,
                items: 6
            },
            600: {
                margin: 20,
                items: 3
            },
            1000: {
                margin: 40,
                items: 1
            }
        }
    })

    $('.carousel-fav-course').owlCarousel({
        // stagePadding:20,
        loop: false,
        autoWidth: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 1
            }
        }
    })
</script>
@endsection