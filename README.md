neo4j-hackathon
===============

### Installation

1. Download and install [Vagrant](https://www.vagrantup.com/) and [VirtualBox](https://www.virtualbox.org/)
2. `cd ~/Sites`
3. `git clone https://github.com/whisller/neo4j-hackathon`
4. `cd neo4j-hackathon`
5. `vagrant plugin install vagrant-omnibus`
6. `vagrant up`
7. `vagrant ssh`
8. `cd /vagrant/src`
9. `curl -sS https://getcomposer.org/installer | php`
10. `./composer.phar install`
11. `php neo4jphp_connect_test.php`

### The Neo4j Browser
http://178.32.33.12:7474/browser/
