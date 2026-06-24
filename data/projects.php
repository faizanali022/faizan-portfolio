<?php
/**
 * Faizan Ali – Real Projects Data
 * 
 * Har project ka array: title, url, category, short_desc, tech_stack (array), features (array)
 * 'image' optional – agar screenshot available ho to yahan filename likhein.
 */

return [
    [
        'title'      => 'JT & Sons Tree Service',
        'url'        => 'https://jtsonstree.com',
        'category'   => 'Full‑Stack Business Website',
        'short_desc' => 'Complete website for a family‑owned tree service in Southern Oregon. Includes booking, admin panel, blog, and AI chatbot.',
        'tech_stack' => ['Node.js','Express.js','EJS','MongoDB Atlas','Formspree','Elfsight Chatbot'],
        'features'   => [
            'Dynamic admin panel (CRUD blogs, bookings, contacts)',
            'Automated email notifications for new bookings',
            'Online booking with service selection & date picking',
            'Service area pages for Curry County locations',
            'AI chatbot (24/7 customer assistance)',
            'Responsive design & SEO optimization'
        ],
        'image'      => 'project-jt-sons.jpg'
    ],
    [
        'title'      => 'Al Noor Maid Services',
        'url'        => 'https://alnoormaidservices.com',
        'category'   => 'Full‑Stack Home Staff Platform',
        'short_desc' => 'A platform connecting families with background‑checked domestic workers across major Pakistani cities.',
        'tech_stack' => ['Node.js','Express.js','MySQL (Sequelize)','EJS','Font Awesome','Cloudflare Tunnel'],
        'features'   => [
            '22+ dynamic service pages (maid, cook, driver, etc.)',
            'Blog section with category filtering',
            'City‑specific landing pages (Islamabad, Lahore, etc.)',
            'Admin dashboard with CRUD for blog posts',
            'WhatsApp & call‑to‑action for instant booking',
            'Custom chatbot, testimonials slider, responsive UI'
        ],
        'image'      => 'project-alnoor.jpg'
    ],
    [
        'title'      => 'Valor Mediation',
        'url'        => 'https://valormediation.com',
        'category'   => 'Professional Services Website',
        'short_desc' => 'Website for a Texas‑based mediation firm with AI chatbot, Google reviews widget, and admin panel.',
        'tech_stack' => ['Node.js','Express','MySQL (Sequelize)','EJS','Trustmary','Cloudflare'],
        'features'   => [
            'Detailed service pages (business, family, legal, etc.)',
            'City‑specific landing pages (Dallas, Fort Worth)',
            'Blog system with featured images (admin CRUD)',
            'Rule‑based AI chatbot for instant support',
            'Google Reviews integration via Trustmary',
            'Secure admin login & mobile‑friendly design'
        ],
        'image'      => 'project-valor.jpg'
    ],
    [
        'title'      => 'Hassan Home Maids Services',
        'url'        => 'https://hassanmaid.services',
        'category'   => 'Full‑Stack Web Application',
        'short_desc' => 'Complete web app for a home staff agency in Islamabad with 22+ services, Google Maps, and chatbot.',
        'tech_stack' => ['Node.js','Express.js','EJS','Nodemailer','Google Maps','Custom CSS'],
        'features'   => [
            '22+ service pages with individual content',
            'Mega dropdown menu & floating header',
            'Interactive services carousel (mobile‑friendly)',
            'Google Maps integration with directions',
            'Rule‑based AI chatbot & contact form with email',
            'Modern dark‑blue theme, SEO optimized'
        ],
        'image'      => 'project-hassanmaid.jpg'
    ],
    [
        'title'      => 'No Fly Zone Pest Control',
        'url'        => 'https://noflyzone.pro',
        'category'   => 'Business Website',
        'short_desc' => 'Responsive pest control website with service area pages, blog, contact form, and chatbot.',
        'tech_stack' => ['Node.js','Express','EJS','MySQL','PM2','CSS3'],
        'features'   => [
            'Dynamic service area subpages (Magic Valley, Treasure Valley)',
            'Static blog system',
            'Contact form with MySQL storage',
            'Interactive chatbot for instant assistance',
            'Green‑themed UI, mobile‑first design',
            'Deployed on Hostinger with PM2'
        ],
        'image'      => 'project-noflyzone.jpg'
    ],
    [
        'title'      => 'Spectrum Nightscapes',
        'url'        => 'https://spectrumnightscapes.com',
        'category'   => 'Outdoor Lighting Business Website',
        'short_desc' => 'Luxury outdoor lighting company site with dynamic services, blog, booking forms, and AI chatbot.',
        'tech_stack' => ['Node.js','Express','EJS','MySQL','Resend API','JSON'],
        'features'   => [
            'Dynamic blog with admin panel (image upload)',
            'AI chatbot & floating toggle',
            'Booking & consultation forms (email via Resend)',
            'Service & lighting type pages',
            'Professional black & gold theme',
            'Smooth animations, fully responsive'
        ],
        'image'      => 'project-spectrum.jpg'
    ],
    [
        'title'      => 'Blue Otter Plumbing & Drain',
        'url'        => 'https://lawngreen-ant-955218.hostingersite.com',
        'category'   => 'Full‑Stack Plumbing Website',
        'short_desc' => 'Originally PHP, migrated to Node.js. Dynamic city‑service pages, blog, gallery, AI chatbot, and admin panel.',
        'tech_stack' => ['Node.js','Express','EJS','JSON','Session Auth','Cloudflare Tunnel'],
        'features'   => [
            '50+ SEO‑optimized city/service pages from JSON',
            'AI‑powered chatbot for service questions',
            'Full blog & photo gallery CRUD',
            'Secure admin panel (session + bcrypt)',
            'Contact form with read/unread tracking',
            'Responsive, custom brand colors, XML sitemap'
        ],
        'image'      => 'project-blue-otter.jpg'
    ],
    [
        'title'      => "Michael's Carpet Care",
        'url'        => 'https://michaelscarpetcarellc.com',
        'category'   => 'Custom PHP Website',
        'short_desc' => 'Fully custom PHP website with MVC architecture, smart chatbot, admin panel, and JSON storage.',
        'tech_stack' => ['PHP 8.3','Custom MVC','HTML5','CSS3','JavaScript','JSON'],
        'features'   => [
            'Custom MVC framework built from scratch',
            'SEO‑friendly slug‑based routing',
            'Admin panel (CRUD blogs, gallery, chatbot keywords)',
            'Smart keyword‑based chatbot',
            'Flat‑file JSON database (no MySQL)',
            'Eco‑friendly branding, responsive design'
        ],
        'image'      => 'project-michaels-carpet.jpg'
    ],
    [
        'title'      => 'All‑American Restoration Inc',
        'url'        => 'https://allamericanrestorationinc.com',
        'category'   => 'Custom PHP Business Website',
        'short_desc' => 'Roofing & exterior contractor site with custom MVC, chatbot, dynamic pages, and admin blog panel.',
        'tech_stack' => ['PHP','Custom MVC','JavaScript','JSON','FontAwesome'],
        'features'   => [
            'Smart chatbot with keyword replies',
            'Dynamic service & area landing pages',
            'Admin panel for blog management',
            'JSON flat‑file storage (no database)',
            'Mobile‑first design (370px+)',
            'Modern UI with micro‑interactions'
        ],
        'image'      => 'project-allamerican.jpg'
    ],
    [
        'title'      => 'Brent Design & Construction',
        'url'        => 'https://brentdesignandconstruction.com',
        'category'   => 'Landscape Architecture Website',
        'short_desc' => 'Custom PHP site for a San Antonio landscape company. AI chatbot (Gemini), admin panel, Google Maps.',
        'tech_stack' => ['PHP','MVC','JavaScript','JSON','Google Gemini API','Google Maps'],
        'features'   => [
            'AI chatbot (rule‑based + Gemini API)',
            'Dynamic service & area pages',
            'Admin panel (blog, contacts, reviews)',
            'Live review form with star rating',
            'Image upload for blog posts',
            'Mobile‑first, Google Maps integration'
        ],
        'image'      => 'project-brent.jpg'
    ],
    [
        'title'      => 'CrossAir HVAC',
        'url'        => 'https://crossairhvac.com',
        'category'   => 'HVAC Service Website',
        'short_desc' => 'SEO‑ready HVAC site built with Core PHP MVC. AI chatbot, booking form, Leaflet maps, admin panel.',
        'tech_stack' => ['PHP','Custom MVC','JavaScript','JSON','Leaflet Maps'],
        'features'   => [
            'Dynamic service pages & city landing pages',
            'AI‑powered chatbot',
            'Online booking form (emails requests directly)',
            'Admin panel for blog & contact management',
            'Integrated Leaflet maps on location pages',
            'Fully responsive, fast, SEO optimized'
        ],
        'image'      => 'project-crossair.jpg'
    ],
    [
        'title'      => 'Leaf Legends LLC',
        'url'        => 'https://leaflegendsllc.com',
        'category'   => 'Tree Service Website',
        'short_desc' => 'Bright green, mobile‑first site for a Minnesota tree care company. Chatbot, admin panel, financing integration.',
        'tech_stack' => ['PHP','MVC','JavaScript','JSON','Chatbot API','Hearth'],
        'features'   => [
            '7 service pages + 8 location pages (SEO optimized)',
            'Interactive chatbot with deep knowledge base',
            'Admin dashboard for blog (image upload) & form entries',
            'Financing integration with Hearth QR code',
            'Custom PHP MVC routing',
            'Responsive down to 370px viewport'
        ],
        'image'      => 'project-leaf-legends.jpg'
    ],
    // (If Kahrabai Sabbak, Safewelders, etc. are also real, you can add them here with correct details)
];