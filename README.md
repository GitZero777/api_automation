# api_automation
A simple automated Ansible playbook for a CRUD API REST

Technologies:
• Ansible: Ansible is a powerful open-source tool that enables IT administrators to automate the deployment and management of applications and infrastructure. It uses YAML syntax to define automation tasks, which can be executed on remote servers using SSH.
• VirtualBox: VirtualBox is a free and open-source virtualization software that allows you to run multiple virtual machines on your local machine. It can be used to create virtual machines that simulate real servers and networks.
• Linux: In this project, we used Ubuntu Server as our operating system. Linux is a popular open-source operating system used in many enterprise environments.
• Nginx: Nginx is a popular open-source web server that can also be used as a reverse proxy, load balancer, and HTTP cache. It is known for its high performance and low resource consumption.
• MySQL: MySQL is a popular open-source relational database management system (RDBMS) that can be used to store and manage data for web applications.
• PHP: PHP is a popular server-side scripting language that can be used to build dynamic web applications.
• Git: Git is a distributed version control system that can be used to manage and track changes to your project's source code.

To replicate the setup, you can follow these general steps:
1. Install VirtualBox and create virtual machines for the web server and database server.
2. Install Ubuntu Server on both virtual machines.
3. Install Ansible on your local machine.
4. Clone the project's Git repository.
5. Define the inventory file to specify the hosts.
6. Write the Ansible playbook to configure the web server and database server.
7. Execute the Ansible playbook to configure the servers.
8. Test the web application and database connectivity.
9. Set up log rotation for the main logs, web server logs, and database logs.
10. Create a simple weekly backup script for the database and execute it to test the backup process.
These steps are just a general guide, and the actual implementation may vary depending last updates. However, following these steps should give a good starting point for setting up a similar project.
