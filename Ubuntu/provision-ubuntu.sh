#!/usr/bin/env bash
#
# Set up the Puppet master and Agent nodes on Ubuntu for module
# testing environment

# Change these to match your environment AND your Vagrantfile
DOMAIN="example.com"
SUBNET="192.168.35"
MODULEDIR="/etc/puppet/modules"

PATH=/bin:/sbin:/usr/bin:/usr/sbin
HOSTS="${SUBNET}.30 puppet.${DOMAIN} puppet
${SUBNET}.31 node.${DOMAIN} node"

SITE=`cat <<-END
node default {
  include profile::base
}
END
`

# Get our hostname (short, -s)
NAME=$( hostname -s )

case $NAME in
  puppet)
    echo "$HOSTS" >> /etc/hosts

    echo "Installing Puppet Master.."
    wget http://apt.puppetlabs.com/puppetlabs-release-precise.deb \
      > /dev/null 2>&1
    dpkg -i puppetlabs-release-precise.deb > /dev/null 2>&1
    apt-get update > /dev/null 2>&1
    apt-get install puppetmaster -y > /dev/null 2>&1
    echo "Building site manifest"
    echo "$SITE" >> /etc/puppet/manifests/site.pp

    if [ -d "$MODULEDIR" ]; then
      mkdir -p ${MODULEDIR}/profile/manifests
    else
      echo "Module directory does not exist."
    fi

    echo "Done"
    ;;
    node)
    echo "$HOSTS" >> /etc/hosts

    echo "Installing and starting Puppet agent service"
    wget http://apt.puppetlabs.com/puppetlabs-release-precise.deb \
      > /dev/null 2>&1
    dpkg -i puppetlabs-release-precise.deb > /dev/null 2>&1
    apt-get update > /dev/null 2>&1
    apt-get install puppet -y > /dev/null 2>&1
    sed -i 's/no/yes/g' /etc/default/puppet
    /etc/init.d/puppet start > /dev/null 2>&1
    echo "Done"
    ;;
esac
