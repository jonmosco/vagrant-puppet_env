## Multiple Vagrant Environments for Puppet Module development and testing

This will not sure the normal puppet vagrant provisioned.  This will
install the latest puppet release and build an Master and an Agent for
testing in production-like environments.

The following environments are available:
* CentOS 6
* CentOS 5
* Ubuntu 12.04
* Multi

## Multi

The multi environment allows for n number of ageent to be build with the
INSTANCES=n variable.  NOTE: This will be limited to the amount of RAM so
be cautious building a lot of nodes.
