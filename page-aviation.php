<?php
/**
 * The template for displaying the Aviation industry page
 * 
 * This template will be automatically used for any page with the slug "aviation"
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main aviation-page">
        
        <!-- Aviation Page Content -->
        <div class="aviation-page-wrapper">
            <div class="container">
                
                <!-- Breadcrumb Navigation -->
                <nav class="breadcrumb-nav" aria-label="Breadcrumb">
                    <ol class="breadcrumb-list">
                        <li class="breadcrumb-item">
                            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                        </li>
                        <li class="breadcrumb-separator">
                            <svg xmlns="http://www.w3.org/2000/svg" width="5" height="9" viewBox="0 0 5 9" fill="none">
                                <path d="M1 1.5L4 4.5L1 7.5" stroke="#091026" stroke-linecap="square"/>
                            </svg>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?php echo esc_url(home_url('/industries')); ?>">Industries</a>
                        </li>
                        <li class="breadcrumb-separator">
                            <svg xmlns="http://www.w3.org/2000/svg" width="5" height="9" viewBox="0 0 5 9" fill="none">
                                <path d="M1 1.5L4 4.5L1 7.5" stroke="#091026" stroke-linecap="square"/>
                            </svg>
                        </li>
                        <li class="breadcrumb-item breadcrumb-current" aria-current="page">
                            Aviation
                        </li>
                    </ol>
                </nav>

                <!-- Main Content Area -->
                <div class="aviation-content-grid">
                    
                    <!-- Left Column - Sticky Heading -->
                    <div class="aviation-heading-column">
                        <h1 class="aviation-main-heading">Aviation</h1>
                    </div>

                    <!-- Right Column - Content -->
                    <div class="aviation-text-column">
                        
                        <!-- First Section -->
                        <div class="aviation-text-section">
                            <h2 class="aviation-section-title">Collaborative Performance. Validated Results.</h2>
                            <div class="aviation-section-content">
                                <p>Viper bridges airlines and satellite service providers through a shared performance intelligence layer. By continuously running standardized, industry-defined tests, all stakeholders gain real-time visibility into connectivity quality. This collaboration turns passive data into proactive insight—empowering providers and airlines to jointly identify root causes, implement improvements, and validate the impact of every change. The result: stronger accountability, faster resolution, and a better-connected passenger experience.</p>
                            </div>
                        </div>

                        <!-- Second Section -->
                        <div class="aviation-text-section">
                            <h2 class="aviation-section-title">Tail-Level Intelligence Brings Visibility to Every Aircraft</h2>
                            <div class="aviation-section-content">
                                <p>Imagine zooming in on each aircraft as it travels across the globe—seeing not only where it's flying, but how it's performing. Viper makes this possible by integrating with FlightAware tail number data, transforming every tail into a traceable digital signature of inflight experience.</p>
                            </div>
                        </div>

                        <!-- Six Feature Blocks -->
                        <div class="aviation-features-grid">
                            <!-- Left Column Features -->
                            <div class="aviation-features-column aviation-features-left">
                                <div class="aviation-feature-item">
                                    <div class="aviation-feature-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                        <path d="M16.2823 36.6977L41.4405 15.8949C42.9881 14.5556 44.1636 12.8483 44.8663 10.9361L46.8304 6.65928C47.6244 4.49333 45.4924 2.38551 43.2971 3.16594L38.9712 5.10779C37.0371 5.80254 35.3103 6.9647 33.9556 8.49482L13.34 32.8654L5.0571 32.8502C4.4884 32.8492 3.94305 33.0704 3.54478 33.4641L3.17856 33.8262C2.86269 34.1385 2.98293 34.6738 3.40516 34.8287L9.99098 37.2394C9.93226 37.7244 10.0937 38.2371 10.4705 38.6096L10.9805 39.1139C11.2746 39.4046 11.6556 39.564 12.0454 39.5964L14.2902 45.5994C14.4469 46.0169 14.9883 46.1358 15.3042 45.8235L15.6704 45.4614C16.0687 45.0676 16.2924 44.5285 16.2913 43.9662L16.2778 36.7022L16.2823 36.6977Z" fill="#487FFF"/>
                                        <path d="M28.2208 12.3112L9.01243 9.30614C8.27382 9.19143 7.5267 9.43038 7.00026 9.95087L6.1854 10.7565C5.88327 11.0552 5.97137 11.5677 6.36153 11.7453L22.3176 19.2923L28.2208 12.3112Z" fill="#487FFF"/>
                                        <path d="M40.4866 40.4237L37.4749 21.5962L30.4504 27.4055L38.0195 43.0445C38.2037 43.4258 38.7175 43.5174 39.0197 43.2187L39.8345 42.413C40.361 41.8926 40.6027 41.1539 40.4866 40.4237Z" fill="#487FFF"/>
                                        </svg>
                                    </div>
                                    <div class="aviation-feature-content">
                                        <h3 class="aviation-feature-title">See the Story of Every Tail</h3>
                                        <p class="aviation-feature-description">identify aircraft with recurring issues like outdated firmware or misconfigured modems.</p>
                                    </div>
                                </div>

                                <div class="aviation-feature-item">
                                    <div class="aviation-feature-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                        <path d="M9.81832 22.1871L3.63478 28.435C2.78841 29.2901 2.78841 30.6886 3.63478 31.5438C4.10278 32.0167 4.61061 32.2581 5.24788 32.2581C5.8055 32.2581 6.36311 32.0469 6.78132 31.6142L11.3219 27.0264C10.6547 25.3462 10.137 23.7063 9.81832 22.1871ZM12.1484 26.956C12.1583 26.9761 12.1683 26.9962 12.1683 27.0164C12.6462 28.1935 13.1839 29.4008 13.7814 30.6182C16.6292 36.4234 20.642 42.3795 23.679 46.3435C24.3462 47.2188 25.6506 47.2188 26.3277 46.3435C29.3547 42.3896 33.3676 36.4234 36.2253 30.6182C38.2965 26.4026 39.7502 22.2776 39.7502 19.1084C39.7502 17.7603 39.581 16.4624 39.2325 15.1947L34.662 19.8026C34.5923 22.4084 33.507 24.7526 31.7943 26.4529C28.0105 30.2258 21.9365 30.2057 18.1726 26.4127C14.4087 22.6096 14.3888 16.4322 18.1726 12.609C22.2352 8.50414 28.8768 8.8764 32.4913 13.3435L36.2851 9.51024C30.7288 2.8398 20.7018 2.38706 14.578 8.56451C11.9094 11.2609 10.2564 14.9834 10.2564 19.0984C10.2564 21.6136 11.1725 24.5212 12.1484 26.956ZM16.4599 21.8953C17.6349 21.0099 19.2978 21.1206 20.3433 22.177L20.8013 22.6398C22.1655 24.0182 23.9678 24.7124 25.7601 24.7124C27.5624 24.7124 29.3547 24.0182 30.7189 22.6398L40.8256 12.4279C41.7417 11.5023 43.2353 11.5023 44.1514 12.4279L44.6991 12.9913L46.9594 4.45962C47.1884 3.59438 46.4117 2.80962 45.5554 3.04102L37.1115 5.32487L37.6592 5.87822C38.5753 6.80383 38.5753 8.31298 37.6592 9.23859L27.5724 19.4505C26.5766 20.4566 24.9436 20.4566 23.9479 19.4505L23.2011 18.6959C21.4386 16.9151 18.9194 16.241 16.5495 16.8346C16.0317 18.4645 16.0019 20.2353 16.4599 21.8953Z" fill="#487FFF"/>
                                        </svg>
                                    </div>
                                    <div class="aviation-feature-content">
                                        <h3 class="aviation-feature-title">Route-Level Clarity</h3>
                                        <p class="aviation-feature-description">see when/where performance breaks down (e.g., latency spikes on certain routes)</p>
                                    </div>
                                </div>

                                <div class="aviation-feature-item">
                                    <div class="aviation-feature-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                        <path d="M23.73 46.9452V28.6184L12.2266 42.8407C15.6027 45.2808 19.5634 46.7017 23.73 46.9452Z" fill="#487FFF"/>
                                        <path d="M26.3086 26.2629V46.9452C31.6671 46.6322 36.6879 44.3741 40.5629 40.5045C44.4387 36.6341 46.702 31.6181 47.0156 26.2629H26.3086Z" fill="#487FFF"/>
                                        <path d="M37.9062 15.246H41.1277V23.6832H37.9062V15.246Z" fill="#487FFF"/>
                                        <path d="M9.48669 9.4416C5.30617 13.6202 3.00391 19.1362 3.00391 24.9732C3.00391 30.8103 5.30617 36.3262 9.48669 40.5049C9.72932 40.7474 9.97686 40.9829 10.2284 41.2127L23.7324 24.5168V3C18.3722 3.31397 13.3566 5.57341 9.48669 9.4416Z" fill="#487FFF"/>
                                        <path d="M26.3086 12.6839H29.522V23.6835H26.3086V12.6839Z" fill="#487FFF"/>
                                        <path d="M32.1055 6.4775H35.3269V23.6838H32.1055V6.4775Z" fill="#487FFF"/>
                                        <path d="M43.707 18.6948H47.0574V23.6833H43.707V18.6948Z" fill="#487FFF"/>
                                        </svg>
                                    </div>
                                    <div class="aviation-feature-content">
                                        <h3 class="aviation-feature-title">Fleet-Wide Trends in Motion</h3>
                                        <p class="aviation-feature-description">view macro-level trends by aircraft type, time of day, or geography.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Column Features -->
                            <div class="aviation-features-column aviation-features-right">
                                <div class="aviation-feature-item">
                                    <div class="aviation-feature-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="51" height="50" viewBox="0 0 51 50" fill="none">
                                        <path d="M4.49219 4.16666H10.8726V10.5468H4.49219V4.16666Z" fill="#487FFF"/>
                                        <path d="M13.3164 4.16666H19.6968V10.5468H13.3164V4.16666Z" fill="#487FFF"/>
                                        <path d="M22.1367 4.16666H28.5172V10.5468H22.1367V4.16666Z" fill="#487FFF"/>
                                        <path d="M37.3375 6.77081V4.16666H30.957V10.5468H33.5613C34.0154 8.68975 35.4803 7.22491 37.3375 6.77081Z" fill="#487FFF"/>
                                        <path d="M39.7773 4.16666V6.77081C41.6345 7.22491 43.0994 8.68975 43.5535 10.5468H46.1578V4.16666H39.7773Z" fill="#487FFF"/>
                                        <path d="M10.8726 15.5924V12.9882H4.49219V19.3684H7.09645C7.55057 17.5113 9.01546 16.0465 10.8726 15.5924Z" fill="#487FFF"/>
                                        <path d="M13.3164 15.5922C15.1736 16.0463 16.6385 17.5111 17.0926 19.3682H19.6968V12.988H13.3164V15.5922Z" fill="#487FFF"/>
                                        <path d="M22.1367 12.988H28.5172V19.3682H22.1367V12.988Z" fill="#487FFF"/>
                                        <path d="M33.5613 12.988H30.957V19.3682H37.3375V16.7641C35.4803 16.31 34.0154 14.8451 33.5613 12.988Z" fill="#487FFF"/>
                                        <path d="M39.7773 16.7641V19.3682H46.1578V12.988H43.5535C43.0994 14.8451 41.6345 16.31 39.7773 16.7641Z" fill="#487FFF"/>
                                        <path d="M7.09645 21.8098H4.49219V28.19H10.8726V25.5858C9.01546 25.1317 7.55057 23.6669 7.09645 21.8098Z" fill="#487FFF"/>
                                        <path d="M13.3164 25.5859V28.1901H19.6968V21.8099H17.0926C16.6385 23.667 15.1736 25.1318 13.3164 25.5859Z" fill="#487FFF"/>
                                        <path d="M22.1367 21.8099H28.5172V28.1901H22.1367V21.8099Z" fill="#487FFF"/>
                                        <path d="M30.957 21.8099H37.3375V28.1901H30.957V21.8099Z" fill="#487FFF"/>
                                        <path d="M39.7773 21.8099H46.1578V28.1901H39.7773V21.8099Z" fill="#487FFF"/>
                                        <path d="M4.49219 30.6314H10.8726V37.0116H4.49219V30.6314Z" fill="#487FFF"/>
                                        <path d="M13.3164 30.6313H19.6968V37.0115H13.3164V30.6313Z" fill="#487FFF"/>
                                        <path d="M28.5172 33.2354V30.6313H22.1367V37.0115H24.741C25.1951 35.1544 26.66 33.6895 28.5172 33.2354Z" fill="#487FFF"/>
                                        <path d="M30.957 33.2354C32.8142 33.6895 34.2791 35.1544 34.7332 37.0115H37.3375V30.6313H30.957V33.2354Z" fill="#487FFF"/>
                                        <path d="M39.7773 30.6313H46.1578V37.0115H39.7773V30.6313Z" fill="#487FFF"/>
                                        <path d="M4.49219 39.453H10.8726V45.8332H4.49219V39.453Z" fill="#487FFF"/>
                                        <path d="M13.3164 39.4532H19.6968V45.8333H13.3164V39.4532Z" fill="#487FFF"/>
                                        <path d="M24.741 39.4532H22.1367V45.8333H28.5172V43.2292C26.66 42.7751 25.1951 41.3102 24.741 39.4532Z" fill="#487FFF"/>
                                        <path d="M30.957 43.2292V45.8333H37.3375V39.4532H34.7332C34.2791 41.3102 32.8142 42.7751 30.957 43.2292Z" fill="#487FFF"/>
                                        <path d="M39.7773 39.4532H46.1578V45.8333H39.7773V39.4532Z" fill="#487FFF"/>
                                        <path d="M12.0925 23.2911C13.5848 23.2911 14.7945 22.0815 14.7945 20.5893C14.7945 19.0971 13.5848 17.8875 12.0925 17.8875C10.6003 17.8875 9.39062 19.0971 9.39062 20.5893C9.39062 22.0815 10.6003 23.2911 12.0925 23.2911Z" fill="#487FFF"/>
                                        <path d="M38.5574 14.4692C40.0496 14.4692 41.2593 13.2596 41.2593 11.7674C41.2593 10.2753 40.0496 9.06561 38.5574 9.06561C37.0652 9.06561 35.8555 10.2753 35.8555 11.7674C35.8555 13.2596 37.0652 14.4692 38.5574 14.4692Z" fill="#487FFF"/>
                                        <path d="M29.6824 40.963C31.1746 40.963 32.3843 39.7534 32.3843 38.2612C32.3843 36.7691 31.1746 35.5594 29.6824 35.5594C28.1902 35.5594 26.9805 36.7691 26.9805 38.2612C26.9805 39.7534 28.1902 40.963 29.6824 40.963Z" fill="#487FFF"/>
                                        </svg>
                                    </div>
                                    <div class="aviation-feature-content">
                                        <h3 class="aviation-feature-title">Provider Heatmaps</h3>
                                        <p class="aviation-feature-description">visualize vendor performance by aircraft type (e.g., IFC provider A on A330 vs. IFC provider B on 737 MAX).</p>
                                    </div>
                                </div>

                                <div class="aviation-feature-item">
                                    <div class="aviation-feature-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="51" height="50" viewBox="0 0 51 50" fill="none">
                                        <path d="M47.2731 23.3253V27.6198C47.2725 28.189 47.0461 28.7348 46.6435 29.1374C46.241 29.54 45.6952 29.7664 45.1259 29.767H42.0654C41.6813 31.2271 41.1003 32.6281 40.3382 33.9315L42.5047 36.1043C42.9044 36.5072 43.1287 37.0518 43.1285 37.6194C43.1284 38.187 42.9039 38.7315 42.504 39.1343L39.4621 42.1759C39.0541 42.5662 38.5113 42.784 37.9467 42.784C37.3821 42.784 36.8393 42.5662 36.4313 42.1759L34.2596 40.0101C32.9563 40.7721 31.5552 41.3532 30.0951 41.7373V44.7978C30.0945 45.3671 29.8681 45.9129 29.4655 46.3154C29.063 46.718 28.5172 46.9444 27.9479 46.945H23.6534C23.0841 46.9444 22.5383 46.718 22.1357 46.3154C21.7332 45.9129 21.5067 45.3671 21.5061 44.7978V41.7373C20.6193 41.5025 19.753 41.1956 18.9161 40.8199C18.8111 40.7717 18.7193 40.6989 18.6483 40.6078C18.5774 40.5166 18.5294 40.4098 18.5084 40.2962C18.4874 40.1826 18.494 40.0657 18.5276 39.9552C18.5613 39.8447 18.6211 39.7439 18.7018 39.6613L21.7438 36.6121C21.8352 36.5206 21.9497 36.4556 22.0751 36.4239C22.2005 36.3922 22.3321 36.395 22.456 36.4321C23.541 36.758 24.6677 36.9239 25.8006 36.9245C28.0656 36.9245 30.2797 36.2529 32.163 34.9945C34.0463 33.7361 35.5141 31.9476 36.3809 29.855C37.2477 27.7624 37.4745 25.4598 37.0326 23.2383C36.5907 21.0169 35.5 18.9763 33.8984 17.3747C32.2968 15.7731 30.2563 14.6824 28.0348 14.2405C25.8133 13.7987 23.5107 14.0255 21.4181 14.8922C19.3256 15.759 17.537 17.2268 16.2786 19.1101C15.0203 20.9934 14.3486 23.2075 14.3486 25.4725C14.3497 26.6032 14.5156 27.7276 14.8411 28.8105C14.8781 28.9342 14.881 29.0656 14.8494 29.1909C14.8178 29.3161 14.7528 29.4304 14.6614 29.5217L11.6121 32.5706C11.5297 32.6516 11.4289 32.7116 11.3184 32.7455C11.2078 32.7794 11.0907 32.7861 10.977 32.7652C10.8633 32.7442 10.7563 32.6962 10.6651 32.6252C10.5739 32.5541 10.5011 32.4622 10.4529 32.3571C10.0775 31.52 9.77081 30.6538 9.53584 29.767H6.47538C5.90608 29.7664 5.36028 29.54 4.95773 29.1374C4.55517 28.7348 4.32875 28.189 4.32812 27.6198V23.3253C4.32875 22.756 4.55517 22.2102 4.95773 21.8076C5.36028 21.4051 5.90608 21.1786 6.47538 21.178H9.53584C9.91998 19.7178 10.501 18.3167 11.263 17.0132L9.09653 14.8408C8.69682 14.4378 8.47259 13.8932 8.47272 13.3256C8.47286 12.758 8.69734 12.2135 9.09725 11.8107L12.1392 8.76911C12.5472 8.37883 13.09 8.161 13.6546 8.161C14.2191 8.161 14.762 8.37883 15.1699 8.76911L17.3416 10.9349C18.645 10.1729 20.046 9.5918 21.5061 9.20771V6.14725C21.5067 5.57795 21.7332 5.03215 22.1357 4.6296C22.5383 4.22705 23.0841 4.00062 23.6534 4H27.9479C28.5172 4.00062 29.063 4.22705 29.4655 4.6296C29.8681 5.03215 30.0945 5.57795 30.0951 6.14725V9.20771C31.5552 9.5918 32.9563 10.1729 34.2596 10.9349L36.4324 8.76841C36.8405 8.37854 37.3832 8.16105 37.9476 8.16118C38.5119 8.16131 39.0545 8.37906 39.4624 8.76912L42.504 11.8111C42.9041 12.2139 43.1286 12.7587 43.1286 13.3264C43.1286 13.8942 42.9041 14.4389 42.504 14.8418L40.3382 17.0132C41.1002 18.3167 41.6813 19.7178 42.0654 21.178H45.1259C45.6952 21.1786 46.241 21.4051 46.6435 21.8076C47.0461 22.2102 47.2725 22.756 47.2731 23.3253ZM33.9538 21.8193C33.914 21.7046 33.8458 21.6019 33.7556 21.5206C33.6654 21.4393 33.5562 21.3821 33.438 21.3543C33.3198 21.3265 33.1965 21.3291 33.0796 21.3617C32.9626 21.3943 32.8558 21.4559 32.7691 21.5408L29.5122 24.798L27.2346 24.0386L26.4755 21.761L29.7324 18.5041C29.8173 18.4173 29.8789 18.3105 29.9115 18.1936C29.9441 18.0766 29.9466 17.9533 29.9189 17.8351C29.8911 17.7169 29.8339 17.6077 29.7526 17.5175C29.6713 17.4273 29.5685 17.3592 29.4538 17.3193C28.228 16.9055 26.9129 16.8322 25.6488 17.1072C24.3846 17.3822 23.2188 17.9951 22.2756 18.8807C21.3325 19.7662 20.6474 20.8912 20.2935 22.1356C19.9395 23.3799 19.9299 24.697 20.2658 25.9464L5.43915 40.7731C4.76803 41.4442 4.391 42.3544 4.391 43.3036C4.391 44.2527 4.76803 45.1629 5.43915 45.834C6.11027 46.5051 7.0205 46.8822 7.96961 46.8822C8.91872 46.8822 9.82895 46.5051 10.5001 45.834L25.3267 31.0073C26.5761 31.3432 27.8932 31.3336 29.1376 30.9797C30.382 30.6257 31.5069 29.9406 32.3925 28.9975C33.278 28.0544 33.891 26.8885 34.166 25.6244C34.4409 24.3602 34.3676 23.0451 33.9538 21.8193Z" fill="#487FFF"/>
                                        </svg>
                                    </div>
                                    <div class="aviation-feature-content">
                                        <h3 class="aviation-feature-title">Visual Maintenance Triggers</h3>
                                        <p class="aviation-feature-description">detect recurring issues signaling deeper technical problems.</p>
                                    </div>
                                </div>

                                <div class="aviation-feature-item">
                                    <div class="aviation-feature-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="51" height="50" viewBox="0 0 51 50" fill="none">
                                        <path d="M43.7326 38.826C42.4441 39.2347 41.2286 39.8455 40.1317 40.6354C39.1184 41.3156 37.4759 42.0337 36.5851 41.2334C35.307 40.0819 37.8263 37.2205 37.8263 34.234C37.8172 31.9204 36.192 30.2351 33.3635 29.61C32.6072 29.456 31.9058 29.1028 31.3319 28.5868C31.6858 27.6158 31.7624 26.5655 31.5532 25.5535C32.9185 24.1314 35.1548 24.0664 37.48 21.5233C43.629 24.8891 46.3095 32.3069 43.7326 38.826ZM30.4609 19.7673C32.3262 19.729 34.1797 20.0712 35.9082 20.7732C33.9943 22.6221 32.4908 22.6855 31.0218 23.8164L29.8703 20.3562L30.4609 19.7673ZM21.3584 17.0703C18.5661 19.861 16.5008 21.2025 12.8325 23.823C12.3327 24.1783 12.1038 24.805 12.2568 25.3988L12.9806 28.294L12.4698 28.8048L6.05438 22.3894L6.56515 21.8794L9.46031 22.604C10.0553 22.7538 10.6812 22.5229 11.0362 22.0225C13.6394 18.3789 15.0096 16.2774 17.7896 13.4974C17.976 13.3105 18.0614 13.0454 18.019 12.7848C17.9767 12.5242 17.8118 12.2998 17.5758 12.1815L5.32812 6.05721C6.31021 4.99747 7.79949 4.57065 9.19382 4.94932L21.9687 8.43502C22.3953 8.54943 22.8506 8.42817 23.1638 8.11672L26.7827 4.49777C29.7692 1.51214 32.147 1.54915 33.1159 1.73997C33.2302 2.38726 33.3626 4.74534 30.3309 8.10109C28.7633 9.83654 26.7737 11.8508 26.2021 12.4257C25.8725 12.755 25.7586 13.243 25.9084 13.6841L29.9049 25.667C30.2841 27.0612 29.8576 28.5506 28.7978 29.5327L22.676 17.2833C22.5577 17.0468 22.3328 16.8817 22.0718 16.8395C21.8107 16.7973 21.5453 16.8832 21.3584 17.0703ZM23.061 21.733L23.9238 23.4602C23.5985 23.6154 23.2554 23.7301 22.9022 23.8016C22.767 23.8401 22.6216 23.8023 22.5222 23.7029C22.4228 23.6035 22.385 23.4581 22.4235 23.3229C22.546 22.7619 22.757 22.7884 23.3499 22.3114L23.061 21.733ZM17.1843 30.2894C17.7399 31.2989 18.6179 32.093 19.6781 32.5446C21.4876 33.2939 23.8514 33.0208 23.7255 34.5227C23.6097 35.3687 23.3726 36.1937 23.0215 36.9721C22.0345 39.4955 22.0954 40.1864 22.3915 41.907C22.6459 42.8985 22.6314 43.9399 22.3495 44.9239C17.8043 41.5556 15.7603 35.7644 17.1843 30.2894ZM28.6712 47.5723C30.4806 46.3624 32.4225 45.7464 35.8268 45.9948C36.264 46.0297 36.6991 46.0868 37.1305 46.1658C34.5288 47.5128 31.5687 48.0049 28.6712 47.5723ZM39.0872 44.9453C36.5029 44.186 33.769 44.0899 31.1378 44.6656C29.4539 45.1106 27.8968 45.9419 26.5903 47.0936C25.6195 46.7912 24.6848 46.3833 23.8029 45.8772C24.2719 44.5106 24.3446 43.0392 24.0126 41.6331C23.7658 40.2012 23.6902 39.7776 24.553 37.575C24.9656 36.65 25.2391 35.6692 25.3648 34.6642C25.488 33.5008 24.8177 32.3987 23.728 31.973C22.5033 31.4367 21.3124 31.4441 20.3065 31.028C19.0928 30.4174 18.2421 29.2658 18.015 27.9263C18.5951 26.6477 19.3673 25.4653 20.3048 24.4201C20.4693 24.2326 20.6577 24.0672 20.8337 23.8904C20.9141 24.2577 21.0959 24.5951 21.3584 24.8642C22.2837 25.7903 23.4969 25.472 24.6607 24.9317L27.4202 30.4539C27.6352 30.8826 28.043 31.182 28.5164 31.2589C28.9899 31.3358 29.4715 31.1807 29.8111 30.8421C30.0641 30.6042 30.2989 30.3476 30.5135 30.0747C31.2524 30.6332 32.1043 31.0237 33.0098 31.2188C34.4524 31.5371 36.1739 32.3217 36.1813 34.2398C36.1813 36.3626 34.6301 38.2173 34.5857 40.2752C34.5429 42.2681 36.2232 43.4525 38.1454 43.1975C40.1194 42.9425 41.2273 41.7442 42.6691 41.0072C41.7396 42.5381 40.5234 43.8753 39.0872 44.9453Z" fill="#487FFF"/>
                                        </svg>
                                    </div>
                                    <div class="aviation-feature-content">
                                        <h3 class="aviation-feature-title">Digital Signature Per Aircraft</h3>
                                        <p class="aviation-feature-description">each tail becomes a real-time, traceable stream of inflight performance data.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Fleet-Wide Impact Table -->
                        <div class="aviation-impact-section">
                            <h3 class="aviation-impact-title">Fleet-Wide Aggregated Viper Impact</h3>
                            
                            <div class="aviation-impact-table-wrapper">
                                <div class="aviation-impact-table">
                                    <div class="table-header">
                                        <div class="table-cell">Time Period</div>
                                        <div class="table-cell">Flights</div>
                                        <div class="table-cell">Passengers</div>
                                        <div class="table-cell">Samples</div>
                                        <div class="table-cell">Complaints Prevented</div>
                                        <div class="table-cell">Savings (USD)</div>
                                        <div class="table-cell">NPS Gain</div>
                                        <div class="table-cell">ROI</div>
                                    </div>
                                    
                                    <div class="table-row">
                                        <div class="table-cell">1 Year</div>
                                        <div class="table-cell">85,000</div>
                                        <div class="table-cell">22,100,000</div>
                                        <div class="table-cell">1,700,000</div>
                                        <div class="table-cell">25,500</div>
                                        <div class="table-cell">$2,550,000</div>
                                        <div class="table-cell">+425</div>
                                        <div class="table-cell">0.4x</div>
                                    </div>
                                    
                                    <div class="table-row">
                                        <div class="table-cell">3 Years</div>
                                        <div class="table-cell">255,000</div>
                                        <div class="table-cell">66,300,000</div>
                                        <div class="table-cell">5,100,000</div>
                                        <div class="table-cell">76,500</div>
                                        <div class="table-cell">$7,650,000</div>
                                        <div class="table-cell">+1,275</div>
                                        <div class="table-cell">0.4x</div>
                                    </div>
                                </div>
                            </div>
                            
                            <p class="aviation-table-note">These results are based on ~150 long-haul aircraft operating ~1.2 flights/day with 260 passengers per flight and 20 QoE/QoS test samples per flight.</p>
                        </div>

                        <!-- Strategic Takeaways Section -->
                        <div class="aviation-strategic-section">
                            <h3 class="aviation-strategic-title">Strategic Takeaways</h3>

                            <div class="aviation-strategic-grid">
                                <!-- Left Column -->
                                <div class="aviation-strategic-column aviation-strategic-left">
                                    <!-- Operational Confidence -->
                                    <div class="aviation-strategic-item">
                                        <div class="aviation-strategic-content">
                                            <h4 class="aviation-strategic-item-title">Operational Confidence</h4>
                                            <p class="aviation-strategic-description">
                                                Identify aircraft-specific or provider-linked performance issues before they impact service, using visual dashboards to isolate trends quickly.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Engineering Efficiency -->
                                    <div class="aviation-strategic-item">
                                        <div class="aviation-strategic-content">
                                            <h4 class="aviation-strategic-item-title">Engineering Efficiency</h4>
                                            <p class="aviation-strategic-description">
                                                Reduce downtime and troubleshooting through preemptive maintenance insights powered by tail-level trends and anomaly detection.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Performance Transparency -->
                                    <div class="aviation-strategic-item">
                                        <div class="aviation-strategic-content">
                                            <h4 class="aviation-strategic-item-title">Performance Transparency</h4>
                                            <p class="aviation-strategic-description">
                                                Enable executives and frontline staff to make informed decisions with fleet-wide dashboards, route-level heatmaps, and alerting tools.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Middle Column - SVG Timeline (same as strategic takeaways) -->
                                <div class="aviation-strategic-column aviation-strategic-middle">
                                    <div class="aviation-timeline-svg">
                                        <svg width="312" height="720" viewBox="0 0 312 720" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M156 31L156 709" stroke="#E0EAF8" stroke-width="1.5" stroke-dasharray="4 4"/>
                                            
                                            <!-- Connection Point 1 -->
                                            <line x1="7" y1="15.5" x2="156" y2="15.5" stroke="#E0EAF8"/>
                                            <!-- Moving rectangle along line 1 -->
                                            <rect x="152" y="14.5" width="8" height="2" rx="1" fill="#2866F7" opacity="0">
                                                <animateTransform
                                                    attributeName="transform"
                                                    type="translate"
                                                    values="0,0;-145,0"
                                                    dur="4.2s"
                                                    repeatCount="indefinite"/>
                                                <animate
                                                    attributeName="opacity"
                                                    values="0;0;0.8;0.8;0"
                                                    dur="4.2s"
                                                    repeatCount="indefinite"/>
                                            </rect>
                                            <circle cx="156" cy="15" r="15" transform="rotate(-90 156 15)" fill="#2866F7" fill-opacity="0.18"/>
                                            <circle cx="156" cy="15" r="6" fill="#2866F7" class="scintillate-delay-1"/>
                                            <circle cx="4" cy="15" r="4" transform="rotate(-90 4 15)" fill="#2866F7"/>
                                            
                                            <!-- Connection Point 2 -->
                                            <line x1="7" y1="289.5" x2="156" y2="289.5" stroke="#E0EAF8"/>
                                            <!-- Moving rectangle along line 2 -->
                                            <rect x="150" y="288.5" width="6" height="2" rx="1" fill="#2866F7" opacity="0">
                                                <animateTransform
                                                    attributeName="transform"
                                                    type="translate"
                                                    values="0,0;-143,0"
                                                    dur="2.8s"
                                                    begin="1.3s"
                                                    repeatCount="indefinite"/>
                                                <animate
                                                    attributeName="opacity"
                                                    values="0;0;0.8;0.8;0"
                                                    dur="2.8s"
                                                    begin="1.3s"
                                                    repeatCount="indefinite"/>
                                            </rect>
                                            <circle cx="156" cy="289" r="15" transform="rotate(-90 156 289)" fill="#2866F7" fill-opacity="0.18"/>
                                            <circle cx="156" cy="289" r="6" fill="#2866F7" class="scintillate-delay-2"/>
                                            <circle cx="4" cy="289" r="4" transform="rotate(-90 4 289)" fill="#2866F7"/>
                                            
                                            <!-- Connection Point 3 -->
                                            <line x1="305" y1="151.499" x2="156" y2="151.499" stroke="#E0EAF8"/>
                                            <!-- Moving rectangle along line 3 -->
                                            <rect x="156" y="150.5" width="9" height="2" rx="1" fill="#2866F7" opacity="0">
                                                <animateTransform
                                                    attributeName="transform"
                                                    type="translate"
                                                    values="0,0;140,0"
                                                    dur="3.6s"
                                                    begin="2.1s"
                                                    repeatCount="indefinite"/>
                                                <animate
                                                    attributeName="opacity"
                                                    values="0;0;0.8;0.8;0"
                                                    dur="3.6s"
                                                    begin="2.1s"
                                                    repeatCount="indefinite"/>
                                            </rect>
                                            <circle cx="156" cy="152" r="12" transform="rotate(90 156 152)" fill="#2866F7" fill-opacity="0.18"/>
                                            <circle cx="156" cy="152" r="4" fill="#2866F7" class="scintillate-delay-3"/>
                                            <circle cx="308" cy="152" r="4" transform="rotate(90 308 152)" fill="#2866F7"/>
                                            
                                            <!-- Connection Point 4 -->
                                            <line x1="305" y1="425.499" x2="156" y2="425.499" stroke="#E0EAF8"/>
                                            <!-- Moving rectangle along line 4 -->
                                            <rect x="156" y="424.5" width="5" height="2" rx="1" fill="#2866F7" opacity="0">
                                                <animateTransform
                                                    attributeName="transform"
                                                    type="translate"
                                                    values="0,0;144,0"
                                                    dur="4.7s"
                                                    begin="0.7s"
                                                    repeatCount="indefinite"/>
                                                <animate
                                                    attributeName="opacity"
                                                    values="0;0;0.8;0.8;0"
                                                    dur="4.7s"
                                                    begin="0.7s"
                                                    repeatCount="indefinite"/>
                                            </rect>
                                            <circle cx="156" cy="426" r="12" transform="rotate(90 156 426)" fill="#2866F7" fill-opacity="0.18"/>
                                            <circle cx="156" cy="426" r="4" fill="#2866F7" class="scintillate-delay-4"/>
                                            <circle cx="308" cy="426" r="4" transform="rotate(90 308 426)" fill="#2866F7"/>
                                            
                                            <!-- Connection Point 5 -->
                                            <line x1="7" y1="564.5" x2="156" y2="564.5" stroke="#E0EAF8"/>
                                            <!-- Moving rectangle along line 5 -->
                                            <rect x="149" y="563.5" width="7" height="2" rx="1" fill="#2866F7" opacity="0">
                                                <animateTransform
                                                    attributeName="transform"
                                                    type="translate"
                                                    values="0,0;-142,0"
                                                    dur="3.1s"
                                                    begin="3.2s"
                                                    repeatCount="indefinite"/>
                                                <animate
                                                    attributeName="opacity"
                                                    values="0;0;0.8;0.8;0"
                                                    dur="3.1s"
                                                    begin="3.2s"
                                                    repeatCount="indefinite"/>
                                            </rect>
                                            <circle cx="157" cy="564" r="16" transform="rotate(-90 157 564)" fill="#2866F7" fill-opacity="0.18"/>
                                            <circle cx="157" cy="564" r="8" fill="#2866F7" class="scintillate-delay-5"/>
                                            <circle cx="4" cy="565" r="4" transform="rotate(-90 4 565)" fill="#2866F7"/>
                                            
                                            <!-- Connection Point 6 -->
                                            <line x1="305" y1="704.5" x2="156" y2="704.5" stroke="#E0EAF8"/>
                                            <!-- Moving rectangle along line 6 -->
                                            <rect x="156" y="703.5" width="6" height="2" rx="1" fill="#2866F7" opacity="0">
                                                <animateTransform
                                                    attributeName="transform"
                                                    type="translate"
                                                    values="0,0;143,0"
                                                    dur="2.9s"
                                                    begin="1.8s"
                                                    repeatCount="indefinite"/>
                                                <animate
                                                    attributeName="opacity"
                                                    values="0;0;0.8;0.8;0"
                                                    dur="2.9s"
                                                    begin="1.8s"
                                                    repeatCount="indefinite"/>
                                            </rect>
                                            <circle cx="156" cy="705" r="15" transform="rotate(90 156 705)" fill="#2866F7" fill-opacity="0.18"/>
                                            <circle cx="156" cy="705" r="6" fill="#2866F7" class="scintillate-delay-6"/>
                                            <circle cx="308" cy="705" r="4" transform="rotate(90 308 705)" fill="#2866F7"/>
                                        </svg>
                                    </div>
                                </div>

                                <!-- Right Column -->
                                <div class="aviation-strategic-column aviation-strategic-right">
                                    <!-- SLA Enforcement -->
                                    <div class="aviation-strategic-item">
                                        <div class="aviation-strategic-content">
                                            <h4 class="aviation-strategic-item-title">SLA Enforcement</h4>
                                            <p class="aviation-strategic-description">
                                                Use tail-specific, route-linked data to benchmark and negotiate with connectivity vendors — supported by real-time evidence from high-traffic routes.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Customer Experience -->
                                    <div class="aviation-strategic-item">
                                        <div class="aviation-strategic-content">
                                            <h4 class="aviation-strategic-item-title">Customer Experience</h4>
                                            <p class="aviation-strategic-description">
                                                Support brand promise with verifiable QoE improvements and faster complaint resolution — reducing service credits and increasing retention.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Vendor Strategy Alignment -->
                                    <div class="aviation-strategic-item">
                                        <div class="aviation-strategic-content">
                                            <h4 class="aviation-strategic-item-title">Vendor Strategy Alignment</h4>
                                            <p class="aviation-strategic-description">
                                                Build a baseline of performance to guide RFPs, transitions, and future upgrades with trusted, independent data.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Blue CTA Section with Image -->
        <div class="aviation-cta-wrapper">         
            <div class="aviation-cta-section">

                <!-- World Background Image will be added as background -->
                <div class="aviation-cta-background">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aviation-image.svg" 
                        alt="Aviation CTA Background" 
                        class="aviation-cta-background-image" 
                        loading="lazy" />
                </div>  
                <div class="aviation-cta-container">
                    <div class="aviation-cta-content">
                        
                        <!-- Main CTA Button (copied from experience viper) -->
                        <div class="aviation-cta-actions">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="aviation-btn-primary">
                                <span class="aviation-btn-text">Ready To Experience Viper?</span>
                                <span class="aviation-btn-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M2.5 17.5L17.5 2.5M17.5 2.5H2.5M17.5 2.5V17.5" stroke="#091026" stroke-width="2" stroke-linecap="square"/>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>