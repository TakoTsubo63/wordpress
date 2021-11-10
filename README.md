## INSTALL WORDPRESS ANSIBLE PLAYBOOK
  
#### Описание:  
  
В данном репозитории хрантся изменения Ansible playbook по установке Wordpress.  
  
#### Использованные технологии:  
  
Ansible, Groovy  
  
#### краткое описание использования:  
  
данный репозиторий используется Jenkins для установки, на виртаульную машину AWS,  
пакета с программи для запуска apache и Ansible  
  
#### описание содержимого директории:  
  
**group_vars** - директория содержит имя user для виртуальной машины с Wordpress  
**roles** - директория roles содержит роли для ansible playbook  
**ansible.cfg** - файл конфигурации ansible  
**host_apache** - это inventory файл, содержащий значение url виртуальной машины  
 на которую будет установлен Wordpress  
**main.yml** - сам playbook ansible  
**seedjob.groovy** - груви файл для запуска seedjob на jenkins  
