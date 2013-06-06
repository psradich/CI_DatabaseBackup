<?php defined('BASEPATH') OR exit('No direct script access allowed');

// Copyright (c) 2012 Paul Radich

//File name for the backup file
//the current date is auto added to the file name
//So if your file name is 'backup-' the file would be saved as backup-10/03/13.zip (example date)
$config['backup_file_name'] = 'backup-';


// Local Path to save DB backup zip
// - Files must be saved to the server in order to transfer
$config['backup_local_path'] = './dbbackups/';


// Remote path on the FTP server to save the file
$config['backup_remote_path'] = '/database/';


//Transfer DB Backups to FTP
$config['backup_use_ftp'] = TRUE;


//FTP Connection info
$config['backup_ftp_hostname'] = 'hostname';
$config['backup_ftp_username'] = 'username';
$config['backup_ftp_password'] = 'password';


