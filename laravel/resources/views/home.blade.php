@extends("layouts.header")

@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/slide-1.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">E-ShortStay</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown">A Place Like Home</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/slide-2.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">E-ShortStay</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown">Let make you like Price and Princess</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/slide-3.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">E-ShortStay</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown">You Are Fit To Be There</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Booking Start -->
    <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="bg-white shadow" >
                <div class="row g-2">
                    <div class="hotel-search-box">
                        <div class="container">
                            <div class="banner-search-form">
                                <p class="type"><span class="bookingIcon">Booking Type</span></p>
                                <div class="search-filters-wrap wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.5s">
                                    <form class="booking-form">
                                        <div class="bookingTypRow text-center radio-warp">
                                            <div class="radioCol">
                                                <input type="radio" name="bookingType" id="hourly" value="hourly" /><label for="hourly">Hotel by Hour</label>
                                            </div>
                                            <div class="radioCol">
                                                <input type="radio" name="bookingType" id="daily" value="daily" checked /><label for="daily">Hotel by Day</label>
                                            </div>
                                            <div class="radioCol">
                                                <input type="radio" name="bookingType" id="daily" value="daily" checked /><label for="daily">Hotel by night</label>
                                            </div>

                                        </div>
                                        <div class="search-filter-Row clearfix">
                                            <div class="common-cols city-coloumn ">
                                                <label  class="cityIcon">City or Place</label>
                                                <input type="text" id="searchText" class="form-control" placeholder="Enter City or Hotel name">
                                            </div>
                                            <div class="common-cols chkin-field">
                                                <label for="txtChkIn" class="calenderIcon">Check In</label>
                                                <input id="txtChkIn" type="date" class="form-control" name="">
                                            </div>
                                            <div class="common-cols chkin-field has-caret hour-type" style="display:none">
                                                <label style="padding-left:0">In-Time</label>
                                                <select class="form-control" id="ddlCheckInTime" onchange="bindCheckOutTime()">
                                                    <option value="0">--:--</option>
                                                    <option value=" 01:00">01:00 AM</option>
                                                    <option value=" 02:00">02:00 AM</option>
                                                    <option value=" 03:00">03:00 AM</option>
                                                    <option value=" 04:00">04:00 AM</option>
                                                    <option value=" 05:00">05:00 AM</option>
                                                    <option value=" 06:00">06:00 AM</option>
                                                    <option value=" 07:00">07:00 AM</option>
                                                    <option value=" 08:00">08:00 AM</option>
                                                    <option value=" 09:00">09:00 AM</option>
                                                    <option value=" 10:00">10:00 AM</option>
                                                    <option value=" 11:00">11:00 AM</option>
                                                    <option value=" 12:00">12:00 PM</option>
                                                    <option value=" 13:00">01:00 PM</option>
                                                    <option value=" 14:00">02:00 PM</option>
                                                    <option value=" 15:00">03:00 PM</option>
                                                    <option value=" 16:00">04:00 PM</option>
                                                    <option value=" 17:00">05:00 PM</option>
                                                    <option value=" 18:00">06:00 PM</option>
                                                    <option value=" 19:00">07:00 PM</option>
                                                    <option value=" 20:00">08:00 PM</option>
                                                    <option value=" 21:00">09:00 PM</option>
                                                    <option value=" 22:00">10:00 PM</option>
                                                    <option value=" 23:00">11:00 PM</option>

                                                </select>
                                            </div>
                                            <div class="common-cols chkin-field has-caret hour-type" style="display:none">
                                                <label style="padding-left:0">Out-Time</label>
                                                <select class="form-control" id="ddlCheckOutTime">
                                                    <option value="0">--:--</option>
                                                </select>
                                            </div>
                                            <div class="common-cols chkin-field">
                                                <label for="txtChkOut" class="calenderIcon">Check Out</label>
                                                <input id="txtChkOut" type="date" class="form-control" name="">
                                            </div>
                                            <div class="common-cols common-cols-lg chkin-field">
                                                <label  class="adultIcon"> Adults</label>
                                                <input type="number" id="txtAdult" class="form-control" value="0" min="0" max="100" step="1" />
                                            </div>
                                            <div class="common-cols common-cols-lg chkin-field">
                                                <label for="children" class="childrenIcon"> Children</label>
                                                <input type="number" id="children" class="form-control" value="0" min="0" max="100" step="1" />
                                            </div>

                                            <div class="common-cols common-cols-lg has-caret chkin-field">
                                                <label for="price" class="priceIconWrap">Price</label>
                                                <select id="price" class="form-control">
                                                    <option value="1000-2000">&#8358; 1000 - 2000</option>
                                                    <option value="2000-5000">&#8358; 2000 - 5000</option>
                                                    <option value="5000-10000">&#8358; 5000 - 10000</option>
                                                    <option value="10000-20000">&#8358; 10000 - 20000</option>
                                                    <option selected value="">any</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="btn-row">
                                            <input type="button" id="btnSearch" class="common-btn" value="Search" />
                                            <a href="javascript:void(0);" id="btnSearchUrl" class="btn" style="display:none">Search</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">E-Shortstay</span></h1>
                    <p class="mb-4">An innovative booking platform that takes care of your worries, by connecting you with hotels that match your budget.</p>
                    <div class="row g-3 pb-4">
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">100</h2>
                                    <p class="mb-0">Rooms</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">20</h2>
                                    <p class="mb-0">Staffs</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">1329</h2>
                                    <p class="mb-0">Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="{{url('about')}}">To Know More</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about1.jpg" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about2.jpg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about3.jpg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about4.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-3 col-sm-12 col-md-3 wow fadeInUp text-center" data-wow-delay="0.1s">
                        <img src="img/flexibility.png" class="img-fluid" alt="image">
                        <h5 class="my-3">Hotel by Hour</h5>
                        <p>Need a hotel room, but only for a few hours during the day?
                            Room by hour allows you to book a room at any time during the day for a period of one hour at any given time (could be extended), it could be needed for leisure, quick work meetings, quiet time, couple hangout, privacy, freshening up, traffic delay relaxation, await flight connection, ealy, late, cancelled or delay flight.</p>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-3 wow fadeInUp text-center" data-wow-delay="0.1s">
                        <img src="img/lifestyle.png" class="img-fluid" alt="image">
                        <h5 class="my-3">Hotel by Day</h5>
                        <p>Need a hotel room, but only for a few hours during the day?
                            Room by hour allows you to book a room at any time during the day for a period of one hour at any given time (could be extended), it could be needed for leisure, quick work meetings, quiet time, couple hangout, privacy, freshening up, traffic delay relaxation, await flight connection, ealy, late, cancelled or delay flight.</p>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-3 wow fadeInUp text-center" data-wow-delay="0.1s">
                        <img src="img/night.webp" width="97" height="97" class="img-fluid rounded-circle" alt="image">
                        <h5 class="my-3">Hotel by night</h5>
                        <p>Hotel that is perfectly suited for business people, travellers preparing for a meeting and need private time or wanting to catch a flight or wanting to feel at home.</p>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-3 wow fadeInUp text-center" data-wow-delay="0.1s">
                        <img src="img/serviceapt.jpg" width="97" height="97" class="img-fluid rounded-circle" alt="image">
                        <h5 class="my-3">Service Apartment</h5>
                        <p>Apartment for short stay purposes 1,2,3 bed apartment with varieties of amenities to enjoy.</p>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-3 wow fadeInUp text-center" data-wow-delay="0.1s">
                        <img src="img/serviceapt.jpg" width="97" height="97" class="img-fluid rounded-circle" alt="image">
                        <h5 class="my-3">Last minute stay</h5>
                        <p>Offers you last minute discount ranging from 10pm - upwards, last minute booking offers you 20% to 50% discount for empty rooms in hotels at the last minute, Terms & Condition applies.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Branches Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Branches</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Branches</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow shadow2 rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/white house.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">White House</h5>
                                </div>
                                <p class="text-body mb-3">24 Iyalla Street, Beside Ikeja City Mall, Alausa, Lagos, Nigeria</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{url('room')}}">View Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow shadow2 rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/iyala.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Iyala</h5>
                                </div>
                                <p class="text-body mb-3"> 3 Iyalla Street, Alausa, Ikeja, Lagos, Nigeria</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{url('room')}}">View Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="room-item shadow shadow2 rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/Allen.jpg" alt="">

                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Allen</h5>
                                </div>
                                <p class="text-body mb-3">1 Folawewo, Ogundana St, Allen, Ikeja, Lagos, Nigeria</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{url('room')}}">View Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow shadow2 rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/118.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">118</h5>
                                </div>
                                <p class="text-body mb-3">118, Awolowo Way, Ikeja, Lagos, Nigeria</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{url('room')}}">View Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="room-item shadow shadow2 rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/faita.jpg" alt="">

                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Fatai</h5>
                                </div>
                                <p class="text-body mb-3">23 Fatai Irawo Street, Off Muritala Muhamed Intl Airport Road, Ajao Estate, lagos</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{url('room')}}">View Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow shadow2 rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/babatola.jpg" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Babatola</h5>
                                </div>
                                <p class="text-body mb-3">3, Babatola Drive, Opposite Computer Village, Ikeja, Lagos</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{url('room')}}">View Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Branches End -->



    <!-- Room Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="container">
                            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
                                <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
                            </div>
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="room-item shadow rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="img/room-1.jpg" alt="">
                                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">#25,000/Short Rest</small>
                                        </div>
                                        <div class="p-4 mt-2">
                                            <div class="d-flex justify-content-between mb-3">
                                                <h5 class="mb-0">Paris</h5>
                                                <div class="ps-2">
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>1 Bed</small>
                                                <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                                <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                            </div>
{{--                                            <p class="text-body mb-3">Your bed is an important part of your life. We spend a third of our lives asleep, so it is not surprising that your time slumbering can have a big impact on your waking life.</p>--}}
                                            <div class="d-flex justify-content-between">
                                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="room-item shadow rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="img/room-2.jpg" alt="">
                                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">#36,000/Night</small>
                                        </div>
                                        <div class="p-4 mt-2">
                                            <div class="d-flex justify-content-between mb-3">
                                                <h5 class="mb-0">London</h5>
                                                <div class="ps-2">
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>1 Bed</small>
                                                <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                                <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                            </div>
{{--                                            <p class="text-body mb-3">Your bed is an important part of your life. We spend a third of our lives asleep, so it is not surprising that your time slumbering can have a big impact on your waking life.</p>--}}
                                            <div class="d-flex justify-content-between">
                                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="room-item shadow rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="img/room-3.jpg" alt="">
                                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">#46,000/Night</small>
                                        </div>
                                        <div class="p-4 mt-2">
                                            <div class="d-flex justify-content-between mb-3">
                                                <h5 class="mb-0">Toronto</h5>
                                                <div class="ps-2">
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>1 Bed</small>
                                                <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                                <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                            </div>
{{--                                            <p class="text-body mb-3">Your bed is an important part of your life. We spend a third of our lives asleep, so it is not surprising that your time slumbering can have a big impact on your waking life.</p>--}}
                                            <div class="d-flex justify-content-between">
                                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Room End -->

    <!-- picture Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="container">
                            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                <h1 class="mb-5">Enjoy our <span class="text-primary text-uppercase">Trending Post</span></h1>
                            </div>
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="room-item shadow rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="img/tired.jpg" alt="">
                                        </div>
                                        <div class="p-4 mt-2">
                                            <div class="d-flex justify-content-between mb-3">
                                                <h5 class="mb-0">You need a quite Time</h5>
                                            </div>
                                            <p class="text-body mb-3">Your bed is an important part of your life. We spend a third of our lives asleep, so it is not surprising that your time slumbering can have a big impact on your waking life.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="room-item shadow rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="img/traffic.jpg" alt="">
                                        </div>
                                        <div class="p-4 mt-2">
                                            <div class="d-flex justify-content-between mb-3">
                                                <h5 class="mb-0">Are stock in traffic</h5>
                                            </div>
                                            <p class="text-body mb-3">Your bed is an important part of your life. We spend a third of our lives asleep, so it is not surprising that your time slumbering can have a big impact on your waking life.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="room-item shadow rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="img/meeting.jpg" alt="">
                                        </div>
                                        <div class="p-4 mt-2">
                                            <div class="d-flex justify-content-between mb-3">
                                                <h5 class="mb-0">Did you need indoor meeting</h5>
                                            </div>
                                            <p class="text-body mb-3">Your bed is an important part of your life. We spend a third of our lives asleep, so it is not surprising that your time slumbering can have a big impact on your waking life.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- picture End ----->


    <!-- Video Start -->
    <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
        <div class="row g-0">
            <div class="col-md-6 bg-dark d-flex align-items-center">
                <div class="p-5">
                    <h6 class="section-title text-start text-white text-uppercase mb-3">E-Shortstay</h6>
                    <h1 class="text-white mb-4">Try  E-Shortstay</h1>
                    <p class="text-white mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Our Rooms</a>
                    <a href="" class="btn btn-light py-md-3 px-md-5">Book A Room</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="video">
                    <button type="button" class="btn-play" data-bs-toggle="modal" data-src="img/video.mp4" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">E-Shortstay</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Start -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Our Services</h6>
                <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item rounded" href="https://ebnbhotel.com/location/3/cinema">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-hotel fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Cinema</h5>
                        <p class="text-body mb-0">I always remember my childhood house with happy memories. There was a beautiful garden, and outside my bedroom window was a jasmine vine which would open in the evenings, giving off a divine scent.</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <a class="service-item rounded" href="https://ebnbhotel.com/location/7/bar-restaurant">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Food & Restaurant</h5>
                        <p class="text-body mb-0">Now I will take the oil of Life, the eggs of Destiny, the pan of Justice, the sausage of Truth, and go to cook the scrambled eggs of the Apocalypse. </p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item rounded" href="https://ebnbhotel.com/location/5/tourist-beach">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-spa fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Tourist & Beach</h5>
                        <p class="text-body mb-0">Fitness is not about competing with others. It’s about competing with yourself and working to be better than you were yesterday.</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <a class="service-item rounded" href="https://ebnbhotel.com/location/4/shopping">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-swimmer fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Shopping</h5>
                        <p class="text-body mb-0">Remember, it doesn’t matter whether you win or lose; what matters is whether I win or lose</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item rounded" href="https://evenue.ng/event-services">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-glass-cheers fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Event & Party</h5>
                        <p class="text-body mb-0">Someone said that life is a party. You join in after it’s started and leave before it’s finished.</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <a class="service-item rounded" href="https://ebnbhotel.com/location/2/gym-sport">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-dumbbell fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">GYM & Yoga</h5>
                        <p class="text-body mb-0">My doctor recently told me that jogging could add years to my life. I think he was right. I feel ten years older already</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <div class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="owl-carousel testimonial-carousel py-5">
                <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                    <p>For the price and location a very nice hotel. Nice staff, Nice breakfast (vegetarian options as well), rooms and bathrooms are a bit small but nothing to complain about (since the price), good "sound isolation" between the rooms as far as we could notice. Good distance to things that you probably want to do on a weekend in Lagos.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Adewale Ruth</h6>
                            <small>Accountant</small>
                        </div>
                    </div>
                    <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                </div>
                <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                    <p>Thank you so much for your help and cooperation. My daughter would forget her head if it was loose! We will definitely use your hotel again when we visit London. You and your staff could not have been any more helpful. We were delighted that we had chosen E-Shortstay.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Akinwumi Ayodele</h6>
                            <small>Engineers</small>
                        </div>
                    </div>
                    <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                </div>
                <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                    <p>I left so early on my last day on April 10th that I didn’t get to say how much I enjoyed my stay with you again this month. Your rooms are great, and your friendly help and attention to detail were much appreciated! With hopes that you have an enjoyable spring and summer, and I’m very much looking forward to staying with you again this September on my way back from Austria</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Oloyede Victor</h6>
                            <small>lawyers</small>
                        </div>
                    </div>
                    <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Our Team</h6>
                <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Staffs</span></h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded shadow shadow1 overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid team-img" src="img/team-1.jpg" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">Sunny Oshinsegun</h5>
                            <small>Chairman</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded shadow shadow1 overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid team-img" src="img/bukola.jpg" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">Recheal Oluwabukola</h5>
                            <small>Manager</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded shadow shadow1 overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid team-img" src="img/akin.jpg" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">Alabi Akinwumi</h5>
                            <small>Manager</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="rounded shadow shadow1 overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid team-img " src="img/bunmi.jpg" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">Egunjobi Olubunmi </h5>
                            <small>Manager</small>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary py-3 px-5 mt-2" href="{{url('about')}}">To Know More</a>
        </div>
    </div>
    <!-- Team End -->





@include('layouts.footer')
@endsection
