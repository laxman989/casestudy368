<?php
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/8cc8732159.js" crossorigin="anonymous"></script>
        <title>Home</title>
        <style>
        *{
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }
        html,body{

        }
        :root{
            --primary-light: rgb(230, 230, 230);
            --primary-dark: rgb(210, 210, 210);
            --dark: black;
            --light: white;
        }
        h2{
            font-size: 1.8rem;
            font-weight: 500;
            text-transform: uppercase;;
            text-align: center;
        }
        h3{
            font-size: 1.5rem;
            font-weight: 400;
        }
        h4{
            font-size: 1.2rem;
            font-weight: 300;
            text-align: center;
        }
        h5{
            font-size: 1rem;
            font-weight: 300;
            text-align: center;
        }
        h6{
            font-size: 1rem;
            font-weight: 300;
            letter-spacing: 0.3rem;
        }
        p{
            font-size: 0.9rem;
            font-weight: 200;
        }
        
        .container-2{
            display: grid;
            grid-template-columns: auto auto auto auto;
            margin-top: 3rem;
            padding: 0rem 2rem;
        }
        .container-3{
            display: grid;
            grid-template-columns: auto auto auto auto;
            padding: 0rem 2rem;
        }
        .container-4{
            display: grid;
            grid-template-columns: auto auto auto;
            margin-top: 3rem;
            padding: 0rem 2rem;
        }
        .container-5{
            margin-top: 3rem;
            padding: 0rem 2rem;
        }
        .container-6{
            display: flex;
            justify-content: center;
        }
        
        
        /* Navigation Section */
        nav{
            position: fixed;
            top: 0%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            height: 4rem;
            background-color: white;
            box-shadow: 0px 8px 28px rgba(0, 0, 0, 0.25);
            z-index: 10;
        }
        nav a{
            display: block;
            text-decoration: none;
            line-height: 4rem;
            color: black;
            padding: 0% 0.9rem;
        }
        nav .logo a{
            display: block;
            font-size: 1.5rem;
            letter-spacing: 0.35rem;
        }
        nav .menu{
            display: flex;
        }
        nav .menu a{
            text-decoration: none;
            color: black;
            font-size: 1rem;
        }
        nav .menu a:hover{
            background-color: var(--primary-light);
        }
        nav .menu-sm{
            display: none;
        }
        nav .menu-sm i{
            font-size: 1.5rem;
        }
        
        
        /* Home Section */
        #home{
            background: url("image/bg2.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 100vh;
        }
        #home .container{
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            padding-left: 5rem;
        }
        #home .container h1{
            font-size: 3.3rem;
            color: white;
        }
        #home .container p{
            font-size: 1.2rem;
            color: white;
        }
        #home .container button{
            font-size: 1rem;
            padding: 1rem 1.5rem;
            margin-top: 4rem;
            border: none;
            background-color: var(--primary-light);
        }
        #home .container button:hover{
            background-color: var(--primary-dark);
        }
        
        
        /* About Section */
        #about{
            width: 100%;
            height: auto;
            overflow: auto;
            padding: 5rem 2rem;
        }
        .a-card h4{
            margin-bottom: 1rem;
        }
        .a-card{
            margin: 1rem;
        }
        .a-card img{
            display: block;
            width: 4rem;
            height: 3.5rem;
            margin: 2rem auto;
        }
        .a-card p{
            margin: 1rem 0rem;
            text-align: center;
        }
        
        
        /* Design Section */
        #design{
            width: 100%;
            height: auto;
            overflow: auto;
            padding: 5rem 2rem;
            background-color: var(--primary-light);
        }
        .d-block-1{
            width: 50%;
            padding-right: 10rem;
        }
        .d-block-1 p{
            margin: 1rem 0rem;
        }
        .d-block-2{
            width: 50%;
        }
        .d-block-2 img{
            width: 90%;
        }
        .d-block-1 button{
            padding: 1rem 1.5rem;
            border: none;
            font-size: 1rem;
            background-color: var(--dark);
            color: white;
        }
        .d-block-1 button:hover{
            background-color: var(--primary-dark);
            color: black;
        }
        
        
        /* Team Section */
        #team{
            width: 100%;
            height: auto;
            overflow: auto;
            padding: 5rem 2rem;
        }
        .t-card{
            margin: 0.5rem;
            box-shadow: 2px 8px 20px rgba(0, 0, 0, 0.25);
        }
        .t-card img{
            display: block;
            width: 100%;
            height: auto;
            overflow: auto;
        }
        .t-card h3{
            margin: 0.5rem 1rem;
            margin-top: 1rem;
        }
        .t-card p{
            margin: 1rem 1rem;
        }
        .t-card button{
            display: block;
            width: 90%;
            border: none;
            margin: 1rem auto;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            background-color: var(--primary-light);
        }
        .t-card button:hover{
            background-color: var(--primary-dark);
        }
        .t-card button i{
            padding: 0.2rem;
            font-size: 1rem;
            
        }
        
        
        /* Projects Section */
        #projects{
            width: 100%;
            height: auto;
            overflow: auto;
            padding: 4rem 2rem;
            background-color: rgb(105, 105, 105);
        }
        .p-card{
            text-align: center;
            color: white;
        }
        
        
        /* Work Section */
        #work{
            width: 100%;
            height: auto;
            overflow: auto;
            padding: 5rem 2rem;
        }
        .w-card{
            margin: 1rem 2rem;
        }
        .w-card img{
            width: 100%;
        }
        
        
        /* Skills Section */
        #skills{
            width: 100%;
            height: auto;
            overflow: auto;
            padding: 5rem 2rem;
            background-color: var(--primary-light);
        }
        .s-block-1{
            width: 50%;
            padding-right: 10rem;
        }
        .s-block-1 p{
            margin: 1rem 0rem;
        }
        .s-block-2{
            width: 50%;
        }
        .s-block-2 .progress-bar{
            width: 100%;
            height: 2rem;
            margin-bottom: 1rem;
            background-color: var(--primary-dark);
        }
        .progress-bar .progress-value{
            text-align: center;
            line-height: 2rem;
            height: 2rem;
            color: var(--light);
            background-color: var(--dark);
        }
        .progress-value-1{
            width: 90%;
        }
        .progress-value-2{
            width: 85%;
        }
        .progress-value-3{
            width: 70%;
        }
        
        
        /* Pricing Section */
        #pricing{
            width: 100%;
            height: auto;
            overflow: auto;
            padding: 5rem 2rem;
            background-color: rgb(105, 105, 105);
        }
        #pricing>h2,
        #pricing>h4{
            color: white;
        }
        .pri-card{
            margin: 1rem 2rem;
            background-color: white;
            text-align: center;
            box-shadow: 2px 8px 20px rgba(0, 0, 0, 0.25);
        }
        .pri-card span{
            font-weight: bold;
        }
        .pri-card .pri-head{
            padding: 1rem 0rem;
            background-color: var(--dark);
            color: white;
        }
        .pri-card .pri-features{
            padding: 1rem 0rem;
            background-color: var(--light);
            border-bottom: 2px solid var(--primary-dark);
        }
        .pri-card .pri-amount{
            padding: 1rem 0rem;
            background-color: var(--light);
        }
        .pri-card .pri-btn{
            padding: 1rem 0rem;
            background-color: var(--primary-light);
        }
        .pri-card .pri-btn button{
            padding: 1rem 1.5rem;
            border: none;
            font-size: 1rem;
            background-color: var(--dark);
            color: white;
        }
        .pri-card .pri-btn button:hover{
            background-color: var(--primary-dark);
            color: black;
        }
        
        
        /* Contact Section */
        #contact{
            width: 100%;
            height: auto;
            overflow: auto;
            padding: 5rem 2rem;
        }
        #contact .container-5 h4{
            margin: 1rem 0rem;
            text-align: left;
        }
        #contact form{
            margin-top: 2rem;
        }
        #contact form input{
            display: block;
            width: 50%;
            font-size: 1rem;
            padding: 1rem 1rem;
            margin: 1rem 0rem;
        }
        #contact form button{
            padding: 1rem 1.5rem;
            border: none;
            font-size: 1rem;
            background-color: var(--dark);
            color: white;
        }
        #contact form button:hover{
            background-color: var(--primary-dark);
            color: black;
        }
        
        
        /* Footer Section */
        footer{
            width: 100%;
            height: auto;
            overflow: auto;
            padding: 5rem 2rem;
            background-color: var(--dark);
            color: white;
        }
        footer .foot-start{
            padding: 0rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        footer .foot-start i{
            cursor: pointer;
            margin-left: 1rem;
            font-size: 1.2rem;
        }
        footer .foot-end{
            margin-top: 2rem;
            padding: 0rem 2rem;
            display: flex;
            flex-direction: row-reverse;
            align-items: center;
            justify-content: space-between;
        }
        footer .foot-end .end-links a{
            text-decoration: none;
            margin-left: 2rem;
            font-size: 0.9rem;
            color: white;
        }
        footer .foot-start .logo a{
            text-decoration: none;
            color: white;
            display: block;
            font-size: 1.5rem;
            letter-spacing: 0.35rem;
        }
        
        
        /* Responsive - Media Query Section */
        @media only screen and (max-width: 1090px){
            html,body{
                font-size: 13px;
            }
            #design .d-block-1{
                padding-right: 5rem;
            }
            #skills .s-block-1{
                padding-right: 5rem;
            }
            .container-2{
                grid-template-columns: auto auto;
            }
            .container-4{
                grid-template-columns: auto;
                padding: 0rem 4rem;
            }
        }
        @media only screen and (max-width:802px){
            .container-6{
                display: block;
            }
            #design .d-block-1{
                width: 90%;
                margin: 0rem auto;
            }
            #design .d-block-2{
                width: 90%;
                margin: 0rem auto;
                margin-top: 2rem;
            }
            #design .d-block-2 img{
                width: 100%;
            }
            #skills .s-block-1{
                width: 90%;
                margin: 0rem auto;
            }
            #skills .s-block-2{
                width: 90%;
                margin: 0rem auto;
                margin-top: 2rem;
            }
            #contact form input{
                width: 100%;
            }
        }
        @media only screen and (max-width: 587px){
            html,body{
                font-size: 10px;
            }
            #home .container{
                padding: 0rem 1.5rem;
                text-align: center;
            }
            #design .block-1{
                padding-right: 2rem;
            }
            .container-2{
                grid-template-columns: auto;
            }
            .container-3{
                grid-template-columns: auto auto;
            }
            .container-4{
                padding: 0rem 2rem;
            }
            .p-card{
                margin: 1rem;
            }
            .w-card{
                margin: 0rem 2rem;
            }
            .a-card p{
                margin: 0rem 2rem;
            }
            .t-card h3{
                margin: 0.5rem 2rem;
                margin-top: 1rem;
            }
            .t-card p{
                margin: 1rem 2rem;
            }
            footer .foot-end{
                display: block;
                flex-direction: column-reverse;
                align-items: center;
                justify-content: center;
            }
            footer .foot-end .end-links{
                margin-bottom: 1rem;
            }
            footer .foot-end .end-links a{
                margin-left: 0rem;
                margin-right: 1rem;
            }
            nav .menu-sm{
                display: block;
                padding-right: 1rem;
            }
            nav .menu{
                display: none;
            }
        
        }
        
        </style>
    </head>
    <body>
        <!-- Navigation Section -->
        <header>
            <nav>
                <div class="logo">
                    <a href="#home">LOGO</a>
                </div>
                <div class="menu">
                    <a href="#about">ABOUT</a>
                    <a href="#team">TEAM</a>
                    <a href="#work">WORK</a>
                    <a href="#pricing">PRICING</a>
                    <a href="#contact">CONTACT</a>
                </div>
                <div class="menu-sm">
                    <!-- <input type="checkbox" name="check" id="check"> -->
                    <i class="fas fa-bars"></i>
                    <!-- <i class="fas fa-times"></i> -->
                </div>
            </nav>
        </header>
    
        <!-- Home Section -->
        <section id="home">
            <div class="container">
                <h1>Start something that matters</h1>
                <p>Stop wasting valuable time with projects that just isnt you.</p>
                <button>Learn more and start today</button>
            </div>
        </section>
    
        <!-- About Section -->
        <section id="about">
            <h2>About the company</h2>
            <h4>Key features of our company</h4>
            <div class="container-2">
                <div class="a-card" data-aos="fade-up">
                    <img src="image/computer-monitor.png" alt="img">
                    <h4>Responsive</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
                <div class="a-card" data-aos="fade-up">
                    <img src="image/heart-black.png" alt="img">
                    <h4>Passion</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
                <div class="a-card" data-aos="fade-up">
                    <img src="image/diamond-gem.png" alt="img">
                    <h4>Design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
                <div class="a-card" data-aos="fade-up">
                    <img src="image/24-hour.png" alt="img">
                    <h4>Support</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
            </div>
        </section>
        
    
        <!-- Design Section -->
        <section id="design">
            <div class="container-6">
                <div class="d-block-1" data-aos="flip-up">
                    <h3>We know design</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <button>View Our Works</button>
                </div>
                <div class="d-block-2" data-aos="fade-left">
                    <img src="image/phone.jpg" alt="">
                </div>
            </div>
        </section>
    
    
        <!-- Team Section -->
        <section id="team">
            <h2>The Team</h2>
            <h4>The ones who runs this company</h4>
            <div class="container-2">
                <div class="t-card" data-aos="zoom-in">
                    <img src="image/person-2.jpg" alt="img">
                    <h3>John Doe</h3>
                    <p style="font-weight: 300;">CEO & Founder</p>
                    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                    <button><i class="fas fa-envelope"></i>Contact</button>
                </div>
                <div class="t-card" data-aos="zoom-in">
                    <img src="image/person-1.jpg" alt="img">
                    <h3>Anja Doe</h3>
                    <p style="font-weight: 300;">Art Director</p>
                    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                    <button><i class="fas fa-envelope"></i>Contact</button>
                </div>
                <div class="t-card" data-aos="zoom-in">
                    <img src="image/person-3.jpg" alt="img">
                    <h3>Mike Ross</h3>
                    <p style="font-weight: 300;">Web Designer</p>
                    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                    <button><i class="fas fa-envelope"></i>Contact</button>
                </div>
                <div class="t-card" data-aos="zoom-in">
                    <img src="image/person-4.jpg" alt="img">
                    <h3>Dan Star</h3>
                    <p style="font-weight: 300;">Designer</p>
                    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                    <button><i class="fas fa-envelope"></i>Contact</button>
                </div>
            </div>
        </section>
    
    
        <!-- Projects Section -->
        <section id="projects">
            <div class="container-3">
                <div class="p-card" data-aos="fade-in">
                    <h2>14+</h2>
                    <h5>Partners</h4>
                </div>
                <div class="p-card" data-aos="fade-in">
                    <h2>55+</h2>
                    <h5>Projects Done</h4>
                </div>
                <div class="p-card" data-aos="fade-in">
                    <h2>89+</h2>
                    <h5>Happy Clients</h4>
                </div>
                <div class="p-card" data-aos="fade-in">
                    <h2>150+</h2>
                    <h5>Meetings</h4>
                </div>
            </div>
        </section>
        
        <!-- Work Section -->
        <section id="work">
            <h2>Our Work</h2>
            <h4>What weve done for people</h4>
            <div class="container-2">
                <div class="w-card" data-aos="flip-up">
                    <img src="image/work-1.jpg" alt="img">
                </div>
                <div class="w-card" data-aos="flip-up">
                    <img src="image/work-2.jpg" alt="img">
                </div>
                <div class="w-card" data-aos="flip-up">
                    <img src="image/work-3.jpg" alt="img">
                </div>
                <div class="w-card" data-aos="flip-up">
                    <img src="image/work-4.jpg" alt="img">
                </div>
                <div class="w-card" data-aos="flip-up">
                    <img src="image/work-5.jpg" alt="img">
                </div>
                <div class="w-card" data-aos="flip-up">
                    <img src="image/work-6.jpg" alt="img">
                </div>
                <div class="w-card" data-aos="flip-up">
                    <img src="image/work-7.jpg" alt="img">
                </div>
                <div class="w-card" data-aos="flip-up">
                    <img src="image/work-8.jpg" alt="img">
                </div>
            </div>
        </section>
        
    
        <!-- Skills Section -->
        <section id="skills">
            <div class="container-6">
                <div class="s-block-1" data-aos="flip-up">
                    <h3>Our Skills</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et tempore sint a libero facere error fugiat consequatur soluta modi rem. Magnam corrupti voluptas asperiores.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et tempore sint a libero facere error fugiat consequatur soluta modi rem. Magnam corrupti voluptas asperiores.</p>
                </div>
                <div class="s-block-2" data-aos="fade-left">
                    <h6><i class="fas fa-camera"></i> Photography</h6>
                    <div class="progress-bar">
                        <div class="progress-value progress-value-1">90%</div>
                    </div>
                    <h6><i class="fas fa-desktop"></i> Web Design</h6>
                    <div class="progress-bar">
                        <div class="progress-value progress-value-2">85%</div>
                    </div>                
                    <h6><i class="far fa-image"></i> Photoshop</h6>
                    <div class="progress-bar">
                        <div class="progress-value progress-value-3">70%</div>
                    </div>
                </div>
            </div>
        </section>
    
    
        <!-- Pricing Section -->
        <section id="pricing">
            <h2>Pricing</h2>
            <h4>Choose a pricing plan that fits your needs</h4>
            <div class="container-4">
                <div class="pri-card" data-aos="fade-up">
                    <div class="pri-head">
                        <h3>Basic</h3>
                    </div>
                    <div class="pri-features">
                        <p><span>10GB</span> Storage</p>
                    </div>
                    <div class="pri-features">
                        <p><span>10</span> Emails</p>
                    </div>
                    <div class="pri-features">
                        <p><span>10</span> Domains</p>
                    </div>
                    <div class="pri-features">
                        <p><span>Endless</span> Support</p>
                    </div>
                    <div class="pri-amount">
                        <h2>$10</h2>
                        <p>per month</p>
                    </div>
                    <div class="pri-btn">
                        <button>Sign Up</button>
                    </div>
                </div>
                <div class="pri-card" data-aos="fade-up">
                    <div class="pri-head" style="background-color: rgb(255, 55, 55);">
                        <h3>Pro(Recommended)</h3>
                    </div>
                    <div class="pri-features">
                        <p><span>25GB</span> Storage</p>
                    </div>
                    <div class="pri-features">
                        <p><span>25</span> Emails</p>
                    </div>
                    <div class="pri-features">
                        <p><span>25</span> Domains</p>
                    </div>
                    <div class="pri-features">
                        <p><span>Endless</span> Support</p>
                    </div>
                    <div class="pri-amount">
                        <h2>$25</h2>
                        <p>per month</p>
                    </div>
                    <div class="pri-btn">
                        <button>Sign Up</button>
                    </div>
                </div>
                <div class="pri-card" data-aos="fade-up">
                    <div class="pri-head">
                        <h3>Premium</h3>
                    </div>
                    <div class="pri-features">
                        <p><span>50GB</span> Storage</p>
                    </div>
                    <div class="pri-features">
                        <p><span>50</span> Emails</p>
                    </div>
                    <div class="pri-features">
                        <p><span>50</span> Domains</p>
                    </div>
                    <div class="pri-features">
                        <p><span>Endless</span> Support</p>
                    </div>
                    <div class="pri-amount">
                        <h2>$50</h2>
                        <p>per month</p>
                    </div>
                    <div class="pri-btn">
                        <button>Sign Up</button>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Contact Section -->
        <section id="contact">
            <h2>Contact</h2>
            <h4>Lets get in touch. Send us a message</h4>
            <div class="container-5" data-aos="fade-up">
                <h4><i class="fas fa-map-marker-alt"></i>Mumbai, India</h4>
                <h4><i class="fas fa-phone-alt"></i>+91 987468379</h4>
                <h4><i class="fas fa-envelope"></i></i>company@gmail.com</h2>
                <form>
                    <input type="text" placeholder="Name">
                    <input type="text" placeholder="Email">
                    <input type="text" placeholder="Subject">
                    <input type="text" placeholder="Message">
                    <button>Send Message</button>
                </form>
            </div>
        </section>
    
        <!-- Footer Section -->
        <footer>
            <div class="foot-start" >
                <div class="logo">
                    <a href="#home">LOGO</a>
                </div>
                <div class="start-links">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
            <div class="foot-end">
                <div class="end-links">
                    <a href="">Terms & Condition</a>
                    <a href="">Privacy Policy</a>
                </div>
                <p>Copyright &copy; 2009-2021. All rights reserved.</p>
            </div>
        </footer>
    </body>
    </html>
    ';
?>
