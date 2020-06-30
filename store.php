<?php
	require "header+search.php";
	include_once 'includes/dbh.inc.php';
    $sql = "SELECT id_product, product_name, product_image FROM product;";
    error_reporting (E_ALL ^ E_NOTICE);
	$result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
	$lineCheck = mysqli_num_fields($result);
	$linebreak=0;
	$sql2 = "SELECT id_product, product_name FROM product;";
	$result2 = mysqli_query($conn, $sql);
?>
		<div class="position">
		<div class="dropdown">
					<input onclick="myFunction()" type="text" placeholder="Search product.." id="myInput" class="textarea" onkeyup="filterFunction()">
					<div id="myDropdown" class="dropdown-content fonts-display">
					<?php 
						while($row = mysqli_fetch_assoc($result2)) {
							$ID2 = $row['id_product'];
							echo "<a href='product-page.php?ID=";
							echo $ID2."'>{$row['product_name']}</a>";
						}
					?>
					
					</div>
				</div>
					</div>
		<div id="wrap" class="container">
			<div id="header" class="clearfix section">
				<div id="nav" class="center">
					<div class="fonts-display clearfix">
						<p class="text-left alpha">
							<a href="index.php">Home</a>
						</p><p class="text-left">
							<a href="store.php">Store</a>
						</p><p class="text-left">
							<a href="Health.php">Health</a>
						</p><p class="logo">
							<a>
								<img class="logo-type" src="images/logo-type.png" alt="Build By">
								<img class="logo-img" src="images/logo-plain.png">
							</a>
						</p><p class="text-right">
							<a href="info.php">Info</a>
						</p><p class="text-right">
						<?php
								if(isset($_SESSION['userId'])) {
									echo '<a href="profile.php?=';echo $ID.'">Profile</a>';
								}
								else {
									echo '<a href="signup.php">Sign up</a>';
								}
							?>
						</p><p class="text-right omega">
							<a href="contact.php">Contact</a>
						</p>
					</div>
				</div>
                
                <h1 class="title">.Store</h1>
				<h4 class="sub-title">pick your favourite</h4>
				<div class="section display-items table">
					<?php
						echo '<div class="tr">';
						if($resultCheck >0) {
							while($row = mysqli_fetch_assoc($result)) {
								if($linebreak / 4 !== 1) {
									
								}
								else {
									echo '</div><div class="tr">';
									$linebreak = 0;
								}
								++$linebreak;
								$ID = $row['id_product'];
								echo '<div class="td">';
									echo "<div class='item-box'><a href='product-page.php?ID=";echo $ID."'>";
									echo '<img class="display-product-image" src="data:image/jpeg;base64,'.base64_encode($row['product_image']) .'" />';
									echo "<div class='middle'><div class='item-name'>{$row['product_name']}</div></div></a></div>";
								echo '</div>';
									
							}
							
						}
						echo'</div>'
					?>
					
				</div>
			</div>
			<script>
					function myFunction() {
					document.getElementById("myDropdown").classList.toggle("show");
					}

					function filterFunction() {
						var input, filter, a, i;
						input = document.getElementById("myInput");
						filter = input.value.toUpperCase();
						div = document.getElementById("myDropdown");
						a = div.getElementsByTagName("a");
						for (i = 0; i < a.length; i++) {
							txtValue = a[i].textContent || a[i].innerText;
							if (txtValue.toUpperCase().indexOf(filter) > -1) {
							a[i].style.display = "";
							} else {
							a[i].style.display = "none";
							}
						}
					}
				</script>				

<?php
	require "footer.php";
	exit();
?>