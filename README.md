## CodeIgniter Data base backup Model

This model can back up your DB and save it to the server as a .zip file.
Optionaly it can also save the file off site via FTP


Data backup is done via CI Database Utility Class


### Instalation

copy config/backups.php to your config dir
copy models/backupdb.php to your models dir

#### Set up your config file

You nedd to specify a file name and local path

#### Set up FTP

If you want to save you backup to an FTP server set backup_use_ftp to TRUE

Also you need to set a remote path and ftp connection info

### Usage

Load the model

$this->load->model('backupdb);

to run a backup

$this->backupdb->backup();

That's it your Data is safe!!
