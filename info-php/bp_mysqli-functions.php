<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="PHP 7 MySQLi Functions">
	  <meta name="keywords" content="php,backend,PHP 7 MySQLi Functions">
	  <meta name="author" content="webschooltoday.com">
    <title>PHP 7 MySQLi Functions - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">PHP 7 MySQLi Functions</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "info_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_filters.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_calendar-functions.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP 7 <span>MySQLi</span> Functions</h1>
                <p class="summary">The MySQLi functions provides the most complete access to MySQL from PHP</p>
                <h2>PHP MySQLi Functions</h2>
                <p>The mysqli functions are designed to communicate with MySQL 4.1 or later.</p>
                <p>Using the mysqli functions you can take advantage of all the latest and advanced features of MySQL, which you may not be able to do with the earlier MySQL functions. However the MySQLi functions are available only with PHP 5 or later.</p>
                <div class="shadow">
                    <table class="data">
                        <thead>
                            <tr>
                                <th style="width:30%">Function</th>
                                <th style="width:70%">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>mysqli_affected_rows()</td>
                                <td>Returns the number of affected rows in the previous MySQL operation</td>
                            </tr>
                            <tr>
                                <td>mysqli_autocommit()</td>
                                <td>Turns on or off auto-committing database modifications</td>
                            </tr>
                            <tr>
                                <td>mysqli_change_user()</td>
                                <td>Changes the user of the specified database connection</td>
                            </tr>
                            <tr>
                                <td>mysqli_character_set_name()</td>
                                <td>Returns the default character set for the database connection</td>
                            </tr>
                            <tr>
                                <td>mysqli_close()</td>
                                <td>Closes a previously opened database connection</td>
                            </tr>
                            <tr>
                                <td>mysqli_commit()</td>
                                <td>Commits the current transaction</td>
                            </tr>
                            <tr>
                                <td>mysqli_connect_errno()</td>
                                <td>Returns the error code from the last connect call</td>
                            </tr>
                            <tr>
                                <td>mysqli_connect_error()</td>
                                <td>Returns the error description from the last connection error</td>
                            </tr>
                            <tr>
                                <td>mysqli_connect()</td>
                                <td>Opens a new connection to the MySQL server</td>
                            </tr>
                            <tr>
                                <td>mysqli_data_seek()</td>
                                <td>Adjusts the result pointer to an arbitrary row in the result-set</td>
                            </tr>
                            <tr>
                                <td>mysqli_debug()</td>
                                <td>Performs debugging operations</td>
                            </tr>
                            <tr>
                                <td>mysqli_dump_debug_info()</td>
                                <td>Dump debugging information into the log</td>
                            </tr>
                            <tr>
                                <td>mysqli_errno()</td>
                                <td>Returns the error code for the most recent function call</td>
                            </tr>
                            <tr>
                                <td>mysqli_error_list()</td>
                                <td>Returns a array of errors for the most recent MySQLi function call</td>
                            </tr>
                            <tr>
                                <td>mysqli_error()</td>
                                <td>Returns the last error message for the most recent MySQLi function call</td>
                            </tr>
                            <tr>
                                <td>mysqli_fetch_all()</td>
                                <td>Fetches all result rows as an associative array, a numeric array, or both</td>
                            </tr>
                            <tr>
                                <td>mysqli_fetch_array()</td>
                                <td>Fetches a result row as an associative, a numeric array, or both</td>
                            </tr>
                            <tr>
                                <td>mysqli_fetch_assoc()</td>
                                <td>Fetches a result row as an associative array</td>
                            </tr>
                            <tr>
                                <td>mysqli_fetch_field_direct()</td>
                                <td>Fetch meta-data for a single field as an object</td>
                            </tr>
                            <tr>
                                <td>mysqli_fetch_field()</td>
                                <td>Returns the next field in the result set, as an object</td>
                            </tr>
                            <tr>
                                <td>mysqli_fetch_fields()</td>
                                <td>Returns an array of objects representing the fields in a result set</td>
                            </tr>
                            <tr>
                                <td>mysqli_fetch_lengths()</td>
                                <td>Returns the lengths of the columns of the current row in the result set</td>
                            </tr>
                            <tr>
                                <td>mysqli_fetch_object()</td>
                                <td>Returns the current row of a result set as an object</td>
                            </tr>
                            <tr>
                                <td>mysqli_fetch_row()</td>
                                <td>Fetches one row of data from the result set and returns it as an enumerated array</td>
                            </tr>
                            <tr>
                                <td>mysqli_field_count()</td>
                                <td>Returns the number of columns for the most recent query</td>
                            </tr>
                            <tr>
                                <td>mysqli_field_seek()</td>
                                <td>Sets the result pointer to a specified field offset</td>
                            </tr>
                            <tr>
                                <td>mysqli_field_tell()</td>
                                <td>Returns the position of the field cursor used for the last <code>mysqli_fetch_field()</code> call</td>
                            </tr>
                            <tr>
                                <td>mysqli_free_result()</td>
                                <td>Frees the memory associated with a result</td>
                            </tr>
                            <tr>
                                <td>mysqli_get_charset()</td>
                                <td>Returns a character set object</td>
                            </tr>
                            <tr>
                                <td>mysqli_get_client_info()</td>
                                <td>Returns the MySQL client version as a string</td>
                            </tr>
                            <tr>
                                <td>mysqli_get_client_stats()</td>
                                <td>Returns client per-process statistics.</td>
                            </tr>
                            <tr>
                                <td>mysqli_get_client_version()</td>
                                <td>Returns the MySQL client version as an integer</td>
                            </tr>
                            <tr>
                                <td>mysqli_get_connection_stats()</td>
                                <td>Returns client connection statistics.</td>
                            </tr>
                            <tr>
                                <td>mysqli_get_host_info()</td>
                                <td>Returns a string representing the type of connection used including the MySQL server hostname</td>
                            </tr>
                            <tr>
                                <td>mysqli_get_proto_info()</td>
                                <td>Returns the version of the MySQL protocol used</td>
                            </tr>
                            <tr>
                                <td>mysqli_get_server_info()</td>
                                <td>Returns the version of the MySQL server</td>
                            </tr>
                            <tr>
                                <td>mysqli_get_server_version()</td>
                                <td>Returns the version of the MySQL server as an integer</td>
                            </tr>
                            <tr>
                                <td>mysqli_info()</td>
                                <td>Returns information about the last query executed</td>
                            </tr>
                            <tr>
                                <td>mysqli_init()</td>
                                <td>Initializes MySQLi and returns a resource for use with <code>mysqli_real_connect()</code></td>
                            </tr>
                            <tr>
                                <td>mysqli_insert_id()</td>
                                <td>Returns the auto-generated id used in the last query</td>
                            </tr>
                            <tr>
                                <td>mysqli_kill()</td>
                                <td>Asks the server to kill a MySQL thread</td>
                            </tr>
                            <tr>
                                <td>mysqli_more_results()</td>
                                <td>Check if there are any more query results from a multi query</td>
                            </tr>
                            <tr>
                                <td>mysqli_multi_query()</td>
                                <td>Performs one or multiple queries on the database</td>
                            </tr>
                            <tr>
                                <td>mysqli_next_result()</td>
                                <td>Prepares the next result set from mysqli_multi_query()</td>
                            </tr>
                            <tr>
                                <td>mysqli_num_fields()</td>
                                <td>Returns the number of fields in a result set</td>
                            </tr>
                            <tr>
                                <td>mysqli_num_rows()</td>
                                <td>Returns the number of rows in a result set</td>
                            </tr>
                            <tr>
                                <td>mysqli_options()</td>
                                <td>Sets extra connect options and affect behavior for a connection</td>
                            </tr>
                            <tr>
                                <td>mysqli_ping()</td>
                                <td>Pings a server connection, or tries to reconnect if the connection has gone down</td>
                            </tr>
                            <tr>
                                <td>mysqli_prepare()</td>
                                <td>Prepares an SQL statement for execution</td>
                            </tr>
                            <tr>
                                <td>mysqli_query()</td>
                                <td>Performs a query on the database</td>
                            </tr>
                            <tr>
                                <td>mysqli_real_connect()</td>
                                <td>Opens a connection to a mysql server</td>
                            </tr>
                            <tr>
                                <td>mysqli_real_escape_string()</td>
                                <td>Escapes special characters in a string for use in an SQL statement</td>
                            </tr>
                            <tr>
                                <td>mysqli_real_query()</td>
                                <td>Executes an SQL query</td>
                            </tr>
                            <tr>
                                <td>mysqli_refresh()</td>
                                <td>Refreshes tables or caches, or resets the replication server information</td>
                            </tr>
                            <tr>
                                <td>mysqli_rollback()</td>
                                <td>Rollbacks the current transaction for the database</td>
                            </tr>
                            <tr>
                                <td>mysqli_select_db()</td>
                                <td>Selects the default database for database queries</td>
                            </tr>
                            <tr>
                                <td>mysqli_set_charset()</td>
                                <td>Sets the default client character set</td>
                            </tr>
                            <tr>
                                <td>mysqli_set_local_infile_default()</td>
                                <td>Unsets user defined handler for load local infile command</td>
                            </tr>
                            <tr>
                                <td>mysqli_set_local_infile_handler()</td>
                                <td>Set callback function for LOAD DATA LOCAL INFILE command</td>
                            </tr>
                            <tr>
                                <td>mysqli_sqlstate()</td>
                                <td>Returns the SQLSTATE error code from the previous MySQL operation</td>
                            </tr>
                            <tr>
                                <td>mysqli_ssl_set()</td>
                                <td>Used to establish secure connections using SSL</td>
                            </tr>
                            <tr>
                                <td>mysqli_stat()</td>
                                <td>Returns the current system status</td>
                            </tr>
                            <tr>
                                <td>mysqli_stmt_init()</td>
                                <td>Initializes a statement and returns an object for use with mysqli_stmt_prepare()</td>
                            </tr>
                            <tr>
                                <td>mysqli_store_result()</td>
                                <td>Transfers a result set from the last query</td>
                            </tr>
                            <tr>
                                <td>mysqli_thread_id()</td>
                                <td>Returns the thread ID for the current connection</td>
                            </tr>
                            <tr>
                                <td>mysqli_thread_safe()</td>
                                <td>Returns whether the client library is compiled as thread-safe</td>
                            </tr>
                            <tr>
                                <td>mysqli_use_result()</td>
                                <td>Initiates the retrieval of a result set from the last query executed using the mysqli_real_query()</td>
                            </tr>
                            <tr>
                                <td>mysqli_warning_count()</td>
                                <td>Returns the number of warnings from the last query in the connection</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_calendar-functions.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_filters.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
            </div>
        </div>        
        <div class="sidebar">
            
        </div>
    </div> 
</div>
	<?php include "../footer.php" ?>

</body>
</html>