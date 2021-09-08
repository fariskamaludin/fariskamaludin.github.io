<?php include('header.php'); ?>

<body>
    <div class="bg-circle">
        <div class="c1"></div>
        <div class="c2"></div>
        <div class="c3"></div>
        <div class="c4"></div>
    </div>
    <div class="overlay"></div>
    <div class="main">
        <header class="header">
            <div class="container">
                <div class="row flex-end">
                    <button type="button" class="nav-toggle">
                        <span></span>
                    </button>
                    <nav class="nav">
                        <div class="nav-inner">
                            <ul>
                                <li><a href="#home" class="nav-item link-item">
                                        home
                                        <svg width="13px" height="10px" viewBox="0 0 13 10">
                                            <path d="M1,5 L11,5"></path>
                                            <polyline points="8 1 12 5 8 9"></polyline>
                                        </svg>
                                    </a></li>
                                <li><a href="#about" class="nav-item link-item">
                                        about
                                        <svg width="13px" height="10px" viewBox="0 0 13 10">
                                            <path d="M1,5 L11,5"></path>
                                            <polyline points="8 1 12 5 8 9"></polyline>
                                        </svg>
                                    </a></li>
                                <li><a href="#portfolio" class="nav-item link-item">
                                        portfolio
                                        <svg width="13px" height="10px" viewBox="0 0 13 10">
                                            <path d="M1,5 L11,5"></path>
                                            <polyline points="8 1 12 5 8 9"></polyline>
                                        </svg>
                                    </a></li>
                                <li><a href="#contact" class="nav-item link-item">
                                        contact
                                        <svg width="13px" height="10px" viewBox="0 0 13 10">
                                            <path d="M1,5 L11,5"></path>
                                            <polyline points="8 1 12 5 8 9"></polyline>
                                        </svg>
                                    </a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- Home Section -->
        <section class="home-section align-center active" id="home">
            <div class="container">
                <div class="row align-center">
                    <div class="home-text">
                        <p>Hello, I'm</p>
                        <h1>moh faris kamaludin</h1>
                        <h2>UI/UX Designer</h2>
                        <a href="#about" class="btn link-item">about me</a>
                        <a href="#portfolio" class="btn link-item">portfolio</a>
                    </div>
                    <div class="home-image">
                        <div class="img-box">
                            <img src="source/images/profile.jpg" alt="profile">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section -->
        <section class="about-section section-padding" id="about">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2>about me</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="about-img">
                        <div class="img-box">
                            <img src="source/images/about.jpg" alt="about me">
                        </div>
                    </div>
                    <div class="about-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non faucibus tellus. Curabitur ut vulputate nulla. Praesent porta, sapien vitae accumsan faucibus, massa urna tincidunt diam, quis faucibus nulla urna placerat est. Quisque massa enim, pharetra vitae nibh in, porta laoreet dolor</p>
                        <h3>skills</h3>
                        <div class="skills">
                            <div class="skills-item">UI/UX Design</div>
                            <div class="skills-item">Flutter UI</div>
                            <div class="skills-item">Web Design</div>
                            <div class="skills-item">Figma</div>
                            <div class="skills-item">Adobe XD</div>
                        </div>
                        <div class="about-tabs">
                            <button type="button" class="tab-item active" data-target="#education">education</button>
                            <button type="button" class="tab-item" data-target="#experience">experience</button>
                        </div>
                        <!-- education -->
                        <div class="tab-content active" id="education">
                            <div class="timeline">
                                <div class="timeline-item">
                                    <span class="date">2017 - 2021</span>
                                    <h4>software engineering - <a href="https://bit.ly/3zT80bI" target="_blank"><span>vocational high school 2 jakarta</span></a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non faucibus tellus. Curabitur ut vulputate nulla.</p>
                                </div>
                            </div>
                        </div>

                        <!-- experience -->
                        <div class="tab-content" id="experience">
                            <div class="timeline">
                                <div class="timeline-item">
                                    <span class="date">Feb 2020 - Apr 2020</span>
                                    <h4>web developer - <a href="https://bit.ly/2WVtsim" target="_blank"><span>Kementerian Kesehatan RI</span></a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non faucibus tellus. Curabitur ut vulputate nulla.</p>
                                </div>
                            </div>
                        </div>

                        <a href="https://bit.ly/3jNsnBx" target="_blank" class="btn">download <span>CV</span></a>
                        <a href="#contact" class="btn link-item">contact me</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Section -->
        <section class="portfolio-section section-padding" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2>portfolio</h2>
                    </div>
                </div>
                <div class="row">
                    <!-- divider item -->
                    <?php include('portfolio/item.html'); ?>
                </div>
            </div>
        </section>
        <!-- Contact Section -->
        <section class="contact-session section-padding" id="contact">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2>contact me</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="contact-form">
                        <form action="https://formsubmit.co/fariskamaludin998@gmail.com" method="POST">
                            <div class="row">
                                <div class="input-group">
                                    <input type="text" name="name" placeholder="Name" class="input-control" required>
                                </div>
                                <div class="input-group">
                                    <input type="email" name="email" placeholder="Email" class="input-control" required>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="_subject" placeholder="Subject" class="input-control" required>
                                </div>
                                <div class="input-group">
                                    <textarea name="message" placeholder="Type a Message" class="input-control" cols="30" rows="10" required></textarea>
                                </div>
                                <div class="submit-btn">
                                    <button type="submit" class="btn">Send</button>
                                </div>
                                <input type="hidden" name="_captcha" value="false">
                            </div>
                        </form>
                    </div>
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <h3>email</h3>
                            <p><a href="mailto:fariskamaludin998@gmail.com"><span>fariskamaludin998@gmail.com</span> <i class="fas fa-external-link-alt"></i></a></p>
                        </div>
                        <div class="contact-info-item">
                            <h3>phone</h3>
                            <p>+62-895-0321-7323</p>
                        </div>
                        <div class="contact-info-item">
                            <h3>follow me</h3>
                            <div class="social-link">
                                <a href="http://instagram.com/faris.kmll"><i class="fab fa-instagram"></i></a>
                                <a href="http://t.me/reikoe"><i class="fab fa-telegram-plane"></i></a>
                                <a href="http://twitter.com/versi_beta"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.behance.net/fariskamaludin"><i class="fab fa-behance"></i></a>
                                <a href="https://github.com/fariskamaludin/"><i class="fab fa-github"></i></a>
                                <a href="https://www.linkedin.com/in/faris-kamaludin/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- popup -->
    <div class="popup-portfolio">
        <div class="pp-inner">
            <div class="pp-content">
                <div class="pp-header">
                    <button type="button" class="btn pp-close"><i class="fas fa-times"></i></button>
                    <div class="pp-thumbnail">
                        <img src="" alt="">
                    </div>
                    <h3></h3>
                </div>
                <div class="pp-body">
                </div>
                <button type="button" class="btn close-bottom pp-close1"><i class="fas fa-times"></i></button>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include('footer.php'); ?>
</body>

</html>