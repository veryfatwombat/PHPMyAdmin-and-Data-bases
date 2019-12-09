<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Author List - Web site for Small Engineering Bookshop Pty Ltd</title>
				<link rel="stylesheet" href="main.css">
				<link rel="stylesheet prefetch" href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.min.css">
					<style type="text/css">
		                table {
								border-collapse: collapse;
								}
						table, th, td {
								border: 1px solid black;
								margin: 5px;
								padding: 5px; 
									}
					</style>
	</head>
	<body>
		<header>
				<h1>Author List</h1>
					<fieldset style="width: 20%">
						<legend style="font-weight: bold">Small Engineering Bookshop Pty Ltd</legend>
							<address>Address: 
									Pearcedale Parade, Broadmeadows VIC 3047
							</address>
								<div>Phone number: 0427 075 009</div>
								<div>Fax number: 0427 075 009</div>
					</fieldset>
		</header>	
			<br>
		<main>
								<nav>
									<ul>
										<li class="var_nav">
											<div class="link_bg"></div>
											<div class="link_title">
												<div class="icon"><i class="icon-home icon-2x"></i></div>
													<a href="index.php"><span>Home</span></a>
											</div>
										</li>
										<li class="var_nav">
											<div class="link_bg"></div>
											<div class="link_title">
												<div class="icon"><i class="icon-briefcase icon-2x"></i></div>
													<a href="about.html"><span>About us</span></a>
											</div>
										</li>
										<li class="var_nav">
											<div class="link_bg"></div>
											<div class="link_title">
												<div class="icon"><i class="icon-lightbulb icon-2x"></i></div>
													<a href="authorlist.php"><span>Author List</span></a>
											</div>
										</li>
										<li class="var_nav">
											<div class="link_bg"></div>
											<div class="link_title">
												<div class="icon"><i class="icon-list icon-2x"></i></div>
													<a href="product.html"><span>Product List</span></a>
											</div>
										</li>
										<li class="var_nav">
											<div class="link_bg"></div>
											<div class="link_title">
												<div class="icon"><i class="icon-align-left icon-2x"></i></div>
													<a href="order.html"><span>Order Form</span></a>
											</div>
										</li>
										<li class="var_nav">
											<div class="link_bg"></div>
											<div class="link_title">
												<div class="icon"><i class="icon-leaf icon-2x"></i></div>
													<a href="https://www.workwell.vic.gov.au/"><span>Origin Energy</span></a>
											</div>
										</li>
										<li class="var_nav">
											<div class="link_bg"></div>
											<div class="link_title">
												<div class="icon"><i class="icon-fire icon-2x"></i></div>
													<a href="https://www.energyaustralia.com.au/"><span>Energy Australia</span></a>
											</div>
										</li>
										<li class="var_nav">
											<div class="link_bg"></div>
											<div class="link_title">
												<div class="icon"><i class="icon-wrench icon-2x"></i></div>
													<a href="https://www.workwell.vic.gov.au/"><span>Worksafe Victoria</span></a>
											</div>
										</li>
										<li class="var_nav">
											<div class="link_bg"></div>
											<div class="link_title">
												<div class="icon"><i class="icon-mobile-phone icon-2x"></i></div>
													<a href="contact.html"><span>Contact us</span></a>
											</div>
										</li>
									</ul>
								</nav>
		</main>
		<aside>
						<article>
				<h2>Author List:</h2>
								<img src="history.jpg" alt="The History of Small Engineering Bookshop Pty Ltd" height="222">
									<p>This is a list of best-selling fiction authors to date, in any language. While finding precise sales numbers for any given author is nearly impossible, the list is based on approximate numbers provided or repeated by reliable sources. "Best selling" refers to the estimated number of copies sold of all fiction books written or co-written by an author. To keep the list manageable, only authors with estimated sales of at least 100 million are included. Authors of comic books are not included unless they have been published in book format.</p>
																		<?php
							            $host = 'localhost';
							            $database = 'books'; 
							            $user = 'root'; 
							            $password = 'root'; 
							            $link = mysqli_connect($host, $user, $password, $database) 
							                or die("Error " . mysqli_error($link)); 
							            $query ="SELECT * FROM Author";
							            $result = mysqli_query($link, $query) or die("Error " . mysqli_error($link)); 
							            if($result)
							            {
							                $rows = mysqli_num_rows($result); 
							                echo "<table>
							                        <tr>
							                            <th>Author_id</th>
							                            <th>FirstName</th>
							                            <th>LastName</th>
							                            <th>email</th>
							                        </tr>";
							                for ($i = 0 ; $i < $rows ; ++$i)
							                {
							                    $row = mysqli_fetch_row($result);
							                    echo "<tr>";
							                    while ($row = mysqli_fetch_row($result)) 
							                        {
							                        echo "<tr>";
							                            for ($j = 0 ; $j < 4 ; ++$j) 
							                            echo "<td>$row[$j]</td>";
							                        echo "</tr>";
							                        }
							                }
							                echo "</table>";
							                mysqli_free_result($result);
							            }          
							            mysqli_close($link);
							        ?>
						</article> 
		</aside>
	</body>
</html>