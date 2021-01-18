<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Use MySQL Database in PHP">
	  <meta name="keywords" content="php,php basic,How to Use MySQL Database in PHP">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Use MySQL Database in PHP - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how use the MySQL database with PHP to store the data." />
	 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Use MySQL Database in PHP</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_mysql-connect.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_exception-handling.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>MySQL</span> Introduction</h1>
                <p class="summary">MySQL is the most popular database system used with the PHP language.</p>
                <h2>What is MySQL</h2>
                <p>MySQL is one of the most popular relational database system being used on the Web today. It is freely available and easy to install, however if you have installed Wampserver it already there on your machine. MySQL database server offers several advantages:</p>
                <ul>
                    <li>MySQL is easy to use, yet extremely powerful, fast, secure, and scalable.</li>
                    <li>MySQL runs on a wide range of operating systems, including UNIX or Linux, Microsoft Windows, Apple Mac OS X, and others.</li>
                    <li>MySQL supports standard SQL (Structured Query Language).</li>
                    <li>MySQL is ideal database solution for both small and large applications.</li>
                    <li>MySQL is developed, and distributed by Oracle Corporation.</li>
                    <li>MySQL includes data security layers that protect sensitive data from intruders.</li>
                </ul>
                <p>MySQL database stores data into tables like other relational database. A table is a collection of related data, and it is divided into rows and columns.</p>
                <p class="break">Each row in a table represents a data record that are inherently connected to each other such as information related to a particular person, whereas each column represents a specific field such as <i>id</i>, <i>first_name</i>, <i>last_name</i>, <i>email</i>, etc. The structure of a simple MySQL table that contains person's general information may look something like this:</p>
<pre class="console-output">
+----+------------+-----------+----------------------+
| id | first_name | last_name | email                |
+----+------------+-----------+----------------------+
|  1 | Peter      | Parker    | peterparker@mail.com |
|  2 | John       | Rambo     | johnrambo@mail.com   |
|  3 | Clark      | Kent      | clarkkent@mail.com   |
|  4 | John       | Carter    | johncarter@mail.com  |
|  5 | Harry      | Potter    | harrypotter@mail.com |
+----+------------+-----------+----------------------+
</pre>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> Websites like Facebook, Twitter, Wikipedia uses MySQL for their storage need. So you can easily understand what MySQL is capable of.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Talking to MySQL Databases with SQL</h2>
                <p>SQL, the Structured Query Language, is a simple, standardized language for communicating with relational databases like MySQL. With SQL you can perform any database-related task, such as creating databases and tables, saving data in database tables, query a database for specific records, deleting and updating data in databases.</p>
                <p>Look at the following standard SQL query that returns the email address of a person whose first name is equal to 'Peter' in the <i>persons</i> table:</p>
                <div class="shadow">
                    <div class="syntax"><span class="keyword">SELECT</span> email <span class="keyword">FROM</span> persons <span class="keyword">WHERE</span> first_name="Peter"</div>
                </div>
                <p>If you execute the SQL query above it will return the following record:</p>
                <div class="output-box">
                    peterparker@mail.com
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_exception-handling.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_mysql-connect.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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