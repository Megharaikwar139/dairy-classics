<?php
// includes/data.php - Central Data Repository for Dairy Classic (Since 1996)

$brand = [
    'name' => 'Dairy Classic',
    'company' => 'Foreign Company Singapore Samarkand',
    'est' => '1996',
    'motto' => 'Healthy Living',
    'tagline' => 'Since 1996 • 100% Single-Farm Cream • Artisanal Batches',
    'phone' => '+99878 120 33 77',
    'phone_alt' => '+99878 120 33 78',
    'phone_tashkent' => '+998 90 998 2019',
    'phone_samarkand' => '+998 90 502 9292',
    'phone_office' => '+998 90 992 2999',
    'address' => 'БУТ 5, 65M6+H9 Tashkent, Uzbekistan. Factory Location',
    'hours' => 'Mon - Sat : 09:00 am - 08:00 pm | Sun : Closed',
    'email' => 'support@dairyclassic.uz',
    'email_alt' => 'jkapoor@me.com',
    'logo' => 'assets/images/dairy-classic-logo.jpg',
    'video' => 'https://dairyclassics.com/wp-content/uploads/2025/05/Final-Bricket.mp4',
    'local_video' => 'assets/videos/hero-bricket.mp4',
    'capacity' => '80,000-litre daily production capacity'
];

// Main Highlight Products (Used for Hero 3D & Pints Slider)
$products = [
    'french-vanilla' => [
        'id' => 'french-vanilla',
        'name' => 'French Vanilla Royale',
        'short_name' => 'French Vanilla',
        'category' => 'Gourmet Pint',
        'badge' => 'GRAND CRU RESERVE',
        'badge_style' => 'background: #FDF6E2; color: #A67C1E;',
        'origin_kicker' => '500ML SPLASH TUB • MADAGASCAR & FRANCE',
        'size' => '500 ml Pint',
        'image' => 'assets/images/products/french-vanilla-splash-tub.png',
        'rating' => 4.95,
        'reviews_count' => 3420,
        'description' => 'Double-creamed farm milk steeped with aromatic Madagascar Bourbon vanilla pods and hand-scraped vanilla seeds for the ultimate silky comfort.',
        'tasting_notes' => ['Bourbon Vanilla Pods', 'Sweet Buttercream', 'Warm Caramel Swirl'],
        'calories' => '240 kcal',
        'fat' => '14g',
        'sugar' => '19g',
        'protein' => '5.2g',
        'tags' => ['100% Real Milk', 'Madagascar Bourbon', 'Gluten Free'],
        'colors' => [
            'primary' => '#C59B4B',
            'glow' => 'rgba(212, 175, 55, 0.4)'
        ]
    ],
    'belgian-chocolate' => [
        'id' => 'belgian-chocolate',
        'name' => 'Belgian Chocolate',
        'short_name' => 'Belgian Chocolate',
        'category' => 'Gourmet Pint',
        'badge' => 'MASTER RESERVE',
        'badge_style' => 'background: #F5ECE8; color: #7A5243;',
        'origin_kicker' => '500ML SPLASH TUB • BRUSSELS, BELGIUM',
        'size' => '500 ml Pint',
        'image' => 'assets/images/products/belgian-chocolate-splash-tub.png',
        'rating' => 5.0,
        'reviews_count' => 4180,
        'description' => 'Single-origin 72% dark Belgian cocoa ribbons folded into velvet chocolate gelato, crowned with crisp hand-curled dark chocolate shavings.',
        'tasting_notes' => ['72% Dark Belgian Cocoa', 'Roasted Espresso Note', 'Melted Truffle Core'],
        'calories' => '280 kcal',
        'fat' => '17g',
        'sugar' => '22g',
        'protein' => '6.4g',
        'tags' => ['Belgian Couverture', 'Zero Palm Oil', 'Rich & Intense'],
        'colors' => [
            'primary' => '#54311C',
            'glow' => 'rgba(160, 82, 45, 0.45)'
        ]
    ],
    'mint-pistachio' => [
        'id' => 'mint-pistachio',
        'name' => 'Mint Pistachio Crunch',
        'short_name' => 'Mint Pistachio',
        'category' => 'Gourmet Pint',
        'badge' => "CHEF'S SIGNATURE",
        'badge_style' => 'background: #E6F5ED; color: #2E7D52;',
        'origin_kicker' => '500ML SPLASH TUB • BRONTE, SICILY',
        'size' => '500 ml Pint',
        'image' => 'assets/images/products/mint-pistachio-splash-tub.png',
        'rating' => 4.92,
        'reviews_count' => 2450,
        'description' => 'Fresh garden spearmint infused into double-creamed milk, folded with roasted California pistachios and dark chocolate chips.',
        'tasting_notes' => ['Garden Fresh Spearmint', 'Roasted California Pistachios', 'Crisp Cocoa Flakes'],
        'calories' => '260 kcal',
        'fat' => '16g',
        'sugar' => '19g',
        'protein' => '5.6g',
        'tags' => ['Real Pistachios', 'Garden Mint', 'No Added Colors'],
        'colors' => [
            'primary' => '#3D7356',
            'glow' => 'rgba(61, 115, 86, 0.45)'
        ]
    ],
    'almond-crunch' => [
        'id' => 'almond-crunch',
        'name' => 'Almond Crunch Bar',
        'short_name' => 'Almond Bar',
        'category' => 'Artisanal Bar',
        'badge' => 'ARTISANAL CRUNCH',
        'badge_style' => 'background: #F6EFE6; color: #8C5627;',
        'origin_kicker' => '90ML GOURMET BAR • CALIFORNIA PRALINE',
        'size' => '90 ml Gourmet Bar',
        'image' => 'assets/images/products/almond-crunch-bar.png',
        'rating' => 4.95,
        'reviews_count' => 3120,
        'description' => 'Thick roasted California almond praline shell crackles open to reveal dense, slow-churned pure milk ice cream on a natural beechwood stick.',
        'tasting_notes' => ['Crackling Milk Chocolate', 'California Roasted Almonds', 'Vanilla Cream Core'],
        'calories' => '270 kcal',
        'fat' => '18g',
        'sugar' => '20g',
        'protein' => '5.8g',
        'tags' => ['Real Almonds', 'Crackling Shell', 'On-the-Go Luxury'],
        'colors' => [
            'primary' => '#8C5627',
            'glow' => 'rgba(197, 125, 60, 0.45)'
        ]
    ],
    'golden-fantasy' => [
        'id' => 'golden-fantasy',
        'name' => 'Golden Fantasy Swirl',
        'short_name' => 'Golden Fantasy',
        'category' => 'Gourmet Cone',
        'badge' => 'ICONIC HERITAGE',
        'badge_style' => 'background: #FCF6E8; color: #9A6F20;',
        'origin_kicker' => '120ML WAFFLE CONE • TASHKENT SINCE 1996',
        'size' => '120 ml Waffle Cone',
        'image' => 'assets/images/products/golden-fantasy.png',
        'rating' => 4.9,
        'reviews_count' => 2840,
        'description' => 'Dual swirl vanilla and chocolate in crunchy waffle wafer coated with chocolate along with roasted golden peanuts.',
        'tasting_notes' => ['Dual Flavor Vanilla & Chocolate', 'Crispy Waffle Cone', 'Roasted Peanut Crunch'],
        'calories' => '230 kcal',
        'fat' => '12g',
        'sugar' => '18g',
        'protein' => '4.8g',
        'tags' => ['Classic Since 1996', 'Double Swirl', 'Crunchy Peanuts'],
        'colors' => [
            'primary' => '#D48B38',
            'glow' => 'rgba(212, 139, 56, 0.45)'
        ]
    ],
    'celebration-cake' => [
        'id' => 'celebration-cake',
        'name' => 'Celebration Gâteau',
        'short_name' => 'Celebration Cake',
        'category' => 'Gourmet Gâteau',
        'badge' => 'ROYAL JUBILEE',
        'badge_style' => 'background: #FCEEF1; color: #A02848;',
        'origin_kicker' => '1000ML GOURMET CAKE • 3-LAYER SPECIALTY',
        'size' => '1000 ml Cake',
        'image' => 'assets/images/products/chocolate-celebration-cake.png',
        'rating' => 4.98,
        'reviews_count' => 2100,
        'description' => 'Triple-layer artisanal gelato torte layered with dark chocolate truffles, strawberry coulis, and pistachio praline.',
        'tasting_notes' => ['Dark Truffle Layer', 'Vanilla Bean Mousse', 'Pistachio Crumble'],
        'calories' => '310 kcal',
        'fat' => '19g',
        'sugar' => '26g',
        'protein' => '6.2g',
        'tags' => ['Grand Occasions', 'Handmade Layers', 'Serves 8-10'],
        'colors' => [
            'primary' => '#8E1C3D',
            'glow' => 'rgba(142, 28, 61, 0.45)'
        ]
    ],
    'sandwich' => [
        'id' => 'sandwich',
        'name' => 'Sandwich Biscuit Duo',
        'short_name' => 'Sandwich',
        'category' => 'Biscuit',
        'badge' => 'Irresistible Treat',
        'size' => '100 ml Sandwich',
        'image' => 'assets/images/live/sandwich.webp',
        'rating' => 4.9,
        'reviews_count' => 1740,
        'description' => 'Vanilla and chocolate ice cream half sandwiched between crunchy biscuit and half dipped in chocolate with roasted peanuts, irresistible taste and delicious treat on go.',
        'tasting_notes' => ['Dual Ice Cream Core', 'Crunchy Biscuit Half', 'Peanut Choco Dip'],
        'calories' => '250 kcal',
        'fat' => '13g',
        'sugar' => '20g',
        'protein' => '4.7g',
        'tags' => ['Biscuit Sandwich', 'Dual Flavor', 'Roasted Peanuts'],
        'colors' => [
            'primary' => '#5C3A21',
            'glow' => 'rgba(92, 58, 33, 0.4)'
        ]
    ],
    'vega-bar' => [
        'id' => 'vega-bar',
        'name' => 'Vega Crunchy Choco Bar',
        'short_name' => 'Vega Bar',
        'category' => 'Sticks',
        'badge' => 'Luscious Crunch',
        'size' => '90 ml Gourmet Stick',
        'image' => 'assets/images/live/bera-n.webp',
        'rating' => 4.92,
        'reviews_count' => 2280,
        'description' => 'Delicious Vanilla flavoured premium ice cream coated with luscious crunchy chocolate along with crispy roasted peanuts on a stick.',
        'tasting_notes' => ['Crunchy Chocolate Shell', 'Golden Roasted Peanuts', 'Pure Velvet Vanilla'],
        'calories' => '255 kcal',
        'fat' => '15g',
        'sugar' => '19g',
        'protein' => '5.1g',
        'tags' => ['Crunchy Shell', 'Pure Vanilla', 'Gourmet Stick'],
        'colors' => [
            'primary' => '#3E1C14',
            'glow' => 'rgba(62, 28, 20, 0.4)'
        ]
    ]
];

// Complete Catalog by Category (Exact from dairyclassics.com)
$catalog_by_category = [
    'cones' => [
        'category_name' => 'Cones',
        'kicker' => 'CRUNCHY WAFER CONES',
        'headline' => 'Gourmet Waffle Cones',
        'desc' => 'Handcrafted waffle cones filled with rich velvety cream and crunchy chocolate coatings.',
        'items' => [
            [
                'name' => 'SUPER TWIST',
                'category' => 'Cones',
                'size' => '120 ml Waffle Cone',
                'image' => 'assets/images/live/twist-x.webp',
                'description' => 'Vanilla Ice cream centered Raspberry sauce filled in crunchy wafer coated chocolate, won the soul and taste bud of ice cream lover.',
                'badge' => 'Berry Delight'
            ],
            [
                'name' => 'CHOCO BOOM',
                'category' => 'Cones',
                'size' => '120 ml Waffle Cone',
                'image' => 'assets/images/live/boom-c.webp',
                'description' => 'Chocolate ice cream filled in crunchy wafer coated with chocolate along with crispy roasted peanuts that give distinctive taste to your mood pleasure.',
                'badge' => 'Choco Lover'
            ],
            [
                'name' => 'GOLDEN FANTASY',
                'category' => 'Cones',
                'size' => '120 ml Waffle Cone',
                'image' => 'assets/images/live/golden-f.webp',
                'description' => 'Split of two flavour vanilla and chocolate in crunchy wafer coated with chocolate along with roasted peanuts surpringly divine taste.',
                'badge' => 'Iconic Classic'
            ],
            [
                'name' => 'DICE N SLICE',
                'category' => 'Cones',
                'size' => '120 ml Waffle Cone',
                'image' => 'assets/images/live/dice-s.webp',
                'description' => 'Seriously premium hazelnut and rose combination it is super gourmet filled in waffle cone.',
                'badge' => 'Super Gourmet'
            ],
            [
                'name' => 'TWIN CONE',
                'category' => 'Cones',
                'size' => '120 ml Waffle Cone',
                'image' => 'assets/images/live/twin-c.webp',
                'description' => 'Premium ice cream twist with honey and Vanilla Pecan double savour in waffle cone.',
                'badge' => 'Double Savour'
            ],
            [
                'name' => 'TOP FUN (BIG)',
                'category' => 'Cones',
                'size' => '140 ml Giant Cone',
                'image' => 'assets/images/live/top-f.webp',
                'description' => 'Premium ice cream in big wafer cone, filled with incredible fruity and tangy orange sauce.',
                'badge' => 'Tangy Orange'
            ],
            [
                'name' => 'CAPICON (BIG)',
                'category' => 'Cones',
                'size' => '140 ml Giant Cone',
                'image' => 'assets/images/live/copico.webp',
                'description' => 'Choose a real cappuccino ice cream in big cone and big fun.',
                'badge' => 'Rich Cappuccino'
            ]
        ]
    ],
    'sticks' => [
        'category_name' => 'Sticks',
        'kicker' => 'ARTISANAL BARS & STICKS',
        'headline' => 'Decadent Sticks & Bars',
        'desc' => 'Crispy chocolate layers, roasted peanuts, and velvety ice cream on natural beechwood sticks.',
        'items' => [
            [
                'name' => 'SUPER CHOC',
                'category' => 'Sticks',
                'size' => '90 ml Stick',
                'image' => 'assets/images/live/super-choco.webp',
                'description' => 'Delightful premium chocolate ice cream with smooth, creamy texture that pleasntly surprise you coated with crunchy rich chocolate along with pieces of crispier peanuts.',
                'badge' => 'Double Choco'
            ],
            [
                'name' => 'VEGA',
                'category' => 'Sticks',
                'size' => '90 ml Stick',
                'image' => 'assets/images/live/bera-n.webp',
                'description' => 'Delicious Vanilla flavoured premium ice cream coated with luscious crunchy chocolate along with crispy roasted peanuts.',
                'badge' => 'Popular Favorite'
            ],
            [
                'name' => 'CLASSIC VEGA',
                'category' => 'Sticks',
                'size' => '90 ml Stick',
                'image' => 'assets/images/live/bera-class.webp',
                'description' => 'Smooth and truly delight sensational premium milky vanilla ice cream for your taste buds, coated with tempting silky chocolate.',
                'badge' => 'Sensational Milky'
            ],
            [
                'name' => 'NEW CLASSIC',
                'category' => 'Sticks',
                'size' => '90 ml Stick',
                'image' => 'assets/images/live/new-classic.webp',
                'description' => 'Double satisfaction with half and half portion of smooth, creamy vanilla and chocolate ice cream coated with luscious rich chocolate.',
                'badge' => 'Half & Half'
            ],
            [
                'name' => 'KOFFEE MOKKO',
                'category' => 'Sticks',
                'size' => '85 ml Stick',
                'image' => 'assets/images/live/mokko.webp',
                'description' => 'Discover the delectable coffee and cocoa combination it is enjoyable.',
                'badge' => 'Coffee & Cocoa'
            ],
            [
                'name' => 'DELIZIA',
                'category' => 'Sticks',
                'size' => '90 ml Stick',
                'image' => 'assets/images/live/delizia.webp',
                'description' => 'Triple layer coated ice cream stick with inner and outer crispy chocolatey layer in between luscious mixberry goodness.',
                'badge' => 'Triple Layer'
            ],
            [
                'name' => 'ROYAL FUN',
                'category' => 'Sticks',
                'size' => '90 ml Stick',
                'image' => 'assets/images/live/royal-f.webp',
                'description' => 'Triple layer coated ice cream stick, enjoy the perfect balance of orange tangy layer in between crispy chocolatey layer.',
                'badge' => 'Orange Tangy'
            ],
            [
                'name' => 'PANGO',
                'category' => 'Sticks',
                'size' => '85 ml Stick',
                'image' => 'assets/images/live/pango-n.webp',
                'description' => 'The ultimate indulgence that promises to contentment and pleasure of mixberry refreshment.',
                'badge' => 'Mixberry Wave'
            ],
            [
                'name' => 'FRUTONIA',
                'category' => 'Sticks',
                'size' => '85 ml Stick',
                'image' => 'assets/images/live/frutonia.webp',
                'description' => 'Tropical fruity delight the journey of creamy adventure and enjoyment.',
                'badge' => 'Tropical Delight'
            ],
            [
                'name' => 'TAPO',
                'category' => 'Sticks',
                'size' => '80 ml Stick',
                'image' => 'assets/images/live/tapo.webp',
                'description' => 'Refreshing fruity treat made for sunny afternoons and sweet smiles.',
                'badge' => 'Fruity Treat'
            ]
        ]
    ],
    'cups' => [
        'category_name' => 'Cups',
        'kicker' => 'CREAMICA & MINI CUPS',
        'headline' => 'Gourmet Cups & Creamica',
        'desc' => 'Individual portions packed with fruit cubes, cheesecake swirls, and roasted toppings.',
        'items' => [
            [
                'name' => 'CREAMICA CHEESE CAKE',
                'category' => 'Cups',
                'size' => '100 ml Cup',
                'image' => 'assets/images/live/Layer-1.webp',
                'description' => 'Premium blueberry cheese cake ice cream with luscious blueberry sauce.',
                'badge' => 'Blueberry Swirl'
            ],
            [
                'name' => 'CREAMICA VANILLA',
                'category' => 'Cups',
                'size' => '100 ml Cup',
                'image' => 'assets/images/live/Cremica-Vanilla.webp',
                'description' => 'Creamica is creamy selection filled in cups topped with chocolate along with roasted peanuts, pick up delectable frozen treat.',
                'badge' => 'Chocolate & Peanut'
            ],
            [
                'name' => 'CREAMICA BISCUITI',
                'category' => 'Cups',
                'size' => '100 ml Cup',
                'image' => 'assets/images/live/Cremica-Biscuit.webp',
                'description' => 'Creamy Biscuiti flavoured delicious and eminent treat.',
                'badge' => 'Biscuiti Eminent'
            ],
            [
                'name' => 'AMBROZIYA MINI CUP',
                'category' => 'Cups',
                'size' => '80 ml Mini Cup',
                'image' => 'assets/images/live/AMBROZIYA.webp',
                'description' => 'Premium ice cream with chunks of papaya cubes which bring additional value to it.',
                'badge' => 'Papaya Cubes'
            ],
            [
                'name' => 'ORANGE MINI CUP',
                'category' => 'Cups',
                'size' => '80 ml Mini Cup',
                'image' => 'assets/images/live/orange.webp',
                'description' => 'Premium orange Ice cream with tangy orange sauce it is just simply rewarding.',
                'badge' => 'Tangy Orange'
            ],
            [
                'name' => 'CHOCO CHIPS MINI CUP',
                'category' => 'Cups',
                'size' => '80 ml Mini Cup',
                'image' => 'assets/images/live/choco.webp',
                'description' => 'Velvety Vanilla Ice cream with creamy texture and chocolatey chips.',
                'badge' => 'Choco Chips'
            ],
            [
                'name' => 'CAPPUCCINO MINI CUP',
                'category' => 'Cups',
                'size' => '80 ml Mini Cup',
                'image' => 'assets/images/live/cappu.webp',
                'description' => 'Perfectly created extra moment the richness of cappuccino.',
                'badge' => 'Rich Cappuccino'
            ]
        ]
    ],
    'biscuit' => [
        'category_name' => 'Biscuit',
        'kicker' => 'COOKIE & BISCUIT CREATIONS',
        'headline' => 'Biscuit & Sandwich Sandwiches',
        'desc' => 'Crunchy golden biscuits sandwiching slow-churned pure milk ice cream.',
        'items' => [
            [
                'name' => 'SANDWICH',
                'category' => 'Biscuit',
                'size' => '100 ml Sandwich',
                'image' => 'assets/images/live/sandwich.webp',
                'description' => 'Vanilla and chocolate ice cream half sandwiched between crunchy biscuit and half dipped in chocolate with roasted peanuts, irresistible taste and delicious treat on go.',
                'badge' => 'Dual Flavor'
            ],
            [
                'name' => 'BRICKET',
                'category' => 'Biscuit',
                'size' => '110 ml Sandwich',
                'image' => 'assets/images/live/bricket.webp',
                'description' => 'Perfect treat on go with delicious amalgamation of vanilla and chocolate ice cream sandwiched between crunchy premium biscuit.',
                'badge' => 'Classic Bricket'
            ],
            [
                'name' => 'OLINO',
                'category' => 'Biscuit',
                'size' => '95 ml Sandwich',
                'image' => 'assets/images/live/olino.webp',
                'description' => 'Biscuiti flavoured ice cream perfectly round shape with premium cookies coated with chocolate.',
                'badge' => 'Round Cookie'
            ],
            [
                'name' => 'ROUND PIE',
                'category' => 'Biscuit',
                'size' => '95 ml Sandwich',
                'image' => 'assets/images/live/round.webp',
                'description' => 'Imaginative creation perfectly round vanilla ice cream with premium cookies coated with chocolate.',
                'badge' => 'Pure Vanilla'
            ]
        ]
    ],
    'cassatta' => [
        'category_name' => 'Cassatta',
        'kicker' => 'FAMILY DESSERT BRICKS',
        'headline' => 'Cassatta & Party Platters',
        'desc' => 'Multi-layered celebration bricks to slice and share with family and friends.',
        'items' => [
            [
                'name' => 'CLASSIC CASSATTA (1 LTR)',
                'category' => 'Cassatta',
                'size' => '1000 ml Celebration Brick',
                'image' => 'assets/images/live/Classic-Cassata.png',
                'description' => 'Premium layered ice cream with different flavour combination topped with roasted peanuts, A slice of great fascination.',
                'badge' => '1 Litre Brick'
            ],
            [
                'name' => 'GALAXY CASSATTA (1 LTR)',
                'category' => 'Cassatta',
                'size' => '1000 ml Celebration Brick',
                'image' => 'assets/images/live/Cassata-Cookies-N-Icre-Cream.webp',
                'description' => 'Premium layered Ice cream to celebrate anytime , anywhere topped with roasted peanuts, A slice of creamy satisfaction.',
                'badge' => 'Cookies & Cream'
            ],
            [
                'name' => 'TRIPLE-LAYER GATEAU CAKE',
                'category' => 'Cassatta',
                'size' => '1.0 kg Gateau Cake',
                'image' => 'assets/images/products/chocolate-celebration-cake.png',
                'description' => 'Architectural trio of Belgian dark chocolate, white vanilla cream, and milk chocolate sponge with dark ganache drip.',
                'badge' => 'Gateau Special'
            ]
        ]
    ],
    'tubs' => [
        'category_name' => 'Tubs',
        'kicker' => 'ARTISANAL PINTS & TUBS',
        'headline' => 'Gourmet 500ml Pints',
        'desc' => 'Small-batch churned gelato pints with 100% single-farm milk and European ingredients.',
        'items' => [
            [
                'name' => 'Belgian Chocolate Truffle',
                'category' => 'Tubs',
                'size' => '500 ml Gourmet Pint',
                'image' => 'assets/images/products/belgian-chocolate-tub.png',
                'description' => 'Rich 72% dark Belgian cocoa ribbons folded into velvet chocolate gelato, crowned with crisp hand-curled dark chocolate shavings.',
                'badge' => '72% Dark Couverture'
            ],
            [
                'name' => 'French Vanilla Royale',
                'category' => 'Tubs',
                'size' => '500 ml Gourmet Pint',
                'image' => 'assets/images/products/french-vanilla-tub.png',
                'description' => 'Double-creamed farm milk steeped with aromatic Madagascar Bourbon vanilla pods and hand-scraped vanilla seeds.',
                'badge' => 'Madagascar Bourbon'
            ],
            [
                'name' => 'Mint Pistachio Crunch',
                'category' => 'Tubs',
                'size' => '500 ml Gourmet Pint',
                'image' => 'assets/images/products/mint-pistachio-tub.png',
                'description' => 'Fresh garden spearmint infused into double-creamed milk, folded with roasted California pistachios and dark chocolate chips.',
                'badge' => 'Garden Mint'
            ]
        ]
    ]
];

// About Us / Heritage Data from dairyclassics.com
$about_heritage = [
    'legacy' => [
        'badge' => 'A LEGACY OF EXCELLENCE SINCE 1996',
        'title' => 'We at Foreign Company Singapore Samarkand',
        'subtitle' => 'Under the brand DairyClassic, have been delighting taste buds for over 30 years.',
        'motto' => '"Healthy Living" from the very beginning!',
        'drive' => 'Quality, passion, and the joy of ice cream.',
        'reach' => 'A leading ice cream brand, bringing happiness to millions.'
    ],
    'founder' => [
        'title' => "Founder’s Vision",
        'image' => 'assets/images/live/founder.webp',
        'text' => 'Under the visionary leadership and expertise of our Founder & President, Dairy Classic has built a trusted reputation over the last three decades.',
        'points' => [
            ['title' => 'Integrity & Quality', 'desc' => 'We are known for premium, trustworthy products.'],
            ['title' => 'Innovation & Growth', 'desc' => 'Investing in cutting-edge technology & machinery.'],
            ['title' => 'Strong Presence', 'desc' => 'Leading supermarkets & stores across Uzbekistan.']
        ]
    ],
    'developments' => [
        'title' => 'RECENT DEVELOPMENTS',
        'image' => 'assets/images/live/developments.webp',
        'capacity_highlight' => '80,000 Litres Daily Capacity',
        'text' => 'Our 80,000-litre daily production capacity ensures we deliver nothing but the finest, most flavorful ice cream to our loyal customers.',
        'points' => [
            'Modernization of our ice cream plant with European standard hygiene.',
            'Advanced technology for world class high-precision production.',
            'Awarded #1 choice by our consumers across Uzbekistan.'
        ]
    ],
    'mission_vision' => [
        'mission' => [
            'title' => 'Our Mission',
            'points' => [
                'Spreading the love for ice cream.',
                'Bringing joy with every scoop.',
                'Promoting healthy living through quality and innovation.'
            ]
        ],
        'vision' => [
            'title' => 'Our Vision',
            'points' => [
                'Deliver world class flavors & quality to our consumers.',
                'Use cutting edge manufacturing & technology.',
                'Create value for customers, employees & society. Achieve sustainable growth across all markets.'
            ]
        ],
        'summary' => 'Dairy Classic is a symbol of freshness, joy, and unforgettable flavor because every moment deserves a reason to celebrate!'
    ],
    'bringing_closer' => [
        'title' => 'Bringing Sweet Moments Closer',
        'subtitle' => 'Find us across Uzbekistan and beyond',
        'points' => [
            'In leading stores, parlors, and cafes!',
            'Retail & Wholesale Availability',
            'Partnering with Top Food Chains.'
        ]
    ]
];

// FAQs Data (Categorized Accordion)
$faqs_data = [
    'general' => [
        'category' => 'General Questions',
        'icon' => '🍦',
        'questions' => [
            [
                'q' => 'What makes Dairy Classic ice cream special?',
                'a' => 'We use 100% natural milk from trusted local farms, slow-churned in small batches with premium European ingredients since 1996. Our motto from the beginning has been "Healthy Living".'
            ],
            [
                'q' => 'Where are Dairy Classic ice creams manufactured?',
                'a' => 'Our modern state-of-the-art facility is located at БУТ 5, 65M6+H9 Tashkent, Uzbekistan, boasting an 80,000-litre daily production capacity with high European standards.'
            ],
            [
                'q' => 'Are Dairy Classic ice cream products vegetarian-friendly?',
                'a' => 'Yes, all our ice creams, cones, bars, cups, biscuits, and cassattas are 100% vegetarian-friendly and crafted without any animal gelatin.'
            ]
        ]
    ],
    'product' => [
        'category' => 'Product & Ingredients',
        'icon' => '🥛',
        'questions' => [
            [
                'q' => 'How should Dairy Classic ice cream be stored at home?',
                'a' => 'For optimal velvety texture and freshness, store at -18°C or below. For gourmet tubs, let them rest at room temperature for 2-3 minutes before scooping for maximum creaminess.'
            ],
            [
                'q' => 'What are your signature best-selling products?',
                'a' => 'Our most beloved creations include Golden Fantasy cone, Super Twist Raspberry cone, Vega Crunchy bar, Sandwich Biscuit, Creamica Cheese Cake, and Classic 1-Litre Cassatta.'
            ],
            [
                'q' => 'Do your products contain real fruits and nuts?',
                'a' => 'Absolutely! We use real California almonds, golden roasted peanuts, pure papaya cubes in Ambroziya, real raspberry sauces, and authentic cocoa couverture.'
            ]
        ]
    ],
    'partnership' => [
        'category' => 'Partnership & Distribution',
        'icon' => '🤝',
        'questions' => [
            [
                'q' => 'How can I become a retail partner or distributor?',
                'a' => 'We partner with supermarkets, cafes, and food chains across Uzbekistan and internationally. You can reach our wholesale team at +998 90 998 2019 (Tashkent) or +998 90 502 9292 (Samarkand), or submit the contact form below.'
            ],
            [
                'q' => 'Do you provide bulk orders for weddings and events?',
                'a' => 'Yes! We supply custom celebration Cassattas, layered Gateau cakes, mini cups, and refrigerated ice cream carts for private events, corporate gatherings, and weddings.'
            ]
        ]
    ]
];

// Instagram Social Posts
$instagram_posts = [
    [
        'image' => 'assets/images/live/485038988_9670411909687914_5815841654752973913_n.jpg',
        'caption' => 'Pure creamy happiness in every Golden Fantasy bite ✨',
        'likes' => '1.4k'
    ],
    [
        'image' => 'assets/images/live/485171700_18497555821004628_2375668312933697309_n.jpg',
        'caption' => 'Vega Bar loaded with crispy roasted peanuts & chocolate 🥜🍫',
        'likes' => '2.1k'
    ],
    [
        'image' => 'assets/images/live/486483028_1109892090950006_7006204567457217081_n.jpg',
        'caption' => 'Creamica Cheese Cake – rich blueberry indulgence 🫐🍨',
        'likes' => '1.8k'
    ],
    [
        'image' => 'assets/images/live/Sweet.jpg',
        'caption' => 'Bringing sweet moments closer since 1996 🇺🇿❤️',
        'likes' => '3.2k'
    ],
    [
        'image' => 'assets/images/live/chocol.jpg',
        'caption' => 'Rich Belgian chocolate ribbons and farm-fresh milk 🍫🥛',
        'likes' => '2.5k'
    ],
    [
        'image' => 'assets/images/live/choco4.webp',
        'caption' => 'Sandwich biscuits & wafer cones for celebrations! 🎉',
        'likes' => '1.9k'
    ]
];

$store_locations = [
    [
        'city' => 'Tashkent',
        'area' => 'Factory Location (БУТ 5)',
        'status' => 'Factory & Experience Center',
        'address' => 'БУТ 5, 65M6+H9 Tashkent, Uzbekistan',
        'hours' => '09:00 AM – 08:00 PM (Mon-Sat)',
        'phone' => '+99878 120 33 77 / +998 90 998 2019'
    ],
    [
        'city' => 'Tashkent',
        'area' => 'Central Tashkent Parlour',
        'status' => 'Open Today',
        'address' => 'Amir Timur Avenue, Tashkent, Uzbekistan',
        'hours' => '10:00 AM – 10:00 PM',
        'phone' => '+998 90 992 2999'
    ],
    [
        'city' => 'Samarkand',
        'area' => 'Samarkand Regional Office & Parlour',
        'status' => 'Regional Destination',
        'address' => 'Registan Boulevard, Samarkand, Uzbekistan',
        'hours' => '09:30 AM – 09:00 PM',
        'phone' => '+998 90 502 9292'
    ],
    [
        'city' => 'Bukhara',
        'area' => 'Old Town Heritage Parlour',
        'status' => 'Artisanal Kiosk',
        'address' => 'Lyabi-Hauz Square, Bukhara, Uzbekistan',
        'hours' => '10:00 AM – 08:30 PM',
        'phone' => '+99878 120 33 78'
    ]
];

// ========================================================
// CAREERS & TALENT HUB DATA (Since 1996)
// ========================================================
$career_departments = [
    'all' => 'All Departments',
    'rnd' => 'Quality & Food Science (R&D)',
    'supply-chain' => 'Cold Chain & Logistics',
    'sales' => 'Sales, Marketing & Brand'
];

$career_stats = [
    ['val' => '30+', 'lbl' => 'Years of Heritage', 'sub' => 'Delighting Uzbekistan since 1996'],
    ['val' => '80,000L', 'lbl' => 'Daily Capacity', 'sub' => 'Modern European ice cream plant'],
    ['val' => '450+', 'lbl' => 'Passionate Artisans', 'sub' => 'Chemists, engineers & leaders'],
    ['val' => '94%', 'lbl' => 'Team Retention', 'sub' => 'Culture of warmth & respect']
];

$career_benefits = [
    [
        'icon' => '🍦',
        'title' => 'Daily Sweet Tasting Perks',
        'desc' => 'Enjoy daily tastings of new gelato batches, fresh waffle cones, and quarterly seasonal gift hampers for you and your family.'
    ],
    [
        'icon' => '🏥',
        'title' => 'Comprehensive Healthcare',
        'desc' => 'Full medical, dental, and wellness insurance coverage with subsidized packages for immediate family members.'
    ],
    [
        'icon' => '🎓',
        'title' => 'European Academy & Mentorship',
        'desc' => 'Masterclasses led by Italian & Danish dairy technologists, sponsored certifications, and dedicated executive mentorship.'
    ],
    [
        'icon' => '⚙️',
        'title' => 'State-of-the-Art Facilities',
        'desc' => 'Work in an ultra-modern, climate-controlled, European-standard facility equipped with cutting-edge automated production lines.'
    ],
    [
        'icon' => '🚌',
        'title' => 'Free Shuttle & Gourmet Meals',
        'desc' => 'Free daily company transportation across Tashkent and freshly prepared, wholesome multi-course lunches provided daily.'
    ],
    [
        'icon' => '📈',
        'title' => 'Merit Bonuses & Fast-Track Growth',
        'desc' => 'Competitive base pay reviewed annually, performance bonuses, and transparent internal promotion pathways.'
    ]
];

$job_openings = [
    [
        'id' => 'senior-food-technologist',
        'title' => 'Senior Dairy Food Technologist & Sensory Specialist',
        'department' => 'Quality & Food Science (R&D)',
        'category_key' => 'rnd',
        'location' => 'Tashkent (Main Factory)',
        'location_key' => 'tashkent',
        'type' => 'Full-Time • Permanent',
        'experience' => '4+ Years',
        'workplace' => 'On-site Laboratory',
        'urgent' => true,
        'featured' => true,
        'short_desc' => 'Lead recipe formulation, overrun control, and sensory innovation for our signature gelato pints and enrobed wafer cones.',
        'overview' => 'As our Senior Dairy Food Technologist, you will be at the heart of Dairy Classic’s flavor revolution. You will collaborate directly with European ingredient partners and our master churners to formulate decadent, clean-label ice creams with zero artificial preservatives.',
        'responsibilities' => [
            'Develop and scale new flavor profiles for gourmet tubs, biscuit sandwiches, and chocolate-coated sticks.',
            'Optimize emulsion stability, overrun percentages, and melt-down characteristics under varying temperatures.',
            'Oversee pilot batch churns in our dedicated innovation laboratory in Tashkent.',
            'Establish sensory tasting protocols and benchmark against international premium confectionery standards.',
            'Partner with Quality Assurance to ensure compliance with strict UzStandard & European hygiene regulations.'
        ],
        'requirements' => [
            'Bachelor’s or Master’s in Dairy Science, Food Technology, or Chemical Engineering.',
            'Minimum 4 years of proven formulation experience in ice cream, dairy processing, or confectionery.',
            'Deep understanding of milk fats, stabilizers, pasteurization thermals, and natural flavoring systems.',
            'Strong sensory acuity and passion for artisanal texture craftsmanship.',
            'Fluency in Russian and Uzbek; technical English is an advantage.'
        ],
        'perks' => [
            'Direct access to European dairy masterclasses and R&D trips',
            'Full medical & dental insurance coverage',
            'Annual performance and innovation bonus pool',
            'Unlimited ice cream test kitchen privileges'
        ]
    ],
    [
        'id' => 'cold-chain-logistics-manager',
        'title' => 'Cold Chain Logistics & Fleet Operations Manager',
        'department' => 'Cold Chain & Logistics',
        'category_key' => 'supply-chain',
        'location' => 'Tashkent & Samarkand Hubs',
        'location_key' => 'tashkent',
        'type' => 'Full-Time • Permanent',
        'experience' => '3+ Years',
        'workplace' => 'Hybrid & Depots',
        'urgent' => false,
        'featured' => true,
        'short_desc' => 'Orchestrate continuous -18°C refrigerated fleet distribution from our 80,000L factory to 1,200+ partner supermarkets.',
        'overview' => 'Ice cream quality is only as strong as its sub-zero cold chain. You will manage our fleet of GPS-monitored refrigerated trucks, cross-dock warehouses, and regional dispatch hubs in Tashkent, Samarkand, and Bukhara to guarantee perfect freshness.',
        'responsibilities' => [
            'Direct daily fleet dispatch schedules and optimize multi-stop retail delivery routes across Uzbekistan.',
            'Monitor real-time telemetric temperature logs inside all delivery containers to prevent thermal deviations.',
            'Supervise deep-freeze warehouse operations, inventory rotation (FIFO), and rapid loading docks.',
            'Negotiate maintenance contracts for mobile refrigeration units (Carrier/Thermo King).',
            'Lead a dedicated team of drivers, dispatchers, and warehouse logistics supervisors.'
        ],
        'requirements' => [
            'Degree in Supply Chain Management, Logistics, or Business Administration.',
            '3+ years managing refrigerated fleet (cold chain) or FMCG perishable product distribution.',
            'Proficiency with GPS fleet telematics, WMS, and ERP routing systems.',
            'Proven crisis-management skills to handle route delays and extreme summer temperature challenges.',
            'Fluency in Uzbek and Russian.'
        ],
        'perks' => [
            'Company car allowance & fuel card',
            'Performance-linked quarterly delivery bonus',
            'Corporate smartphone and communication package',
            'Free hot lunches and shuttle access'
        ]
    ],
    [
        'id' => 'key-account-manager-retail',
        'title' => 'Key Account Manager – Modern Supermarket Chains',
        'department' => 'Sales, Marketing & Brand',
        'category_key' => 'sales',
        'location' => 'Tashkent (Hybrid / Field)',
        'location_key' => 'tashkent',
        'type' => 'Full-Time • Permanent',
        'experience' => '3+ Years',
        'workplace' => 'Hybrid / Field',
        'urgent' => true,
        'featured' => false,
        'short_desc' => 'Drive commercial growth, prime freezer placements, and brand activation across major supermarket chains and food chains.',
        'overview' => 'Dairy Classic has been loved by Uzbek families for 30 years. As Key Account Manager, you will strengthen our presence in top tier supermarket banners (Korzinka, Makro, Havas) and expand our footprint into hospitality and premium cafes.',
        'responsibilities' => [
            'Manage strategic partnerships with national retail accounts to expand SKU distribution and share-of-shelf.',
            'Negotiate annual joint business plans, promotional trade calendars, and branded freezer placements.',
            'Analyze weekly sell-out velocity, category trends, and competitive promotional activities.',
            'Coordinate with merchandising teams to ensure eye-catching brand displays and zero out-of-stock situations.',
            'Identify emerging commercial channels, such as convenience stores, gas stations, and online quick-commerce.'
        ],
        'requirements' => [
            'Degree in Business, Marketing, or Economics.',
            '3+ years in FMCG key account management or trade marketing in Uzbekistan.',
            'Established working relationships with major supermarket chain buyers.',
            'Exceptional negotiation, presentation, and data-driven analytical capabilities.',
            'Bilingual in Russian and Uzbek; English is a strong asset.'
        ],
        'perks' => [
            'Highly attractive uncapped quarterly sales commission',
            'Company car allowance & travel expense coverage',
            'Generous annual merchandise allowance and family hampers',
            'Flexible hybrid working arrangements'
        ]
    ]
];

$career_testimonials = [
    [
        'name' => 'Dilshod R.',
        'role' => 'Production Shift Lead',
        'tenure' => '8 Years with Dairy Classic',
        'quote' => 'I joined Dairy Classic as a line technician in 2018. Over the years, the company invested in my European certification and gave me the trust to supervise our most advanced continuous churn lines. There is immense pride in seeing families all over Tashkent enjoying ice creams we crafted with care.',
        'badge' => 'Production Craft'
    ],
    [
        'name' => 'Elena V.',
        'role' => 'Senior Food Safety & Microbiologist',
        'tenure' => '5 Years with Dairy Classic',
        'quote' => 'Our laboratory standards rival the best European dairy plants. Working with 100% natural milk and real fruit ingredients gives our quality team real purpose. Plus, tasting every new flavor iteration right out of the test churn is the sweetest job in the country!',
        'badge' => 'Quality & R&D'
    ],
    [
        'name' => 'Jasur K.',
        'role' => 'Regional Logistics Coordinator',
        'tenure' => '4 Years with Dairy Classic',
        'quote' => 'Managing cold-chain transport in Uzbekistan’s hot summers is a true operational science. Dairy Classic gives us modern GPS-monitored refrigerated vehicles and genuine team solidarity. Leadership treats every employee like family.',
        'badge' => 'Cold Chain Logistics'
    ]
];

$career_faqs = [
    [
        'q' => 'What is the hiring and interview timeline at Dairy Classic?',
        'a' => 'Our talent team reviews every application within 48 hours. The complete process typically takes 10 to 14 days, comprising an initial discovery chat, a practical role discussion (with an optional factory tour in Tashkent), and a formal offer.'
    ],
    [
        'q' => 'Do you accept applications from students and fresh graduates?',
        'a' => 'Yes! We actively welcome final-year students and graduates through our annual "Future Dairy Leaders" 12-month paid rotational program, as well as internship opportunities in our Quality Lab and Creative Studio.'
    ],
    [
        'q' => 'Where are the positions located and is transportation provided?',
        'a' => 'Most manufacturing, engineering, and laboratory roles are located at our main facility in БУТ 5, Tashkent. We provide free daily company shuttle buses connecting convenient transit hubs throughout Tashkent. We also have regional opportunities in Samarkand.'
    ],
    [
        'q' => 'Can I submit a spontaneous application if my dream role is not listed?',
        'a' => 'Absolutely! We are continuously expanding our 80,000-litre capacity and developing new product lines. Submit your CV through the Open Application modal, message us on WhatsApp (+998 90 998 2019), or email support@dairyclassic.uz / jkapoor@me.com with your background and goals.'
    ],
    [
        'q' => 'What languages are required to work at Dairy Classic?',
        'a' => 'Depending on the role, fluency in Uzbek and/or Russian is typically expected for daily workplace collaboration. For R&D and engineering roles interfacing with European machinery partners, working technical English is an appreciated bonus.'
    ]
];

