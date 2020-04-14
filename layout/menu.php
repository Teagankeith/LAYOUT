                <div id="news">
                    <div onclick="menuSwitch(1, 'news')">
                        <div class="nav">
                            <div style="float: left; width: 157px; height: 34px;"><img src="layout/images/latestnews.png" alt="Latest News" /></div>
                            <div id="news_Icon" style="background-image: url('layout/images/minus.gif'); background-position: bottom right; background-repeat: no-repeat; float: left; width: 23px; height: 34px;"></div>
                        </div>
                    </div>
                    <div id="news_Submenu">
                        <div class="links">
                            <ul>
                                <li><a href="index.php">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div id="account">
                    <div onclick="menuSwitch(2, 'account')">
                        <div class="nav">
                            <div style="float: left; width: 157px; height: 34px;"><img src="layout/images/account.png" alt="Account" /></div>
                            <div id="account_Icon" style="background-image: url('layout/images/plus.gif'); background-position: bottom right; background-repeat: no-repeat; float: left; width: 23px; height: 34px;"></div>
                        </div>
                    </div>
                    <div id="account_Submenu">
                        <div class="links">
                            <ul>
								<li><a href="sub.php?page=accountmanagement">Account Management</a></li>
							<?php if (user_logged_in() === true) {
								echo '<li><a href="createcharacter.php">Create Character</a></li>';
								echo '<li><a href="changepassword.php">Change Password</a></li>';
								if (is_admin($user_data)) include 'layout/widgets/Wadmin.php';
								echo '<li><a href="logout.php">Logout</a></li>';

							} else {
								echo '<li><a href="register.php">Create Account</a></li>';
							} ?>
								<li><a href="downloads.php">Downloads</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div id="community">
                    <div onclick="menuSwitch(3, 'community')">
                        <div class="nav">
                            <div style="float: left; width: 157px; height: 34px; "><img src="layout/images/community.png" alt="Community" /></div>
                            <div id="community_Icon" style="background-image: url('layout/images/plus.gif'); background-position: bottom right; background-repeat: no-repeat; float: left; width: 23px; height: 34px;"></div>
                        </div>
                    </div>
                    <div id="community_Submenu">
                        <div class="links">
                            <ul>
								<li><a href="sub.php?page=search">Search Character</a></li>
								<li><a href="forum.php">Forum</a></li>	
								<li><a href="onlinelist.php">Who is Online?</a></li>
								<li><a href="highscores.php">Highscores</a></li>
								<li><a href="deaths.php">Last Kills</a></li>
								<li><a href="topfrags.php">Top Fraggers</a></li>
								<li><a href="houses.php">Houses</a></li>	
								<li><a href="support.php">Support List</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div id="library">
                    <div onclick="menuSwitch(4, 'library')">
                        <div class="nav">
                            <div style="float: left; width: 157px; height: 34px;"><img src="layout/images/library.png" alt="Library" /></div>
                            <div id="library_Icon" style="background-image: url('layout/images/plus.gif'); background-position: bottom right; background-repeat: no-repeat; float: left; width: 23px; height: 34px;"></div>
                        </div>
                    </div>
                    <div id="library_Submenu">
                        <div class="links">
                            <ul>
								<li><a href="gallery.php">Gallery</a></li>
								<li><a href="serverinfo.php">Server Info</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
				<div id="shops">
					<div onclick="menuSwitch(5, 'shops')">
						<div class="nav">
							<div style="float: left; width: 157px; height: 34px;"><img src="layout/images/shops.png" alt="Shops" /></div>
							<div id="shops_Icon" style="background-image: url('layout/images/plus.gif'); background-position: bottom right; background-repeat: no-repeat; float: left; width: 23px; height: 34px;"></div>
						</div>
					</div>
					<div id="shops_Submenu">
						<div class="links">
							<ul>
								<li><a href="buypoints.php">Buy Points</a></li>
								<li><a href="shop.php">Shop</a></li>
							</ul>
						</div>
                    </div>
                </div>