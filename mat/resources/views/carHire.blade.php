@extends('layouts.black')
@section('content')
<link rel="stylesheet" href="assets/css/main.css" />
<header class="align-center" style="margin-top:100px">
    <p class="special">Clean and well serviced Cars</p>
    <h2>Car Hire</h2>
</header>


<section id="one" class="wrapper style2">
    <div class="inner">
        <div class="grid-style">

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/c1.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>US$ 159 per day including a Professional English-speaking Driver~Guide</p>
                            <h2>7 Seater Safari Tour Van</h2>
                        </header>
                        <p>The Safari Tour Van or Safari Microbus is the most popular choice for safaris in Kenya, preferred for its carrying capacity of upto 7 passengers and lower costs compared to the Landcruiser Safari vehicle ( see below). The Safari Microbus is either a Nissan or Toyota vehicle and comes fitted with a large pop up game viewing roof, UHF radio call, heavy duty suspension and also has large side windows for enhanced all round visibility.</p>
                        <footer class="align-center">
                            <a href="{{url('/booking')}}" class="button alt">Book Now</a>
                        </footer>
                    </div>
                </div>
            </div>

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/c2.jpg" alt=""  />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>US$ 259 per day including a Driver~Guide</p>
                            <h2>7 Seater 4x4 Toyota Land Cruiser</h2>
                        </header>
                        <p>The 4x4 Safari Landcruiser is one of Kenya's best vehicles for a Safari, offering improved comfort and better versatility, allowing tourists to access Safari camps and lodges which may have challenging road conditions or as is the case nowadays, may only allow 4by4 vehicles within their wildlife areas. This vehicle comes fitted with UHF Radio Call, game viewing hatches and additonal safari customization such as cooler boxes to carry drinks.Special rates are available for hire duration exceeding 1 week. </p>
                        <footer class="align-center">
                            <a href="{{url('/booking')}}" class="button alt">Book Now</a>
                        </footer>
                    </div>
                </div>
            </div>

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/c3.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>US$ 350 per day</p>
                            <h2>25 to 33 seater Bus - Coaster or Rosa Buses</h2>
                        </header>
                        <p>he Toyota Coaster or Mitsubishi Rosa medium sized buses seat anywhere from 22 to 33 passengers and are ideal for transportation or transfers for groups of passengers. These buses offer comfprtable seats and Air Conditioning as well as large windows for excellent visibility.</p>
                        <footer class="align-center">
                            <a href="{{url('/booking')}}" class="button alt">Book Now</a>
                        </footer>
                    </div>
                </div>
            </div>

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/c4.jpg" alt="" height="350" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>US$ 500 per day</p>
                            <h2> 22-25 capacity Overland Safari Trucks</h2>
                        </header>
                        <p>Our overland trucks have sufficient storage compartments for luggage and equipment. This 4x4 overland safari trucks are suitable for group budget safari and expeditions in Africa. They are customized for camping tours and have comfortable coach-style seating with wide aisle for leg room and space. </p>
                        <footer class="align-center">
                            <a href="{{url('/booking')}}" class="button alt">Book Now</a>
                        </footer>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection