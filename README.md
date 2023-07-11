# Config Management Project

## The task

The initiative consists of automating the configuration of two hosts, one to run a web application and one to run a backend database. Both hosts VMs run Linux.

Each instance have:

- A management shell account with sudo access. SSH key access is preferred. 
- Firewall rules to allow access to the corresponding services and also for management and backups. 
- Log rotation for all the main logs, plus webserver and database logs. 
- A simple weekly backup script for at least the database. 

## Technologies

- Ansible: Ansible is a powerful open-source tool that enables IT administrators to automate the deployment and management of applications and infrastructure. It uses YAML syntax to define automation tasks, which can be executed on remote servers using SSH. 
- VirtualBox: VirtualBox is a free and open-source virtualization software that allows you to run multiple virtual machines on your local machine. It can be used to create virtual machines that simulate real servers and networks. 
- Linux: In this project, we used Ubuntu Server as our operating system. Linux is a popular open-source operating system used in many enterprise environments. 
- Apache: The Apache HTTP Server Project is an effort to develop and maintain an open-source HTTP server for modern operating systems including UNIX and Windows. 
- Nginx: Nginx is a popular open-source web server that can also be used as a reverse proxy, load balancer, and HTTP cache. It is known for its high performance and low resource consumption. 
- MySQL: MySQL is a popular open-source relational database management system (RDBMS) that can be used to store and manage data for web applications. 
- PHP: PHP is a popular server-side scripting language that can be used to build dynamic web applications. 
- Git: Git is a distributed version control system that can be used to manage and track changes to your project's source code.

## Setup

To replicate the setup, you can follow these general steps:

1. Install VirtualBox and create virtual machines for the web server and database server. 
2. Install Ubuntu Server on both virtual machines. 
3. Create the web application in the web server (WebApp folder). 
4. Install Ansible on your local machine. 
5. Generate SSH keys on your local machine and copy them to the two VMs so that Ansible can connect to them without a password. 
6. Create an Ansible inventory file that lists the two VMs and their IP addresses. 
7. Use the Ansible playbook to configure the web server and database server. Here are the used playbooks:
   - user.yml - To create a management shell account with sudo access. 
   - firewall.yml - To configure the firewall rules to allow access to the corresponding services and also for management and backups. 
   - log_rotation.yml - To configure log rotation for all the main logs, plus webserver and database logs. 
   - backup.yml - To write a simple weekly backup script for at least the database. 
