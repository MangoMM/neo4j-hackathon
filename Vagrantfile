# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "chef/ubuntu-14.04"
  config.vm.hostname = "neo4j-hackathon.local"

  config.vm.network :private_network, ip: "178.32.33.12"

  config.ssh.forward_agent = true

  config.vm.synced_folder ".", "/vagrant", nfs: true

  config.vm.provider :virtualbox do |vb|
    vb.gui = false
    vb.customize ["modifyvm", :id, "--memory", "1024"]
  end

  config.librarian_chef.cheffile_dir = "chef"
  config.omnibus.chef_version = :latest

  config.vm.provision "chef_solo" do |chef|
    chef.custom_config_path = "Vagrantfile.chef"
    #chef.environment = "development"
    #chef.environments_path = "chef/environments/"

    chef.cookbooks_path = [ "chef/cookbooks/"]
    chef.roles_path = "chef/roles/"

    chef.add_role "neo4j"
  end

end
