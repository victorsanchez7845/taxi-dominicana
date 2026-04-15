@extends('layout.master')

@push("push-top")
    <link rel="preload" as="image" href="/assets/img/banners/home/home-mobile.webp" media="(max-width: 767px)">
    <link href="{{ mix('/assets/css/destinations/cap-cana.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/destinations/cap-cana.min.css') }}" rel="stylesheet">
    <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "Product",
          "name": "Cap Cana Shuttle",
          "image": [
            "https://taxidominicana.com/assets/img/schema/1x1.jpg",
            "https://taxidominicana.com/assets/img/schema/4x3.jpg",
            "https://taxidominicana.com/assets/img/schema/16x9.jpg"
           ],
          "description": "This transportation is available for all our destinations, the service is provided in a VW Transporter for up to 8 passengers (children/infants are considered as passengers).",
          "sku": "019004",
          "mpn": "029004",
          "brand": {
            "@type": "Brand",
            "name": "Taxi Dominicana"
          },
          "review": {
            "@type": "Review",
            "reviewRating": {
              "@type": "Rating",
              "ratingValue": 5,
              "bestRating": 5
            },
            "author": {
              "@type": "Person",
              "name": "Jhon Benson"
            }
          },
          "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 5,
            "reviewCount": 2896
          },
          "offers": {
            "@type": "Offer",
            "url": "https://taxidominicana.com/punta-cana-to-cap-cana-transfers",
            "priceCurrency": "USD",
            "price": 106,
            "priceValidUntil": "2024-12-31",
            "itemCondition": "https://schema.org/UsedCondition",
            "availability": "https://schema.org/InStock"
          }
        }
    </script>
@endpush
@push("push-bottom")
    <script defer src="{{ mix('/assets/js/bookingbox/index.min.js') }}"></script>
@endpush

@section('content')
    @include('layout.header.general')

    <div class="banner">
        <picture>
            <source media="(min-width: 415px)" srcset="/assets/img/banners/home/home-desktop.webp" type="image/webp">
            <source media="(min-width: 415px)" srcset="/assets/img/banners/home/home-desktop.png" type="image/png">
            <source srcset="/assets/img/banners/home/home-mobile.webp" type="image/webp">
            <img src="/assets/img/banners/home/home-mobile.png" alt="Promoción del 20% de descuento más pago al llegar" title="Super Oferta | Paga al llegar + 20% de Descuento" width="2160" height="400">
        </picture>
    </div>

    <div class="heading">
        <div class="container">
            <div class="top">
                <h1>The best Shuttle from Punta Cana to Cap Cana Service</h1>
                <p>Best prices and service in Shuttle from Punta Cana Airport to Cap Cana!</p>
            </div>
            <div class="bottom">                
                <x-bookingbox/>
            </div>
        </div>
    </div>

    <div class="container banner_container">
        <div class="left">
            <h2>Seamless Excellence from Punta Cana to Cap Cana: Book Your Transfer with Taxi Dominicana</h2>
            <p>Booking your transfer service to Cap Cana with Taxi Dominicana ensures an exceptional travel experience from the moment you touch down in Punta Cana. Our commitment to punctuality, comfort, and safety provides the peace of mind you seek during your vacation. Our professional drivers, easily identifiable in their distinctive orange uniforms, warmly welcome you and are ready to efficiently take you to Cap Cana. Additionally, we offer regulated rates and the option for payment upon arrival, providing flexibility and transparency throughout. With Taxi Dominicana, your journey to Cap Cana begins with reliable, customer-centric service, ensuring a worry-free and comfortable transfer. Reserve now and discover the difference that sets Taxi Dominicana apart in transportation excellence!</p>
        </div>
        <div class="right">
            <picture>
                <source srcset="/assets/img/home/taxi-Punta Cana-aeropuerto-banner.webp" type="image/webp">
                <img src="/assets/img/home/taxi-Punta Cana-aeropuerto-banner.jpg" alt="Seamless Excellence from Punta Cana to Cap Cana: Book Your Transfer with Taxi Dominicana" title="Seamless Excellence from Punta Cana to Cap Cana: Book Your Transfer with Taxi Dominicana" loading="lazy" width="573" height="374">
            </picture>
        </div>
    </div>

    <div class="container highlights_items">
        <div class="top">
            <h2>Why choose Taxi Dominicana</h2>
        </div>
        <div class="bottom">

            <div class="item building">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#building"></use></svg>
                    <div>
                        <p>Best Punta Cana to Cap Cana Shuttle</p>
                        <h2>SHUTTLE FROM PUNTA CANA TO CAP CANA</h2>
                    </div>
                </div>
                <p>Discover effortless transfers to any hotel or destination throughout the Dominican Republic with Taxi Dominicana. Our transportation services span every corner of this stunning region. If it's on the map, you can trust us to take you there seamlessly, ensuring a journey of ease and comfort.</p>
            </div>

            <div class="item van">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#van"></use></svg>
                    <div>
                        <p>Always Safe & Reliable</p>
                        <h2>RELIABLE AND SAFE TAXI TO CAP CANA</h2>
                    </div>
                </div>
                <p>Explore seamless transfers to every hotel or destination in Cap Cana with Taxi Dominicana. Our transportation services extend to every corner of this captivating destination. If it's on the map, rest assured, we'll get you there with ease and comfort.</p>
            </div>

            <div class="item airport">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#plane-check"></use></svg>
                    <div>
                        <p>Official Cap Cana Transportation Company</p>
                        <h2>OFFICIAL TAXI COMPANY TO CAP CANA</h2>
                    </div>
                </div>
                <p>Explore the approved and reliable transportation services to every hotel or destination in Cap Cana with Taxi Dominicana. Holding all essential permits, we ensure seamless operation across this enchanting destination.</p>
            </div>

        </div>
    </div>

    <div class="container gray-container-information">
        <picture>
            <source srcset="/assets/img/home/taxirivi-cliente.webp" type="image/webp">
            <img src="/assets/img/home/taxirivi-cliente.jpg" alt="Reliable Punta Cana Airport Transfers Service" title="Reliable Punta Cana Airport Transfers Service" loading="lazy" width="352" height="258">
        </picture>
        <div>
            <h2>Unparalleled Customer Service in Cap Cana with Taxi Dominicana</h2>
            <p>At Taxi Dominicana, our commitment to customer service in Cap Cana goes beyond merely providing transportation. We take pride in offering a personalized and friendly experience that adds a special touch to every journey. From the moment you book with us until you reach your destination in Cap Cana, we strive to exceed your expectations and ensure an exceptional experience.</p>
            <p>Our team of professional drivers, recognized by their distinctive orange uniforms, are not only experts in safe and efficient driving but are also dedicated to providing friendly and courteous service. We understand that each customer is unique, and we tailor our services to meet your specific needs, ensuring a personalized transfer that aligns with your preferences.</p>
            <p>Punctuality is a priority for us. We ensure that we are ready and waiting for you promptly at the agreed-upon pick-up location, so your journey unfolds smoothly and without hitches. Furthermore, our customer service extends beyond the transfer itself, offering assistance throughout the process, addressing any questions or concerns you may have.</p>
            <p>At Taxi Dominicana, we recognize that customer service goes beyond the efficiency of the service; it's about creating meaningful connections and providing a positive experience. We strive to turn every transfer into an opportunity to surprise you and leave a lasting impression.</p>
            <p>Whether you're arriving in Cap Cana for a relaxing beach vacation, a romantic getaway, or a business trip, at Taxi Dominicana, we are committed to making your transportation experience comfortable, safe, and memorable. Trust us to deliver the exceptional attention you deserve during your stay in Cap Cana.</p>
            <a href="#" class="btn" title="BOOK NOW">BOOK NOW</a>
        </div>
    </div>

    <div class="container our_services">
        <div class="top">
            <h2>Our transportation services</h2>
        </div>
        <div class="bottom">

            <div>
                <div class="image">
                    <picture>
                        <source srcset="/assets/img/services/van.webp" type="image/webp">
                        <img src="/assets/img/services/van.png" alt="Van de pasajeros" title="Private Transportation" loading="lazy" width="343" height="196">
                    </picture>
                </div>
                <h3>Private Transportation</h3>
                <div>
                    <p>This transportation is available for all our destinations, the service is provided in a VW Transporter for up to 8 passengers (children/infants are considered as passengers).</p>
                </div>
                <p>From <span>$29 USD</span></p>
            </div>
            <div>
                <div class="image">
                    <picture>
                        <source srcset="/assets/img/services/suburban.webp" type="image/webp">
                        <img src="/assets/img/services/suburban.png" alt="Cevrolet Suburban" title="Luxury Transportation" loading="lazy" width="343" height="196">
                    </picture>
                </div>                
                <h3>Luxury Transportation</h3>
                <div>
                    <p>This transportation is available for all our destinations, the service is provided in a Suburban for up to 5 passengers (children/infants are considered as passengers).</p>
                </div>
                <p>From <span>$29 USD</span></p>
            </div>
            <div>
                <div class="image">
                    <picture>
                        <source srcset="/assets/img/services/crafter.webp" type="image/webp">
                        <img src="/assets/img/services/crafter.png" alt="VW Crafter" title="Group Transportation" loading="lazy" width="343" height="196">
                    </picture>
                </div>
                <h3>Group Transportation</h3>
                <div>
                    <p>This transportation is available for all our destinations, the service is provided in a VW Transporter for up to 12 passengers (children/infants are considered as passengers).</p>
                </div>
                <p>From <span>$29 USD</span></p>
            </div>

        </div>
    </div>

    <div class="light-gray">
        <div class="container items-highlights">
            <div>
                <p>21k+</p>
                <p>Happy customers</p>
            </div>
            <div>
                <p>21517</p>
                <p>Operated transfers</p>
            </div>
            <div>
                <p>10622</p>
                <p>Available destinations</p>
            </div>
            <div>
                <p>24Hrs</p>
                <p>Service hours</p>
            </div>
        </div>
    </div>

    <div class="container rates_information">
        <div class="top">
            <h2>TAXI SERVICE ZONE RATES</h2>
        </div>
        <div class="bottom">
            <table class="table table-striped table-responsive">
                <caption>
                    Taxi Service Prices by Destination
                </caption>
                <thead>
                    <tr>
                        <th rowspan="2" scope="col" class="destino">Destination</th>
                        <th colspan="2">
                            Private Taxi<br>
                            1-8 passengers
                        </th>
                        <th colspan="2">
                            Luxury Taxi<br>
                            1-5 passengers
                        </th>
                        <th colspan="2">
                            Taxi for Groups<br>
                            1-16 passengers
                        </th>
                    </tr>
                    <tr>
                        <th>Sencillo</th>
                        <th>Redondo</th>
                        <th>Sencillo</th>
                        <th>Redondo</th>
                        <th>Sencillo</th>
                        <th>Redondo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Punta Cana Downtown</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$30 USD</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$60 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$78 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$151 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$78 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$151 USD</td>
                    </tr>
                    <tr>
                        <td><strong>Punta Cana Hotel Zone</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$30 USD</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$60 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$78 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$151 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$60 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$151 USD</td>
                    </tr>
                    <tr>
                        <td><strong>Uvero Alto</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$55 USD</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$104 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$116 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$226 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$104 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$203 USD</td>
                    </tr>
                    <tr>
                        <td><strong>Macao</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$61 USD</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$117 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$117 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$228 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$117 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$228 USD</td>
                    </tr>
                    <tr>
                        <td><strong>El Cortecito</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$47 USD</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$89 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$100 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$194 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$89 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$172 USD</td>
                    </tr>
                    <tr>
                        <td><strong>La Romana</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$83 USD</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$161 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$172 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$339 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$161 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$317 USD</td>
                    </tr>
                    <tr>
                        <td><strong>Juan Dolio</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$61 USD</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$117 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$151 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$250 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$117 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$228 USD</td>
                    </tr>
                    <tr>
                        <td><strong>Bayahibe</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$78 USD</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$151 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$161 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$317 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$151 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$300 USD</td>
                    </tr>
                    <tr>
                        <td><strong>Boca Chica</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$89 USD</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$172 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$183 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$361 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$172 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$339 USD</td>
                    </tr>
                    <tr>
                        <td><strong>Cap Cana</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$100 USD</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$194 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$206 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$406 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$194 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$383 USD</td>
                    </tr>
                    <tr>
                        <td><strong>Bavaro</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$129 USD</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$253 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$300 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$590 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$253 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$590 USD</td>
                    </tr>
                    <tr>
                        <td><strong>Santiago</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$311 USD</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$617 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$634 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$1,250 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$617 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$1,228 USD</td>
                    </tr>
                    <tr>
                        <td><strong>Puerto Plata</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$289 USD</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$572 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$590 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$1,161 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$572 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$1,139 USD</td>
                    </tr>
                    <tr>
                        <td><strong>Las Galeras</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$433 USD</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$861 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$872 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$1,745 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$861 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$1,717 USD</td>
                    </tr>
                    <tr>
                        <td><strong>Las Terrenas</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$544 USD</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$972 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$983 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$1,818 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$972 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$1,717 USD</td>
                    </tr>
                    <tr>
                        <td><strong>Jarabacoa</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 3 Pasajeros (Sencillo)">$311 USD</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 3 Pasajeros (Redondo)">$617 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$617 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$1,228 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$634 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$1,250 USD</td>
                    </tr>
                    <tr>
                        <td><strong>Constanza</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 3 Pasajeros (Sencillo)">$129 USD</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 3 Pasajeros (Redondo)">$253 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$300 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$590 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$253 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$590 USD</td>
                    </tr>
                    <tr>
                        <td><strong>Bavaro Hotel Zone</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$129 USD</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$253 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$300 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$590 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$253 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$590 USD</td>
                    </tr>
                    <tr>
                        <td><strong>Bavaro Arco</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$129 USD</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$253 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$300 USD</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$590 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$253 USD</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$590 USD</td>
                    </tr>
                </tbody>
            </table>            
        </div>
    </div>

    <div class="reviews_information">
        <div class="mask"></div>
        <div class="container">
            <div class="top">
                <h2>Comments from our customers</h2>
                <h3>Discover why our customers choose us</h3>
            </div>
            <div class="bottom">
                <div class="write_review">
                    <div>
                        <p class="rating">Rating</p>
                        <p class="rating_count">4.7 <span>4107 comments</span></p>
                    </div>
                    <a title="Escribir comentario" target="_blank" href="https://g.page/r/CRiPQCgp1RMmEB0/review">Write a comment</a>                  
                </div>
                <div class="items">

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/1.webp" type="image/webp">
                                <img src="/assets/img/reviews/1.jpg" alt="Cliente de Taxi Dominicana" title="Jenna G." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>Jenna G.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>Embarked on an exceptional transfer journey with Taxi Dominicana in Cap Cana! The distinctive orange booth at the airport was a beacon of relief, ensuring a seamless experience. The driver, dressed in the unmistakable orange uniform, greeted us warmly. The ride was not only comfortable but also came with a fair fare, making Taxi Dominicana the ultimate choice for reaching any destination in Cap Cana.</p>
                            <a class="read_more" title="Read more" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Read more</a>
                            <a class="posted_on" title="Posted on" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Posted on <span>Google</span></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/4.webp" type="image/webp">
                                <img src="/assets/img/reviews/4.jpg" alt="Cliente de Taxi Dominicana" title="Jacob T." loading="lazy" width="60" height="60">
                            </picture>                            
                            <div>
                                <p>Jacob T.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>Flawless transfer service awaited me with Taxi Dominicana in Cap Cana! The effortless discovery of the orange uniform affirmed my decision's correctness. Punctuality surpassed expectations, the vehicle gleamed in top-notch condition, and the value for money was unparalleled. Taxi Dominicana not only excels in service but also in the simplicity of locating them in Cap Cana, setting them apart.</p>
                            <a class="read_more" title="Read more" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Read more</a>
                            <a class="posted_on" title="Posted on" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Posted on <span>Google</span></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/3.webp" type="image/webp">
                                <img src="/assets/img/reviews/3.jpg" alt="Cliente de Taxi Dominicana" title="Ferenc S." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>Ferenc S.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>My enthusiastic recommendation goes to Taxi Dominicana in Cap Cana. From touchdown, the distinctive orange booth stood out, making it effortlessly noticeable. The fare was reasonable, and the service showcased a commendable quality. Undoubtedly the premier choice, their presence in Cap Cana significantly streamlined the entire process.</p>
                            <a class="read_more" title="Read more" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Read more</a>
                            <a class="posted_on" title="Posted on" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Posted on <span>Google</span></a>
                        </div>
                    </div>    

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/2.webp" type="image/webp">
                                <img src="/assets/img/reviews/2.jpg" alt="Cliente de Taxi Dominicana" title="Frank M." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>Frank M.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>Amidst the challenges, Taxi Dominicana in Cap Cana emerged as a relieving presence. Their easily recognizable booth and orange uniform, coupled with the friendly driver and fair fare, made the experience worthwhile. Highly endorsed for reaching any destination in Cap Cana, especially for those who appreciate the convenience of locating them effortlessly.</p>
                            <a class="read_more" title="Read more" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Read more</a>
                            <a class="posted_on" title="Posted on" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Posted on <span>Google</span></a>
                        </div>
                    </div>      

                </div>
            </div>
        </div>
    </div>

    <div class="container how_to_information">
        <div class="top">
            <h2>How to Get from Punta Cana Airport to Cap Cana with Ease</h2>
        </div>
        <div class="bottom">
            <div class="left">
                <p>Experience a seamless journey from Punta Cana Airport to Cap Cana with Taxi Dominicana, your go-to transportation solution. Our dedicated team, recognizable by the distinctive orange booth at the airport, ensures a hassle-free start to your trip. Punctuality is our priority, with flight monitoring to accommodate any changes.</p>
                <p>Relax in our comfortable vehicles driven by skilled professionals, offering safety and efficiency during the scenic route to Cap Cana. At Taxi Dominicana, we prioritize flexibility, allowing you to pay upon arrival for added convenience and peace of mind. Our customer-centric approach extends beyond the transfer, addressing any inquiries to enhance your overall experience.</p>
                <p>Choose Taxi Dominicana for stress-free travel, tailored to your needs, whether you're heading for a beach vacation, exploring attractions, or on a business trip. Discover the convenience, reliability, and exceptional service that make us your preferred transportation partner in the Dominican Republic.</p>
            </div>
            <div class="right">
                <picture>
                    <source srcset="/assets/img/destinations/cap-cana/cap-cana.webp" type="image/webp">
                    <img src="/assets/img/destinations/cap-cana/cap-cana.jpg" alt="Airport shuttle services from punta-cana to Cap Cana" title="Airport shuttle services from punta-cana to Cap Cana" loading="lazy" width="373" height="260">
                </picture>
            </div>
        </div>
    </div>

    <div class="container destinations_information">
        <div class="top">
            <h2>Transportation service in Cap Cana</h2>
            <p>When it comes to your transfer to Cap Cana, rely on Taxi Dominicana for a service that is not only reliable but exceptional. Our expertise lies in providing the most comprehensive and dependable transportation service throughout the region. Whether you're arriving at the Airport or any destination within Cap Cana, our dedicated team is ready to seamlessly transport you to your hotel or preferred location in the city. Choose Taxi Dominicana for a transfer experience that assures comfort and security, ensuring a smooth and delightful beginning to your stay in Cap Cana. Transform your arrival into a hassle-free experience with Taxi Dominicana!</p>
        </div>
        <div class="bottom">
            <div>
                <a href="/punta-cana-to-bavaro-transfers" title="Bavaro Transportation">
                    <picture>
                        <source srcset="/assets/img/destinations/bavaro-destino.webp" type="image/webp">
                        <img src="/assets/img/destinations/bavaro-destino.jpg" alt="Bavaro Transportation" title="Bavaro Transportation" loading="lazy" width="373" height="260">
                    </picture>
                </a>
                <div>
                    <h3><a href="/punta-cana-to-bavaro-transfers" title="Bavaro Transportation">Bavaro Transportation</a></h3>
                    <p>Enjoy a safe, fast and reliable Bavaro Transportation service. Estimated transfer time from Punta Cana is 1 hour and 40 minutes.</p>
                </div>
            </div>
            <div>
                <a href="/punta-cana-to-la-romana-transfers" title="Transportation to La Romana">
                    <picture>
                        <source srcset="/assets/img/destinations/la-romana-destino.webp" type="image/webp">
                        <img src="/assets/img/destinations/la-romana-destino.jpg" alt="Transportation to La Romana" title="Transportation to La Romana" loading="lazy" width="373" height="260">
                    </picture>
                </a>
                <div>
                    <h3><a href="/punta-cana-to-la-romana-transfers" title="Transportation to La Romana">Transportation to La Romana</a></h3>
                    <p>Enjoy a safe, fast and reliable transfer service to La Romana. Estimated transfer time from Punta Cana is 55 minutes.</p>
                </div>
            </div>
            <div>
                <a href="/punta-cana-airport-transfers" title="Punta Cana Airport Transfers">
                    <picture>
                        <source srcset="/assets/img/destinations/Punta Cana-zona-hotelera.webp" type="image/webp">
                        <img src="/assets/img/destinations/Punta Cana-zona-hotelera.jpg" alt="Punta Cana Airport Transfers" title="Punta Cana Airport Transfers" loading="lazy" width="373" height="260">
                    </picture>
                </a>
                <div>
                    <h3><a href="/punta-cana-airport-transfers" title="Punta Cana Airport Transfers">Punta Cana Airport Transfers</a></h3>
                    <p>Enjoy a safe, fast and reliable transfer service to the Hotel Zone. Estimated transfer time from the airport to the Hotel Zone is 30 minutes.</p>
                </div>
            </div>
            <div>
                <a href="/punta-cana-to-cap-cana-transfers" title="Cap Cana Shuttle">
                    <picture>
                        <source srcset="/assets/img/destinations/destino-cap-cana.webp" type="image/webp">
                        <img src="/assets/img/destinations/destino-cap-cana.jpg" alt="Cap Cana Shuttle" title="Cap Cana Shuttle" loading="lazy" width="373" height="260">
                    </picture>
                </a>
                <div>
                    <h3><a href="/punta-cana-to-cap-cana-transfers" title="Cap Cana Shuttle">Cap Cana Shuttle</a></h3>
                    <p>Enjoy a safe, fast and reliable transfer service to Cap Cana. Estimated transfer time from Punta Cana to Cap Cana is 1 hour and 40 minutes.</p>
                </div>
            </div>
            <div>
                <picture>
                    <source srcset="/assets/img/destinations/puerto-morelos-destino-taxi.webp" type="image/webp">
                    <img src="/assets/img/destinations/puerto-morelos-destino-taxi.jpg" alt="Transportation to Uvero Alto" title="Transportation to Uvero Alto" loading="lazy" width="373" height="260">
                </picture>
                <div>
                    <h3>Transportation to Uvero Alto</h3>
                    <p>Enjoy a safe, fast and reliable transfer service to Uvero Alto. Estimated transfer time from Punta Cana is 30 minutes.</p>
                </div>
            </div>
            <div>
                <picture>
                    <source srcset="/assets/img/destinations/destino-puerto-aventuras.webp" type="image/webp">
                    <img src="/assets/img/destinations/destino-puerto-aventuras.jpg" alt="Transportation to Boca Chica" title="Transportation to Boca Chica" loading="lazy" width="373" height="260">
                </picture>
                <div>
                    <h3>Transportation to Boca Chica</h3>
                    <p>Enjoy a safe, fast and reliable transfer service to Boca Chica. Estimated transfer time from Punta Cana is 1 hour and 20 minutes.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container additional_information">
        <div class="bottom">
            <div class="left">                
                <h2>Always Satisfied: Your Journey from Punta Cana to Cap Cana with Taxi Dominicana</h2>
                <p>Choosing Taxi Dominicana for your journey from Punta Cana to Cap Cana guarantees not just a transfer but a delightful and contented experience. Our commitment to customer satisfaction sets us apart, ensuring that every traveler arrives at their destination with a smile.</p>
                <p>What makes Taxi Dominicana the preferred choice? Punctuality is our foundation &ndash; our team is committed to timely pickups, reducing any waiting time and providing a stress-free start to your trip. The distinctive orange booth at Punta Cana Airport is a welcoming sight, marking the beginning of your seamless journey with us.</p>
                <p>Comfort is another key aspect of our service. Our well-maintained vehicles, driven by skilled professionals, offer a smooth ride, allowing you to relax and enjoy the scenic route from Punta Cana to Cap Cana. We prioritize safety, making sure that your travel experience is secure and worry-free.</p>
                <p>Flexibility is at the core of our customer-centric approach. With the option to pay upon arrival, we provide convenience and confidence, reflecting our dedication to making your journey as pleasant as possible. Our friendly and accommodating team is always ready to address any inquiries, ensuring a positive and personalized experience.</p>
                <p>In summary, Taxi Dominicana delivers a complete package &ndash; punctuality, comfort, safety, flexibility, and personalized service. It's not just a transfer; it's an experience that leaves every traveler happy and content, making Taxi Dominicana the go-to choice for journeys from Punta Cana to Cap Cana. Choose us, and let your journey be as memorable as your destination.</p>
            </div>
            <div class="right">
                <picture>
                    <source srcset="/assets/img/home/client.webp" type="image/webp">
                    <img src="/assets/img/home/client.png" alt="More than just a Taxi service at Punta Cana Airport" title="More than just a Taxi service at Punta Cana Airport" loading="lazy" width="390" height="481">
                </picture>
            </div>
        </div>
    </div>

    <div class="container faqs_section">
        <div class="top">
            <h2>Frequently Asked Questions about Taxi Dominicana and Cap Cana</h2>
            <p>Solve your doubts with our frequently asked questions</p>
        </div>
        <div class="bottom">
            <div>
                <h3>1. What are the must-visit places in Cap Cana?</h3>
                <div>
                    <p>Cap Cana, nestled along the Dominican Republic, offers a plethora of captivating attractions. Cap Cana Bay is renowned for its crystal-clear waters, providing a unique opportunity to swim with turtles in their natural habitat. Yal-ku Lagoon, a short distance away, is a haven for snorkelers, with its vibrant marine life. Additionally, exploring the nearby Bavaro ruins provides a glimpse into the region's rich history.</p>
                </div>
            </div>
            <div>
                <h3>2. Is Uber available in Cap Cana?</h3>
                <div>
                    <p>Uber services are not currently available in Cap Cana. However, visitors can rely on local transport options, including taxi services, which are readily accessible.</p>
                </div>
            </div>
            <div>
                <h3>3. Are there bus services connecting Cap Cana to nearby cities?</h3>
                <div>
                    <p>Indeed, Cap Cana is well-connected by bus services to neighboring cities such as La Romana and Bavaro. This provides a convenient and economical transportation option for travelers.</p>
                </div>
            </div>
            <div>
                <h3>4. How long does the transfer service from Punta Cana to Cap Cana take?</h3>
                <div>
                    <p>The transfer time from Punta Cana Airport to Cap Cana typically ranges from 1.5 to 2 hours, depending on factors like traffic and road conditions. The journey offers scenic views of the Dominican Republic.</p>
                </div>
            </div>
            <div>
                <h3>5. How many kilometers is Cap Cana from Punta Cana Airport?</h3>
                <div>
                    <p>Cap Cana is situated approximately 100 kilometers away from Punta Cana Airport, making it a reasonable distance for a comfortable transfer.</p>
                </div>
            </div>
            <div>
                <h3>6. What is the best time to visit Cap Cana?</h3>
                <div>
                    <p>The optimal time to visit Cap Cana is during the dry months from November to April. This period ensures pleasant weather with lower chances of rainfall, enhancing the overall travel experience.</p>
                </div>
            </div>
            <div>
                <h3>7. Is Cap Cana a safe destination for tourists?</h3>
                <div>
                    <p>Cap Cana is generally considered a safe destination for tourists. While exercising standard precautions is recommended, the area is known for its welcoming atmosphere and security.</p>
                </div>
            </div>
            <div>
                <h3>8. Is a rental car necessary to explore Cap Cana and its surroundings?</h3>
                <div>
                    <p>A rental car is not a necessity in Cap Cana, as the destination offers reliable taxi services and public transportation options. Exploring the surrounding areas can be conveniently done using these modes of transport.</p>
                </div>
            </div>
            <div>
                <h3>9. Are there beachfront accommodation options in Cap Cana?</h3>
                <div>
                    <p>Cap Cana provides a diverse range of accommodation options, including beachfront resorts, luxury hotels, and charming boutique stays. Visitors can choose based on their preferences and budget.</p>
                </div>
            </div>
            <div>
                <h3>10. What are the most popular water activities in Cap Cana?</h3>
                <div>
                    <p>Popular water activities in Cap Cana include snorkeling in Cap Cana Bay, where encounters with marine life, especially turtles, are common. Diving in nearby cenotes and exploring the vibrant coral reefs are also favored aquatic experiences.</p>
                </div>
            </div>
        </div>
    </div>

    @include('layout.footer.general')
@endsection