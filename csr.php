<?php global $active;
    $active ='csr';
    include('header.php');
?>

<section id="content" role="main">

	<div class="two column alpha">
        <div class="two column alpha">
            <?php include('sidebar.php')?>
        </div>
    </div><!--.two.column.alpha-->

	<div class="ten column omega">

        <div class="page-title">CSR Resources</div>

    	<div id="tabs">

        	<ul class="tabnav">
            	<li><a href="#call-center">Call Center Filed</a></li>
            	<li><a href="#knowledge-base">Knowledge Base</a></li>
                <li><a href="#my-qa-inbox">My Q&A Inbox</a></li>
        	</ul>

        	<div id="call-center" class="tabdiv">

            	<hr>
                <div class="page-subtitle">Call Center Filed</div>

        	</div><!--#customer-info-->

        	<div id="knowledge-base" class="tabdiv">

            	<div class="six column alpha">

                    <hr>
                    <div class="page-subtitle">Search Articles</div>

                    <div class="btn-back">
                        <input type="text" id="search-article" name="" placeholder="Search article here..." />
                        <span><button class="positive submit" name="" value="3710878">Search</button></span>
                    </div><!--.btn-back-->
                </div>

            	<div class="six column omega">

                    <hr>
                    <div class="page-subtitle">Sort Articles</div>

                    <div class="btn-back">
                        <span>
                            <select class="return-action-select">
                                <option value="Ignore">Sort</option>
                                <option value="Unignore">Unignore</option>
                                <option value="Mark as Dealt">Mark as Dealt</option>
                                <option value="Mark as Not Dealt">Mark as Not Dealt</option>
                                <option value="Refresh">Refresh</option>
                            </select>
                        </span>
                        <span><button class="positive submit" name="" value="3710878">Sort</button></span>
                    </div><!--.btn-back-->
                </div>

                <div class="pagination-top">1 - 50 of 221 <a href="#">Next ›</a> <a href="#">Last »</a></div><div style="clear:both;"></div>

                <hr>
                <div class="page-subtitle">Knowledge Base Articles</div>

                    <div class="btn-back">

                            <p style="font-size:14px; margin-top:0; margin-bottom:4px;">Subject:</p>
                            <input style="width:76%; margin-top:3px;" type="text" id="" name="" placeholder="What are the ingrediants of Instaflex?" />
                    		<span><button class="positive submit" name="" value="3710878">Edit</button></span>
                        	<span><button class="positive submit" name="" value="3710878">Unpublish</button></span>

                            <div class="rule"></div>

                            <p style="font-size:14px; margin-top:0; margin-bottom:4px;">Content:</p>
                            <textarea id="content-field" name="" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</textarea>

                            <p style="font-size:14px; margin-top:0; margin-bottom:4px;">Tags:</p>
                            	<input type="text" id="" name="" placeholder="Luminday, Instaflex, ..." />
                            <p style="font-size:14px; margin-top:0; margin-bottom:4px;">Categories:</p>
                                <span>
                                    <select class="action-select">
                                        <option value="Ignore">-- Select Category --</option>
                                        <option value="Unignore">Unignore</option>
                                        <option value="Mark as Dealt">Mark as Dealt</option>
                                        <option value="Mark as Not Dealt">Mark as Not Dealt</option>
                                        <option value="Refresh">Refresh</option>
                                    </select>
                                </span>

                    </div><!--.btn-back-->

        	</div><!--#knowledge-base-->

       		<div id="my-qa-inbox" class="tabdiv">

            	<div class="six column alpha">

                    <hr>
                    <div class="page-subtitle">Ask a Question</div>

                    <div class="btn-back">
                        <input type="text" id="" name="" placeholder="Ask a question here..." />
                        <span>
                            <select class="return-action-select">
                                <option value="Ignore">Ignore</option>
                                <option value="Unignore">Unignore</option>
                                <option value="Mark as Dealt">Mark as Dealt</option>
                                <option value="Mark as Not Dealt">Mark as Not Dealt</option>
                                <option value="Refresh">Refresh</option>
                            </select>
                        </span>
                        <span><button class="positive submit" name="" value="3710878">Submit Question</button></span>
                    </div><!--.btn-back-->
                </div>

            	<div class="six column omega">

                    <hr>
                    <div class="page-subtitle">Search for Question</div>

                    <div class="btn-back">
                        <input type="text" id="" name="" placeholder="Search..." />
                        <span>
                            <select class="return-action-select">
                                <option value="Ignore">Sort</option>
                                <option value="Unignore">Unignore</option>
                                <option value="Mark as Dealt">Mark as Dealt</option>
                                <option value="Mark as Not Dealt">Mark as Not Dealt</option>
                                <option value="Refresh">Refresh</option>
                            </select>
                        </span>
                        <span><button class="positive submit" name="" value="3710878">Search</button></span>
                    </div><!--.btn-back-->
                </div>

                <div class="pagination-top">1 - 50 of 221 <a href="#">Next ›</a> <a href="#">Last »</a></div><div style="clear:both;"></div>

                <hr>
                <div class="page-subtitle">Questions</div>

					<div id="support-tickets-tab">
      				<ul class="tickets-list">
                       	<li class="ticket" data-status="Open" data-ticket-id="156442">
								<div class="ticket-stub">
                               	<span style="font-size:11px; margin-right:4px; position:relative; top:-2px;">&#9660;</span>
								<span class="timestamp">February 28, 2013 10:42 AM</span>
								<span class="user-name">Author: John Doe</span>
								<span class="subject">Priority: Normal</span>
								<span class="status">Status: New</span>
                                <span><button class="positive submit" name="" value="3710878">Publish knowledge base article</button></span>
                                <div class="ticket-message" style="margin-top:10px;">
									cci to ask if they were billed for item they received. cust did not about autoship. cancelled autoship. cust would like to return most recent autoship. gave rma and return info ap gisellen
                                </div><!--.ticket-message-->
							</div><!--.ticket-stub-->

								<div class="ticket-body">

								<div class="ticket-message">
									cci to ask if they were billed for item they received. cust did not about autoship. cancelled autoship. cust would like to return most recent autoship. gave rma and return info ap gisellen
                                </div><!--.ticket-message-->

								<ul class="comments">
									<li id="comment-166339" class="comment" data-comment-id="166339">
										<div class="comment-stub">
											<span class="comment-user-name">John Doe</span>
											<span class="comment-timestamp">February 28, 2013 10:42 AM</span>
											<span class="comment-status">(Closed)</span>
										</div><!--.comment-stub-->
										<div class="comment-body">
											<div class="comment-message"><em>Status changed to "Closed".</em></div>
										</div><!--.comment-body-->
									</li>
              					</ul><!--.comments-->

								<div class="new-comment">
  									<form method="post" action="/new-master/orders/3635448/tickets/156442/comments/create">
											<textarea id="comment-message-textarea" name="comment[message]" placeholder="Reply Here / Change Status"></textarea>
										<span class="form-buttons">
											<button class="save-btn">Reply</button>
										</span>
	  									<span class="loading-indicator hide">Saving...</span>
											<span class="hide error validation-message">Please enter a message or select a new status.</span>
									</form>
								</div><!--.new-comment-->

								</div><!--.ticket-body-->

						</li><!--.ticket-->
                	</ul><!--.tickets-list-->

            	</div><!--#support-tickets-tab-->

					<div id="support-tickets-tab">
      				<ul class="tickets-list">
                       	<li class="ticket" data-status="Pending" data-ticket-id="156442">
								<div class="ticket-stub">
                               	<span style="font-size:11px; margin-right:4px; position:relative; top:-2px;">&#9660;</span>
								<span class="timestamp">February 28, 2013 10:42 AM</span>
								<span class="user-name">Author: John Doe</span>
								<span class="subject">Priority: Low</span>
								<span class="status">Status: Deleted</span>
                                <span><button class="positive submit" name="" value="3710878">Publish knowledge base article</button></span>
                                <div class="ticket-message" style="margin-top:10px;">
									cci to ask if they were billed for item they received. cust did not about autoship. cancelled autoship. cust would like to return most recent autoship. gave rma and return info ap gisellen
                                </div><!--.ticket-message-->
							</div><!--.ticket-stub-->

								<div class="ticket-body">

								<div class="ticket-message">
									cci to ask if they were billed for item they received. cust did not about autoship. cancelled autoship. cust would like to return most recent autoship. gave rma and return info ap gisellen
                                </div><!--.ticket-message-->

								<ul class="comments">
									<li id="comment-166339" class="comment" data-comment-id="166339">
										<div class="comment-stub">
											<span class="comment-user-name">John Doe</span>
											<span class="comment-timestamp">February 28, 2013 10:42 AM</span>
											<span class="comment-status">(Closed)</span>
										</div><!--.comment-stub-->
										<div class="comment-body">
											<div class="comment-message"><em>Status changed to "Closed".</em></div>
										</div><!--.comment-body-->
									</li>
              					</ul><!--.comments-->

								<div class="new-comment">
  									<form method="post" action="/new-master/orders/3635448/tickets/156442/comments/create">
											<textarea id="comment-message-textarea" name="comment[message]" placeholder="Reply Here / Change Status"></textarea>
										<span class="form-buttons">
											<button class="save-btn">Reply</button>
										</span>
	  									<span class="loading-indicator hide">Saving...</span>
											<span class="hide error validation-message">Please enter a message or select a new status.</span>
									</form>
								</div><!--.new-comment-->

								</div><!--.ticket-body-->

						</li><!--.ticket-->
                	</ul><!--.tickets-list-->

            	</div><!--#support-tickets-tab-->

					<div id="support-tickets-tab">
      				<ul class="tickets-list">
                       	<li class="ticket" data-status="Needs Follow Up" data-ticket-id="156442">
								<div class="ticket-stub">
                               	<span style="font-size:11px; margin-right:4px; position:relative; top:-2px;">&#9660;</span>
								<span class="timestamp">February 28, 2013 10:42 AM</span>
								<span class="user-name">Author: John Doe</span>
								<span class="subject">Priority: Critical</span>
								<span class="status">Status: Replied</span>
                                <span><button class="positive submit" name="" value="3710878">Publish knowledge base article</button></span>
                                <div class="ticket-message" style="margin-top:10px;">
									cci to ask if they were billed for item they received. cust did not about autoship. cancelled autoship. cust would like to return most recent autoship. gave rma and return info ap gisellen
                                </div><!--.ticket-message-->
							</div><!--.ticket-stub-->

								<div class="ticket-body">

								<div class="ticket-message">
									cci to ask if they were billed for item they received. cust did not about autoship. cancelled autoship. cust would like to return most recent autoship. gave rma and return info ap gisellen
                                </div><!--.ticket-message-->

								<ul class="comments">
									<li id="comment-166339" class="comment" data-comment-id="166339">
										<div class="comment-stub">
											<span class="comment-user-name">John Doe</span>
											<span class="comment-timestamp">February 28, 2013 10:42 AM</span>
											<span class="comment-status">(Closed)</span>
										</div><!--.comment-stub-->
										<div class="comment-body">
											<div class="comment-message"><em>Status changed to "Closed".</em></div>
										</div><!--.comment-body-->
									</li>
              					</ul><!--.comments-->

								<div class="new-comment">
  									<form method="post" action="/new-master/orders/3635448/tickets/156442/comments/create">
											<textarea id="comment-message-textarea" name="comment[message]" placeholder="Reply Here / Change Status"></textarea>
										<span class="form-buttons">
											<button class="save-btn">Reply</button>
										</span>
	  									<span class="loading-indicator hide">Saving...</span>
											<span class="hide error validation-message">Please enter a message or select a new status.</span>
									</form>
								</div><!--.new-comment-->

								</div><!--.ticket-body-->

						</li><!--.ticket-->
                	</ul><!--.tickets-list-->

            	</div><!--#support-tickets-tab-->

                <div class="pagination-top">1 - 50 of 221 <a href="#">Next ›</a> <a href="#">Last »</a></div>
        	</div><!--#my-qa-inbox-->

    	</div><!--#tabs-->

        <div style="clear:both;"></div>

    </div><!--.ten.column.omega-->

</section><!-- #main -->

<?php include('footer.php')?>
