require 'ipaddr'

module Puppet::Parser::Functions
  newfunction(:minute_from_address, :type => :rvalue) do |args|
    IPAddr.new(lookupvar('ipaddress')).to_i % 60
  end
end
