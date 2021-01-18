<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="PHP 7 File System Functions">
	  <meta name="keywords" content="php,backend,mFile System Functions">
	  <meta name="author" content="webschooltoday.com">
    <title>PHP 7 File System Functions - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">PHP 7 File System Functions</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "info_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_date-and-time-functions.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_array-functions.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP 7 <span>File System</span> Functions</h1>
                <p class="summary">The following section contains a list of useful PHP file system functions.</p>
                <h2>PHP File System Functions</h2>
                <p>The following file system functions are the part of the PHP core so you can use these functions within your script without any further installation.</p>
                <div class="shadow">
                    <table class="data">
                    	<thead>
                        	<tr>
                                <th>Function</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>basename()</code></td>
                                <td>Returns the filename component of a path</td>
                            </tr>
                            <tr>
                                <td><code>chgrp()</code></td>
                                <td>Changes the file group</td>
                            </tr>
                            <tr>
                                <td><code>chmod()</code></td>
                                <td>Changes the file mode</td>
                            </tr>
                            <tr>
                                <td><code>chown()</code></td>
                                <td>Changes the file owner</td>
                            </tr>
                            <tr>
                                <td><code>clearstatcache()</code></td>
                                <td>Clears the file status cache</td>
                            </tr>
                            <tr>
                                <td><code>copy()</code></td>
                                <td>Copies a file</td>
                            </tr>
                            <tr>
                                <td><code>delete()</code></td>
                                <td>See <code>unlink()</code> or <code>unset()</code></td>
                            </tr>
                            <tr>
                                <td><code>dirname()</code></td>
                                <td>Returns the path of the parent directory</td>
                            </tr>
                            <tr>
                                <td><code>disk_free_space()</code></td>
                                <td>Returns available space on filesystem or disk partition</td>
                            </tr>
                            <tr>
                                <td><code>disk_total_space()</code></td>
                                <td>Returns the total size of a filesystem or disk partition</td>
                            </tr>
                            <tr>
                                <td><code>diskfreespace()</code></td>
                                <td>Returns available space on filesystem or disk partition. Alias of <code>disk_free_space()</code></td>
                            </tr>
                            <tr>
                                <td><code>fclose()</code></td>
                                <td>Closes an open file pointer</td>
                            </tr>
                            <tr>
                                <td><code>feof()</code></td>
                                <td>Tests for end-of-file on a file pointer</td>
                            </tr>
                            <tr>
                                <td><code>fflush()</code></td>
                                <td>Flushes the buffered output to a file</td>
                            </tr>
                            <tr>
                                <td><code>fgetc()</code></td>
                                <td>Returns a character from file pointer</td>
                            </tr>
                            <tr>
                                <td><code>fgetcsv()</code></td>
                                <td>Gets line from file pointer and parse for CSV fields</td>
                            </tr>
                            <tr>
                                <td><code>fgets()</code></td>
                                <td>Read a specific number of bytes from a file</td>
                            </tr>
                            <tr>
                                <td><code>fgetss()</code></td>
                                <td>Reads a specific number of bytes from a file and strip HTML tags and PHP code</td>
                            </tr>
                            <tr>
                                <td><code>file()</code></td>
                                <td>Reads entire file into an array</td>
                            </tr>
                            <tr>
                                <td><code>file_exists()</code></td>
                                <td>Checks whether a file or directory exists</td>
                            </tr>
                            <tr>
                                <td><code>file_get_contents()</code></td>
                                <td>Reads entire file into a string</td>
                            </tr>
                            <tr>
                                <td><code>file_put_contents()</code></td>
                                <td>Write a string to a file</td>
                            </tr>			
                            <tr>
                                <td><code>fileatime()</code></td>
                                <td>Returns the last access time of a file</td>
                            </tr>
                            <tr>
                                <td><code>filectime()</code></td>
                                <td>Returns the last change time of a file</td>
                            </tr>
                            <tr>
                                <td><code>filegroup()</code></td>
                                <td>Returns the group ID of a file</td>
                            </tr>
                            <tr>
                                <td><code>fileinode()</code></td>
                                <td>Returns the inode number of the file</td>
                            </tr>
                            <tr>
                                <td><code>filemtime()</code></td>
                                <td>Returns the last modification time of a file</td>
                            </tr>
                            <tr>
                                <td><code>fileowner()</code></td>
                                <td>Returns the user ID of the owner of the file</td>
                            </tr>
                            <tr>
                                <td><code>fileperms()</code></td>
                                <td>Returns permissions for the file</td>
                            </tr>
                            <tr>
                                <td><code>filesize()</code></td>
                                <td>Returns the file size</td>
                            </tr>
                            <tr>
                                <td><code>filetype()</code></td>
                                <td>Returns the file type</td>
                            </tr>
                            <tr>
                                <td><code>flock()</code></td>
                                <td>Locks or releases a file</td>
                            </tr>
                            <tr>
                                <td><code>fnmatch()</code></td>
                                <td>Matches a filename or string against a specified pattern</td>
                            </tr>
                            <tr>
                                <td><code>fopen()</code></td>
                                <td>Opens a file or URL</td>
                            </tr>
                            <tr>
                                <td><code>fpassthru()</code></td>
                                <td>Output all remaining data on a file pointer</td>
                            </tr>
                            <tr>
                                <td><code>fputcsv()</code></td>
                                <td>Format line as CSV and write to file pointer</td>
                            </tr>
                            <tr>
                                <td><code>fputs()</code></td>
                                <td>Alias of <code>fwrite()</code></td>
                            </tr>
                            <tr>
                                <td><code>fread()</code></td>
                                <td>Reads a specific number of bytes from a file</td>
                            </tr>
                            <tr>
                                <td><code>fscanf()</code></td>
                                <td>Parses input from a file according to a specified format</td>
                            </tr>
                            <tr>
                                <td><code>fseek()</code></td>
                                <td>Seeks on a file pointer</td>
                            </tr>
                            <tr>
                                <td><code>fstat()</code></td>
                                <td>Returns information about a file using an open file pointer</td>
                            </tr>
                            <tr>
                                <td><code>ftell()</code></td>
                                <td>Returns the current position of the file read/write pointer</td>
                            </tr>
                            <tr>
                                <td><code>ftruncate()</code></td>
                                <td>Truncates a file to a given length</td>
                            </tr>
                            <tr>
                                <td><code>fwrite()</code></td>
                                <td>Writes the contents of string to the file pointer</td>
                            </tr>
                            <tr>
                                <td><code>glob()</code></td>
                                <td>Returns an array of filenames/directories matching a specified pattern</td>
                            </tr>
                            <tr>
                                <td><code>is_dir()</code></td>
                                <td>Checks whether the file is a directory</td>
                            </tr>
                            <tr>
                                <td><code>is_executable()</code></td>
                                <td>Checks whether the file is executable</td>
                            </tr>
                            <tr>
                                <td><code>is_file()</code></td>
                                <td>Checks whether the file is a regular file</td>
                            </tr>
                            <tr>
                                <td><code>is_link()</code></td>
                                <td>Checks whether the filename is a symbolic link</td>
                            </tr>
                            <tr>
                                <td><code>is_readable()</code></td>
                                <td>Checks whether a file exists and is readable</td>
                            </tr>
                            <tr>
                                <td><code>is_uploaded_file()</code></td>
                
                                <td>Checks whether the file was uploaded via HTTP POST</td>
                            </tr>
                            <tr>
                                <td><code>is_writable()</code></td>
                                <td>Checks whether the filename is writable</td>
                            </tr>
                            <tr>
                                <td><code>is_writeable()</code></td>
                                <td>Alias of <code>is_writable()</code></td>
                            </tr>
                            <tr>
                                <td><code>lchgrp()</code></td>
                                <td>Changes group ownership of symlink</td>
                            </tr>
                            <tr>
                                <td><code>lchown()</code></td>
                                <td>Changes user ownership of symlink</td>
                            </tr>
                            <tr>
                                <td><code>link()</code></td>
                                <td>Create a hard link</td>
                            </tr>
                            <tr>
                                <td><code>linkinfo()</code></td>
                                <td>Returns information about a link</td>
                            </tr>
                            <tr>
                                <td><code>lstat()</code></td>
                                <td>Returns information about a file or symbolic link</td>
                            </tr>
                            <tr>
                                <td><code>mkdir()</code></td>
                                <td>Creates a directory</td>
                            </tr>
                            <tr>
                                <td><code>move_uploaded_file()</code></td>
                                <td>Moves an uploaded file to a new location</td>
                            </tr>
                            <tr>
                                <td><code>parse_ini_file()</code></td>
                                <td>Parse a configuration file</td>
                            </tr>
                            <tr>
                                <td><code>parse_ini_string()</code></td>
                                <td>Parse a configuration string</td>
                            </tr>
                            <tr>
                                <td><code>pathinfo()</code></td>
                                <td>Returns information about a file path</td>
                            </tr>
                            <tr>
                                <td><code>pclose()</code></td>
                                <td>Closes process file pointer</td>
                            </tr>
                            <tr>
                                <td><code>popen()</code></td>
                                <td>Opens process file pointer</td>
                            </tr>
                            <tr>
                                <td><code>readfile()</code></td>
                                <td>Reads a file and writes it to the output buffer</td>
                            </tr>
                            <tr>
                                <td><code>readlink()</code></td>
                                <td>Returns the target of a symbolic link</td>
                            </tr>			
                            <tr>
                                <td><code>realpath()</code></td>
                                <td>Returns canonicalized absolute pathname</td>
                            </tr>
                            <tr>
                                <td><code>realpath_cache_get()</code></td>
                                <td>Returns realpath cache entries</td>
                            </tr>
                            <tr>
                                <td><code>realpath_cache_size()</code></td>
                                <td>Returns realpath cache size</td>
                            </tr>
                            <tr>
                                <td><code>rename()</code></td>
                                <td>Renames a file or directory</td>
                            </tr>
                            <tr>
                                <td><code>rewind()</code></td>
                                <td>Rewind the position of a file pointer</td>
                            </tr>
                            <tr>
                                <td><code>rmdir()</code></td>
                                <td>Removes an empty directory</td>
                            </tr>
                            <tr>
                                <td><code>set_file_buffer()</code></td>
                                <td>Sets the buffer size of a file</td>
                            </tr>
                            <tr>
                                <td><code>stat()</code></td>
                                <td>Returns information about a file</td>
                            </tr>
                            <tr>
                                <td><code>symlink()</code></td>
                                <td>Creates a symbolic link</td>
                            </tr>
                            <tr>
                                <td><code>tempnam()</code></td>
                                <td>Create temporary file with unique file name</td>
                            </tr>
                            <tr>
                                <td><code>tmpfile()</code></td>
                                <td>Creates a unique temporary file</td>
                            </tr>
                            <tr>
                                <td><code>touch()</code></td>
                                <td>Sets access and modification time of file</td>
                            </tr>
                            <tr>
                                <td><code>umask()</code></td>
                                <td>Changes the current umask</td>
                            </tr>
                            <tr>
                                <td><code>unlink()</code></td>
                                <td>Deletes a file</td>
                            </tr>
                        </tbody>
                	</table>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_array-functions.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_date-and-time-functions.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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