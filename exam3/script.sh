#!/bin/bash

vagrant init
echo "Bonjour voici les VM disponibles vous pouvez les éteindre ou les lancer à votre guise"
sleep 2
clear
vagrant global-status

while [ -z $on ]
do
    read -p '

Eteindre/Allumer/Continuer [e/a/c] ' on

if [ $on = 'e' ]
    then
        echo "Saisis l'ID de la machine à éteindre"
        read ID
        vagrant halt $id
elif [ $on = 'a' ]
    then
        echo "Saisis l'ID de la machine à allumer"
        read ID
        vagrant up $id
else 
#-------------------------------------------------------
echo "Bonjour, Bienvenue dans le configurateur de VM !"

while [ -z $filename ]
do
    read -p 'Merci de saisir le nom du dossier synchronisé  ' filename

done
clear
while [ -z $ip ]
do
    read -p 'Merci de rentrer les 2 derniers chiffres pour l''ip (min = 10 | max 99) ' ip

done
#------------------------------------------------
rm Vagrantfile
#--------------------------------------------------------------------------------------------------------
mkdir $filename
vagrant init
#--------------------------------------------------
sed -i 15s'/"base"/"ubuntu xenial64"/' Vagrantfile 
sed -i s'#u x#u/x#' Vagrantfile
#--------------------------------------------------
sed -i 46s'#../#./#' Vagrantfile
sed -i 46s'#vagrant_data#var/www/html#' Vagrantfile
sed -i 46s"/data/$filename/g" Vagrantfile
sed -i 46s'/#/ /' Vagrantfile
#---------------------------------------------------
sed -i 35s'/#/ /' Vagrantfile
sed -i 35s"/10/$ip/g" Vagrantfile
#---------------------------------------------------
echo "sudo apt-get install -y apache2" >> instalapache2.sh
mv instalapache2.sh $filename/
#---------------------------------------------------
vagrant up
vagrant ssh

fi
done

