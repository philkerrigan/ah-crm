<?php global $active;
    $active ='user';
    include('header.php');
?>

<section id="content" role="main">

    <div class="two column alpha">
        <?php include('sidebar.php')?>
    </div>

	<div class="ten column omega">

        <div class="page-title">User</div>

        <div class="btn-back">
        	<input type="text" id="new_user_first_name" autocomplete="off" placeholder="First Name" style="width:140px; padding-left:10px; margin-bottom:8px;" class="new_user_data"/>
            <input type="text" id="new_user_last_name" autocomplete="off" placeholder="Last Name" style="width:180px; padding-left:10px; margin-bottom:8px;" class="new_user_data"/>
            <input type="text" id="new_user_email" autocomplete="off" placeholder="Email" style="width:240px; padding-left:10px; margin-bottom:8px;" class="new_user_data"/>
			<select id="new_user_access_level" style="width:180px; padding-left:10px; margin-bottom:8px;" class="new_user_data"/>
				<option>Select Access Level</option>
				<option value="5">CRS</option>
				<option value="4">Manager</option>
				<option value="3">Director</option>
				<option value="2">Administrator</option>
				<option value="1">Root</option>
			</select>
        	<button class="create-new-btn" style="margin-left:2px;">Create New User</button>
        </div>

        <hr>
        <table id="users-table" class="tablesorter">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Access Level</th>
                    <th>Exclude From Report</th>
                    <th>Options</th>
                </tr>
            </thead>

            <tbody>
                <tr class="disabled" data-user-id="3">
                    <td>admin</td>
                    <td>Admin Access</td>
                    <td><a href="mailto:johndoe@gmail.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" checked='checked' /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/3/enable">Enable</a></td>
                </tr>
                <tr data-user-id="365">
                    <td>admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:johndoe@gmail.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/365/reset_password">Reset Password</a> / <a href="/new-master/users/365/disable">Disable</a></td>
                </tr>
                <tr data-user-id="6">
                    <td>admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:johndoe@gmail.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" checked='checked' /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/6/reset_password">Reset Password</a> / <a href="/new-master/users/6/disable">Disable</a></td>
                </tr>
                <tr class="disabled" data-user-id="70">
                    <td>admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:bretrouse@gmail.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/70/enable">Enable</a></td>
                </tr>
                <tr data-user-id="529">
                    <td>admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:ben@directdigitalllc.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/529/reset_password">Reset Password</a> / <a href="/new-master/users/529/disable">Disable</a></td>
                </tr>
                <tr data-user-id="561">
                    <td>admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:caroline@directdigitalllc.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/561/reset_password">Reset Password</a> / <a href="/new-master/users/561/disable">Disable</a></td>
                </tr>
                <tr data-user-id="349">
                    <td>admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:chinar@directdigitalllc.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/349/reset_password">Reset Password</a> / <a href="/new-master/users/349/disable">Disable</a></td>
                </tr>
                <tr data-user-id="140">
                    <td>admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:directdigitalpasswords@honestanswers.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/140/reset_password">Reset Password</a> / <a href="/new-master/users/140/disable">Disable</a></td>
                </tr>
                <tr data-user-id="88">
                    <td>admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:directdigitalpasswords@honestanswers.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/88/reset_password">Reset Password</a> / <a href="/new-master/users/88/disable">Disable</a></td>
                </tr>
                <tr data-user-id="397">
                    <td>admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:directdigitalpasswords@honestanswers.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/397/reset_password">Reset Password</a> / <a href="/new-master/users/397/disable">Disable</a></td>
                </tr>
                <tr class="disabled" data-user-id="315">
                    <td>ha-admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:directdigitalpasswords@honestanswers.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/315/enable">Enable</a></td>
                </tr>
                <tr data-user-id="402">
                    <td>ha-admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:directdigitalpasswords@honestanswers.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/402/reset_password">Reset Password</a> / <a href="/new-master/users/402/disable">Disable</a></td>
                </tr>
                <tr data-user-id="540">
                    <td>ha-admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:InformationTechnology@apcrc.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/540/reset_password">Reset Password</a> / <a href="/new-master/users/540/disable">Disable</a></td>
                </tr>
                <tr class="disabled" data-user-id="498">
                    <td>ha-admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:InformationTechnology@apcrc.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/498/enable">Enable</a></td>
                </tr>
                <tr data-user-id="60">
                    <td>ha-admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:johndoe@gmail.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/60/reset_password">Reset Password</a> / <a href="/new-master/users/60/disable">Disable</a></td>
                </tr>
                <tr data-user-id="521">
                    <td>ha-admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:InformationTechnology@apcrc.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/521/reset_password">Reset Password</a> / <a href="/new-master/users/521/disable">Disable</a></td>
                </tr>
                <tr class="disabled" data-user-id="268">
                    <td>ha-admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:directdigitalpasswords@honestanswers.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/268/enable">Enable</a></td>
                </tr>
                <tr class="disabled" data-user-id="239">
                    <td>ha-admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:directdigitalpasswords@honestanswers.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/239/enable">Enable</a></td>
                </tr>
                <tr class="disabled"  data-user-id="308">
                    <td>ha-admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:directdigitalpasswords@honestanswers.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/308/enable">Enable</a></td>
                </tr>
                <tr data-user-id="557">
                    <td>ha-admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:InformationTechnology@apcrc.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/557/reset_password">Reset Password</a> / <a href="/new-master/users/557/disable">Disable</a></td>
                </tr>
                <tr class="disabled" data-user-id="386">
                    <td>ha-admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:directdigitalpasswords@honestanswers.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/386/enable">Enable</a></td>
                </tr>
                <tr data-user-id="126">
                    <td>ha-admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:directdigitalpasswords@honestanswers.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/126/reset_password">Reset Password</a> / <a href="/new-master/users/126/disable">Disable</a></td>
                </tr>
                    <tr data-user-id="438">
                    <td>ha-admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:directdigitalpasswords@honestanswers.com">djohndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report"/><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/438/reset_password">Reset Password</a> / <a href="/new-master/users/438/disable">Disable</a></td>
                </tr>
                <tr class="disabled" data-user-id="248">
                    <td>ha-admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:directdigitalpasswords@honestanswers.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/248/enable">Enable</a></td>
                </tr>
                <tr class="disabled" data-user-id="101">
                    <td>ha-admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:directdigitalpasswords@honestanswers.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/101/enable">Enable</a></td>
                </tr>
                <tr class="disabled" data-user-id="323">
                    <td>ha-admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:directdigitalpasswords@honestanswers.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/323/enable">Enable</a></td>
                </tr>
                <tr class="disabled" data-user-id="181">
                    <td>ha-admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:directdigitalpasswords@honestanswers.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report"/><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/181/enable">Enable</a></td>
                </tr>
                <tr data-user-id="183">
                    <td>ha-admin</td>
                    <td>John Doe</td>
                    <td><a href="mailto:directdigitalpasswords@honestanswers.com">johndoe@gmail.com</a></td>
                    <td>
                        <select class="user-select">
                            <option value="Administator">Administator</option>
                            <option value="Root Administator">Root Administator</option>
                            <option value="Call Center: CSR">Call Center: CSR</option>
                        </select>
                    </td>
                    <td><div class="user-check"><input type="checkbox" name="exclude_from_retention_report" /><label></label></div></td>
                    <td class="user-actions-cell"><a href="/new-master/users/183/reset_password">Reset Password</a> / <a href="/new-master/users/183/disable">Disable</a></td>
                </tr>
            </tbody>
        </table>

    </div><!--.ten.column.omega-->

</section><!-- #main -->

<?php include('footer.php')?>
