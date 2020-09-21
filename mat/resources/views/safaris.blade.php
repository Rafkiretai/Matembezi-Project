@extends('layouts.black')
@section('content')
<link rel="stylesheet" href="assets/css/main.css" />
<header class="align-center" style="margin-top:100px">
    <p class="special">This is the original "Out of Africa" safari destination.</p>
    <h2>Safari Packages</h2>
</header>

<!-- One -->
<section id="one" class="wrapper style2">
    <div class="inner">
        <div class="grid-style">

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/p8.jpg" alt="" height="350"/>
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>7 Days 6 Nights</p>
                            <h2>Tazama Classic Kenya Safari</h2>
                        </header>
                        <p>A very special safari from the foot of mount Kilimanjaro, amboseli national park, to rough waters, lake naivasha to dotted or spotted plains, the famous maasai mara national reserve and to dusty or salted lake nakuru national park, you will be joined and accompanied by Tazama Africa holidays safari driver guide upon your arrival and throughout your safari.</p>
                        <p><b>Ksh 40,000</b></p>
                        <footer class="align-center">
                            <a href="{{url('/booking')}}" class="button alt">Book Now</a>
                        </footer>
                    </div>
                </div>
            </div>

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/p9.jpg" alt="" height="350"/>
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>10 Days & 9 Nights</p>
                            <h2>Amboseli and Masai Mara Safari Experience</h2>
                        </header>
                        <p>Stay in elegant accommodation and dine on tasty African inspired meals under the star strewn sky. Enjoy memorable wildlife encounters on your East African safari in the company of expert local guides who will track the animals and help you to spot some of the predators such as lion, cheetah and hyena that call this region home.</p>
                        <p><b>Ksh 35,500</b></p>
                        <footer class="align-center">
                            <a href="{{url('/booking')}}" class="button alt">Book Now</a>
                        </footer>
                    </div>
                </div>
            </div>

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/p10.jpg" alt="" height="350" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>5 Days & 4 Nights</p>
                            <h2>Lewa Wildlife Conservancy</h2>
                        </header>
                        <p>Lewa serves as a safe refuge for the critically endangered black rhino and the endangered Grevy’s zebra, as well as the elephant, lion, giraffe, wild dog and other iconic wildlife species in Kenya. The Conservancy is also home to more than 400 species of birds.Lewa has combined the techniques of world-class anti-poaching operations, including cutting edge monitoring technology, with the engagement of the surrounding communities as critical partners in conservation.</p>
                        <p><b>Ksh 17,500</b></p>
                        <footer class="align-center">
                            <a href="{{url('/booking')}}" class="button alt">Book Now</a>
                        </footer>
                    </div>
                </div>
            </div>

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/p11.jpg" alt="" height="350"/>
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>3 Days & 2 Nights</p>
                            <h2>Chyulu Hills National Park</h2>
                        </header>
                        <p>"Green Hills of Africa".Verdant rolling hills of endless green, great blue skies and spectacular landscape views are what the Chyulu Hills provide to nature lovers. Large mammals include buffalo, bushbucks, elands, elephants, leopards, giant forest hogs, bush pigs, reedbucks and giraffes along with various reptiles and insects. Horse riding, camping, mountain climbing and bird watching can be enjoyed in this hidden part of paradise.</p>
                        <p><b>Ksh 10,000</b></p>
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