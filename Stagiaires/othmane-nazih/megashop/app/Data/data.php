<?php
/**
 * MegaShop - Fichier de Données PHP
 * Contient toutes les données nécessaires pour dynamiser le site
 */

// ============================================
// 1. CONFIGURATION DU SITE
// ============================================
$config = [
    'company' => [
        'name' => 'MegaShop',
        'siret' => '123 456 789 00012',
        'address' => '123 Avenue du Commerce',
        'city' => 'Paris',
        'zip' => '75001',
        'country' => 'France',
        'phone' => '+212 1 23 45 67 89',
        'email' => 'info@megashop.com',
        'support_email' => 'support@megashop.com',
        'sales_email' => 'ventes@megashop.com',
    ],
    'contact' => [
        'phone_general' => '+212 1 23 45 67 89',
        'phone_support' => '+212 1 23 45 67 00',
        'phone_sales' => '+212 1 23 45 67 99',
    ],
    'hours' => [
        'monday_friday' => '9:00 - 18:00',
        'saturday' => '10:00 - 16:00',
        'sunday' => 'Fermé',
    ],
    'social' => [
        'facebook' => 'https://facebook.com/megashop',
        'instagram' => 'https://instagram.com/megashop',
        'twitter' => 'https://twitter.com/megashop',
        'youtube' => 'https://youtube.com/megashop',
    ],
];

// ============================================
// 2. CATÉGORIES DE PRODUITS
// ============================================
$categories = [
    'informatique' => [
        'id' => 'informatique',
        'name' => 'Informatique',
        'slug' => 'informatique',
        'icon' => '💻',
        'description' => 'Ordinateurs, laptops, accessoires informatiques et bien plus...',
    ],
    'petit-electromenager' => [
        'id' => 'petit-electromenager',
        'name' => 'Petit Électroménager',
        'slug' => 'petit-electromenager',
        'icon' => '🍳',
        'description' => 'Cafetières, grille-pain, mixeurs, robots culinaires...',
    ],
    'grand-electromenager' => [
        'id' => 'grand-electromenager',
        'name' => 'Grand Électroménager',
        'slug' => 'grand-electromenager',
        'icon' => '❄️',
        'description' => 'Réfrigérateurs, lave-linge, lave-vaisselle, fours...',
    ],
];

// ============================================
// 3. PRODUITS - INFORMATIQUE
// ============================================
$products['informatique'] = [
    [
        'id' => 1,
        'category' => 'informatique',
        'name' => 'Ordinateur Portable Pro',
        'price' => 1299.99,
        'description' => 'Intel i7, 16GB RAM, SSD 512GB',
        'stock' => 5,
        'image' => 'ordinateur-portable-pro.jpg',
        'specs' => [
            'Processeur' => 'Intel Core i7-13700K',
            'RAM' => '16 GB DDR5',
            'Stockage' => 'SSD NVMe 512 GB',
            'Écran' => '15.6" IPS 1920x1080',
            'Carte Graphique' => 'NVIDIA RTX 4060',
            'Batterie' => '80 Wh (10 heures autonomie)',
            'Poids' => '1.8 kg',
            'Couleur' => 'Gris Sidéral',
        ],
        'ports' => ['2x USB-C Thunderbolt 4', '2x USB-A 3.2', '1x HDMI 2.1', '1x Jack audio 3.5mm', 'WiFi 6E 802.11ax', 'Bluetooth 5.3'],
        'details' => "L'Ordinateur Portable Pro est conçu pour les professionnels qui exigent performance et mobilité.",
        'rating' => 4.8,
        'reviews' => 156,
    ],
    [
        'id' => 2,
        'category' => 'informatique',
        'name' => 'PC Bureau Gaming',
        'price' => 1899.99,
        'description' => 'RTX 4070, i9, 32GB RAM',
        'stock' => 3,
        'image' => 'pc-bureau-gaming.jpg',
        'specs' => ['Processeur' => 'Intel Core i9-13900K', 'GPU' => 'NVIDIA RTX 4070', 'RAM' => '32 GB DDR5', 'Stockage' => 'SSD 1TB', 'Alimentation' => '850W'],
        'ports' => [],
        'details' => 'PC de bureau gaming haute performance.',
        'rating' => 4.9,
        'reviews' => 89,
    ],
    [
        'id' => 3,
        'category' => 'informatique',
        'name' => 'Tablette 12 pouces',
        'price' => 599.99,
        'description' => 'OLED, 128GB, Stylet inclus',
        'stock' => 8,
        'image' => 'tablette-12-pouces.jpg',
        'specs' => ['Écran' => '12" OLED 2560x1600', 'Processeur' => 'Apple M2', 'RAM' => '8GB', 'Stockage' => '128GB', 'Batterie' => '40Wh (12 heures)'],
        'ports' => [],
        'details' => 'Tablette premium avec stylet inclus.',
        'rating' => 4.7,
        'reviews' => 234,
    ],
    [
        'id' => 4,
        'category' => 'informatique',
        'name' => 'Clavier Mécanique RGB',
        'price' => 179.99,
        'description' => 'Switches personnalisées, Rétroéclairage',
        'stock' => 12,
        'image' => 'clavier-mecanique-rgb.jpg',
        'specs' => ['Type' => 'Mécanique', 'Layout' => 'AZERTY', 'Rétroéclairage' => 'RGB par touche', 'Connectivité' => 'USB-C'],
        'ports' => [],
        'details' => 'Clavier mécanique gaming avec rétroéclairage RGB.',
        'rating' => 4.6,
        'reviews' => 145,
    ],
    [
        'id' => 5,
        'category' => 'informatique',
        'name' => 'Souris Gamer Wireless',
        'price' => 89.99,
        'description' => '12000 DPI, Batterie 100h',
        'stock' => 15,
        'image' => 'souris-gamer-wireless.jpg',
        'specs' => ['DPI' => "Jusqu'à 12000", 'Capteur' => 'PMW3389', 'Autonomie' => '100 heures', 'Boutons' => '11'],
        'ports' => [],
        'details' => 'Souris gamer sans fil haute précision.',
        'rating' => 4.5,
        'reviews' => 98,
    ],
    [
        'id' => 6,
        'category' => 'informatique',
        'name' => 'Écran 4K 27 pouces',
        'price' => 449.99,
        'description' => '144Hz, HDR, USB-C',
        'stock' => 4,
        'image' => 'ecran-4k-27.jpg',
        'specs' => ['Résolution' => 'UHD 4K 3840x2160', 'Fréquence' => '144Hz', 'Panel' => 'IPS', 'USB-C' => '90W Power Delivery'],
        'ports' => [],
        'details' => 'Écran 4K gaming et création.',
        'rating' => 4.8,
        'reviews' => 76,
    ],
    [
        'id' => 7,
        'category' => 'informatique',
        'name' => 'Casque Bluetooth Pro',
        'price' => 249.99,
        'description' => 'Réduction active, 40h autonomie',
        'stock' => 10,
        'image' => 'casque-bluetooth-pro.jpg',
        'specs' => ['Réduction Bruit' => 'Active ANC', 'Autonomie' => '40 heures', 'Codec' => 'LDAC, AAC', 'Poids' => '250g'],
        'ports' => [],
        'details' => 'Casque premium avec réduction active du bruit.',
        'rating' => 4.7,
        'reviews' => 523,
    ],
    [
        'id' => 8,
        'category' => 'informatique',
        'name' => 'Webcam 4K Auto-focus',
        'price' => 129.99,
        'description' => 'Microphone intégré, Vision nocturne',
        'stock' => 7,
        'image' => 'webcam-4k.jpg',
        'specs' => ['Résolution' => '4K 30fps / 1080p 60fps', 'Champ de vision' => '90°', 'Microphone' => 'Stéréo intégré', 'Vision nocturne' => 'Oui'],
        'ports' => [],
        'details' => 'Webcam 4K pour streaming et visioconférence.',
        'rating' => 4.4,
        'reviews' => 112,
    ],
];

// ============================================
// 4. PRODUITS - PETIT ÉLECTROMÉNAGER
// ============================================
$products['petit-electromenager'] = [
    [
        'id' => 21,
        'category' => 'petit-electromenager',
        'name' => 'Cafetière Programmable',
        'price' => 79.99,
        'description' => '12 tasses, Minuteur programmable',
        'stock' => 6,
        'image' => 'cafetiere-programmable.jpg',
        'specs' => ['Capacité' => '12 tasses', 'Programmable' => 'Oui (24h)', 'Puissance' => '1000W', 'Filtre' => 'Réutilisable'],
        'ports' => [],
        'details' => 'Cafetière programmable avec minuterie 24h.',
        'rating' => 4.5,
        'reviews' => 67,
    ],
    [
        'id' => 22,
        'category' => 'petit-electromenager',
        'name' => 'Grille-pain Premium',
        'price' => 49.99,
        'description' => '4 fentes, 7 niveaux de cuisson',
        'stock' => 11,
        'image' => 'grille-pain-premium.jpg',
        'specs' => ['Fentes' => '4', 'Niveaux' => '7', 'Puissance' => '1500W', 'Fonction Dégivrage' => 'Oui'],
        'ports' => [],
        'details' => 'Grille-pain premium 4 fentes.',
        'rating' => 4.3,
        'reviews' => 45,
    ],
    [
        'id' => 23,
        'category' => 'petit-electromenager',
        'name' => 'Blender Haute Vitesse',
        'price' => 129.99,
        'description' => '2000W, 8 vitesses, Bol sans BPA',
        'stock' => 5,
        'image' => 'blender-haute-vitesse.jpg',
        'specs' => ['Puissance' => '2000W', 'Vitesses' => '8', 'Capacité' => '1.5L', 'Sans BPA' => 'Oui'],
        'ports' => [],
        'details' => 'Blender haute vitesse pour smoothies et soupes.',
        'rating' => 4.6,
        'reviews' => 198,
    ],
    [
        'id' => 24,
        'category' => 'petit-electromenager',
        'name' => 'Bouilloire Électrique Sans Fil',
        'price' => 34.99,
        'description' => 'Arrêt automatique, 1.7L',
        'stock' => 20,
        'image' => 'bouilloire-sans-fil.jpg',
        'specs' => ['Capacité' => '1.7L', 'Temps de chauffe' => '3-5 minutes', 'Arrêt auto' => 'Oui', 'Puissance' => '2200W'],
        'ports' => [],
        'details' => 'Bouilloire électrique sans fil avec arrêt automatique.',
        'rating' => 4.4,
        'reviews' => 234,
    ],
    [
        'id' => 25,
        'category' => 'petit-electromenager',
        'name' => 'Robot Culinaire Multifonction',
        'price' => 189.99,
        'description' => '15 accessoires, 1200W',
        'stock' => 3,
        'image' => 'robot-culinaire.jpg',
        'specs' => ['Puissance' => '1200W', 'Accessoires' => '15', 'Capacité' => '3.5L', 'Vitesses' => '12'],
        'ports' => [],
        'details' => 'Robot culinaire multifonction avec 15 accessoires.',
        'rating' => 4.7,
        'reviews' => 156,
    ],
    [
        'id' => 26,
        'category' => 'petit-electromenager',
        'name' => 'Micro-ondes Numérique',
        'price' => 99.99,
        'description' => '800W, 20L, Mode grill',
        'stock' => 8,
        'image' => 'micro-ondes.jpg',
        'specs' => ['Puissance' => '800W', 'Capacité' => '20L', 'Programmes' => '10', 'Grill' => 'Oui'],
        'ports' => [],
        'details' => 'Micro-ondes numérique avec mode grill.',
        'rating' => 4.5,
        'reviews' => 89,
    ],
    [
        'id' => 27,
        'category' => 'petit-electromenager',
        'name' => 'Fer à Repasser Vapeur',
        'price' => 59.99,
        'description' => '2400W, Semelle en céramique',
        'stock' => 9,
        'image' => 'fer-repasser.jpg',
        'specs' => ['Puissance' => '2400W', 'Semelle' => 'Céramique', 'Vapeur' => 'Oui', 'Réservoir' => '200ml'],
        'ports' => [],
        'details' => 'Fer à repasser vapeur semelle céramique.',
        'rating' => 4.3,
        'reviews' => 67,
    ],
    [
        'id' => 28,
        'category' => 'petit-electromenager',
        'name' => 'Appareil à Raclette Électrique',
        'price' => 44.99,
        'description' => '4 portions, Non-adhésif',
        'stock' => 14,
        'image' => 'raclette-electrique.jpg',
        'specs' => ['Portions' => '4', 'Surface' => 'Non-adhésif', 'Puissance' => '600W', 'Thermostat' => 'Oui'],
        'ports' => [],
        'details' => 'Appareil à raclette électrique pour 4 personnes.',
        'rating' => 4.2,
        'reviews' => 43,
    ],
    [
        'id' => 29,
        'category' => 'petit-electromenager',
        'name' => 'Aspirateur Sans Fil Cyclonique',
        'price' => 299.99,
        'description' => '60 min autonomie, Programmable',
        'stock' => 2,
        'image' => 'aspirateur-sans-fil.jpg',
        'specs' => ['Autonomie' => '60 minutes', 'Cyclonique' => 'Oui', 'Puissance' => '200W', 'Programmable' => 'Oui'],
        'ports' => [],
        'details' => 'Aspirateur sans fil cyclonique longue autonomie.',
        'rating' => 4.6,
        'reviews' => 112,
    ],
];

// ============================================
// 5. PRODUITS - GRAND ÉLECTROMÉNAGER
// ============================================
$products['grand-electromenager'] = [
    [
        'id' => 41,
        'category' => 'grand-electromenager',
        'name' => 'Réfrigérateur Connecté',
        'price' => 1499.99,
        'description' => 'French Door, 620L, WiFi intégré',
        'stock' => 1,
        'image' => 'refrigerateur-connecte.jpg',
        'specs' => ['Type' => 'French Door', 'Capacité' => '620L', 'Classe' => 'A+++', 'Connectivité' => 'WiFi', 'Écran' => 'Tactile 7"'],
        'ports' => [],
        'details' => 'Réfrigérateur connecté avec écran tactile et WiFi.',
        'rating' => 4.8,
        'reviews' => 76,
    ],
    [
        'id' => 42,
        'category' => 'grand-electromenager',
        'name' => 'Lave-linge Haut de Gamme',
        'price' => 899.99,
        'description' => '9kg, A+++, 1400 tours/min',
        'stock' => 2,
        'image' => 'lave-linge-haut-gamme.jpg',
        'specs' => ['Capacité' => '9kg', 'Classe' => 'A+++', 'Vitesse' => '1400 tours/min', 'Programmes' => '15'],
        'ports' => [],
        'details' => 'Lave-linge haut de gamme A+++.',
        'rating' => 4.7,
        'reviews' => 134,
    ],
    [
        'id' => 43,
        'category' => 'grand-electromenager',
        'name' => 'Lave-vaisselle Encastrable',
        'price' => 599.99,
        'description' => '14 couverts, A+++, 42dB',
        'stock' => 4,
        'image' => 'lave-vaisselle.jpg',
        'specs' => ['Couverts' => '14', 'Classe' => 'A+++', 'Bruit' => '42dB', 'Programmes' => '8'],
        'ports' => [],
        'details' => 'Lave-vaisselle encastrable silencieux A+++.',
        'rating' => 4.6,
        'reviews' => 98,
    ],
    [
        'id' => 44,
        'category' => 'grand-electromenager',
        'name' => 'Cuisinière Multi-fonction',
        'price' => 749.99,
        'description' => 'Induction, Convection, Vapeur',
        'stock' => 3,
        'image' => 'cuisiniere-multifonction.jpg',
        'specs' => ['Table' => 'Induction', 'Four' => 'Convection + Vapeur', 'Puissance' => '7000W'],
        'ports' => [],
        'details' => 'Cuisinière multifonction induction et vapeur.',
        'rating' => 4.5,
        'reviews' => 67,
    ],
    [
        'id' => 45,
        'category' => 'grand-electromenager',
        'name' => 'Four Électrique Premium',
        'price' => 599.99,
        'description' => '80L, Nettoyage automatique',
        'stock' => 2,
        'image' => 'four-electrique.jpg',
        'specs' => ['Capacité' => '80L', 'Classe' => 'A', 'Nettoyage' => 'Automatique', 'Fonctions' => '10'],
        'ports' => [],
        'details' => 'Four électrique premium avec nettoyage automatique.',
        'rating' => 4.7,
        'reviews' => 89,
    ],
    [
        'id' => 46,
        'category' => 'grand-electromenager',
        'name' => 'Congélateur Vertical',
        'price' => 449.99,
        'description' => '260L, A+, Décongélation rapide',
        'stock' => 5,
        'image' => 'congelateur-vertical.jpg',
        'specs' => ['Capacité' => '260L', 'Classe' => 'A+', 'Décongélation' => 'Rapide'],
        'ports' => [],
        'details' => 'Congélateur vertical grande capacité A+.',
        'rating' => 4.4,
        'reviews' => 54,
    ],
    [
        'id' => 47,
        'category' => 'grand-electromenager',
        'name' => 'Climatiseur Réversible',
        'price' => 1299.99,
        'description' => '3000W, Chauffage + Refroidissement',
        'stock' => 2,
        'image' => 'climatiseur-reversible.jpg',
        'specs' => ['Puissance' => '3000W', 'Réversible' => 'Oui', 'Classe' => 'A+++', 'Bruit' => '24dB'],
        'ports' => [],
        'details' => 'Climatiseur réversible chaud/froid A+++.',
        'rating' => 4.8,
        'reviews' => 142,
    ],
    [
        'id' => 48,
        'category' => 'grand-electromenager',
        'name' => 'Sèche-linge Condensation',
        'price' => 649.99,
        'description' => '8kg, A++, Capteur humidité',
        'stock' => 3,
        'image' => 'seche-linge.jpg',
        'specs' => ['Capacité' => '8kg', 'Classe' => 'A++', 'Technologie' => 'Pompe à chaleur'],
        'ports' => [],
        'details' => 'Sèche-linge condensation pompe à chaleur A++.',
        'rating' => 4.5,
        'reviews' => 76,
    ],
    [
        'id' => 49,
        'category' => 'grand-electromenager',
        'name' => 'Radiateur Électrique Connecté',
        'price' => 399.99,
        'description' => '2000W, WiFi, Thermostat',
        'stock' => 8,
        'image' => 'radiateur-connecte.jpg',
        'specs' => ['Puissance' => '2000W', 'WiFi' => 'Oui', 'Thermostat' => 'Programmable', 'Détecteur' => 'Présence'],
        'ports' => [],
        'details' => 'Radiateur électrique connecté avec thermostat programmable.',
        'rating' => 4.6,
        'reviews' => 203,
    ],
];

// ============================================
// 6. CONDITIONS GÉNÉRALES DE VENTE
// ============================================
$cgv = [
    ['id' => 1, 'title' => 'Dispositions Générales', 'content' => "Les présentes Conditions Générales de Vente régissent les relations commerciales entre MegaShop et ses clients."],
    ['id' => 2, 'title' => 'Offres de Produits', 'content' => "Les produits présentés sur le site sont offerts à titre informatif. Les prix affichés sont valables au moment de leur publication et peuvent être modifiés sans préavis."],
    ['id' => 3, 'title' => 'Commandes et Confirmation', 'content' => "La commande en ligne constitue une offre d'achat. La confirmation de commande n'est effective que lorsque MegaShop a confirmé par écrit l'acceptation de la commande."],
    ['id' => 4, 'title' => 'Conditions de Règlement', 'content' => "MegaShop accepte les cartes bancaires, virements, PayPal et paiement en 3/4 fois."],
    ['id' => 5, 'title' => 'Conditions de Livraison', 'content' => "Livraison gratuite à partir de 50€. Délais : 5-7 jours standard, 2-3 jours express."],
    ['id' => 6, 'title' => 'Garantie et SAV', 'content' => "Tous les produits bénéficient d'une garantie légale de 2 ans à partir de la date d'achat."],
    ['id' => 7, 'title' => 'Responsabilité', 'content' => "La responsabilité de MegaShop est limitée au montant de la commande passée."],
    ['id' => 8, 'title' => 'Propriété Intellectuelle', 'content' => "Tous les contenus du site sont la propriété exclusive de MegaShop ou de ses partenaires."],
    ['id' => 9, 'title' => 'Protection des Données', 'content' => "Les données personnelles collectées sont soumises à notre politique de confidentialité, conformément au RGPD."],
    ['id' => 10, 'title' => 'Modification des CGV', 'content' => "MegaShop se réserve le droit de modifier les présentes CGV à tout moment."],
    ['id' => 11, 'title' => 'Loi Applicable', 'content' => "Les présentes CGV sont régies par la loi française."],
    ['id' => 12, 'title' => 'Contact', 'content' => "MegaShop, 123 Avenue du Commerce, 75001 Paris — support@megashop.com — +212 1 23 45 67 89"],
];

// ============================================
// 7. FAQ
// ============================================
$faq = [
    ['id' => 1, 'question' => 'Quelle est la durée standard de livraison ?', 'answer' => 'La livraison standard prend 5 à 7 jours ouvrables. Une livraison express est également disponible en 2 à 3 jours ouvrables.'],
    ['id' => 2, 'question' => 'Comment puis-je retourner un produit ?', 'answer' => 'Vous disposez de 30 jours pour retourner votre produit. Veuillez nous contacter pour obtenir une étiquette de retour.'],
    ['id' => 3, 'question' => 'Acceptez-vous les paiements en plusieurs fois ?', 'answer' => 'Oui, nous proposons le paiement en 3 ou 4 fois sans frais pour les achats supérieurs à 100 €.'],
    ['id' => 4, 'question' => 'Comment puis-je suivre ma commande ?', 'answer' => 'Un numéro de suivi vous sera envoyé par email après la confirmation de votre commande.'],
    ['id' => 5, 'question' => 'Proposez-vous une garantie sur vos produits ?', 'answer' => "Tous nos produits bénéficient d'une garantie légale de 2 ans."],
];

// ============================================
// 8. FONCTIONS UTILITAIRES
// ============================================

function getProductsByCategory($slug)
{
    global $products;
    return $products[$slug] ?? [];
}

function getProductById($id)
{
    global $products;
    foreach ($products as $items) {
        foreach ($items as $product) {
            if ($product['id'] == $id)
                return $product;
        }
    }
    return null;
}

function getCategoryBySlug($slug)
{
    global $categories;
    return $categories[$slug] ?? null;
}

function formatPrice($price)
{
    return number_format($price, 2, ',', ' ') . ' €';
}

function getFeaturedProducts()
{
    global $products;
    $featured = [];
    foreach ($products as $items) {
        foreach ($items as $p) {
            if ($p['stock'] > 0 && $p['rating'] >= 4.7) {
                $featured[] = $p;
            }
        }
    }
    return array_slice($featured, 0, 3);
}
