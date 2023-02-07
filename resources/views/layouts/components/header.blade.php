<div class="menu d-flex">
    <div class="open-menu">
        <span></span>
        <span></span>
        <span></span>
        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-x-lg close-menu-btn" viewBox="0 0 16 16">
            <path stroke="white" stroke-width="1"  fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
            <path stroke="white" stroke-width="1"  fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
        </svg>
    </div>
    <div class="option">
        <div class="left">
            <a href="/" title="Home">
                <svg id="logo-header-1" width="312" height="51">
                    <use xlink:href="#logo-header"></use>
                </svg>
                <svg id="logo-header-2" width="312" height="51">
                    <use xlink:href="#logo-header2"></use>
                </svg>
            </a>
        </div>
        <div class="right d-flex align-items-center">
            <ul>
                <li>
                    <a href="/about" title="Who we are">Who we are</a>
                </li>
                <li>
                    <a href="/projects" title="How we work">How we work</a>
                </li>
                <li>
                    <a href="/contact" title="Contact us">Contact us</a>
                </li>
            </ul>
            <a href="/hire-us" title="Hire us" class="white-btn"><span>Hire us</span></a>
            <a href="/free-consulting" title="Free Consulting" class="transparent-btn"><span>Free Consulting</span></a>
            <div class="language">
                <span class="active-language">Ro </span>
                /
                <span> En</span>
            </div>
        </div>
    </div>
</div>

<div class="burger-menu">
    <div class="logo-burger">
        <a href="/" title="Home">
            <svg width="310" height="126">
                <use xlink:href="#burger-active"></use>
            </svg>
        </a>
    </div>
    <ul>
        <li>
            <a href="/about" title="Who we are">Who we are</a>
        </li>
        <li>
            <a href="/projects" title="How we work">How we work</a>
        </li>
        <li>
            <a href="/contact" title="Contact us">Contact us</a>
        </li>
    </ul>
    <div class="btns-burger">
        <a href="/hire-us" title="Hire us" class="white-btn header-btn"><span>Hire us</span></a>
        <a href="/free-consulting" title="Free Consulting" class="transparent-btn header-btn"><span>Free Consulting</span></a>
    </div>
    <div class="language">
        <span class="active-language">Ro </span>
        /
        <span> En</span>
    </div>
    @include('layouts.components.socials-link-svg')
    <div class="copyright">
        <p class="d-none d-md-block">Coyright 2021 <span>SUSHI-TECH</span>. Developed by <span>Expert Vision Agency</span>.</p>
        <p class="d-none d-md-block">Crafted by - <span>Alin raileanu</span>.</p>
        <p class="d-block d-md-none">Coyright 2021 <span>SUSHI-TECH</span>. </p>
    </div>
</div>



