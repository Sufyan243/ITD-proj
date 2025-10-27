<?php
include 'db_connection.php';

// Sample cards data for all 5 categories
$cards = [
    // Laser Cutting Machines
    [
        'category' => 'lasercutting',
        'title' => 'HSG G3015F Fiber Laser Cutting Machine',
        'description' => 'High-precision fiber laser cutting machine with 1000W-6000W power options. Perfect for cutting steel, stainless steel, aluminum, and other metals with exceptional accuracy.',
        'image' => 'products/laser1.jpg',
        'pdf' => 'brochures/hsg-g3015f.pdf'
    ],
    [
        'category' => 'lasercutting',
        'title' => 'HSG G4020H Heavy Duty Laser Cutter',
        'description' => 'Industrial-grade laser cutting machine designed for heavy-duty applications. Features advanced beam delivery system and high-speed cutting capabilities.',
        'image' => 'products/laser2.jpg',
        'pdf' => 'brochures/hsg-g4020h.pdf'
    ],
    [
        'category' => 'lasercutting',
        'title' => 'HSG G6025E Exchange Table Laser',
        'description' => 'Efficient laser cutting machine with exchange table system for continuous production. Ideal for high-volume manufacturing with minimal downtime.',
        'image' => 'products/laser3.jpg',
        'pdf' => 'brochures/hsg-g6025e.pdf'
    ],

    // CNC Machines
    [
        'category' => 'cncmachine',
        'title' => 'SYIL X7 CNC Machining Center',
        'description' => 'Compact and precise CNC machining center with advanced control system. Perfect for small to medium-sized parts with high accuracy requirements.',
        'image' => 'products/cnc1.jpg',
        'pdf' => 'brochures/syil-x7.pdf'
    ],
    [
        'category' => 'cncmachine',
        'title' => 'SYIL X5 Desktop CNC Mill',
        'description' => 'Desktop CNC milling machine ideal for prototyping and small production runs. Features user-friendly interface and reliable performance.',
        'image' => 'products/cnc2.jpg',
        'pdf' => 'brochures/syil-x5.pdf'
    ],
    [
        'category' => 'cncmachine',
        'title' => 'SYIL X4 Turning Center',
        'description' => 'Precision CNC turning center with automatic tool changer. Designed for efficient production of cylindrical parts with superior surface finish.',
        'image' => 'products/cnc3.jpg',
        'pdf' => 'brochures/syil-x4.pdf'
    ],

    // Injection Moulding Machines
    [
        'category' => 'injectionmoulding',
        'title' => 'SONLY UTS-120 Injection Moulding Machine',
        'description' => 'High-performance injection moulding machine with 120-ton clamping force. Features energy-efficient servo motor system and precise temperature control.',
        'image' => 'products/injection1.jpg',
        'pdf' => 'brochures/sonly-uts120.pdf'
    ],
    [
        'category' => 'injectionmoulding',
        'title' => 'SONLY UTS-200 Heavy Duty Moulding',
        'description' => 'Industrial injection moulding machine with 200-ton capacity. Designed for large parts production with consistent quality and reliability.',
        'image' => 'products/injection2.jpg',
        'pdf' => 'brochures/sonly-uts200.pdf'
    ],
    [
        'category' => 'injectionmoulding',
        'title' => 'SONLY UTS-80 Compact Moulding Machine',
        'description' => 'Compact injection moulding machine perfect for small to medium parts. Features advanced hydraulic system and user-friendly control panel.',
        'image' => 'products/injection3.jpg',
        'pdf' => 'brochures/sonly-uts80.pdf'
    ],

    // Mold Bases
    [
        'category' => 'mold',
        'title' => 'Standard Mold Base Set A',
        'description' => 'High-quality standard mold base with precision-machined surfaces. Suitable for various injection moulding applications with excellent durability.',
        'image' => 'products/mold1.jpg',
        'pdf' => ''
    ],
    [
        'category' => 'mold',
        'title' => 'Custom Mold Base Set B',
        'description' => 'Custom-designed mold base for specific applications. Features hardened steel construction and precise dimensional accuracy.',
        'image' => 'products/mold2.jpg',
        'pdf' => ''
    ],
    [
        'category' => 'mold',
        'title' => 'Heavy Duty Mold Base Set C',
        'description' => 'Heavy-duty mold base designed for high-volume production. Built with premium materials for extended service life and reliability.',
        'image' => 'products/mold3.jpg',
        'pdf' => ''
    ],

    // Laser Accessories
    [
        'category' => 'laser_accessories',
        'title' => 'Laser Cutting Nozzles Set',
        'description' => 'Complete set of precision laser cutting nozzles for various materials and thicknesses. Made from high-quality copper for optimal performance.',
        'image' => 'products/accessory1.jpg',
        'pdf' => ''
    ],
    [
        'category' => 'laser_accessories',
        'title' => 'Protective Lenses Kit',
        'description' => 'High-quality protective lenses for laser cutting machines. Anti-reflective coating ensures maximum laser transmission and protection.',
        'image' => 'products/accessory2.jpg',
        'pdf' => ''
    ],
    [
        'category' => 'laser_accessories',
        'title' => 'Laser Head Assembly',
        'description' => 'Complete laser head assembly with focusing lens and nozzle holder. Designed for easy installation and maintenance.',
        'image' => 'products/accessory3.jpg',
        'pdf' => ''
    ]
];

// Insert cards into database
foreach ($cards as $card) {
    $category = mysqli_real_escape_string($conn, $card['category']);
    $title = mysqli_real_escape_string($conn, $card['title']);
    $description = mysqli_real_escape_string($conn, $card['description']);
    $image = mysqli_real_escape_string($conn, $card['image']);
    $pdf = mysqli_real_escape_string($conn, $card['pdf']);
    
    $sql = "INSERT INTO cards (category, title, description, image, pdf, created_at) 
            VALUES ('$category', '$title', '$description', '$image', '$pdf', NOW())";
    
    if (mysqli_query($conn, $sql)) {
        echo "Added: " . $card['title'] . "<br>";
    } else {
        echo "Error adding " . $card['title'] . ": " . mysqli_error($conn) . "<br>";
    }
}

echo "<br><strong>Sample cards have been added successfully!</strong><br>";
echo "<a href='admin_cards.php'>Go to Admin Panel</a> | <a href='index.php'>Go to Homepage</a>";
?>