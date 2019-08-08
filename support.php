<?php global $active;
    $active ='support';
    include('header.php');
?>

<section id="content" role="main">

    <div class="two column alpha">
        <?php include('sidebar.php')?>
    </div>

	<div class="ten column omega">

        <div class="page-title">Support</div>

			<div id="status-radios" class="radios span-32 first last">
            	<ul class="support tabnav">
						<li><input type="radio" name="status" id="status-open-radio" value="Open" checked /><label for="status-open-radio">Open</label></li>
                	<li><input type="radio" name="status" id="status-pending-radio" value="Pending" /><label for="status-pending-radio">Pending</label></li>
                	<li><input type="radio" name="status" id="status-needs-follow-up-radio" value="Needs Follow Up" /><label for="status-needs-follow-up-radio">Needs Follow Up</label></li>
                	<li><input type="radio" name="status" id="status-closed-radio" value="Closed" /><label for="status-closed-radio">Closed</label></li>
                	<li><input type="radio" name="status" id="status-all-radio" value="All" /><label for="status-all-radio">All</label></li>
                </ul>
            </div>

			<hr>
			<ul class="tickets-list" class="span-26 first">

      			<li class="ticket" data-status="Open">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">refund</span>
  							<span class="timestamp">March 4, 2013 12:12 PM</span>
  							<span class="status">(Open)</span>
				 			</div>
						</a>
                </li>

          		<li class="ticket" data-status="Open">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">reship product</span>
  							<span class="timestamp">March 4, 2013 12:08 PM</span>
  							<span class="status">(Open)</span>
						</div>
						</a>
				</li>

          		<li class="ticket" data-status="Open">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#45645465</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">postphone</span>
  							<span class="timestamp">March 4, 2013 11:28 AM</span>
  							<span class="status">(Open)</span>
						</div>
					</a>
				</li>

          		<li class="ticket" data-status="Needs Follow Up">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">refund request</span>
  							<span class="timestamp">March 4, 2013 10:01 AM</span>
  							<span class="status">(Needs Follow Up)</span>
						</div>
					</a>
				</li>

				<li class="ticket" data-status="Open">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">cancel after first rebill</span>
  							<span class="timestamp">March 3, 2013 10:48 PM</span>
  							<span class="status">(Open)</span>
						</div>
					</a>
				</li>

				<li class="ticket" data-status="Open">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">cancel after first rebill</span>
  							<span class="timestamp">March 3, 2013 10:47 PM</span>
  							<span class="status">(Open)</span>
						</div>
					</a>
				</li>

          		<li class="ticket" data-status="Open">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">cancel after first rebill</span>
  							<span class="timestamp">March 3, 2013 10:42 PM</span>
  							<span class="status">(Open)</span>
						</div>
					</a>
				</li>

          		<li class="ticket" data-status="Open">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">cancel after first rebill</span>
  							<span class="timestamp">March 3, 2013 10:32 PM</span>
  							<span class="status">(Open)</span>
						</div>
						</a>
				</li>

          		<li class="ticket" data-status="Open">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
 							<span class="user-name">John Doe</span>
  							<span class="subject">cancel after first rebill</span>
  							<span class="timestamp">March 3, 2013 10:26 PM</span>
  							<span class="status">(Open)</span>
						</div>
					</a>
				</li>

          		<li class="ticket" data-status="Open">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#144546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">cancel after first rebill</span>
  							<span class="timestamp">February 27, 2013 3:14 PM</span>
  							<span class="status">(Open)</span>
						</div>
					</a>
				</li>

          		<li class="ticket" data-status="Open">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">cancel after first rebill</span>
  							<span class="timestamp">February 26, 2013 1:45 PM</span>
  							<span class="status">(Open)</span>
						</div>
					</a>
				</li>

          		<li class="ticket" data-status="Open">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">cancel after first rebill</span>
  							<span class="timestamp">February 26, 2013 1:45 PM</span>
  							<span class="status">(Open)</span>
						</div>
					</a>
				</li>

          		<li class="ticket" data-status="Open">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">cancel after first rebill</span>
  							<span class="timestamp">February 26, 2013 1:45 PM</span>
        					<span class="status">(Open)</span>
						</div>
					</a>
				</li>

          		<li class="ticket" data-status="Open">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">Health Food Store Owner</span>
  							<span class="timestamp">February 5, 2013 1:43 PM</span>
  							<span class="status">(Open)</span>
						</div>
					</a>
				</li>

          		<li class="ticket" data-status="Needs Follow Up">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">bad address</span>
  							<span class="timestamp">January 27, 2013 9:33 PM</span>
  							<span class="status">(Needs Follow Up)</span>
						</div>
					</a>
				</li>

				<li class="ticket" data-status="Needs Follow Up">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">Shipping change</span>
  							<span class="timestamp">January 22, 2013 6:21 PM</span>
  							<span class="status">(Needs Follow Up)</span>
						</div>
					</a>
				</li>

          		<li class="ticket" data-status="Needs Follow Up">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">change ship date</span>
  							<span class="timestamp">January 2, 2013 2:32 PM</span>
  							<span class="status">(Needs Follow Up)</span>
						</div>
					</a>
				</li>

          		<li class="ticket" data-status="Needs Follow Up">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">other</span>
  							<span class="timestamp">December 5, 2012 3:46 PM</span>
  							<span class="status">(Needs Follow Up)</span>
						</div>
					</a>
				</li>

          		<li class="ticket" data-status="Closed">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">Cancellation Request</span>
  							<span class="timestamp">March 4, 2013 12:13 PM</span>
  							<span class="status">(Closed)</span>
						</div>
					</a>
				</li>

          		<li class="ticket" data-status="Closed">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">Cancellation of Autobilling</span>
  							<span class="timestamp">March 4, 2013 12:12 PM</span>
  							<span class="status">(Closed)</span>
						</div>
						</a>
				</li>

          		<li class="ticket" data-status="Closed">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">billing inquirey</span>
  							<span class="timestamp">March 4, 2013 12:11 PM</span>
  							<span class="status">(Closed)</span>
						</div>
						</a>
				</li>

          		<li class="ticket" data-status="Closed">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">rma and return info</span>
  							<span class="timestamp">March 4, 2013 12:11 PM</span>
  							<span class="status">(Closed)</span>
						</div>
					</a>
				</li>

          		<li class="ticket" data-status="Closed">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">tracking info provided</span>
  							<span class="timestamp">March 4, 2013 12:11 PM</span>
  							<span class="status">(Closed)</span>
			 			</div>
					</a>
				</li>

          		<li class="ticket" data-status="Pending">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">additional 90 ct</span>
  							<span class="timestamp">March 4, 2013 12:10 PM</span>
  							<span class="status">(Pending)</span>
						</div>
					</a>
				</li>

          		<li class="ticket" data-status="Pending">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#14564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">cancellation</span>
  							<span class="timestamp">March 4, 2013 12:10 PM</span>
  							<span class="status">(Pending)</span>
						</div>
					</a>
				</li>

          		<li class="ticket" data-status="Pending">
                	<a href="/ah-crm/customer.php#ticket">
						<div class="ticket-stub">
  							<span class="id">#4564546</span>
  							<span class="user-name">John Doe</span>
  							<span class="subject">Hold order</span>
  							<span class="timestamp">March 4, 2013 12:09 PM</span>
  							<span class="status">(Pending)</span>
						</div>
						</a>
				</li>

			</ul>

    </div><!--.ten.column.omega-->

</section><!-- #main -->

<?php include('footer.php')?>
