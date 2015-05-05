---
title: Create Virtual Machine/OS on Ubuntu 12.04 with KVM
author: dhavalthakar
date: 2012-07-13
url: /create-virtual-machineos-ubuntu-1204-kvm/
dsq_thread_id:
  - 2947125484
categories:
  - Tutorial
tags:
  - Tech Updates
  - Virtualization
---
To manage multiple OS, you might have faced the need of Virtual Machines setup. If you are unaware of virtualization you can find more information <a href="http://en.wikipedia.org/wiki/Virtualization" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/Virtualization', 'here']);" title="Virtualization">here</a>.

We will use kvm, vmbuilder and libvirt for making virtual image.

  * **kvm** &#8211; Full virtualization solution for Linux on x86 (64-bit included) hardware containing virtualization extensions (Intel VT or AMD-V).
  * **vmbuilder** &#8211; It is a Python-based software package for creating VM images of free software GNU/Linux-based operating systems
  * **libvirt** &#8211; It is toolkit to interact with the virtualization capabilities of recent versions of Linux

<span></span>

## Build Virtual OS using KVM:

These instructions are followed on Ubuntu 12.04 LTS and debian based OS.  
So, lets follow below instructions and commands step-by-step to create your Virtual Machines.

### Step 1: Check Virtualization Support

First of all check for CPU supports hardware virtualization.

<pre><code class="no-highlight">root@rtcamp1~# egrep '(vmx|svm)' --color=always /proc/cpuinfo</code></pre>

Output of this command should display something like this:

<pre><code class="no-highlight">flags : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat pse36 clflushmmx fxsr sse sse2 ht syscall nx
mmxext fxsr_opt rdtscp lm 3dnowext 3dnow rep_good nopl extd_apicidpni cx16 lahf_lm cmp_legacy svm extapic cr8_legacy
3dnowprefetch lbrv
flags : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat pse36 clflushmmx fxsr sse sse2 ht syscall nx mmxext
fxsr_opt rdtscp lm 3dnowext 3dnow rep_good nopl extd_apicidpni cx16 lahf_lm cmp_legacy svm extapic cr8_legacy 3dnowprefetch
lbrv</code></pre>

If nothing comes , then you must stop from here as your hardware configuration do not support virtualization.  
dd vmbuilder and kvm packages

### Step 2: Install vmbuilder and kvm

Now we are going to install kvm and vmbuilder

<pre><code class="no-highlight">root@rtcamp1~# apt-get update
root@rtcamp1~# apt-get install kvm ubuntu-virt-server libvirt-bin python-vm-builder kvm-ipxe</code></pre>

After that check if KVM has been successfully installed or not

<pre><code class="no-highlight">root@rtcamp1~# virsh -c qemu:///system list</code></pre>

Output should display something like this:

<pre><code class="no-highlight">root@rtcamp1:~# virsh -c qemu:///system list
Id Name State
----------------------------------</code></pre>

If it is showing any error then something is going wrong.  
(check if, kvm is enabled from your BIOS or not )

<pre><code class="no-highlight">root@rtcamp1~# kvm-ok
INFO: /dev/kvm exists
KVM acceleration can be used</code></pre>

(Output should look like this otherwise you would need to enable virtual support from your BIOS settings)

### Step 3: Create a Network Bridge

We need network bridge on our server .

<pre><code class="no-highlight">root@rtcamp1~# apt-get install bridge-utils</code></pre>

Configure network interface for bridge.

<pre><code class="no-highlight">root@rtcamp1~# vi /etc/network/interface</code></pre>

modify it as below example:

<pre><code class="no-highlight">auto eth0
iface eth0 inet manual
auto br0
iface br0 inet static
address 192.168.0.1
network 192.168.0.0
netmask 255.255.255.0
broadcast 192.168.0.255
gateway 192.168.0.1
dns-nameservers 8.8.8.8 8.8.4.4
bridge_ports eth0</code></pre>

Restart network service to activate bridge.  
Check with ifconfig you should see br0 interface with ipaddress 192.168.0.1  
( eth0 will not show you the ipaddress)

Reboot the system.

### Step 4: Create Virtual Machine

We will create ubuntu 12.04 server (amd64 arch)

Example command.

<pre><code class="no-highlight">root@rtcamp1~# mkdir virtualmachines
root@rtcamp1~# cd virtualmachines</code></pre>

Below is the vmbuilder command. Run vmbuilder e.g. as follows:

<pre><code class="no-highlight">root@rtcamp1~# vmbuilder kvm ubuntu \
--suite=precise \
--flavour=server \
--mem 1024 \
--cpus 1 \
--rootsize '4096' \
--swapsize '1024' \
--kernel-flavour 'generic' \
--hostname 'ubuntu' \
--mirror 'http://archive.ubuntu.com/ubuntu' \
--components 'main,universe' \
--addpkg 'openssh-server' \
--name 'rtvm' \
--user 'rtvm1' \
--pass 'rtvm123' \
--ip '192.168.0.124' \
--mask '255.255.255.0' \
--net '192.168.0.0' \
--bcast '192.168.0.255' \
--gw '192.168.0.1' \
--dns '8.8.8.8' \
--bridge 'br0' \
--libvirt 'qemu:///system'</code></pre>

#### Important parameters and its description:

&#8212;**suite**: Version of Ubuntu to install  
&#8212;**flavour**: The “flavour” of kernel to use in the VM. Either “virtual” or “server”.  
&#8212;**mem**: Size of random access memory in MB.  
&#8212;**cpus**: Number of CPUs to assign to VM.  
&#8212;**rootsize**: Size of root filesystem in MB of VM.  
&#8212;**swapsize**: Size of swap in MB  
&#8212;**mirror**: source url of ubuntu default archive.ubuntu.com  
&#8212;**hostname**: Hostname of VM.  
&#8212;**ip**: IP address of VM.  
&#8212;**mask**: Netmask of VM.  
&#8212;**net**: Network of VM.  
&#8212;**bcast**: Broadcast address of VM.  
&#8212;**gw**: Gateway of VM.  
&#8212;**dns**: DNS servers for VM.  
&#8212;**addpkg**: APT packages to install in the VM. I will suggest to add openssh.  
&#8212;**user and pass**: username and password ( don&#8217;t forget )  
&#8212;**dest**: Directory where VM image will create.  
You can get more information about vmbuilder parameters <a href="http://www.linuxcertif.com/man/1/vmbuilder/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.linuxcertif.com/man/1/vmbuilder/', 'here']);" title="vmbuilder"  target="_blank">here</a>.

Note: The IP&#8217;s and gateways used above are of my own LAN, you shall change it as per your own configuration.

After Creating Virtual Server check the xml file

<pre><code class="no-highlight">root@rtcamp1~# ls -l</code></pre>

You can find ubuntu-kvm folder

<pre><code class="no-highlight">root@rtcamp1~# ls -l /etc/libvirt/qemu/</code></pre>

You can find ubuntu.xml created

### Step 5: Manage Virtual Machines

Check with the virsh ( Virtual Shell)

<pre><code class="no-highlight">root@rtcamp1~# virsh --connect qemu:///system</code></pre>

It will drop you in virsh prompt like this &#8211; virsh #

<pre><code class="no-highlight">virsh # list</code></pre>

It will show you the running virtual machines list

<pre><code class="no-highlight">virsh # list --all</code></pre>

It will show you all the virtual machines list

<pre><code class="no-highlight">virsh # list --all
Id Name State
----------------------------------
- ubuntu shut off</code></pre>

#### Starting a Virtual Machine

Start virtual machine

<pre><code class="no-highlight">virsh # start ubuntu</code></pre>

Shutdown virtual machine

<pre><code class="no-highlight"> virsh # shutdown ubuntu</code></pre>

#### Deleting a Virtual Machine

To delete a virtual machine, first terminate it (if running), and then undefine it:

<pre><code class="no-highlight"> virsh # destroy ubuntu
 virsh # undefine ubuntu</code></pre>

To get more help with virsh command line type help, it will print all the possible commands.

<pre><code class="no-highlight">virsh # help</code></pre>

Hope you find this tutorial helpful. Do drop in your comments any questions or suggestions about the post.

#### Some helpful links :

  * <a href="http://libvirt.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://libvirt.org/', 'http://libvirt.org/']);" title="Libvirt">http://libvirt.org/</a>
  * <a href="http://manpages.ubuntu.com/manpages/hardy/man1/ubuntu-vm-builder.1.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://manpages.ubuntu.com/manpages/hardy/man1/ubuntu-vm-builder.1.html', 'http://manpages.ubuntu.com/manpages/hardy/man1/ubuntu-vm-builder.1.html']);" title="Virtual Machine Builder">http://manpages.ubuntu.com/manpages/hardy/man1/ubuntu-vm-builder.1.html</a>
  * <a href="https://launchpad.net/vmbuilder" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://launchpad.net/vmbuilder', 'https://launchpad.net/vmbuilder']);" title="Launchpad for Vmbuilder">https://launchpad.net/vmbuilder</a>
