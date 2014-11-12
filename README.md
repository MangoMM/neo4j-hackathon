neo4j-hackathon
===============

### Installation

1. Download and install [Vagrant](https://www.vagrantup.com/)
2. `cd ~/Sites`
3. `git clone https://github.com/whisller/neo4j-hackathon`
4. `cd neo4j-hackathon`
5. `vagrant up`
6. `vagrant ssh`
7. `cd /vagrant/src`
8. `curl -sS https://getcomposer.org/installer | php`
9. `./composer.phar install`
10. `php neo4jphp_connect_test.php`

### The Neo4j Browser
http://178.32.33.12:7474/browser/
