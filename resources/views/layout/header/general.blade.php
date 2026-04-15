<header class="header_full_width_container">
    
    <nav class="navbar">
        <a class="navbar-brand" href="/" title="Inicio | Taxi Dominicana">
            <picture>
                <source srcset="/assets/img/logo.webp" type="image/webp">
                <img src="/assets/img/logo.png" width="222" height="82" loading="lazy" alt="Logo | Taxi Dominicana" title="Logo | Taxi Dominicana">
            </picture>
        </a>
        
        <button type="button" id="openMenuButton">
            <img src="/assets/img/svg/bars.svg" alt="Menu | Taxi Dominicana" title="Menu | Taxi Dominicana" width="25" height="25" loading="lazy">
        </button>

        <div class="collapse">
            <ul>
                <li><a href="/punta-cana-airport-transfers" title="Punta Cana Airport Transfers">Punta Cana Airport Transfers</a></li>
                <li><a href="/punta-cana-to-bavaro-transfers" title="Punta Cana to Bavaro Shuttle">Punta Cana to Bavaro Shuttle</a></li>
                <li><a href="/punta-cana-to-la-romana-transfers" title="Transportation from Punta Cana to La Romana">Transportation from Punta Cana to La Romana</a></li>
            </ul>
            <ul class="right">
                <li>
                    <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.MX') ) }}" class="phone" title="Call us">
                        <svg width="25" height="25"><use xlink:href="/assets/img/svg/icons.svg#phone"></use></svg>
                    </a>
                </li>          
                <li>
                    <a href="https://api.whatsapp.com/send?phone=529987374906&text=Hello%2C%20I%20need%20a%20transportation%20service" class="whatsapp" title="Whatsapp">
                        <svg width="30" height="30"><use xlink:href="/assets/img/svg/icons.svg#social-whatsapp"></use></svg>
                    </a>
                </li>
                <li><a href="/my-reservation" class="my-booking-btn" title="My Reservation">My reservation</a></li>
            </ul>
        </div>

        <div class="hide-menu">
            <div>
                <div>
                    <div class="last">
                        <div class="top" id="closeMenuButton">
                            <div>
                                <img src="/assets/img/svg/bars.svg" alt="Menu | Taxi Dominicana" title="Menu | Taxi Dominicana" width="25" height="25" loading="lazy">
                                Menu
                            </div>
                            <button><img src="/assets/img/svg/close.svg" width="32" height="25" alt="" title="" loading="lazy"></button>
                        </div>
                        <div class="content">
                            <div class="items">
                                <a href="/" title="Inicio">Home</a>
                                <a href="/punta-cana-airport-transfers" title="Punta Cana Airport Transfers">Punta Cana Airport Transfers</a>
                                <a href="/punta-cana-to-bavaro-transfers" title="Punta Cana to Bavaro Shuttle">Punta Cana to Bavaro Shuttle</a>
                                <a href="/punta-cana-to-la-romana-transfers" title="Transportation from Punta Cana to La Romana">Transportation from Punta Cana to La Romana</a>
                                <a href="/punta-cana-to-cap-cana-transfers" title="Punta Cana to Cap Cana Shuttle">Punta Cana to Cap Cana Shuttle</a>
                                <a href="/quote" title="Quote">Quote</a>
                            </div>                            
                            <div class="items">
                                <div class="info">
                                    <p>Customer service</p>
                                    <p>For more information about your reservation, please contact us, we will help you!</p>
                                </div>
                                <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.MX') ) }}" title="México Phone | Taxi Dominicana">{{  config('services.phone.MX') }}</a>
                                <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.US') ) }}" title="USA & Canada Phone | Taxi Dominicana">{{  config('services.phone.US') }}</a>
                            </div>                                
                            <div class="items">
                                <a href="https://api.whatsapp.com/send?phone=529987374906&text=Hello%2C%20I%20need%20a%20transportation%20service" class="whatsapp">
                                    <svg width="30" height="30"><use xlink:href="/assets/img/svg/icons.svg#social-whatsapp"></use></svg>
                                    Whatsapp
                                </a>
                                <a href="/my-reservation" class="my-booking" title="My reservation">My reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</header>