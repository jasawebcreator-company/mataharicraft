<?php
$__site_name = "UTV BUGGY UBUD";
$__whatsapp_number = $data->social->whatsapp;

$__navigation = [
  'home' => ['label' => 'HOME', 'url' => '#home'],
  'about' => ['label' => 'ABOUT US', 'url' => '#about'],
  'utv_buggy' => [
    'label' => 'UTV BUGGY',
    'url' => '#adventures',
    'submenu' => [
      ['label' => 'Real Jungle Adventure', 'url' => '#adventure-jungle'],
      ['label' => 'Waterfall & Tunnel', 'url' => '#adventure-waterfall'],
      ['label' => 'Sunset on the Beach', 'url' => '#adventure-sunset']
    ]
  ],
  'combination' => [
    'label' => 'COMBINATION PACKAGES',
    'url' => '#combinations',
    'submenu' => [
      ['label' => 'UTV + Ubud River Rafting', 'url' => '#combination-rafting-ubud'],
      ['label' => 'UTV + Telaga Waja Rafting', 'url' => '#combination-rafting-telaga'],
      ['label' => 'UTV + Wos River Tubing', 'url' => '#combination-tubing-wos']
    ]
  ],
  'gallery' => ['label' => 'GALLERY', 'url' => '#gallery'],
  'blog' => ['label' => 'BLOG', 'url' => '#blog'],
  'contact' => ['label' => 'CONTACT US', 'url' => '#contact']
];

$__hero = [
  'tagline' => 'EXPLORE UBUD BEYOND THE ORDINARY',
  'title_white_1' => 'DRIVE THROUGH',
  'title_orange' => 'THE WILD SIDE',
  'title_white_2' => 'OF UBUD',
  'description' => "Experience Bali's countryside from behind the wheel of a powerful UTV buggy. Ride through jungle trails, rice fields, muddy tracks, tunnels, waterfalls, and exciting natural terrain.",
  'cta_primary' => 'EXPLORE OUR ADVENTURES',
  'cta_secondary' => 'BOOK VIA WHATSAPP',
  'badges' => [
    ['icon' => 'user-check', 'title' => 'BEGINNER FRIENDLY', 'desc' => 'No experience needed'],
    ['icon' => 'shield-check', 'title' => 'PROFESSIONAL GUIDES', 'desc' => 'Safety briefing included'],
    ['icon' => 'construction', 'title' => 'SAFETY EQUIPMENT', 'desc' => 'Helmets, boots & more'],
    ['icon' => 'users', 'title' => 'SINGLE & TANDEM', 'desc' => 'Drive solo or share the fun']
  ]
];

$__highlights = [
  ['icon' => 'settings', 'title' => 'AUTOMATIC UTV', 'desc' => 'Easy to operate for beginners'],
  ['icon' => 'users-2', 'title' => 'PROFESSIONAL GUIDES', 'desc' => 'Safety briefing before every ride'],
  ['icon' => 'package', 'title' => 'ALL-INCLUSIVE PACKAGES', 'desc' => 'Equipment, guide, insurance, and selected meals'],
  ['icon' => 'check-square', 'title' => 'EASY BOOKING', 'desc' => 'Fast confirmation via WhatsApp']
];

$__about = [
  'tagline' => 'WELCOME TO UTV BUGGY UBUD',
  'title' => 'MORE THAN A RIDE, IT IS A REAL BALI ADVENTURE',
  'description_1' => "UTV Buggy Ubud invites you to explore Bali's natural beauty in the most exciting way. Drive your own buggy through rice fields, traditional villages, jungle trails, muddy tracks, tunnels, waterfalls, and even black-sand beaches.",
  'description_2' => "Whether you are a first-time rider or an adventure lover, our professional team will ensure you enjoy a safe, fun, and unforgettable experience.",
  'stats' => [
    ['icon' => 'milestone', 'title' => '3 UTV EXPERIENCES', 'desc' => 'Different tracks & terrains'],
    ['icon' => 'box', 'title' => '3 COMBINATION PACKAGES', 'desc' => 'Double the fun with rafting/tubing'],
    ['icon' => 'split', 'title' => 'SINGLE & TANDEM OPTIONS', 'desc' => 'Solo ride or with companion'],
    ['icon' => 'smile', 'title' => 'BEGINNER FRIENDLY', 'desc' => 'Perfect for first timers']
  ],
  'cta' => 'DISCOVER OUR STORY',
  'images' => [
    'collage_1' => 'assets/img/about_1.jpg',
    'collage_2' => 'assets/img/about_2.jpg',
    'collage_3' => 'assets/img/about_3.jpg'
  ]
];

$__adventures = [
  'tagline' => 'CHOOSE YOUR TRACK',
  'title' => 'UTV BUGGY ADVENTURES IN BALI',
  'items' => [
    'jungle' => [
      'id' => 'adventure-jungle',
      'title' => 'REAL JUNGLE ADVENTURE',
      'image' => 'https://images.unsplash.com/photo-1533558721575-3855e4e892c2?auto=format&fit=crop&q=80&w=800',
      'badge' => 'MOST POPULAR',
      'duration' => '± 1 HOUR',
      'terrain' => 'JUNGLE, MUD, PUDDLES & TUNNEL',
      'price_single' => 950000,
      'price_tandem' => 1600000,
      'description' => 'Unleash your inner adventurer on our core jungle track. Navigate through challenging mud pits, splash through deep water puddles, and race through a dark, mysterious cave tunnel. Designed for pure adrenaline!',
      'itinerary' => [
        'Welcome drink & registration',
        'Safety briefing & equipment fitting (helmet, boots)',
        'Practice session on our custom test track',
        '1 hour of guided off-road adventure',
        'Shower, change of clothes & fresh towel',
        'Indonesian buffet lunch'
      ]
    ],
    'waterfall' => [
      'id' => 'adventure-waterfall',
      'title' => 'WATERFALL AND TUNNEL',
      'image' => 'https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?auto=format&fit=crop&q=80&w=800',
      'badge' => null,
      'duration' => '60 - 90 MINUTES',
      'terrain' => 'WATERFALL, RIVER, JUNGLE & TUNNEL',
      'price_single' => 900000,
      'price_tandem' => 1500000,
      'description' => 'A picturesque journey combining high-octane buggy driving with Bali\'s breathtaking scenery. Drive right up to a majestic natural waterfall, splash through riverbeds, and explore jungle routes and tunnels.',
      'itinerary' => [
        'Welcome drink & registration',
        'Safety briefing & equipment fitting',
        'Test drive & training session',
        '75-minute scenic river & waterfall trek',
        'Photo stop at the waterfall base',
        'Shower & hot water facilities',
        'Complimentary lunch'
      ]
    ],
    'sunset' => [
      'id' => 'adventure-sunset',
      'title' => 'SUNSET ON THE BEACH',
      'image' => 'https://images.unsplash.com/photo-1519046904884-53103b34b206?auto=format&fit=crop&q=80&w=800',
      'badge' => null,
      'duration' => 'AFTERNOON ADVENTURE',
      'terrain' => 'VILLAGE, COCONUT GROVE & BEACH',
      'price_single' => 1050000,
      'price_tandem' => 1700000,
      'description' => 'Feel the ocean breeze as you ride through traditional Balinese villages, cross coconut groves, and open up the throttle on a volcanic black-sand beach. Watch the sun dip below the horizon for a magical finish.',
      'itinerary' => [
        'Pick up from hotel & transport to starting point',
        'Safety briefing & buggy check',
        'Ride through traditional villages & coconut groves',
        'Black sand beach high-speed ride',
        'Sunset viewing & photo session',
        'Shower & refreshing towel',
        'Sunset dinner overlooking the beach'
      ]
    ]
  ]
];

$__combinations = [
  'tagline' => 'MORE FUN, MORE MEMORIES',
  'title' => 'COMBINATION PACKAGES',
  'items' => [
    'rafting_ubud' => [
      'id' => 'combination-rafting-ubud',
      'title' => 'UTV BUGGY + UBUD RIVER RAFTING',
      'image' => 'https://images.unsplash.com/photo-1530866495561-507c9faab2ed?auto=format&fit=crop&q=80&w=800',
      'duration' => '± 6 - 7 HOURS',
      'level' => 'CLASS II-III RAPIDS',
      'price_single' => 1300000,
      'price_tandem' => 2250000,
      'description' => 'Combine our thrilling UTV jungle adventure with white water rafting down the scenic Ayung River in Ubud. Pass hidden waterfalls, lush rainforests, and stone carvings on the canyon walls.',
      'itinerary' => [
        'Morning hotel pick-up',
        '1-hour UTV Jungle Adventure ride',
        'Travel to Ayung River rafting point',
        '2-hour river rafting (Class II-III)',
        'Shower, towel & changing room access',
        'Delicious buffet lunch'
      ]
    ],
    'rafting_telaga' => [
      'id' => 'combination-rafting-telaga',
      'title' => 'UTV BUGGY + TELAGA WAJA RAFTING',
      'image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&q=80&w=800',
      'duration' => '± 7 - 8 HOURS',
      'level' => 'LONGER ROUTE & STRONGER RAPIDS',
      'price_single' => 1400000,
      'price_tandem' => 2600000,
      'description' => 'For true thrill-seekers. Team up a UTV buggy ride with rafting on the Telaga Waja River. This features faster currents, crystal-clear mountain water, and a spectacular 4-meter water dam jump!',
      'itinerary' => [
        'Early morning hotel pick-up',
        'UTV Buggy training and trail ride',
        'Transfer to Telaga Waja River (East Bali)',
        '2.5-hour rafting run including the 4m dam slide',
        'Shower & fresh clothing change',
        'Gourmet lunch with mountain view'
      ]
    ],
    'tubing_wos' => [
      'id' => 'combination-tubing-wos',
      'title' => 'UTV BUGGY + WOS RIVER TUBING',
      'image' => 'https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&q=80&w=800',
      'duration' => '± 6 - 7 HOURS',
      'level' => 'INDIVIDUAL RIVER TUBING & CANYON EXPERIENCE',
      'price_single' => 1250000,
      'price_tandem' => 2250000,
      'description' => 'Navigate the Wos River canyon individually in your own inflatable tube. Float down gentle currents, explore mystical canyon walls, and combine it with a wild UTV ride through Ubud\'s forests.',
      'itinerary' => [
        'Hotel transfer to starting base',
        'UTV Buggy jungle & tunnel tour',
        'Gear up for individual river tubing',
        '1.5-hour float through the scenic Wos River canyon',
        'Shower, clean up & fresh towel',
        'Traditional Indonesian lunch'
      ]
    ]
  ]
];

$__cta = [
  'tagline' => 'READY FOR YOUR NEXT ADVENTURE?',
  'title' => 'CHOOSE YOUR TRACK<br> AND START YOUR JOURNEY!',
  'description' => 'Jungle, waterfall, tunnel, river, or beach - pick your adventure and let\'s make your Bali trip unforgettable.',
  'button_primary' => 'BOOK YOUR ADVENTURE',
  'button_whatsapp' => 'CHAT ON WHATSAPP',
  'trust' => [
    ['icon' => 'zap', 'label' => 'Fast Response'],
    ['icon' => 'lock', 'label' => 'Secure Booking'],
    ['icon' => 'refresh-cw', 'label' => 'Single & Tandem Available']
  ]
];

$__footer = [
  'description' => 'Experience Bali\'s nature in the most exciting way with UTV Buggy Ubud Adventure.',
  'socials' => [
    ['icon' => 'instagram', 'url' => 'https://instagram.com/utvbuggyubud'],
    ['icon' => 'facebook', 'url' => 'https://facebook.com/utvbuggyubud'],
    ['icon' => 'tiktok', 'url' => 'https://tiktok.com/@utvbuggyubud'],
    ['icon' => 'youtube', 'url' => 'https://youtube.com/utvbuggyubud']
  ],
  'contact' => [
    'phone' => '+62 812 3456 7890',
    'email' => 'info@utvbuggyubud.com',
    'address' => 'Ubud, Gianyar - Bali, Indonesia'
  ],
  'opening_hours' => 'Everyday 08.00 - 17.00',
  'copyright' => '© ' . date('Y') . ' UTV Buggy Ubud. All Rights Reserved.'
];
