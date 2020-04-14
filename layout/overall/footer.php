					</div>
                </div>
                <div id="bot"></div>
                <div id="copyrights">
                	<p>&copy; <?php echo $config['site_title'];?> - Engine: <a href="credits.php">Znote AAC</a>.<br/>
					
					<?php 
						echo 'Server date and clock is: '. getClock(false, true) .' Page generated in '. elapsedTime() .' seconds. Q: '.$aacQueries;
					?>
					</p>
                </div>
            </div>
            
            <div id="adverts">
            	<img src="layout/images/statusbanner.png" alt="Status banner" style="border: 0px;" /></a>
                <hr noshade="noshade" size="1" />
					<?php include('layout/widgets/serverinfo.php'); ?>
                <hr noshade="noshade" size="1" />
				<a href="shop.php">
								</a>
            </div>
        </div>
    </body>
</html>