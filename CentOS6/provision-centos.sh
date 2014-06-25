#!/usr/bin/env bash
#
# Set up the Master and Agent Nodes to talk with each other
# Purpose: Learning Puppet
#
# Master:
# - Edit /etc/hosts
# - Turn off iptables
# Node:
# - Edit /etc/hosts
# - Turn off iptables

# Change these to match your environment AND your Vagrantfile
DOMAIN="example.com"
SUBNET="192.168.33"

PATH=/bin:/sbin:/usr/bin:/usr/sbin
HOSTS="${SUBNET}.10 puppet.${DOMAIN} puppet
${SUBNET}.11 node.${DOMAIN} node"

SITE=`cat <<-END
node default {
  include profiles::base
}
END
`
BASE=`cat <<-END
class profiles::base {
}
END
`

HIERA=`cat <<-END
---
:backends:
  - yaml
  :yaml:
    :datadir: /etc/puppet/hieradata
    :hierarchy:
      - "node/%{::fqdn}"
      - common
END
`

# Get our hostname
NAME=$( hostname -s )

case $NAME in
  puppet)
    echo "$HOSTS" >> /etc/hosts

    echo "Turning off Firewall and setting selinux to Permissive on our Puppet Master..."
    service iptables stop > /dev/null && chkconfig iptables off > /dev/null 2>&1
    #setenforce 0
    echo "Done"

    echo "Installing Puppet Master.."
    rpm -ivh http://yum.puppetlabs.com/el/6/products/i386/puppetlabs-release-6-7.noarch.rpm \
      > /dev/null 2>&1
    yum install puppet-server-3.4.3 git -y > /dev/null 2>&1
    echo "Done"
    echo "Building site manifest"
    echo "$SITE" >> /etc/puppet/manifests/site.pp
    echo "Done"

    echo "Starting Puppet Master Service"
    puppet resource service puppetmaster ensure=running enable=true > /dev/null 2>&1
    master=$?
    if [ $master -eq 0 ]; then
      echo "Done"
    fi
    echo "Setting up basic Puppet Master configuration"
    sleep 1
    echo "."
    sleep 1
    echo ".."
    sleep 1
    echo "..."
    sleep 1
    echo "...."
    sleep 1
    echo "....."
    mkdir -p /etc/puppet/hieradata/node
    mkdir -p /etc/puppet/modules/profiles/manifests
    echo "$BASE" >> /etc/puppet/modules/profiles/manifests/base.pp
    if [ -e /etc/hiera.yaml ]; then
      rm /etc/hiera.yaml
      echo "$HIERA" >> /etc/puppet/hiera.yaml
      ln -s /etc/puppet/hiera.yaml /etc/hiera.yaml
    fi
    echo "Done"

    ;;
  node)
    echo "$HOSTS" >> /etc/hosts

    echo "Turning off Firewall and setting selinux to Permissive on our Puppet Node..."
    service iptables stop > /dev/null 2>&1 \
      && chkconfig iptables off > /dev/null 2>&1
    #setenforce 0 > /dev/null 2>&1
    echo "Done"

    echo "Starting Puppet Agent Service"
    rpm -ivh http://yum.puppetlabs.com/el/6/products/i386/puppetlabs-release-6-7.noarch.rpm \
      > /dev/null 2>&1
    yum install puppet -y > /dev/null 2>&1
    puppet resource service puppet ensure=running enable=true > /dev/null 2>&1
    agent=$?
    if [ $agent -eq 0 ]; then
      echo "Done"
    fi
    ;;
esac
