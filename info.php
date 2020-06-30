<?php
	require "header.php";
?>
    <div class="section references-style">
        <div class="extra info">
            <div class="info-display">
                <p>Referencies:</p>
                <hr class="h-separator">
                <p>TW-Curs 3</p>
                <p>TW-Curs 4</p>
                <p>TW-Curs 5</p>
                <p>TW-Curs 6</p>
                <p>TW-Curs 7</p>
                <p>TW-Curs 8</p>
                <p>TW-Curs 9</p>
                <p>TW-Curs 10</p>
                <p>Limbajul PHP.pdf</p>
                <p>advanced-javascript.205</p>
                <a class="style-none" href="https://www.w3schools.com/">w3schools.com</a>
                <a class="style-none" href="https://stackoverflow.com/">stackoverflow.com</a>
            </div>
        </div>
        <div class="main info">
            <div class="info-display">
                <h4>Proiect Tehnologii Web</h4>
                <hr class="h-separator">
                <h5>Summary</h5>
                <p class="indent">The page is meant to imitate a e-commerce website that sells apiarian products. It has a signup method to centralize customer information. The store page can be used more easily by using the drop-down search bar which was created using JAVASCRIPT code. The products have visual and informational display allocated dynamicaly using PHP code.<br></p>
                <p class="indent"> The pages are created dynamicaly requiring a standard header and footer. The only exception being the store page which has a custom header file. The content was carefully created in order to respect a decent visibility, a unique design and easefullness management and navigation.<br></p>
                <p class="indent">The database (loginsystem) contains 3 tables, one for users, one for user's profile photo and one for products and it displays data inside the pages and also receives data through forms.</p>
                <hr class="h-separator">
                <p class="indent">Custom elements used: </p>
                <ul class="list-elements">
                    <li>Global:
                        <ul>
                            <li>Button hover effects (CSS)</li>
                            <li>Link hover effects (CSS)</li>
                            <li>Sticky Navigation bar (CSS)</li>
                            <li>Circle animations (CSS)</li>
                            <li>Login form (PHP,HTML)</li>
                            <li>Login submit sets a session id (PHP,MySQL)</li>
                            <li>Login submit unlocks Profile page (PHP,MySQL)</li>
                        </ul>
                    </li>
                    <li>Home Page:</li>
                        <ul>
                            <li>List custom display (CSS)</li>
                            <li>List lines hover effects (CSS)</li>
                        </ul>
                    <li>Store Page:</li>
                        <ul>
                            <li>Item display custom effects (CSS)</li>
                            <li>Search bar for item list (JAVASCRIPT)</li>
                            <li>Items dynamic display (PHP,MySQL)</li>
                            <li>Items redirects to dynamic alocated pages (PHP,MySQL)</li>
                        </ul>
                    <li>Product Page:</li>
                        <ul>
                            <li>Item details displayed dynamically (PHP,SQL)</li>
                            <li>Return button (PHP)</li>
                        </ul>
                    <li>Sign up Page:</li>
                        <ul>
                            <li>Sing up form POST method used (HTML)</li>
                            <li>Submit button inserts data into the database (PHP,MySQL)</li>
                        </ul>
                    <li>Profile Page:</li>
                        <ul>
                            <li>User profile details displayed dynamically (PHP,MySQL)</li>
                            <li>Profile image upload input type (PHP,MySQL)</li>
                            <li>Input type hover effects (CSS)</li>
                        </ul>
                </ul>
                <hr class="h-separator">
                <p class="indent">Project code files tree: </p>
                <ul class="list-elements">
                    <li>Tw-project:
                    <ul>
                        <li>images:
                        <ul>
                            <li>product-images:
                                <ul>
                                    <li>CSS:images:jpg</li>
                                </ul>
                            </li>
                            </li>
                            <li>CSS:images:jpg:png</li>
                        </ul>
                        </li>
                        <li>includes:
                        <ul>
                            <li>dbh.inc.php (database connection)</li>
                            <li>login.inc.php (log in PHP code)</li>
                            <li>logout.inc.php (log out PHP code)</li>
                            <li>signup.inc.php (sign up PHP code)</li>
                        </ul>
                        </li>
                        <li>uploads:
                        <ul>
                            <li>CSS:SQL:images:jpg:jpeg:png</li>
                        </ul>
                        </li>
                        <li>style.css</li>
                        <li>footer.php</li>
                        <li>header.php</li>
                        <li>header+search.php</li>
                        <li>health.php</li>
                        <li>index.php</li>
                        <li>info.php</li>
                        <li>product-page.php</li>
                        <li>profile.php</li>
                        <li>signup.php</li>
                        <li>store.php</li>
                        <li>upload.php</li>

                    </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php
	require "footer.php";
?>