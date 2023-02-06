<header>
    <div class="container">
        <div class="header-row">  
            <a class="header-logo" href="./index.php"><img src="./assets/logo.png" alt="logo"/></a>
            <ul>
                <li>
                    <a href="./index.php">Home</a>
                </li>
                <li>
                    <a href="#">Articles</a>
                </li>
                <li>
                    <a href="#">News</a>
                </li>
                <li>
                    <a href="./author.php">Author</a>
                </li>
                <li>
                    <a href="./contact.php">Contact Us</a>
                </li>
            </ul>
            <div class="search-input-with-language-dropdown">
                <div class="search-input">
                    <input placeholder="Search"/>
                    <button><img src="./assets/search-icon.png" alt="search-icon"/></button>
                </div>
            </div>
            <div class="dropdown language-dropdown">
                <img onclick="dropDownFunction()" class="dropbtn" src="./assets/armenia.png" alt="Armenia"/> 
                <div id="myDropdown" class="dropdown-content language-dropdown-content">
                    <a href="#English"><img src="./assets/us.png" alt="United States"/> English</a>
                    <a href="#Russian"><img src="./assets/russia.png" alt="Russia"/> Russian</a>
                    <a href="#Armenian"><img src="./assets/armenia.png" alt="Armenia"/> Armenian</a>
                </div>
            </div>
            <div class="hamburger-icon">
                <img onclick="openNav()" src="./assets/hamburger.png" alt="hamburger icon"/>
            </div>
        </div>
    </div>
</header>

<div id="blogSideNav" class="header-side-nav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a class="header-logo" href="./index.php"><img src="./assets/logo.png" alt="logo"/></a>
    <ul>
        <li>
            <a href="./index.php">Home</a>
        </li>
        <li>
            <a href="#">Articles</a>
        </li>
        <li>
            <a href="#">News</a>
        </li>
        <li>
            <a href="./author.php">Author</a>
        </li>
        <li>
            <a href="./contact.php">Contact Us</a>
        </li>
    </ul>
    <div class="search-input-with-language-dropdown">
        <div class="search-input">
            <input placeholder="Search"/>
            <button><img src="./assets/search-icon.png" alt="search-icon"/></button>
        </div>
    </div>
    <div class="dropdown language-dropdown">
        <img onclick="dropDownFunctionResp()" class="dropbtn" src="./assets/armenia.png" alt="Armenia"/> 
        <div id="myDropdownResp" class="dropdown-content language-dropdown-content">
            <a href="#English"><img src="./assets/us.png" alt="United States"/> English</a>
            <a href="#Russian"><img src="./assets/russia.png" alt="Russia"/> Russian</a>
            <a href="#Armenian"><img src="./assets/armenia.png" alt="Armenia"/> Armenian</a>
        </div>
    </div>
</div>