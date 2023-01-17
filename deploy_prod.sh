#!/bin/bash
BASEDIR=`dirname $0`
PROJECT_PATH=`cd $BASEDIR; pwd`
unset MODULES
MODULES[blog]=$PROJECT_PATH/common/modules/blog
MODULES[bot]=$PROJECT_PATH/common/modules/bot
MODULES[chat]=$PROJECT_PATH/common/modules/chat
MODULES[content]=$PROJECT_PATH/common/modules/content
MODULES[crm]=$PROJECT_PATH/common/modules/crm
MODULES[file]=$PROJECT_PATH/common/modules/file
MODULES[integration]=$PROJECT_PATH/common/modules/integration
MODULES[modulemanager]=$PROJECT_PATH/common/modules/modulemanager
MODULES[permit]=$PROJECT_PATH/common/modules/permit
MODULES[queuemanager]=$PROJECT_PATH/common/modules/queuemanager
MODULES[rbac]=$PROJECT_PATH/common/modules/rbac
MODULES[shop]=$PROJECT_PATH/common/modules/shop
MODULES[stat]=$PROJECT_PATH/common/modules/stat
MODULES[system]=$PROJECT_PATH/common/modules/system
MODULES[translation]=$PROJECT_PATH/common/modules/translation
MODULES[widget]=$PROJECT_PATH/common/modules/widget
MODULES[zadarma]=$PROJECT_PATH/common/modules/zadarma





if  [ ! -d  $PROJECT_PATH/common/modules/$2 ] && [$1='install'] ; then
	echo "Модуль $2 не установлен, для установки выполните: bash deploy.sh install <name_module> "
	exit 0
fi


case "$1" in
  main)
	echo "Выполняю обновление основгого проекта"
	git pull
	git add .
	git commit -m "fix"
	git push
	echo "Запускаю обновление на удаленном сервере"
#phing -f build_prod.xml
	echo "Обновление основного проекта закончено."
	;;
  up)
 	echo "Вызвана команда UP"
	echo  "Перехожу в модуль " $2
	cd common/modules/$2
	pwd
	echo "Обновляю модуль"
	git pull origin master
	echo "Проверим наличие миграций в модуле"
		if  [ -d $PROJECT_PATH/common/modules/$2/migrations ]; then
			echo 'Миграции найдены.'
                	echo "Обновляю миграции..."
                	php $PROJECT_PATH/console/yii migrate --migrationPath=@common/modules/$2/migrations --interactive=0
		else
			echo "Миграции не найдены"
		fi
	echo "Обновлен модуль "$2
        ;;
  push)
 	echo "Вызвана команда PUSH"
	echo  "Перехожу в модуль " $2
	cd common/modules/$2
	pwd
	echo "Обновляю модуль"
	bash deploy.sh
	echo "Изменения отправлены в  модуль " $2
        ;;
  install)
 	echo "Вызвана команда INSTALL"
	echo  "Перехожу в модули "
	cd common/modules/
	pwd
	echo "Клонируем  модуль" $2
	git clone http://ilogachev:Derw45sh84@gitlab.infomarketstudio.ru/modules/$2.git
	echo "Модуль $2 установлен в файловой системе,"
	echo "файл readme доступен http://gitlab.infomarketstudio.ru/modules/$2/blob/master/README.md"
        ;;
  uninstall)
 	echo "Вызвана команда UNINSTALL"
	echo  "Перехожу в модули "
	cd common/modules/
	pwd
	echo "Удаляем  модуль" $2
	rm -rf $2
	echo "Модуль $2 удален в файловой системе"
        ;;
  list)
 	echo "Вызвана команда LIST"
	echo  "Перехожу в модули "
	cd common/modules/
	pwd
	echo "Список установвленных модулей"
	ls -all
        ;;
esac
exit 0
