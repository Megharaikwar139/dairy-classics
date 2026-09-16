<?php
// includes/data.php - Central Data Repository for Dairy Classic (Since 1996)

$brand = [
    'name' => 'Dairy Classic',
    'est' => '1996',
    'tagline' => 'Since 1996 • 100% Single-Farm Cream • Artisanal Batches',
    'phone' => '+99878 120 33 77',
    'phone_alt' => '+99878 120 33 78',
    'phone_tashkent' => '+998 90 998 2019',
    'phone_samarkand' => '+998 90 502 9292',
    'address' => 'БУТ 5, 65M6+H9 Tashkent, Uzbekistan. Factory Location',
    'hours' => 'Mon - Sat : 09:00 am - 08:00 pm | Sun : Closed',
    'email' => 'info@dairyclassics.com',
    'logo' => 'assets/images/dairy-classic-logo.jpg',
    'video' => 'https://dairyclassics.com/wp-content/uploads/2025/05/Final-Bricket.mp4',
    'local_video' => 'assets/videos/hero-bricket.mp4'
];

$products = [
    'belgian-chocolate' => [
        'id' => 'belgian-chocolate',
        'name' => 'Belgian Chocolate Truffle',
        'short_name' => 'Belgian Chocolate',
        'category' => 'Gourmet Pint',
        'badge' => 'Chef\'s Decadence',
        'price' => '₹420',
        'size' => '500 ml Pint',
        'image' => 'assets/images/products/belgian-chocolate-tub.png',
        'rating' => 5.0,
        'reviews_count' => 4180,
        'description' => 'Rich 72% dark Belgian cocoa ribbons folded into velvet chocolate gelato, crowned with crisp hand-curled dark chocolate shavings.',
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
    'french-vanilla' => [
        'id' => 'french-vanilla',
        'name' => 'French Vanilla Royale',
        'short_name' => 'French Vanilla',
        'category' => 'Gourmet Pint',
        'badge' => 'Signature Blend',
        'price' => '₹380',
        'size' => '500 ml Pint',
        'image' => 'assets/images/products/french-vanilla-tub.png',
        'rating' => 4.9,
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
    'mint-pistachio' => [
        'id' => 'mint-pistachio',
        'name' => 'Mint Pistachio Crunch',
        'short_name' => 'Mint Pistachio',
        'category' => 'Gourmet Pint',
        'badge' => 'Artisanal Batch',
        'price' => '₹440',
        'size' => '500 ml Pint',
        'image' => 'assets/images/products/mint-pistachio-tub.png',
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
    'golden-fantasy' => [
        'id' => 'golden-fantasy',
        'name' => 'Golden Fantasy Swirl Cone',
        'short_name' => 'Golden Fantasy',
        'category' => 'Gourmet Cone',
        'badge' => 'Iconic Classic',
        'price' => '₹120',
        'size' => '120 ml Waffle Cone',
        'image' => 'assets/images/products/golden-fantasy.png',
        'rating' => 4.9,
        'reviews_count' => 2840,
        'description' => 'Split of two flavours vanilla and chocolate in crunchy wafer coated with chocolate along with roasted peanuts for surprisingly divine taste.',
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
    'choco-boom' => [
        'id' => 'choco-boom',
        'name' => 'Choco Boom Cone',
        'short_name' => 'Choco Boom',
        'category' => 'Gourmet Cone',
        'badge' => 'Choco Lover Choice',
        'price' => '₹130',
        'size' => '120 ml Waffle Cone',
        'image' => 'assets/images/products/choco-boom.png',
        'rating' => 4.95,
        'reviews_count' => 3100,
        'description' => 'Chocolate ice cream filled in crunchy wafer coated with chocolate along with crispy roasted peanuts that give distinctive taste to your mood pleasure.',
        'tasting_notes' => ['Dense Chocolate Gelato', 'Choco-Dipped Tip', 'Golden Peanuts'],
        'calories' => '245 kcal',
        'fat' => '13g',
        'sugar' => '21g',
        'protein' => '5.0g',
        'tags' => ['Decadent Chocolate', 'Waffle Cone', 'Crunch Shell'],
        'colors' => [
            'primary' => '#4A2518',
            'glow' => 'rgba(74, 37, 24, 0.45)'
        ]
    ],
    'super-twist' => [
        'id' => 'super-twist',
        'name' => 'Super Twist Raspberry Cone',
        'short_name' => 'Super Twist',
        'category' => 'Gourmet Cone',
        'badge' => 'Berry Delight',
        'price' => '₹140',
        'size' => '120 ml Waffle Cone',
        'image' => 'assets/images/products/super-twist.png',
        'rating' => 4.88,
        'reviews_count' => 1950,
        'description' => 'Vanilla Ice cream centered Raspberry sauce filled in crunchy wafer coated chocolate, winning the soul and taste buds of ice cream lovers.',
        'tasting_notes' => ['Real Raspberry Coulis', 'Velvet Vanilla Cream', 'Chocolate Shell'],
        'calories' => '220 kcal',
        'fat' => '11g',
        'sugar' => '20g',
        'protein' => '4.2g',
        'tags' => ['Raspberry Core', 'Sweet & Tart', 'Waffle Cone'],
        'colors' => [
            'primary' => '#9B1B40',
            'glow' => 'rgba(155, 27, 64, 0.45)'
        ]
    ],
    'almond-crunch' => [
        'id' => 'almond-crunch',
        'name' => 'Almond Crunch Praline Bar',
        'short_name' => 'Almond Bar',
        'category' => 'Artisanal Bar',
        'badge' => 'Best Handheld',
        'price' => '₹180',
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
    'round-pie' => [
        'id' => 'round-pie',
        'name' => 'Round Pie Cookie Sandwich',
        'short_name' => 'Round Pie',
        'category' => 'Sandwich',
        'badge' => 'Cookie Special',
        'price' => '₹150',
        'size' => '95 ml Sandwich',
        'image' => 'assets/images/products/round-pie.webp',
        'rating' => 4.85,
        'reviews_count' => 1620,
        'description' => 'Imaginative creation perfectly round vanilla ice cream with premium cookies coated with chocolate.',
        'tasting_notes' => ['Crunchy Chocolate Cookie', 'Pure Vanilla Core', 'Chocolate Enrobing'],
        'calories' => '260 kcal',
        'fat' => '14g',
        'sugar' => '22g',
        'protein' => '4.9g',
        'tags' => ['Cookie Sandwich', 'Handcrafted', 'Chocolate Crust'],
        'colors' => [
            'primary' => '#3E2723',
            'glow' => 'rgba(62, 39, 35, 0.4)'
        ]
    ],
    'sandwich' => [
        'id' => 'sandwich',
        'name' => 'Sandwich Biscuit Duo',
        'short_name' => 'Sandwich',
        'category' => 'Biscuit',
        'badge' => 'Irresistible Treat',
        'price' => '₹140',
        'size' => '100 ml Sandwich',
        'image' => 'assets/images/products/sandwich.webp',
        'rating' => 4.9,
        'reviews_count' => 1740,
        'description' => 'Vanilla and chocolate ice cream half sandwiched between crunchy biscuit and half dipped in chocolate with roasted peanuts, irresistible taste and delicious treat on the go.',
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
        'price' => '₹160',
        'size' => '90 ml Gourmet Stick',
        'image' => 'assets/images/products/vega-bar.png',
        'rating' => 4.92,
        'reviews_count' => 2280,
        'description' => 'Delicious vanilla flavoured premium ice cream coated with luscious crunchy chocolate along with crispy roasted peanuts on a stick.',
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
    ],
    'celebration-cake' => [
        'id' => 'celebration-cake',
        'name' => 'Triple-Layer Gateau Cake',
        'short_name' => 'Celebration Cake',
        'category' => 'Ice Cream Cake',
        'badge' => 'Party Showstopper',
        'price' => '₹1,250',
        'size' => '1.0 kg Gateau (Serves 8-10)',
        'image' => 'assets/images/products/chocolate-celebration-cake.png',
        'rating' => 5.0,
        'reviews_count' => 1290,
        'description' => 'Architectural trio of Belgian dark chocolate, white vanilla cream, and milk chocolate sponge, glazed in dark ganache drip, fresh strawberries, and gold accents.',
        'tasting_notes' => ['Glossy Dark Ganache', 'Farm Fresh Strawberry', 'Trio Ice Cream Layers'],
        'calories' => '320 kcal/slice',
        'fat' => '19g',
        'sugar' => '26g',
        'protein' => '6.8g',
        'tags' => ['Handmade Layering', 'Fresh Fruit', 'Celebration Edition'],
        'colors' => [
            'primary' => '#B83248',
            'glow' => 'rgba(219, 68, 85, 0.45)'
        ]
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
        'area' => 'Samarkand City Parlour',
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
