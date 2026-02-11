]<footer class="footer no-print">
    <style>
        .footer {
            background: linear-gradient(180deg, #1a1a2e 0%, #16213e 100%);
            color: white;
            margin-top: 80px;
            padding-top: 60px;
        }
        
        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-column {
            animation: fadeInUp 0.6s ease;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .footer-brand {
            margin-bottom: 20px;
        }
        
        .footer-logo {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 15px;
        }
        
        .footer-logo-icon {
            width: 45px;
            height: 45px;
            background: var(--gradient-primary);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }
        
        .footer-logo-text {
            font-size: 24px;
            font-weight: 700;
        }
        
        .footer-description {
            color: rgba(255,255,255,0.7);
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        .footer-social {
            display: flex;
            gap: 12px;
            margin-top: 20px;
        }
        
        .social-link {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .social-link:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
            color: white;
        }
        
        .footer-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background: var(--accent-color);
            border-radius: 2px;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 12px;
        }
        
        .footer-links a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .footer-links a::before {
            content: '›';
            color: var(--accent-color);
            font-weight: 700;
        }
        
        /* Newsletter */
        .newsletter-form {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }
        
        .newsletter-input {
            flex: 1;
            padding: 12px 18px;
            border: 2px solid rgba(255,255,255,0.2);
            border-radius: 25px;
            background: rgba(255,255,255,0.1);
            color: white;
            font-size: 14px;
            transition: var(--transition);
        }
        
        .newsletter-input:focus {
            outline: none;
            border-color: var(--accent-color);
            background: rgba(255,255,255,0.15);
        }
        
        .newsletter-input::placeholder {
            color: rgba(255,255,255,0.5);
        }
        
        .newsletter-btn {
            padding: 12px 25px;
            background: var(--gradient-accent);
            color: var(--dark-bg);
            border: none;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            white-space: nowrap;
        }
        
        .newsletter-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(255,193,7,0.4);
        }
        
        /* Stats */
        .footer-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 20px;
        }
        
        .stat-item {
            text-align: center;
            padding: 15px;
            background: rgba(255,255,255,0.05);
            border-radius: 10px;
            transition: var(--transition);
        }
        
        .stat-item:hover {
            background: rgba(255,255,255,0.1);
            transform: translateY(-3px);
        }
        
        .stat-number {
            font-size: 24px;
            font-weight: 700;
            color: var(--accent-color);
            display: block;
        }
        
        .stat-label {
            font-size: 12px;
            color: rgba(255,255,255,0.6);
            margin-top: 5px;
        }
        
        /* Footer Bottom */
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding: 25px 0;
            margin-top: 40px;
        }
        
        .footer-bottom-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .copyright {
            color: rgba(255,255,255,0.6);
            font-size: 14px;
        }
        
        .footer-bottom-links {
            display: flex;
            gap: 25px;
            flex-wrap: wrap;
        }
        
        .footer-bottom-links a {
            color: rgba(255,255,255,0.6);
            text-decoration: none;
            font-size: 14px;
            transition: var(--transition);
        }
        
        .footer-bottom-links a:hover {
            color: white;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .footer {
                padding-top: 40px;
            }
            
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .footer-stats {
                grid-template-columns: 1fr;
            }
            
            .newsletter-form {
                flex-direction: column;
            }
            
            .footer-bottom-content {
                flex-direction: column;
                text-align: center;
            }
            
            .footer-bottom-links {
                justify-content: center;
            }
        }
    </style>
    
    <div class="footer-content">
        <div class="footer-grid">
            <!-- Brand Column -->
            <div class="footer-column">
                <div class="footer-brand">
                    <div class="footer-logo">
                        <div class="footer-logo-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <span class="footer-logo-text">Tpoint Tech</span>
                    </div>
                    <p class="footer-description">
                        Get access to 500+ tutorials from top instructors around the world. Learn programming, web development, data science, and more.
                    </p>
                </div>
                
                <!-- Stats -->
                <div class="footer-stats">
                    <div class="stat-item">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Tutorials</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">50K+</span>
                        <span class="stat-label">Students</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">25+</span>
                        <span class="stat-label">Topics</span>
                    </div>
                </div>
                
                <!-- Social Links -->
                <div class="footer-social">
                    <a href="#" class="social-link" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="footer-column">
                <h3 class="footer-title">Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="">Home</a></li>
                    <li><a href="">All Tutorials</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Careers</a></li>
                </ul>
            </div>
            
            <!-- Popular Categories -->
            <div class="footer-column">
                <h3 class="footer-title">Popular Topics</h3>
                <ul class="footer-links">
                    <li><a href="">Python</a></li>
                    <li><a href="">Java</a></li>
                    <li><a href="">JavaScript</a></li>
                    <li><a href="">React</a></li>
                    <li><a href="">Node.js</a></li>
                    <li><a href="">Artificial Intelligence</a></li>
                </ul>
            </div>
            
            <!-- Newsletter -->
            <div class="footer-column">
                <h3 class="footer-title">Newsletter</h3>
                <p class="footer-description">
                    Subscribe to get the latest tutorials and updates delivered to your inbox.
                </p>
                <form action="" method="POST" class="newsletter-form">
                    @csrf
                    <input 
                        type="email" 
                        name="email" 
                        class="newsletter-input" 
                        placeholder="Your email address"
                        required
                    >
                    <button type="submit" class="newsletter-btn">
                        Subscribe
                    </button>
                </form>
                
                <ul class="footer-links" style="margin-top: 25px;">
                    <li><a href="">Help Center</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Support</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="footer-bottom-content">
            <div class="copyright">
                &copy; {{ date('Y') }} Tpoint Tech. All rights reserved.
            </div>
            <div class="footer-bottom-links">
                <a href="">Privacy Policy</a>
                <a href="">Terms of Service</a>
                <a href="">Cookie Policy</a>
                <a href="">Sitemap</a>
            </div>
        </div>
    </div>
</footer>