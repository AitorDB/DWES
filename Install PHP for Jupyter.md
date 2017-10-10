# Install PHP7 for Jupyter in DEBIAN 9

Install Anaconda (Python 3.6)
```
# The download can take a while (+500MB)
wget https://repo.continuum.io/archive/Anaconda3-5.0.0.1-Linux-x86_64.sh

# Change permissions
chmod 755 Anaconda3-5.0.0.1-Linux-x86_64.sh

# Execute
./Anaconda3-5.0.0.1-Linux-x86_64.sh

# After install, restart terminal and check everything is fine
# This should start a new Jupyter server
jupyter notebook

# Stop the server pressing Ctrl + C
# And remove the install file
rm Anaconda3-5.0.0.1-Linux-x86_64.sh
```

Install PHP 7
```
# You will need root permissions
su

# Install PHP 7
apt-get install php

# Check if everything is fine
# This should show to you the PHP version
php -v
```

Install PHP-ZMQ
```
# If you skip the last step, you will need root permissions!
# Install PHP-ZQM
apt-get install php-zmq

# Check if everything is fine
# zmq should appear on the list
php -m
```

Install composer
```
# You won't need root permissions now, switch to your user
exit

# Install composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

Install Jupyter-PHP
```
# Download the installer
wget https://litipk.github.io/Jupyter-PHP-Installer/dist/jupyter-php-installer.phar

# Execute it! (This will take a while)
php jupyter-php-installer.phar install

# Check everything is fine stating a new Jupyter server
# PHP should be on the new options list
jupyter notebook
```

## References
* [Jupyter](http://jupyter.org/)
* [Anaconda](https://www.anaconda.com)
* [PHP](http://php.net/)
* [PHP-ZMQ](https://packages.debian.org/stable/php/php-zmq)
* [PHP Composer](https://getcomposer.org/)
* [PHP-Jupyter](https://github.com/Litipk/Jupyter-PHP)