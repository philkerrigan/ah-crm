<?php global $active;
    $active ='return';
    include('header.php');
?>

<section id="content" role="main">

	<div class="two column alpha">
        <?php include('sidebar.php')?>
    </div>

	<div class="ten column omega">

        <div class="page-title">Returns</div>

            <ul class="tabnav">
            	<li class="return-tab"><a href="#">Inbox</a></li>
                <li class="return-tab"><a href="#">Order Found</a></li>
                <li class="return-tab"><a href="#">Order Not Found</a></li>
                <li class="return-tab"><a href="#">Dealt With</a></li>
                <li class="return-tab"><a href="#">Ignored</a></li>
                <li class="return-tab"><a href="#">All</a></li>
            </ul>
            <button class="upload-return-sheet-btn">Upload Return Sheet</button>

            <hr>
        	<div class="returns-sub-nav">
            	<ul>
                	<li><a href="#">Ignore</a> //</li>
                    <li><a href="#">Uingnore</a> //</li>
                    <li><a href="#">Mark as Dealt With</a> //</li>
                    <li><a href="#">Mark as Not Dealt With</a> //</li>
                    <li><a href="#">Refresh</a></li>
                </ul>
            </div>

        	<div class="pagination-top">1 - 50 of 221 <a href="#">Next ›</a> <a href="#">Last »</a></div>

			<table id="returns-list" data-query="search%5Bbox%5D=inbox" data-limit="50" data-count="147" data-page="1">
					<thead>
					<tr>
  						<th><div class="returns-check"><input type="checkbox" value="None" name="check" /><label></label></div></th>
						    <th>Name</th>
					    <th>Condition</th>
						<th>Reason</th>
						<th>Notes</th>
						<th>Order</th>
						<th>Date</th>
					</tr>
				</thead>

				<tbody>
					<tr class="return-row" data-return-id="150897">
						<td><div class="returns-check"><input type="checkbox" value="None" name="check" /><label></label></div></td>
    					<td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Thrown Away (Seal Broken)</a></td>
    					<td><a href="/ah-crm/return123.php">Tracking #</a></td>
						<td><a href="/ah-crm/return123.php"><span class="return-row-notes">ups#1ZAW664023740/cancel/refund req</span></a></td>
    					<td><a href="/ah-crm/return123.php">3737556</a></td>
    					<td><a href="/ah-crm/return123.php">2013-03-08</a></td>
  					</tr>
					<tr class="return-row" data-return-id="150898">
    					<td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Cust. Pd Postage</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes">cancel/ refund req</span></a></td>
                        <td><a href="/ah-crm/return123.php">31478561</a></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150899">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Cust. Pd Postage</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes"></span></a></td>
                        <td></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150900">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Refused</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes"></span></a></td>
                        <td></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150901">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Refused</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes"></span></a></td>
                        <td></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150902">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Thrown Away (Seal Broken)</a></td>
                        <td><a href="/ah-crm/return123.php">Cust. Pd Postage</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes">cancel/ refund req </span></a></td>
                        <td></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150903">
                    	<td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Cust. Pd Postage</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes">cancel/ refund req </span></a></td>
                        <td></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150904">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Refused</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes"></span></a></td>
                        <td></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150905">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Refused</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes"></span></a></td>
                        <td><a href="/ah-crm/return123.php">3444489</a></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150906">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Refused</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes"></span></a></td>
                        <td></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150907">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Refused</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes">cancel/ refund req</span></a></td>
                        <td></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150908">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Cust. Pd Postage</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes"></span></a></td>
                        <td><a href="/ah-crm/return123.php">3777778</a></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150909">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Refused</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes"></span></a></td>
                        <td></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150910">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Cust. Pd Postage</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes"></span></a></td>
                        <td><a href="/ah-crm/return123.php">3775555</a></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150911">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Refused</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes"></span></a></td>
                        <td><a href="/ah-crm/return123.php">355555</a></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150912">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Refused</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes"></span></a></td>
                        <td></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150913">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Refused</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes"></span></a></td>
                        <td><a href="/ah-crm/return123.php">35645571</a></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150914">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Refused</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes"></span></a></td>
                        <td></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150915">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Tracking #</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes">cert#70120769537/ cancel/ refund req</span></a></td>
                        <td></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150916">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Refused</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes"></span></a></td>
                        <td><a href="/ah-crm/return123.php">375675672</a></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150917">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Refused</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes"></span></a></td>
                        <td></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150918">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Thrown Away (Seal Broken</a></td>
                        <td><a href="/ah-crm/return123.php">Cust. Pd Postage</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes"></span></a></td>
                        <td></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150919">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Cust. Pd Postage</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes"></span></a></td>
                        <td><a href="/ah-crm/return123.php">4564565</a></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150920">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Cust. Pd Postage</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes">cancel/ refund req</span></a></td>
                        <td><a href="/ah-crm/return123.php">3745722</a></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150921">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Cust. Pd Postage</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes"></span></a></td>
                        <td><a href="/ah-crm/return123.php">1235991</a></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150922">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Cust. Pd Postage</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes"></span></a></td>
                        <td></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150923">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Cust. Pd Postage</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes"></span></a></td>
                        <td><a href="/ah-crm/return123.php">4565637</a></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                    </tr>
                    <tr class="return-row" data-return-id="150924">
                        <td><div class="returns-check"><input type="checkbox" /><label></label></div></td>
                        <td><a href="/ah-crm/return123.php">John Doe</a></td>
                        <td><a href="/ah-crm/return123.php">Resalable</a></td>
                        <td><a href="/ah-crm/return123.php">Refused</a></td>
                        <td><a href="/ah-crm/return123.php"><span class="return-row-notes"></span></a></td>
                        <td></td>
                        <td><a href="/ah-crm/return123.php">2013-03-08</a></td>
                   </tr>
				</tbody>
			</table>

            <div class="pagination-bottom">1 - 50 of 221 <a href="#">Next ›</a> <a href="#">Last »</a></div>

    </div><!--.ten.column.omega-->

</section><!-- #main -->

<?php include('footer.php')?>
