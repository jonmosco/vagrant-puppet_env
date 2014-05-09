# == Class: client
#
class client {

  file { '/etc/puppet/puppet.conf':
    ensure  => file,
    owner   => 'root',
    group   => 'root',
    mode    => '0644',
    content => template('client/puppet.conf.erb')
  }

  service { 'puppet':
    ensure => stopped,
    enable => false,
  }

  cron { 'puppet-client':
    command     => '/usr/local/bin/puppet agent -t',
    environment => 'MAILTO=/dev/null',
    user        => 'root',
    minute      => '5',
  }
}
