<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cup & Qissa | Artisan Coffee & Stories</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .page-content {
            display: none;
        }

        .page-content.active {
            display: block;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-dark: #2C1810;
            --primary-brown: #8B4513;
            --accent-gold: #D4AF37;
            --accent-teal: #2A9D8F;
            --light-cream: #FFF8F0;
            --light-gray: #F5F5F5;
            --medium-gray: #E0D6CC;
            --dark-gray: #6B4F3B;
            --white: #FFFFFF;
            --black: #000000;
            --coffee-dark: #3E2723;
            --coffee-light: #A1887F;
            --story-blue: #457B9D;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            color: var(--primary-dark);
            line-height: 1.6;
            overflow-x: hidden;
            background-color: var(--light-cream);
        }

        h1, h2, h3, h4, h5 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
        }

        .container {
            width: 100%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section {
            padding: 100px 0;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 32px;
            background-color: var(--accent-teal);
            color: var(--white);
            border-radius: 30px;
            font-weight: 600;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            gap: 8px;
        }

        .btn:hover {
            background-color: var(--primary-brown);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .btn-gold {
            background-color: var(--accent-gold);
            color: var(--primary-dark);
        }

        .btn-gold:hover {
            background-color: var(--primary-brown);
            color: var(--white);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--accent-teal);
            color: var(--accent-teal);
        }

        .btn-outline:hover {
            background-color: var(--accent-teal);
            color: var(--white);
        }

        .btn-heart {
            background-color: var(--accent-gold);
            color: var(--primary-dark);
            padding: 12px 24px;
        }

        .btn-heart:hover {
            background-color: #B8941F;
            color: var(--white);
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 42px;
            color: var(--primary-brown);
            margin-bottom: 15px;
            font-weight: 700;
            line-height: 1.2;
        }

        .section-header p {
            color: var(--dark-gray);
            max-width: 700px;
            margin: 0 auto;
            font-size: 18px;
        }

        /* Header Styles */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(255, 248, 240, 0.95);
            z-index: 1000;
            padding: 20px 0;
            transition: all 0.3s ease;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
        }

        header.scrolled {
            padding: 15px 0;
            background-color: rgba(255, 248, 240, 0.98);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            font-weight: 700;
            color: var(--primary-brown);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .logo span {
            color: var(--accent-teal);
        }

        .logo .ampersand {
            color: var(--accent-gold);
            font-style: italic;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 35px;
        }

        nav a {
            color: var(--primary-dark);
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            transition: color 0.3s;
            position: relative;
            padding: 5px 0;
            white-space: nowrap;
        }

        nav a:hover, nav a.active {
            color: var(--accent-teal);
        }

        nav a.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--accent-teal);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-icon, .favorites-icon {
            position: relative;
            color: var(--primary-dark);
            font-size: 20px;
            cursor: pointer;
            padding: 5px;
        }

        .favorites-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: var(--accent-teal);
            color: var(--white);
            font-size: 11px;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

.nav-favorites-btn {
    display: flex;
    align-items: center;
    gap: 6px;
    background-color: var(--accent-gold);
    color: var(--primary-dark);
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
    font-size: 14px;
    position: relative;
    margin-left: 10px;
    white-space: nowrap;
}

.nav-favorites-btn:hover {
    background-color: #B8941F;
    color: var(--white);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.nav-favorites-btn .favorites-count-nav {
    position: absolute;
    top: -6px;
    right: -6px;
    background-color: var(--accent-teal);
    color: var(--white);
    font-size: 10px;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
}
        .menu-toggle {
            display: none;
            color: var(--primary-dark);
            font-size: 24px;
            cursor: pointer;
            background: none;
            border: none;
        }

        /* Navigation Controls */
        .nav-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid var(--medium-gray);
        }

        .nav-controls a {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--accent-teal);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .nav-controls a:hover {
            color: var(--primary-brown);
            transform: translateX(5px);
        }

        .page-links {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
            justify-content: center;
            margin: 40px 0;
        }

        .page-link-card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            flex: 1;
            min-width: 200px;
            max-width: 250px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 2px solid transparent;
            cursor: pointer;
        }

        .page-link-card:hover {
            transform: translateY(-10px);
            border-color: var(--accent-teal);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .page-link-card i {
            font-size: 36px;
            color: var(--accent-teal);
            margin-bottom: 15px;
        }

        .page-link-card h4 {
            color: var(--primary-brown);
            margin-bottom: 10px;
        }

        .page-link-card p {
            color: var(--dark-gray);
            font-size: 14px;
            margin-bottom: 15px;
        }

        .back-home {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--accent-teal);
            text-decoration: none;
            font-weight: 500;
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }

        .back-home:hover {
            color: var(--primary-brown);
            transform: translateX(-5px);
        }

        .explore-more {
            background: linear-gradient(135deg, rgba(42, 157, 143, 0.05), rgba(212, 175, 55, 0.05));
            padding: 60px 0;
            border-radius: 20px;
            margin: 80px 0;
        }

        .hero {
            padding-top: 180px;
            padding-bottom: 120px;
            background: 
                linear-gradient(rgba(44, 24, 16, 0.7), rgba(44, 24, 16, 0.5)),
                url('https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1478&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 50%, rgba(212, 175, 55, 0.2) 0%, transparent 50%);
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            text-align: center;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 72px;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 20px;
            line-height: 1.1;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero h1 span {
            color: var(--accent-gold);
        }

        .hero p {
            font-size: 20px;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 40px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-btns {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 40px;
            flex-wrap: wrap;
        }

        .hero-stats {
            display: flex;
            gap: 40px;
            margin-top: 80px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 20px 30px;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .stat-number {
            font-size: 40px;
            font-weight: 700;
            color: var(--accent-gold);
            line-height: 1;
        }

        .stat-label {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.9);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 5px;
        }

        .featured {
            background: linear-gradient(135deg, var(--light-cream) 0%, #F8F1E5 100%);
            position: relative;
        }

        .featured::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 100px;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none"><path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="%23FFF8F0"/></svg>');
            background-size: 1200px 100px;
            transform: rotate(180deg);
        }

        .featured-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .featured-item {
            background-color: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            position: relative;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .featured-item:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .featured-img {
            height: 250px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .featured-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }

        .featured-item:hover .featured-img img {
            transform: scale(1.1);
        }

        .featured-content {
            padding: 30px;
            position: relative;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .featured-badge {
            position: absolute;
            top: -15px;
            right: 20px;
            background-color: var(--accent-teal);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .featured-content h3 {
            font-size: 22px;
            color: var(--primary-brown);
            margin-bottom: 15px;
        }

        .featured-content p {
            color: var(--dark-gray);
            margin-bottom: 20px;
            font-size: 15px;
            line-height: 1.7;
            flex-grow: 1;
        }

        .featured-footer {
            margin-top: auto;
            padding-top: 20px;
            border-top: 1px solid var(--medium-gray);
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .featured-price {
            font-size: 24px;
            font-weight: 700;
            color: var(--accent-teal);
            white-space: nowrap;
        }

        .menu-preview {
            background-color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .menu-preview::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(139, 69, 19, 0.03) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(42, 157, 143, 0.03) 0%, transparent 20%);
            pointer-events: none;
        }

        .preview-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .about-preview {
            background: linear-gradient(135deg, #E8F4F3 0%, var(--light-cream) 100%);
            position: relative;
            overflow: hidden;
        }

        .about-preview::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            opacity: 0.08;
            pointer-events: none;
        }

        .about-preview-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        @media (max-width: 992px) {
            .about-preview-content {
                grid-template-columns: 1fr;
                gap: 50px;
            }
            
            .about-preview-img {
                order: -1;
            }
        }

        .about-preview-img {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .about-preview-img img {
            width: 100%;
            height: auto;
            display: block;
        }

        .testimonials-preview {
            background-color: var(--light-cream);
            position: relative;
        }

        .testimonials-preview::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none"><path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="%23FFF8F0"/></svg>');
            background-size: 1200px 100px;
        }

        .testimonial-preview {
            background-color: var(--white);
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
            border: 2px solid var(--accent-teal);
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .testimonial-preview::before {
            content: '"';
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 100px;
            color: var(--accent-teal);
            opacity: 0.2;
            font-family: 'Playfair Display', serif;
        }

        .testimonial-content {
            font-size: 18px;
            color: var(--dark-gray);
            font-style: italic;
            margin-bottom: 30px;
            line-height: 1.8;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .author-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid var(--accent-teal);
        }

        .author-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-info h4 {
            font-size: 18px;
            color: var(--primary-brown);
            margin-bottom: 5px;
        }

        .author-info p {
            font-size: 14px;
            color: var(--dark-gray);
        }

        .menu-page {
            padding-top: 180px;
            padding-bottom: 100px;
            background: linear-gradient(135deg, #F8F1E5 0%, var(--light-cream) 100%);
            min-height: 100vh;
            position: relative;
        }

        .menu-category {
            margin-bottom: 80px;
        }

        .menu-category h3 {
            font-size: 32px;
            color: var(--primary-brown);
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 3px solid var(--accent-gold);
            display: inline-block;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        @media (max-width: 768px) {
            .menu-grid {
                grid-template-columns: 1fr;
            }
        }

        .menu-item {
            display: flex;
            flex-direction: column;
            height: 100%;
            padding: 25px;
            border-radius: 15px;
            transition: all 0.3s ease;
            border: 1px solid transparent;
            background-color: var(--white);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .menu-item:hover {
            border-color: var(--accent-teal);
            box-shadow: 0 20px 40px rgba(42, 157, 143, 0.1);
            transform: translateY(-5px);
        }

        .menu-item-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .menu-item-img {
            width: 100%;
            height: 200px;
            border-radius: 12px;
            overflow: hidden;
            border: 3px solid var(--accent-teal);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            flex-shrink: 0;
        }

        .menu-item-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .menu-item:hover .menu-item-img img {
            transform: scale(1.1);
        }

        .menu-item-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 10px;
        }

        .menu-item-title {
            font-size: 20px;
            color: var(--primary-brown);
            font-weight: 600;
            flex: 1;
        }

        .menu-item-desc {
            color: var(--dark-gray);
            margin-bottom: 20px;
            font-size: 15px;
            line-height: 1.6;
            flex-grow: 1;
        }

        .menu-item-tags {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .tag {
            font-size: 12px;
            padding: 4px 12px;
            border-radius: 20px;
            background-color: var(--accent-teal);
            color: var(--white);
            font-weight: 500;
        }

        .tag.gold {
            background-color: var(--accent-gold);
            color: var(--primary-dark);
        }

        .menu-item-footer {
            margin-top: auto;
            padding-top: 15px;
            border-top: 1px solid var(--medium-gray);
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .menu-item-price-footer {
            font-size: 22px;
            font-weight: 700;
            color: var(--accent-teal);
            white-space: nowrap;
        }

        .about-page {
            padding-top: 180px;
            padding-bottom: 100px;
            background: linear-gradient(135deg, #E8F4F3 0%, var(--light-cream) 100%);
            min-height: 100vh;
            position: relative;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            margin-bottom: 80px;
        }

        @media (max-width: 992px) {
            .about-content {
                grid-template-columns: 1fr;
                gap: 50px;
            }
        }

        .about-img {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .about-img img {
            width: 100%;
            height: auto;
            display: block;
        }

        .about-text h2 {
            font-size: 42px;
            color: var(--primary-brown);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .about-text p {
            color: var(--dark-gray);
            margin-bottom: 25px;
            font-size: 17px;
            line-height: 1.8;
        }

        .about-features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            margin-top: 40px;
        }

        @media (max-width: 768px) {
            .about-features {
                grid-template-columns: 1fr;
            }
        }

        .feature {
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--accent-teal), var(--story-blue));
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 24px;
            flex-shrink: 0;
            box-shadow: 0 8px 20px rgba(42, 157, 143, 0.3);
        }

        .feature-text h4 {
            font-size: 18px;
            color: var(--primary-brown);
            margin-bottom: 8px;
        }

        .feature-text p {
            font-size: 14px;
            color: var(--dark-gray);
            margin-bottom: 0;
        }

        .stories-page {
            padding-top: 180px;
            padding-bottom: 100px;
            background: linear-gradient(135deg, #F8F1E5 0%, var(--light-cream) 100%);
            min-height: 100vh;
            position: relative;
        }

        .stories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 40px;
        }

        .story-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .story-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .story-img {
            height: 250px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .story-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }

        .story-card:hover .story-img img {
            transform: scale(1.1);
        }

        .story-content {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .story-content h3 {
            font-size: 22px;
            color: var(--primary-brown);
            margin-bottom: 15px;
        }

        .story-content p {
            color: var(--dark-gray);
            margin-bottom: 20px;
            line-height: 1.7;
            flex-grow: 1;
        }

        .story-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid var(--light-cream);
        }

        .story-author {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .story-author-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            flex-shrink: 0;
        }

        .story-author-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .story-author-info h4 {
            font-size: 14px;
            color: var(--primary-brown);
            margin-bottom: 2px;
        }

        .story-author-info p {
            font-size: 12px;
            color: var(--dark-gray);
            margin-bottom: 0;
        }

        .story-date {
            font-size: 12px;
            color: var(--dark-gray);
            white-space: nowrap;
        }

        .reservation-page {
            padding-top: 180px;
            padding-bottom: 100px;
            background: linear-gradient(135deg, #F8F1E5 0%, var(--light-cream) 100%);
            min-height: 100vh;
            position: relative;
        }

        .reservation-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .reservation-header {
            background: linear-gradient(135deg, var(--accent-teal), var(--story-blue));
            padding: 40px;
            text-align: center;
            color: white;
        }

        .reservation-header h2 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .reservation-form-container {
            padding: 40px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        @media (max-width: 576px) {
            .form-row {
                grid-template-columns: 1fr;
            }
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--primary-brown);
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 15px;
            border: 1px solid var(--medium-gray);
            border-radius: 8px;
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            transition: all 0.3s;
            background: var(--white);
            color: var(--primary-dark);
        }

        .form-control::placeholder {
            color: var(--dark-gray);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent-teal);
            box-shadow: 0 0 0 3px rgba(42, 157, 143, 0.1);
        }

        .contact-page {
            padding-top: 180px;
            padding-bottom: 100px;
            background: linear-gradient(135deg, #F8F1E5 0%, var(--light-cream) 100%);
            min-height: 100vh;
            position: relative;
        }

        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
        }

        @media (max-width: 992px) {
            .contact-content {
                grid-template-columns: 1fr;
                gap: 50px;
            }
        }

        .contact-info h3 {
            font-size: 28px;
            color: var(--primary-brown);
            margin-bottom: 30px;
        }

        .contact-details {
            margin-bottom: 40px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 25px;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--accent-teal), var(--story-blue));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 20px;
            flex-shrink: 0;
            box-shadow: 0 8px 20px rgba(42, 157, 143, 0.3);
        }

        .contact-text h4 {
            font-size: 18px;
            color: var(--primary-brown);
            margin-bottom: 5px;
        }

        .contact-text p {
            color: var(--dark-gray);
            font-size: 15px;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background-color: var(--light-cream);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-brown);
            text-decoration: none;
            transition: all 0.3s;
            font-size: 18px;
        }

        .social-link:hover {
            background: linear-gradient(135deg, var(--accent-teal), var(--story-blue));
            color: var(--white);
            transform: translateY(-5px) rotate(5deg);
        }

        .contact-form {
            background-color: var(--light-cream);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
        }

        .contact-form h3 {
            font-size: 28px;
            color: var(--primary-brown);
            margin-bottom: 30px;
        }

        .contact-form .form-control:focus {
            border-color: var(--accent-teal);
            box-shadow: 0 0 0 3px rgba(42, 157, 143, 0.1);
        }

        footer {
            background: linear-gradient(135deg, var(--primary-dark), #1A0F0A);
            color: var(--white);
            padding: 80px 0 30px;
            position: relative;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--accent-gold), var(--accent-teal));
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 50px;
            margin-bottom: 50px;
        }

        @media (max-width: 1200px) {
            .footer-content {
                grid-template-columns: 2fr 1fr 1fr;
            }
        }

        @media (max-width: 768px) {
            .footer-content {
                grid-template-columns: 1fr 1fr;
                gap: 40px;
            }
        }

        @media (max-width: 576px) {
            .footer-content {
                grid-template-columns: 1fr;
            }
        }

        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 20px;
            display: block;
        }

        .footer-logo span {
            color: var(--accent-teal);
        }

        .footer-logo .ampersand {
            color: var(--accent-gold);
            font-style: italic;
        }

        .footer-about p {
            color: #bbb;
            margin-bottom: 30px;
            font-size: 15px;
            line-height: 1.7;
        }

        .footer-column h4 {
            font-size: 18px;
            color: var(--white);
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h4::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 2px;
            background: linear-gradient(90deg, var(--accent-teal), transparent);
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #bbb;
            transition: color 0.3s;
            text-decoration: none;
        }

        .footer-links a:hover {
            color: var(--accent-gold);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #444;
            color: #999;
            font-size: 14px;
        }

        .page-header {
            background: 
                linear-gradient(rgba(44, 24, 16, 0.8), rgba(44, 24, 16, 0.8)),
                url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            padding: 160px 0 80px;
            text-align: center;
            color: var(--white);
            margin-top: 80px;
            position: relative;
        }

        .page-header h1 {
            font-size: 56px;
            color: var(--white);
            margin-bottom: 15px;
            font-weight: 700;
        }

        .page-header p {
            color: rgba(255, 255, 255, 0.9);
            max-width: 700px;
            margin: 0 auto;
            font-size: 18px;
        }

        .favorites-page {
            padding-top: 180px;
            padding-bottom: 100px;
            background: linear-gradient(135deg, #F8F1E5 0%, var(--light-cream) 100%);
            min-height: 100vh;
            position: relative;
        }

        .favorites-container {
            max-width: 1000px;
            margin: 0 auto;
        }

        .favorites-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .favorites-header h2 {
            font-size: 42px;
            color: var(--primary-brown);
            margin-bottom: 15px;
        }

        .favorites-header p {
            color: var(--dark-gray);
            max-width: 600px;
            margin: 0 auto;
        }

        .favorites-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .favorite-item {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .favorite-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .favorite-item-img {
            height: 200px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .favorite-item-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .favorite-item-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .favorite-item-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .favorite-item-title {
            font-size: 20px;
            color: var(--primary-brown);
            font-weight: 600;
        }

        .favorite-item-price {
            font-size: 20px;
            color: var(--accent-teal);
            font-weight: 700;
        }

        .favorite-item-desc {
            color: var(--dark-gray);
            margin-bottom: 20px;
            font-size: 14px;
            line-height: 1.6;
            flex-grow: 1;
        }

        .favorites-empty {
            text-align: center;
            padding: 60px 20px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .favorites-empty i {
            font-size: 80px;
            color: var(--medium-gray);
            margin-bottom: 30px;
        }

        .favorites-empty h3 {
            font-size: 28px;
            color: var(--primary-brown);
            margin-bottom: 15px;
        }

        .favorites-empty p {
            color: var(--dark-gray);
            max-width: 500px;
            margin: 0 auto 30px;
        }

        @media (max-width: 1200px) {
            .hero h1 {
                font-size: 56px;
            }
            
            .featured-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            nav ul {
                gap: 25px;
            }
            
            .page-link-card {
                min-width: 180px;
            }
        }

        @media (max-width: 992px) {
            .hero h1 {
                font-size: 48px;
            }
            
            .hero p {
                font-size: 18px;
            }
            
            .contact-content {
                grid-template-columns: 1fr;
                gap: 50px;
            }
            
            nav ul {
                gap: 20px;
            }
            
            .page-links {
                gap: 20px;
            }
            
            .page-link-card {
                min-width: 160px;
                padding: 20px;
            }
        }

        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }

            nav {
                position: fixed;
                top: 80px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 80px);
                background-color: var(--light-cream);
                transition: left 0.3s ease;
                padding: 40px 30px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                overflow-y: auto;
                z-index: 1001;
            }

            nav.active {
                left: 0;
            }

            nav ul {
                flex-direction: column;
                gap: 25px;
            }

            .nav-favorites-btn {
                margin-top: 20px;
                justify-content: center;
                width: 100%;
            }

            .hero {
                padding-top: 140px;
                padding-bottom: 80px;
                background-attachment: scroll;
            }

            .hero h1 {
                font-size: 40px;
            }

            .hero p {
                font-size: 16px;
            }

            .hero-btns {
                flex-direction: column;
                align-items: center;
            }

            .hero-btns .btn {
                width: 100%;
                max-width: 300px;
            }

            .hero-stats {
                gap: 20px;
            }

            .stat-item {
                padding: 15px 20px;
            }

            .featured-grid {
                grid-template-columns: 1fr;
            }

            .section-header h2 {
                font-size: 36px;
            }
            
            .page-header h1 {
                font-size: 42px;
            }
            
            .reservation-form-container {
                padding: 30px 20px;
            }
            
            .menu-page, .about-page, .stories-page, .reservation-page, .contact-page, .favorites-page {
                padding-top: 140px;
                padding-bottom: 80px;
            }
            
            .page-links {
                flex-direction: column;
                align-items: center;
            }
            
            .page-link-card {
                max-width: 100%;
                width: 100%;
            }
            
            .nav-controls {
                flex-direction: column;
                gap: 20px;
                align-items: flex-start;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 32px;
            }

            .hero-stats .stat-number {
                font-size: 32px;
            }

            .section-header h2 {
                font-size: 28px;
            }

            .contact-form {
                padding: 30px 20px;
            }
            
            .page-header h1 {
                font-size: 36px;
            }
            
            .page-header {
                padding: 140px 0 60px;
            }
            
            .menu-item-footer {
                flex-direction: column;
                align-items: stretch;
                gap: 10px;
            }
            
            .menu-item-footer .btn {
                width: 100%;
            }
            
            .featured-footer {
                flex-direction: column;
                align-items: stretch;
                gap: 10px;
            }
            
            .featured-footer .btn {
                width: 100%;
            }
            
            .page-link-card i {
                font-size: 28px;
            }
        }

        .fade-in {
            animation: fadeIn 1s ease;
        }

        .slide-up {
            animation: slideUp 0.8s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }

        .coffee-bean {
            position: absolute;
            width: 40px;
            height: 60px;
            background: var(--primary-brown);
            border-radius: 50%;
            opacity: 0.1;
            z-index: 0;
            pointer-events: none;
        }

        .heart-btn {
            background: none;
            border: none;
            color: var(--accent-gold);
            font-size: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            padding: 5px;
        }

        .heart-btn:hover {
            color: #B8941F;
            transform: scale(1.2);
        }

        .heart-btn.active {
            color: #B8941F;
            animation: heartBeat 0.5s;
        }

        @keyframes heartBeat {
            0% { transform: scale(1); }
            50% { transform: scale(1.3); }
            100% { transform: scale(1); }
        }

        .floating-favorites {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 999;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .floating-favorites .btn {
            padding: 20px 30px;
            border-radius: 50px;
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.3);
            font-size: 18px;
            display: flex;
            align-items: center;
            gap: 10px;
            background: var(--accent-gold);
            color: var(--primary-dark);
            font-weight: 700;
        }

        .floating-favorites .btn:hover {
            background: #B8941F;
            color: var(--white);
            transform: translateY(-3px) scale(1.05);
        }

        @media (max-width: 768px) {
            .floating-favorites {
                bottom: 20px;
                right: 20px;
            }
            
            .floating-favorites .btn {
                padding: 15px 25px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container header-container">
            <a href="#home" class="logo" onclick="showPage('home')">
                <i class="fas fa-mug-hot"></i>
                Cup <span class="ampersand">&</span> Qissa<span>.</span>
            </a>
            
            <button class="menu-toggle" id="menuToggle">
                <i class="fas fa-bars"></i>
            </button>
            
            <nav id="mainNav">
    <ul>
        <li><a href="#home" class="active" onclick="showPage('home')">Home</a></li>
        <li><a href="#menu" onclick="showPage('menu')">Menu</a></li>
        <li><a href="#about" onclick="showPage('about')">About Us</a></li>
        <li><a href="#stories" onclick="showPage('stories')">Stories</a></li>
        <li><a href="#reservation" onclick="showPage('reservation')">Reserve</a></li>
        <li><a href="#contact" onclick="showPage('contact')">Contact</a></li>
    </ul>
</nav>

<div class="header-actions">
    <a href="#favorites" class="nav-favorites-btn" onclick="showPage('favorites')">
        <i class="fas fa-heart"></i>
        Favorites
        <span class="favorites-count-nav">0</span>
    </a>
    <div class="user-icon" id="userIcon">
        <i class="fas fa-user"></i>
    </div>
    <div class="favorites-icon" id="favoritesIcon" onclick="showPage('favorites')">
        <i class="fas fa-heart"></i>
        <span class="favorites-count">0</span>
    </div>
</div>
    </header>

    <!-- Floating Favorites Button -->
    <div class="floating-favorites">
        <a href="#favorites" class="btn floating" onclick="showPage('favorites')">
            <i class="fas fa-heart"></i>
            <span class="favorites-text">Favorites</span>
        </a>
    </div>

    <!-- Home Page -->
    <main id="homePage" class="page-content active">
        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-content fade-in">
                    <h1>Where Coffee Meets <span>Story</span></h1>
                    <p>Discover the perfect blend of artisan coffee and heartwarming stories at Cup & Qissa. Every cup tells a tale, every sip creates memories.</p>
                    <div class="hero-btns">
                        <a href="#menu" class="btn" onclick="showPage('menu')">
                            <i class="fas fa-coffee"></i>
                            Explore Menu
                        </a>
                        <a href="#reservation" class="btn btn-outline" onclick="showPage('reservation')">
                            <i class="fas fa-calendar-check"></i>
                            Reserve Table
                        </a>
                    </div>
                    
                    <div class="hero-stats slide-up">
                        <div class="stat-item">
                            <div class="stat-number">50+</div>
                            <div class="stat-label">Coffee Blends</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">1000+</div>
                            <div class="stat-label">Stories Shared</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">24</div>
                            <div class="stat-label">Artisan Awards</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Products Preview -->
        <section class="featured">
            <div class="container">
                <div class="section-header">
                    <h2>Signature Creations</h2>
                    <p>Handcrafted with passion and precision, our signature drinks are more than coffee—they're experiences.</p>
                </div>
                
                <div class="featured-grid" id="featuredItems">
                </div>
            </div>
        </section>

        <!-- Menu Preview -->
        <section class="menu-preview">
            <div class="container">
                <div class="section-header">
                    <h2>Menu Preview</h2>
                    <p>A glimpse of our artisan selection. Explore our full menu for the complete experience.</p>
                </div>
                
                <div class="preview-grid" id="menuPreview">
                </div>
                
                <div style="text-align: center; margin-top: 40px;">
                    <a href="#menu" class="btn" onclick="showPage('menu')">
                        <i class="fas fa-book-open"></i>
                        View Full Menu
                    </a>
                </div>
            </div>
        </section>

        <!-- About Preview -->
        <section class="about-preview">
            <div class="container">
                <div class="section-header">
                    <h2>Our Story</h2>
                    <p>Discover the journey behind Cup & Qissa and our passion for coffee and stories.</p>
                </div>
                
                <div class="about-preview-content">
                    <div class="about-preview-img">
                        <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" alt="Cup & Qissa Coffee Shop Interior">
                    </div>
                    
                    <div class="about-text">
                        <h3>A Haven for Coffee Lovers & Storytellers</h3>
                        <p>Founded in 2015, Cup & Qissa began as a small corner cafe with a big dream: to create a space where exceptional coffee meets meaningful conversation.</p>
                        <p>Today, we're proud to be a community hub where people connect, create, and share stories over perfectly crafted coffee.</p>
                        
                        <div class="about-features" style="margin-top: 30px;">
                            <div class="feature">
                                <div class="feature-icon">
                                    <i class="fas fa-seedling"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Ethical Sourcing</h4>
                                    <p>Direct trade with sustainable farms.</p>
                                </div>
                            </div>
                            <div class="feature">
                                <div class="feature-icon">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Award Winning</h4>
                                    <p>Recognized for coffee excellence.</p>
                                </div>
                            </div>
                        </div>
                        
                        <a href="#about" class="btn" onclick="showPage('about')" style="margin-top: 30px;">
                            <i class="fas fa-history"></i>
                            Our Full Story
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Preview -->
        <section class="testimonials-preview">
            <div class="container">
                <div class="section-header">
                    <h2>Community Stories</h2>
                    <p>Hear what our community has to say about their Cup & Qissa experience.</p>
                </div>
                
                <div class="testimonial-preview">
                    <div class="testimonial-content">
                        "Cup & Qissa isn't just a coffee shop—it's where I wrote my first novel. The ambiance, the coffee, and the stories shared here fueled my creativity like nothing else."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Sarah Johnson">
                        </div>
                        <div class="author-info">
                            <h4>Sarah Johnson</h4>
                            <p>Author & Regular Visitor</p>
                        </div>
                    </div>
                </div>
                
                <div style="text-align: center; margin-top: 60px;">
                    <a href="#stories" class="btn btn-outline" onclick="showPage('stories')">
                        <i class="fas fa-book"></i>
                        Read More Stories
                    </a>
                </div>
            </div>
        </section>

        <!-- Explore More Section -->
        <section class="explore-more">
            <div class="container">
                <div class="section-header">
                    <h2>Explore More</h2>
                    <p>Discover all aspects of Cup & Qissa</p>
                </div>
                
                <div class="page-links">
                    <div class="page-link-card" onclick="showPage('menu')">
                        <i class="fas fa-coffee"></i>
                        <h4>Full Menu</h4>
                        <p>Browse our complete selection of artisan coffees, teas and pastries</p>
                        <a href="#menu" class="btn" style="padding: 10px 20px; font-size: 14px;">View Menu</a>
                    </div>
                    
                    <div class="page-link-card" onclick="showPage('about')">
                        <i class="fas fa-history"></i>
                        <h4>Our Story</h4>
                        <p>Learn about our journey and philosophy behind Cup & Qissa</p>
                        <a href="#about" class="btn" style="padding: 10px 20px; font-size: 14px;">Our Story</a>
                    </div>
                    
                    <div class="page-link-card" onclick="showPage('stories')">
                        <i class="fas fa-book-open"></i>
                        <h4>Community Stories</h4>
                        <p>Read inspiring stories from our community members</p>
                        <a href="#stories" class="btn" style="padding: 10px 20px; font-size: 14px;">Read Stories</a>
                    </div>
                    
                    <div class="page-link-card" onclick="showPage('contact')">
                        <i class="fas fa-comments"></i>
                        <h4>Contact Us</h4>
                        <p>Share your story, ask questions, or book a private event</p>
                        <a href="#contact" class="btn" style="padding: 10px 20px; font-size: 14px;">Get in Touch</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Menu Page -->
    <main id="menuPage" class="page-content">
        <div class="page-header">
            <div class="container">
                <h1>Our Complete Menu</h1>
                <p>Explore our full selection of artisan coffees, teas, and delicious pastries. Each item tells a story.</p>
            </div>
        </div>
        
        <section class="menu-page">
            <div class="container">
                <a href="#home" class="back-home" onclick="showPage('home')">
                    <i class="fas fa-arrow-left"></i> Back to Home
                </a>
                
                <!-- Coffee Category -->
                <div class="menu-category">
                    <h3>Coffee & Espresso</h3>
                    <div class="menu-grid" id="coffeeMenu">
                        <!-- Coffee items loaded by JavaScript -->
                    </div>
                </div>
                
                <!-- Tea Category -->
                <div class="menu-category">
                    <h3>Tea & Infusions</h3>
                    <div class="menu-grid" id="teaMenu">
                        <!-- Tea items loaded by JavaScript -->
                    </div>
                </div>
                
                <!-- Pastries Category -->
                <div class="menu-category">
                    <h3>Pastries & Desserts</h3>
                    <div class="menu-grid" id="pastryMenu">
                        <!-- Pastry items loaded by JavaScript -->
                    </div>
                </div>
                
                <!-- Navigation Controls -->
                <div class="nav-controls">
                    <a href="#favorites" onclick="showPage('favorites')">
                        <i class="fas fa-heart"></i> View My Favorites
                    </a>
                    <a href="#reservation" onclick="showPage('reservation')">
                        Reserve a Table <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- About Us Page -->
    <main id="aboutPage" class="page-content">
        <div class="page-header">
            <div class="container">
                <h1>Our Story</h1>
                <p>The journey of Cup & Qissa - where every cup has a story to tell</p>
            </div>
        </div>
        
        <section class="about-page">
            <div class="container">
                <!-- Back to Home Link -->
                <a href="#home" class="back-home" onclick="showPage('home')">
                    <i class="fas fa-arrow-left"></i> Back to Home
                </a>
                
                <div class="about-content">
                    <div class="about-img">
                        <img src="https://images.unsplash.com/photo-1442512595331-e89e73853f31?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" alt="Cup & Qissa Founders">
                    </div>
                    
                    <div class="about-text">
                        <h2>Our Beginning</h2>
                        <p>In 2015, two sisters - Tehseen, a barista with a passion for perfect espresso, and Maheen, a writer who believed in the power of stories - decided to create something special. They envisioned a space where coffee wasn't just a drink, but a catalyst for connection.</p>
                        <p>Starting with a small 500-square-foot space in Brooklyn, they served coffee by day and hosted storytelling nights by evening. What began as a neighborhood cafe quickly grew into a community institution.</p>
                        
                        <h3 style="margin-top: 40px; margin-bottom: 20px;">Our Philosophy</h3>
                        <p>We believe that every coffee bean has a journey - from the farmer who nurtured it to the roaster who unlocked its flavors. Similarly, every person who walks through our doors has a story to share.</p>
                        <p>Our baristas are not just coffee makers; they're storytellers who can tell you about the origin of your Ethiopian Yirgacheffe or the history of the V60 pour-over method.</p>
                        
                        <div class="about-features" style="margin-top: 40px;">
                            <div class="feature">
                                <div class="feature-icon">
                                    <i class="fas fa-leaf"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Sustainability</h4>
                                    <p>We source directly from farmers practicing sustainable agriculture.</p>
                                </div>
                            </div>
                            <div class="feature">
                                <div class="feature-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Community</h4>
                                    <p>Weekly events that bring people together over coffee and stories.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="about-content" style="margin-top: 100px;">
                    <div class="about-text">
                        <h2>The Qissa Experience</h2>
                        <p>"Qissa" means story in several languages, and that's exactly what we offer - an experience filled with narrative. From the handwritten notes on our seasonal menu to the community story wall where customers share their experiences, every detail tells a story.</p>
                        <p>We host monthly storytelling nights, writer's workshops, and coffee education sessions. Our shelves are filled with books that customers can borrow, and our walls feature rotating art from local artists.</p>
                        
                        <h3 style="margin-top: 40px; margin-bottom: 20px;">Our Team</h3>
                        <p>Our team of 15 passionate individuals includes award-winning baristas, trained storytellers, and community organizers. Each team member undergoes extensive coffee training as well as communication workshops to ensure every interaction is meaningful.</p>
                    </div>
                    
                    <div class="about-img">
                        <img src="https://images.unsplash.com/photo-1559925393-8be0ec4767c8?ixlib=rb-4.0.3&auto=format&fit=crop&w=1471&q=80" alt="Cup & Qissa Team">
                    </div>
                </div>
                
                <!-- Navigation Controls -->
                <div class="nav-controls">
                    <a href="#stories" onclick="showPage('stories')">
                        <i class="fas fa-book-open"></i> Read Community Stories
                    </a>
                    <a href="#contact" onclick="showPage('contact')">
                        Visit Us <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Stories Page  -->
    <main id="storiesPage" class="page-content">
        <div class="page-header">
            <div class="container">
                <h1>Community Stories</h1>
                <p>Real stories from real people who found inspiration, connection, and joy at Cup & Qissa</p>
            </div>
        </div>
        
        <section class="stories-page">
            <div class="container">
                <!-- Back to Home Link -->
                <a href="#home" class="back-home" onclick="showPage('home')">
                    <i class="fas fa-arrow-left"></i> Back to Home
                </a>
                
                <div class="stories-grid" id="storiesGrid">
                    <!-- Stories loaded by JavaScript -->
                </div>
                
                <!-- Navigation Controls -->
                <div class="nav-controls">
                    <a href="#about" onclick="showPage('about')">
                        <i class="fas fa-history"></i> Learn About Us
                    </a>
                    <a href="#contact" onclick="showPage('contact')">
                        Share Your Story <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Reservation Page  -->
    <main id="reservationPage" class="page-content">
        <div class="page-header">
            <div class="container">
                <h1>Reserve Your Table</h1>
                <p>Book your spot at our story-filled tables. Perfect for dates, meetings, or solo coffee adventures.</p>
            </div>
        </div>
        
        <section class="reservation-page">
            <div class="container">
                <!-- Back to Home Link -->
                <a href="#home" class="back-home" onclick="showPage('home')">
                    <i class="fas fa-arrow-left"></i> Back to Home
                </a>
                
                <div class="reservation-container slide-up">
                    <div class="reservation-header">
                        <h2>Table Reservation</h2>
                        <p>We'll prepare your table and ensure you have the perfect experience</p>
                    </div>
                    
                    <div class="reservation-form-container">
                        <form id="reservationForm">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="reserveName">Full Name *</label>
                                    <input type="text" id="reserveName" class="form-control" placeholder="Your name" required>
                                </div>
                                <div class="form-group">
                                    <label for="reserveEmail">Email Address *</label>
                                    <input type="email" id="reserveEmail" class="form-control" placeholder="your@email.com" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="reservePhone">Phone Number *</label>
                                    <input type="tel" id="reservePhone" class="form-control" placeholder="Your phone number" required>
                                </div>
                                <div class="form-group">
                                    <label for="reserveGuests">Number of Guests *</label>
                                    <select id="reserveGuests" class="form-control" required>
                                        <option value="">Select guests</option>
                                        <option value="1">1 Person</option>
                                        <option value="2">2 People</option>
                                        <option value="3">3 People</option>
                                        <option value="4">4 People</option>
                                        <option value="5">5+ People</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="reserveDate">Date *</label>
                                    <input type="date" id="reserveDate" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="reserveTime">Time *</label>
                                    <input type="time" id="reserveTime" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="reserveType">Table Preference</label>
                                <select id="reserveType" class="form-control">
                                    <option value="any">Any Available</option>
                                    <option value="window">Window Seat</option>
                                    <option value="quiet">Quiet Corner</option>
                                    <option value="outdoor">Outdoor Patio</option>
                                    <option value="large">Large Table (4+ people)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="reserveNotes">Special Requests</label>
                                <textarea id="reserveNotes" class="form-control" rows="3" placeholder="Any special requirements or occasions..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-gold" style="width: 100%; padding: 18px;">
                                <i class="fas fa-calendar-check"></i>
                                Reserve Table
                            </button>
                        </form>
                    </div>
                </div>
                
                <!-- Navigation Controls -->
                <div class="nav-controls" style="margin-top: 40px;">
                    <a href="#menu" onclick="showPage('menu')">
                        <i class="fas fa-coffee"></i> View Menu
                    </a>
                    <a href="#contact" onclick="showPage('contact')">
                        Contact Us <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Contact Page -->
    <main id="contactPage" class="page-content">
        <div class="page-header">
            <div class="container">
                <h1>Contact Us</h1>
                <p>We'd love to hear from you. Share your story, ask a question, or just say hello.</p>
            </div>
        </div>
        
        <section class="contact-page">
            <div class="container">
                <!-- Back to Home Link -->
                <a href="#home" class="back-home" onclick="showPage('home')">
                    <i class="fas fa-arrow-left"></i> Back to Home
                </a>
                
                <div class="contact-content">
                    <div class="contact-info">
                        <h3>Visit Our Story Haven</h3>
                        <div class="contact-details">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Our Location</h4>
                                    <p>123 Story Street, Coffee District<br>New York, NY 10001</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Opening Hours</h4>
                                    <p>Monday - Friday: 7:00 AM - 10:00 PM<br>Saturday - Sunday: 8:00 AM - 11:00 PM</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Contact Info</h4>
                                    <p>Phone: (555) 123-4567<br>Email: stories@cupandqissa.com</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="social-links">
                            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                    
                    <div class="contact-form">
                        <h3>Share Your Story</h3>
                        <form id="contactForm">
                            <div class="form-group">
                                <label for="name">Your Name *</label>
                                <input type="text" id="name" class="form-control" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" class="form-control" placeholder="What is this regarding?">
                            </div>
                            <div class="form-group">
                                <label for="message">Your Message *</label>
                                <textarea id="message" class="form-control" rows="5" placeholder="Share your story, ask a question, or give feedback..." required></textarea>
                            </div>
                            <button type="submit" class="btn" style="width: 100%;">
                                <i class="fas fa-paper-plane"></i>
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
                
                <!-- Navigation Controls -->
                <div class="nav-controls" style="margin-top: 40px;">
                    <a href="#stories" onclick="showPage('stories')">
                        <i class="fas fa-book"></i> Read Stories
                    </a>
                    <a href="#reservation" onclick="showPage('reservation')">
                        Reserve a Table <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Favorites Page -->
    <main id="favoritesPage" class="page-content">
        <div class="page-header">
            <div class="container">
                <h1>My Favorites</h1>
                <p>Your personally curated collection of coffee, tea, and pastry favorites</p>
            </div>
        </div>
        
        <section class="favorites-page">
            <div class="container">
                <div class="favorites-container">
                    <!-- Back to Home Link -->
                    <a href="#home" class="back-home" onclick="showPage('home')">
                        <i class="fas fa-arrow-left"></i> Back to Home
                    </a>
                    
                    <div class="favorites-header">
                        <h2>Your Favorite Items</h2>
                        <p>All the items you've loved and saved for future visits</p>
                    </div>
                    
                    <div id="favoritesList">
                    </div>
                    
                    <div id="emptyFavorites" class="favorites-empty" style="display: none;">
                        <i class="fas fa-heart-broken"></i>
                        <h3>No favorites yet</h3>
                        <p>Start exploring our menu and click the ♥ heart icon on items you love to add them here.</p>
                        <a href="#menu" class="btn" onclick="showPage('menu')">
                            <i class="fas fa-coffee"></i>
                            Explore Menu
                        </a>
                    </div>
                    
                    <!-- Navigation Controls -->
                    <div class="nav-controls" style="margin-top: 40px;">
                        <a href="#menu" onclick="showPage('menu')">
                            <i class="fas fa-coffee"></i> Browse Full Menu
                        </a>
                        <a href="#reservation" onclick="showPage('reservation')">
                            Reserve to Enjoy <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <a href="#home" class="footer-logo" onclick="showPage('home')">
                        <i class="fas fa-mug-hot"></i>
                        Cup <span class="ampersand">&</span> Qissa<span>.</span>
                    </a>
                    <div class="footer-about">
                        <p>Where every cup tells a story. Artisan coffee, warm conversations, and unforgettable moments since 2015.</p>
                    </div>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="#home" onclick="showPage('home')">Home</a></li>
                        <li><a href="#menu" onclick="showPage('menu')">Coffee Menu</a></li>
                        <li><a href="#about" onclick="showPage('about')">Our Story</a></li>
                        <li><a href="#stories" onclick="showPage('stories')">Community Stories</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h4>Our Coffee</h4>
                    <ul class="footer-links">
                        <li><a href="#menu" onclick="showPage('menu')">Espresso Drinks</a></li>
                        <li><a href="#menu" onclick="showPage('menu')">Single Origin</a></li>
                        <li><a href="#menu" onclick="showPage('menu')">Cold Brew</a></li>
                        <li><a href="#menu" onclick="showPage('menu')">Signature Blends</a></li>
                        <li><a href="#menu" onclick="showPage('menu')">Pastries & Bites</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h4>Contact Info</h4>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt" style="margin-right: 10px;"></i> 123 Story Street, NY 10001</li>
                        <li><i class="fas fa-phone" style="margin-right: 10px;"></i> (555) 123-4567</li>
                        <li><i class="fas fa-envelope" style="margin-right: 10px;"></i> stories@cupandqissa.com</li>
                        <li><i class="fas fa-clock" style="margin-right: 10px;"></i> Mon-Fri: 7AM-10PM</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 Cup & Qissa. All Rights Reserved. | Crafted with <i class="fas fa-heart" style="color: var(--accent-gold);"></i> and endless stories</p>
            </div>
        </div>
    </footer>

    <script>
        // Complete Menu Data
const menuData = {
    featured: [
        { id: 1, name: "Storyteller's Blend", category: "signature", price: 7.50, description: "Our house special blend with notes of dark chocolate, cherry, and a hint of cinnamon. Perfect for long conversations.", image: "images/dark.jpg", tags: ["Signature", "House Blend"] },
        { id: 2, name: "Nitro Story Brew", category: "cold", price: 6.75, description: "Velvety cold brew infused with nitrogen, cascading like a waterfall. Smooth with caramel notes.", image: "images/caramel.jpg", tags: ["Cold", "Nitro", "Signature"] },
        { id: 3, name: "Artisan Pour Over", category: "filter", price: 8.00, description: "Single-origin Ethiopian beans with floral notes, brewed to perfection using manual pour over.", image: "images/artisan.jpg", tags: ["Single Origin", "Pour Over", "Artisan"] }
    ],

    coffee: [
        { id: 101, name: "Ethiopian Yirgacheffe", category: "filter", price: 6.50, description: "Light roast with bright acidity and notes of bergamot, jasmine, and lemon zest. A storyteller's favorite.", image: "images/first.jpg", tags: ["Single Origin", "Light Roast", "gold"] },
        { id: 102, name: "Colombian Espresso", category: "espresso", price: 4.50, description: "Medium-dark roast with balanced body, chocolate notes, and a hint of walnut. Perfect espresso base.", image: "images/colombian-espresso.jpg", tags: ["Espresso", "Chocolate Notes"] },
        { id: 103, name: "Honey Lavender Latte", category: "signature", price: 6.75, description: "Our signature creation with espresso, steamed milk, house-made lavender syrup, and local honey.", image: "images/honey.jpg", tags: ["Signature", "Seasonal", "House-made", "gold"] },
        { id: 104, name: "Cappuccino Classico", category: "espresso", price: 5.25, description: "Classic Italian-style with perfectly balanced espresso, steamed milk, and velvety microfoam.", image: "images/classico.jpg", tags: ["Classic", "Milk-based"] },
        { id: 105, name: "Guatemalan Antigua", category: "filter", price: 7.00, description: "Medium roast with notes of apple, brown sugar, and cocoa. Brewed using V60 method.", image: "images/glu.jpg", tags: ["Single Origin", "Pour Over", "gold"] },
        { id: 106, name: "Vietnamese Iced Coffee", category: "cold", price: 6.25, description: "Strong dark roast with sweetened condensed milk, served over ice.", image: "images/iced-coffee.jpg", tags: ["Cold", "Strong", "Sweet"] }
    ],

    tea: [
        { id: 201, name: "Iced Matcha Story", category: "tea", price: 6.25, description: "Ceremonial matcha shaken with ice and oat milk. Refreshing and energizing.", image: "images/matcha.jpg", tags: ["Matcha", "Iced", "Vegan", "gold"] },
        { id: 202, name: "Earl Grey Fog", category: "tea", price: 5.50, description: "Earl Grey tea with steamed milk and vanilla syrup. A comforting classic.", image: "images/grey-coffee.jpg", tags: ["Black Tea", "Classic"] },
        { id: 203, name: "Chai Spice Latte", category: "tea", price: 5.75, description: "House-made chai blend with black tea, spices, and steamed milk.", image: "images/chai.jpg", tags: ["Chai", "Spiced", "House-made"] }
    ],

    pastries: [
        { id: 301, name: "Almond Croissant", category: "pastry", price: 4.75, description: "Buttery croissant filled with almond cream and topped with sliced almonds.", image: "images/almond.jpg", tags: ["Fresh Baked", "Almond", "Viennoiserie"] },
        { id: 302, name: "Chocolate Chip Cookie", category: "pastry", price: 3.50, description: "Warm, gooey cookie with chunks of dark chocolate. Baked fresh daily.", image: "images/cookie.jpg", tags: ["Cookie", "Chocolate", "Fresh"] },
        { id: 303, name: "Blueberry Scone", category: "pastry", price: 4.25, description: "Buttery scone bursting with fresh blueberries, served with clotted cream.", image: "images/blueberry.jpg", tags: ["Scone", "Blueberry", "British"] },
        { id: 304, name: "Tiramisu", category: "dessert", price: 6.50, description: "Classic Italian dessert with coffee-soaked ladyfingers and mascarpone cream.", image: "images/tiramisu.jpg", tags: ["Dessert", "Italian", "Coffee-infused", "gold"] }
    ],

    stories: [
        { id: 1, title: "Where I Found My Writing Muse", content: "I was struggling with writer's block for months until I started coming here. The atmosphere and coffee unlocked my creativity.", author: "Maya Patel", role: "Novelist", date: "2025-11-15", image: "images/start.jpg" },
        { id: 2, title: "Friends Meetup Place", content: "Cup & Qissa became my regular spot, and slowly, the regulars became my friends. We now have a weekly coffee club!", author: "David Chen", role: "Software Engineer", date: "2025-10-28", image: "images/one.jpg" },
        { id: 3, title: "A Place That Feels Like Home", content: "Whenever work feels overwhelming, I come here. The calm environment, friendly staff, and warm coffee help me reset and focus again.", author: "Ayesha Khan", role: "Graduate Student", date: "2025-09-12", image: "images/two.jpg" },
        { id: 4, title: "My Remote Office", content: "Cup & Qissa has the perfect balance of great wifi, amazing coffee, and a welcoming atmosphere.", author: "James Wilson", role: "Digital Nomad", date: "2025-08-05", image: "images/three.jpg" }
    ]
};

        // Navigation history stack
        let pageHistory = ['home'];
        let currentPageIndex = 0;
// Favorites Management
class FavoritesManager {
    constructor() {
        this.favorites = [];
        this.updateFavoritesCount();
    }

    addFavorite(itemId, itemName, category, price, image) {

        if (!this.isFavorite(itemId)) {
            this.favorites.push({ id: itemId, name: itemName, category, price, image });
            this.updateFavoritesCount();
            this.updateFavoriteButton(itemId, true);
            this.updateFavoritesPage();
            showNotification(`${itemName} added to favorites!`);
        }

        const formData = new FormData();
        formData.append('item_id', itemId);
        formData.append('item_name', itemName);
        formData.append('category', category);
        formData.append('price', price);
        formData.append('image', image);

        fetch('favorites_save.php', {
            method: 'POST',
            body: formData
        }).catch(err => console.error('DB save failed', err));
    }

    removeFavorite(itemId) {
        this.favorites = this.favorites.filter(fav => fav.id !== itemId);
        this.updateFavoritesCount();
        this.updateFavoriteButton(itemId, false);
        this.updateFavoritesPage();
        showNotification('Removed from favorites.');

        const formData = new FormData();
        formData.append('item_id', itemId);

        fetch('favorites_delete.php', {
            method: 'POST',
            body: formData
        }).catch(err => console.error('DB delete failed', err));
    }

    isFavorite(itemId) {
        return this.favorites.some(fav => fav.id === itemId);
    }

    updateFavoriteButton(itemId, isFavorite) {
        const btn = document.getElementById(`fav-btn-${itemId}`);
        if (!btn) return;

        if (isFavorite) {
            btn.classList.add('btn-heart');
            btn.innerHTML = `<i class="fas fa-heart"></i> Added to Favorites`;
        } else {
            btn.classList.remove('btn-heart');
            btn.innerHTML = `<i class="far fa-heart"></i> Add to Favorites`;
        }
    }

  updateFavoritesCount() {
    const count = this.favorites.length;

    document.querySelectorAll('.favorites-count').forEach(el => {
        el.textContent = count;
        el.style.display = count > 0 ? 'flex' : 'none';
    });

    document.querySelectorAll('.favorites-count-nav').forEach(el => {
        el.textContent = count;
        el.style.display = count > 0 ? 'flex' : 'none';
    });

    document.querySelectorAll('.favorites-text').forEach(el => {
        el.textContent = count > 0 ? `Favorites (${count})` : 'Favorites';
    });
}

    updateFavoritesPage() {
        const list = document.getElementById('favoritesList');
        const empty = document.getElementById('emptyFavorites');

        if (!list) return;

        if (this.favorites.length === 0) {
            list.innerHTML = '';
            if (empty) empty.style.display = 'block';
            return;
        }

        if (empty) empty.style.display = 'none';

        list.innerHTML = '<div class="favorites-grid"></div>';
        const grid = list.querySelector('.favorites-grid');

        this.favorites.forEach((fav, index) => {
            grid.innerHTML += `
                <div class="favorite-item slide-up" style="animation-delay:${index * 0.1}s">
                    <div class="favorite-item-img">
                        <img src="${fav.image}" alt="${fav.name}"
                             onerror="this.src='https://images.unsplash.com/photo-1495474472287-4d71bcdd2085'">
                    </div>
                    <div class="favorite-item-content">
                        <h3>${fav.name}</h3>
                        <p>${this.getCategoryDescription(fav.category)}</p>
                        <div class="menu-item-footer">
                            <span>$${fav.price.toFixed(2)}</span>
                            <button class="btn btn-heart"
                                    onclick="favoritesManager.removeFavorite(${fav.id})">
                                <i class="fas fa-heart-broken"></i> Remove from Favorites
                            </button>
                        </div>
                    </div>
                </div>
            `;
        });
    }

    getCategoryDescription(category) {
        return {
            coffee: 'Artisan coffee selection',
            tea: 'Premium tea infusion',
            pastry: 'Freshly baked pastry',
            dessert: 'Decadent dessert'
        }[category] || 'Menu item';
    }
}
const favoritesManager = new FavoritesManager();


        // Initialize the website
        document.addEventListener('DOMContentLoaded', function() {
            setupNavigation();
    
            setupMobileMenu();
            
            setupHeaderScroll();
    
            setupForms();
  
            setMinReservationDate();
     
            addCoffeeBeans();
   
            renderFeaturedItems();
            renderMenuPreview();
            renderFullMenu();
            renderStories();

            favoritesManager.updateFavoritesPage();
            
            const hash = window.location.hash.substring(1);
            if (hash && document.getElementById(hash + 'Page')) {
                showPage(hash);
            } else {
                showPage('home');
            }
        });

        function showPage(page) {
           
            if (page !== pageHistory[currentPageIndex]) {
                pageHistory.push(page);
                currentPageIndex = pageHistory.length - 1;
                
                if (pageHistory.length > 10) {
                    pageHistory = pageHistory.slice(-10);
                    currentPageIndex = 9;
                }
            }

            //  Hide all pages
            document.querySelectorAll('.page-content').forEach(p => {
                p.classList.remove('active');
            });

            // Show selected page
            const pageElement = document.getElementById(page + 'Page');
            if (pageElement) {
                pageElement.classList.add('active');

                // Update navbar active state
                document.querySelectorAll('nav a').forEach(link => {
                    link.classList.remove('active');
                });

                const activeLink = document.querySelector(`nav a[href="#${page}"]`);
                if (activeLink) activeLink.classList.add('active');

                // Close mobile menu
                document.getElementById('mainNav')?.classList.remove('active');

                // Scroll to top
                window.scrollTo(0, 0);

                // Update URL hash
                window.history.pushState(null, '', '#' + page);

                // Update page title
                document.title = `Cup & Qissa | ${getPageTitle(page)}`;
                
                //  Update favorites page if needed
                if (page === 'favorites') {
                    favoritesManager.updateFavoritesPage();
                }
            }
        }

        function getPageTitle(page) {
            const titles = {
                'home': 'Artisan Coffee & Stories',
                'menu': 'Complete Menu',
                'about': 'Our Story',
                'stories': 'Community Stories',
                'reservation': 'Reserve Table',
                'contact': 'Contact Us',
                'favorites': 'My Favorites'
            };
            return titles[page] || 'Cup & Qissa';
        }

        // Set up navigation between pages
        function setupNavigation() {
            const navLinks = document.querySelectorAll('nav a, .footer-links a, .nav-favorites-btn, .page-link-card, .nav-controls a');
            
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    if (this.getAttribute('href') && this.getAttribute('href').startsWith('#')) {
                        e.preventDefault();
                        const page = this.getAttribute('href').substring(1);
                        showPage(page);
                    }
                });
            });

            document.querySelectorAll('.logo, .footer-logo').forEach(logo => {
                logo.addEventListener('click', function(e) {
                    if (this.getAttribute('href').startsWith('#')) {
                        e.preventDefault();
                        showPage('home');
                    }
                });
            });

            document.getElementById('favoritesIcon').addEventListener('click', function(e) {
                e.preventDefault();
                showPage('favorites');
            });
    
            document.querySelector('.floating-favorites .btn').addEventListener('click', function(e) {
                e.preventDefault();
                showPage('favorites');
            });

            document.getElementById('userIcon').addEventListener('click', function(e) {
      
                showNotification('Account features coming soon!');
            });
        }

        function renderFeaturedItems() {
            const featuredContainer = document.getElementById('featuredItems');
            if (!featuredContainer) return;
            
            featuredContainer.innerHTML = '';
            
            menuData.featured.forEach((item, index) => {
                const isFavorite = favoritesManager.isFavorite(item.id);
                const tagsHTML = item.tags.map(tag => 
                    `<span class="tag ${tag === 'gold' ? 'gold' : ''}">${tag === 'gold' ? 'Story Special' : tag}</span>`
                ).join('');
                
                const featuredItemHTML = `
                    <div class="featured-item slide-up" style="animation-delay: ${index * 0.2}s">
                        <div class="featured-img">
                            <img src="${item.image}" alt="${item.name}" onerror="this.src='https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80'">
                        </div>
                        <div class="featured-content">
                            <div class="featured-badge">Story Special</div>
                            <h3>${item.name}</h3>
                            <p>${item.description}</p>
                            <div class="menu-item-tags">
                                ${tagsHTML}
                            </div>
                            <div class="featured-footer">
                                <div class="featured-price">$${item.price.toFixed(2)}</div>
                                <button class="btn ${isFavorite ? 'btn-heart' : ''}" onclick="toggleFavorite(${item.id}, '${item.name}', '${item.category}', ${item.price}, '${item.image}')" style="padding: 12px 20px;">
                                    <i class="fas ${isFavorite ? 'fa-heart' : 'fa-heart'}"></i> ${isFavorite ? 'Added to Favorites' : 'Add to Favorites'}
                                </button>
                            </div>
                        </div>
                    </div>
                `;
                
                featuredContainer.innerHTML += featuredItemHTML;
            });
        }

        function renderMenuPreview() {
            const previewContainer = document.getElementById('menuPreview');
            if (!previewContainer) return;
            
            previewContainer.innerHTML = '';
 
            const previewItems = menuData.coffee.slice(0, 3);
            
            previewItems.forEach((item, index) => {
                const isFavorite = favoritesManager.isFavorite(item.id);
                const tagsHTML = item.tags.map(tag => 
                    `<span class="tag ${tag === 'gold' ? 'gold' : ''}">${tag === 'gold' ? 'Story Special' : tag}</span>`
                ).join('');
                
                const previewItemHTML = `
                    <div class="featured-item slide-up" style="animation-delay: ${index * 0.2}s">
                        <div class="featured-img">
                            <img src="${item.image}" alt="${item.name}" onerror="this.src='https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80'">
                        </div>
                        <div class="featured-content">
                            <h3>${item.name}</h3>
                            <p>${item.description}</p>
                            <div class="menu-item-tags">
                                ${tagsHTML}
                            </div>
                            <div class="featured-footer">
                                <div class="featured-price">$${item.price.toFixed(2)}</div>
                                <button class="btn ${isFavorite ? 'btn-heart' : ''}" onclick="toggleFavorite(${item.id}, '${item.name}', '${item.category}', ${item.price}, '${item.image}')" style="padding: 12px 20px;">
                                    <i class="fas ${isFavorite ? 'fa-heart' : 'fa-heart'}"></i> ${isFavorite ? 'Added to Favorites' : 'Add to Favorites'}
                                </button>
                            </div>
                        </div>
                    </div>
                `;
                
                previewContainer.innerHTML += previewItemHTML;
            });
        }

        function renderFullMenu() {
            renderMenuSection('coffeeMenu', menuData.coffee);
            renderMenuSection('teaMenu', menuData.tea);
            renderMenuSection('pastryMenu', menuData.pastries);
        }

        function renderMenuSection(containerId, items) {
            const container = document.getElementById(containerId);
            if (!container) return;
            
            container.innerHTML = '';
            
            items.forEach((item, index) => {
                const isFavorite = favoritesManager.isFavorite(item.id);
                const tagsHTML = item.tags.map(tag => 
                    `<span class="tag ${tag === 'gold' ? 'gold' : ''}">${tag === 'gold' ? 'Story Special' : tag}</span>`
                ).join('');
                
                const menuItemHTML = `
                    <div class="menu-item slide-up" style="animation-delay: ${index * 0.1}s">
                        <div class="menu-item-img">
                            <img src="${item.image}" alt="${item.name}" onerror="this.src='https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80'">
                        </div>
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h3 class="menu-item-title">${item.name}</h3>
                            </div>
                            <p class="menu-item-desc">${item.description}</p>
                            <div class="menu-item-tags">
                                ${tagsHTML}
                            </div>
                            <div class="menu-item-footer">
                                <span class="menu-item-price-footer">$${item.price.toFixed(2)}</span>
                                <button class="btn ${isFavorite ? 'btn-heart' : ''}" onclick="toggleFavorite(${item.id}, '${item.name}', '${item.category}', ${item.price}, '${item.image}')" style="padding: 12px 20px;">
                                    <i class="fas ${isFavorite ? 'fa-heart' : 'fa-heart'}"></i> ${isFavorite ? 'Added to Favorites' : 'Add to Favorites'}
                                </button>
                            </div>
                        </div>
                    </div>
                `;
                
                container.innerHTML += menuItemHTML;
            });
        }

        function renderStories() {
            const storiesGrid = document.getElementById('storiesGrid');
            if (!storiesGrid) return;
            
            storiesGrid.innerHTML = '';
            
            menuData.stories.forEach((story, index) => {
                const storyHTML = `
                    <div class="story-card slide-up" style="animation-delay: ${index * 0.2}s">
                        <div class="story-img">
                            <img src="${story.image}" alt="${story.author}" onerror="this.src='https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80'">
                        </div>
                        <div class="story-content">
                            <h3>${story.title}</h3>
                            <p>${story.content}</p>
                            <div class="story-meta">
                                <div class="story-author">
                                    <div class="story-author-img">
                                        <img src="${story.image}" alt="${story.author}" onerror="this.src='https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80'">
                                    </div>
                                    <div class="story-author-info">
                                        <h4>${story.author}</h4>
                                        <p>${story.role}</p>
                                    </div>
                                </div>
                                <div class="story-date">${formatDate(story.date)}</div>
                            </div>
                        </div>
                    </div>
                `;
                
                storiesGrid.innerHTML += storyHTML;
            });
        }

        function formatDate(dateString) {
            const date = new Date(dateString);
            return date.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' });
        }

        // Toggle favorite
        function toggleFavorite(itemId, itemName, category, price, image) {
            if (favoritesManager.isFavorite(itemId)) {
                favoritesManager.removeFavorite(itemId);
                showNotification(`Removed ${itemName} from favorites`);
            } else {
                favoritesManager.addFavorite(itemId, itemName, category, price, image);
                showNotification(`Added ${itemName} to favorites!`);
            }
            
            favoritesManager.updateFavoritesCount();
            
            renderFeaturedItems();
            renderMenuPreview();
            renderFullMenu();
        }

        // Show notification
        function showNotification(message) {
            const notification = document.createElement('div');
            notification.style.cssText = `
                position: fixed;
                top: 100px;
                right: 20px;
                background: linear-gradient(135deg, var(--accent-teal), var(--story-blue));
                color: white;
                padding: 15px 25px;
                border-radius: 10px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.2);
                z-index: 3000;
                animation: slideInRight 0.3s ease, fadeOut 0.3s ease 2.7s;
                display: flex;
                align-items: center;
                gap: 10px;
                max-width: 300px;
            `;
            
            notification.innerHTML = `
                <i class="fas fa-check-circle" style="font-size: 20px;"></i>
                <span>${message}</span>
            `;
            
            document.body.appendChild(notification);
            
            // Add animation styles if not present
            if (!document.getElementById('notification-styles')) {
                const style = document.createElement('style');
                style.id = 'notification-styles';
                style.textContent = `
                    @keyframes slideInRight {
                        from { transform: translateX(100%); opacity: 0; }
                        to { transform: translateX(0); opacity: 1; }
                    }
                    @keyframes fadeOut {
                        from { opacity: 1; }
                        to { opacity: 0; }
                    }
                `;
                document.head.appendChild(style);
            }
            
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 3000);
        }

        function setupMobileMenu() {
            const menuToggle = document.getElementById('menuToggle');
            const mainNav = document.getElementById('mainNav');
            
            if (!menuToggle || !mainNav) return;
            
            menuToggle.addEventListener('click', function() {
                mainNav.classList.toggle('active');
                this.querySelector('i').classList.toggle('fa-bars');
                this.querySelector('i').classList.toggle('fa-times');
            });
        }

        function setupHeaderScroll() {
            const header = document.getElementById('header');
            if (!header) return;
            
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });
        }

       function setupForms() {
    // Contact form 
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault(); // prevent default form submission
            
            // Create FormData to send to PHP
            const formData = new FormData();
            formData.append('name', document.getElementById('name').value);
            formData.append('email', document.getElementById('email').value);
            formData.append('subject', document.getElementById('subject').value);
            formData.append('message', document.getElementById('message').value);
            fetch('contact_save.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                showNotification('Thank you! Your message has been sent successfully.');
                contactForm.reset();
            })
            .catch(error => {
                showNotification('Error sending message. Please try again.');
                console.error('Error:', error);
            });
        });
    }
            // Reservation form
            const reservationForm = document.getElementById('reservationForm');
            if (reservationForm) {
                reservationForm.addEventListener('submit', function(e) {
                    e.preventDefault();

                    // Create FormData to send to PHP
                    const formData = new FormData();
                    formData.append('name', document.getElementById('reserveName').value);
                    formData.append('email', document.getElementById('reserveEmail').value);
                    formData.append('phone', document.getElementById('reservePhone').value);
                    formData.append('guests', document.getElementById('reserveGuests').value);
                    formData.append('date', document.getElementById('reserveDate').value);
                    formData.append('time', document.getElementById('reserveTime').value);
                    formData.append('table_type', document.getElementById('reserveType').value);
                    formData.append('notes', document.getElementById('reserveNotes').value);
                    fetch('reservation_save.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        showNotification('Table reserved successfully! ');
                        reservationForm.reset();
                        setMinReservationDate();
                    })
                    .catch(error => {
                        showNotification('Error making reservation. Please try again.');
                        console.error('Error:', error);
                    });
                });
            }
        }

        function setMinReservationDate() {
            const dateInput = document.getElementById('reserveDate');
            if (dateInput) {
                const today = new Date();
                const tomorrow = new Date(today);
                tomorrow.setDate(tomorrow.getDate() + 1);
                
                const minDate = tomorrow.toISOString().split('T')[0];
                dateInput.min = minDate;
                
                dateInput.value = minDate;
            }
            
            const timeInput = document.getElementById('reserveTime');
            if (timeInput) {
                const now = new Date();
                const nextHour = new Date(now.getTime() + 60 * 60 * 1000);
                const hours = nextHour.getHours().toString().padStart(2, '0');
                const minutes = '00';
                timeInput.value = `${hours}:${minutes}`;
            }
        }

        function addCoffeeBeans() {
            const numBeans = 15;
            for (let i = 0; i < numBeans; i++) {
                const bean = document.createElement('div');
                bean.className = 'coffee-bean floating';
                
                const left = Math.random() * 100;
                const top = 80 + Math.random() * 80; // Below header
                
                const size = 20 + Math.random() * 30;
                const rotation = Math.random() * 360;
                const opacity = 0.05 + Math.random() * 0.1;
                
                bean.style.cssText = `
                    left: ${left}%;
                    top: ${top}%;
                    width: ${size}px;
                    height: ${size * 1.5}px;
                    opacity: ${opacity};
                    transform: rotate(${rotation}deg);
                    animation-delay: ${Math.random() * 2}s;
                `;
                
                document.body.appendChild(bean);
            }
        }
        window.addEventListener('popstate', function() {
            const hash = window.location.hash.substring(1);
            if (hash && document.getElementById(hash + 'Page')) {
                showPage(hash);
            } else {
                showPage('home');
            }
        });

        window.toggleFavorite = toggleFavorite;
        window.showPage = showPage;
        window.favoritesManager = favoritesManager;
    </script>
</body>
</html>