@extends('layouts.black')
@section('content')
<link rel="stylesheet" href="assets/css/main.css" />
<header class="align-center" style="margin-top:100px">
    <p class="special">Comfortable accomodation away from home!!</p>
    <h2>Hotels</h2>
</header>

<!-- One -->
<section id="one" class="wrapper style2">
    <div class="inner">
        <div class="grid-style">

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/rosa.jpg" alt="" height="300" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>Best Price & service</p>
                            <h2>Villa Rosa Kempinski Nairobi</h2>
                        </header>
                        <p>Looking for a place to stay in Nairobi? Then look no further than Villa Rosa Kempinski Nairobi, a family-friendly hotel that brings the best of Nairobi to your doorstep.Guest rooms offer a flat screen TV, air conditioning, and a minibar, and Villa Rosa Kempinski Nairobi makes getting online easy as free wifi is available.You can also take advantage of some of the amenities offered by the hotel, including a rooftop terrace, a concierge, and room service. In addition, guests can enjoy a pool and free breakfast during their visit. As an added convenience, there is free parking available to guests.</p>
                        <p><b>Ksh 25,000 per night</b></p>
                        <footer class="align-center">
                            <a href="{{url('/payment')}}" class="button alt">Book Now</a>
                        </footer>
                    </div>
                </div>
            </div>

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/fair.jpg" alt="" height="300"/>
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>Boardrooms and Conferencing</p>
                            <h2>Fairview Hotel</h2>
                        </header>
                        <p>The 127-room Fairview Hotel, known as the safest hotel in the city, has a long history of hospitality in the region. Its central building is a grand stone structure with ornate wrought iron features including a spiral staircase and an underground wine cellar.Landscaped, mature tropical gardens; sparkling swimming pool and sundowner bar with pianist; four restaurants; private dining area; lounge with plush leather armchairs; complimentary WiFi, conference facilities for up to 120 pax; business centre; fitness centre; and in room power sockets suitable for various plug types are just some of the key features.</p>
                        <p><b>Ksh 19,500 per night</b></p>
                        <footer class="align-center">
                            <a href="{{url('/payment')}}" class="button alt">Book Now</a>
                        </footer>
                    </div>
                </div>
            </div>

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/sea.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>Good for Couples</p>
                            <h2>Seawhispers Inn Hotel</h2>
                        </header>
                        <p>Seawhispers Inn has a restaurant, bar, a shared lounge and garden in Watamu. Located around 8 km from Watamu National Marine Park, the hotel with free WiFi is also 500 m away from Bio-Ken Snake Farm. The accommodation features a 24-hour front desk, a tour desk and currency exchange for guests.At the hotel, the rooms include a private bathroom with a shower.Seawhispers Inn offers a Full English/Irish or Italian breakfast.The area is popular for cycling, and car hire is available at the accommodation.Popular points of interest near Seawhispers Inn include Watamu Supermarket, Bio-Ken laboratory and snake farm and Watamu Marine Nature Park. The nearest airport is Malindi, 17 km from the hotel, and the property offers a paid airport shuttle service.</p>
                        <p><b>Ksh 20,000 per night</b></p>
                        <footer class="align-center">
                            <a href="{{url('/payment')}}" class="button alt">Book Now</a>
                        </footer>
                    </div>
                </div>
            </div>

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/nav.jpg" alt="" height="400" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>We speak your language!</p>
                            <h2> Naivasha Kongoni Lodge</h2>
                        </header>
                        <p>Along with a restaurant, this smoke-free lodge has an outdoor pool and a bar/lounge. Free WiFi in public areas and free self parking are also provided. Other amenities include a conference center, a business center, and dry cleaning. All 29 rooms offer free WiFi, furnished patios, and satellite TV. Room service, coffee makers, and free bottled water are among the other amenities available to guests.Naivasha Kongoni Lodge offers 29 accommodations with safes and complimentary bottled water. Rooms open to furnished patios. Televisions come with satellite channels. Bathrooms include showers and complimentary toiletries.This Naivasha lodge provides complimentary wireless Internet access. Business-friendly amenities include desks and phones.</p>
                        <p><b>Ksh 8,500 per night</b></p>
                        <footer class="align-center">
                            <a href="{{url('/payment')}}" class="button alt">Book Now</a>
                        </footer>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
